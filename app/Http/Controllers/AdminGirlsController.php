<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Role;
use App\Girl;
use App\ImageOfGirls;
use Folklore\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use App\Http\Middleware\isAdmin;
use Imagine\Gmagick\Imagine;

class AdminGirlsController extends Controller
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

        $girls = Girl::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.girls.index', ['girls' => $girls]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.girls.create');
        //
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
            'name' => "required|string|min:3",
            'url'=> "required|string|max:255|unique:girls",
            'images' => "required",
            'images.*' => "image|mimes:jpg,jpeg,png,gif",
        ]);

        $girl = new Girl();
        $girl->name = $request->name;
        $girl->own_words = $request->own_words;
        $girl->is_active= $request->is_active;
        if(!empty($request->url)) {
            $girl->url = urlencode($request->url);
        }
        else {
            $girl->url = urlencode($request->name);
        }

        //uploading images
        # $files = array('images' => Input::file('images'));
        if ($_FILES['images']) {
            $files = $_FILES;
            $imagesName = $this->uploadImages($files);
            $this->createThumbs($imagesName, 100, 100);
            $this->createThumbs($imagesName, 440,660);


        }

        $girl->save();
        foreach ($imagesName as $eachImage) {
            $girl->images()->save(new ImageOfGirls(['name' => $eachImage]));
        }

        return redirect()->route('girls.index')->with('message', 'Successfully added!');
    }


    private function createThumbs($imagesName, $width, $height)
    {
        $thumbnail_location = 'media/thumbnails/' . $width . 'x' . $height . '/';
        if (!file_exists($thumbnail_location)) {
            mkdir($thumbnail_location, 0777, true);
        }
        foreach ($imagesName as $eachImageName) {
            $image_location = 'media/original/' . $eachImageName;
            list($width_current, $height_current) = getimagesize($image_location);
            if ($width_current <= $width || $height_current < $height) {   //don't resize
                Image::make($image_location, array())->save($thumbnail_location . $eachImageName);
            } else {           //resize
                Image::make($image_location, array(
                    'width' => $width,
                    'height' => $height,
                ))->save($thumbnail_location . $eachImageName);

            }

        }
    }

    private function uploadImages($files)
    {
        $images_path = 'media/original/';
        $no_of_files = count($files['images']['name']);

        for ($i = 0; $i < $no_of_files; $i++) {
            $file_name = $files['images']['name'][$i];

            if (!is_file($images_path . $file_name)) { //if already an image with same name
                $fileNames[$i] = filter_var($file_name, FILTER_SANITIZE_URL);
            } else { // adding date if you already have an image with same name, the new name is yearMonthDayHourMinuteSeconds and then filename.extension
                $fileNames[$i] = filter_var(current(explode(".", $file_name)), FILTER_SANITIZE_URL) . date('Ymdhis') . "." . last(explode(".", $file_name));
            }
            $result = move_uploaded_file($files['images']['tmp_name'][$i], $images_path . $fileNames[$i]);

        }
        return $fileNames;

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
        $girl = Girl::where('id', $id)->first();
        return view('admin.girls.edit')->with(['girl' => $girl]);

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
            'name' => "required|string|min:3",
            'url' => "required|string|max:255|unique:girls,url," . $id,
        ]);

        $girl = Girl::findOrFail($id);
        $girl->name = $request->name;
        $girl->own_words = $request->own_words;
        $girl->is_active= $request->is_active;
        if(!empty($request->url)) {

            $girl->url = urlencode($request->url);
        }
        else {
            $girl->url = urlencode($request->name);
        }

        //uploading images
        # $files = array('images' => Input::file('images'));


        $girl->save();

        if (!empty($_FILES['images']['tmp_name'][0])) { // if any image uploaded
            $files = $_FILES;
            $imagesName = $this->uploadImages($files);
            $this->createThumbs($imagesName, 100, 100);
            $this->createThumbs($imagesName, 440,660);

            foreach ($imagesName as $eachImage) {
                $girl->images()->save(new ImageOfGirls(['name' => $eachImage]));
            }

        }


        return redirect()->route('girls.index')->with('message', 'Successfully modified!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $girl_to_delete = Girl::findOrFail($id);
        $girl_to_delete->delete();

        return redirect()->route('girls.index')->with('message', 'The girl ' . $girl_to_delete->name . ' was successfully deleted!');
        //
    }

    public function deleteimage($id)
    {
        $image = ImageOfGirls::where('id', $id)->first();
        if ($image) {
             $image->delete();
            return 1;
        }

        return 0;
    }

}
