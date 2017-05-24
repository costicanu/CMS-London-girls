<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Role;
use App\Girl;
use Illuminate\Support\Facades\Input;
use App\Http\Middleware\isAdmin;

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
            'images' => "required",
            'images.*' => "image|mimes:jpg,jpeg,png,gif",
        ]);

        $girl = new Girl();
        $girl->name = $request->name;

        //uploading images
        # $files = array('images' => Input::file('images'));
        $files = $_FILES['images'];

        $no_of_files = count($_FILES['images']['tmp_name']);
        $images_path = 'media/original/';
        for ($i = 0; $i < $no_of_files; $i++) {
            $file_name = $_FILES['images']['name'][$i];

            var_dump($_FILES['images']['tmp_name']);
            if (!is_file($images_path.$file_name)) { //if already an image with same name
                $result = move_uploaded_file($_FILES['images']['tmp_name'][$i], $images_path . $file_name);
            } else { // adding date if you already have an image with same name, the new name is yearMonthDayHourMinuteSeconds and then filename.extension
                $result = move_uploaded_file($_FILES['images']['tmp_name'][$i], $images_path . date('Ymdhis') . $file_name);

            }
        }

        die();

        $girl->save();
        return redirect()->route('girls.index')->with('message', 'Successfully added!');
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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
