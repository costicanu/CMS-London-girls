<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use Folklore\Image\Facades\Image;

class AdminBlogController extends Controller
{
    function __construct()
    {
        $this->middleware('isAdmin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.blog.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => "required|string|min:3",
            'url' => "required|string|max:255|unique:posts,url",
            #'image' => "required",
            'images.*' => "image|mimes:jpg,jpeg,png,gif",
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->is_active = $request->is_active;
        $post->user_id=Auth::user()->id;
        if (!empty($request->url)) {
            $post->url = urlencode($request->url);
        } else {
            $post->url = urlencode($request->title);
        }

        //uploading images
        # $files = array('images' => Input::file('images'));'

        if (!empty($_FILES['image']['name'])) {
            $files = $_FILES;
            $imagesName = $this->uploadImage($files);
            #var_dump($_FILES['image']);die();
            $this->createThumbs($imagesName, 100, 100);
            $this->createThumbs($imagesName, 440, 660, true);
            $this->createThumbs($imagesName, 1100, 700);
            $post->image = $imagesName;

        }

        $post->save();


        return redirect()->route('blog.index')->with('message', 'BlogPost Successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::where('id', $id)->first();
        return view('admin.blog.edit')->with(['post' => $post]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'title' => "required|string|min:3",
            'url' => "required|string|max:255|unique:posts,url," . $id,
        ]);

        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->is_active = $request->is_active;
        if (!empty($request->url)) {

            $post->url = urlencode($request->url);
        } else {
            $post->url = urlencode($request->content);
        }


        if (!empty($_FILES['image']['name'])) {
            $file = $_FILES;
            $imageName = $this->uploadImage($file);
            $post->image=$imageName;
            $this->createThumbs($imageName, 100, 100);
            $this->createThumbs($imageName, 440, 660);
        }
        $post->save();


        return redirect()->route('blog.index')->with('message', 'Blog Post successfully modified!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post_to_delete = Post::findOrFail($id);
        $post_to_delete->delete();

        return redirect()->route('blog.index')->with('message', 'The post ' . $post_to_delete->name . ' was successfully deleted!');
    }


    private function uploadImage($files)
    {
        $images_path = 'media/blog/original/';

        $file_name = $files['image']['name'];

        if (!is_file($images_path . $file_name)) { //if already an image with same name
            $fileNames = filter_var($file_name, FILTER_SANITIZE_URL);
        } else { // adding date if you already have an image with same name, the new name is yearMonthDayHourMinuteSeconds and then filename.extension
            $fileNames = filter_var(current(explode(".", $file_name)), FILTER_SANITIZE_URL) . date('Ymdhis') . "." . last(explode(".", $file_name));
        }
        $result = move_uploaded_file($files['image']['tmp_name'], $images_path . $fileNames);


        return $fileNames;

    }

    private function createThumbs($imagesName, $width, $height, $crop = false)
    {
        $thumbnail_location = 'media/blog/thumbnails/' . $width . 'x' . $height . '/';
        if (!file_exists($thumbnail_location)) {
            mkdir($thumbnail_location, 0777, true);
        }
        $image_location = 'media/blog/original/' . $imagesName;
        list($width_current, $height_current) = getimagesize($image_location);
        if ($width_current <= $width || $height_current < $height && $crop == false) {   //don't resize
            Image::make($image_location, array())->save($thumbnail_location . $imagesName);
        } else {           //resize
            Image::make($image_location, array(
                'width' => $width,
                'height' => $height,
                'crop' => $crop
            ))->save($thumbnail_location . $imagesName);

        }


    }

}
