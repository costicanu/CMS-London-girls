<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Role;
use App\Http\Middleware\isAdmin;

class AdminUsersController extends Controller
{
    public function __construct()
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
        #$user = new User;
        # $users = $user->orderBy('created_at', 'desc')->paginate(20)->get();
        $users = User::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck("name", "id")->all();
        return view('admin.users.create', ['roles' => $roles]);
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
            'name' => "required|string|max:255|unique:users",
            'email' => "required|string|email|max:255|unique:users",
            'password' => 'required|string|min:6|confirmed',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->is_active = $request->is_active ? 1 : 0;
        $user->password = bcrypt($request->password);
        $user->save();
        #return view('admin.users.index');
        return redirect()->route('users.index')->with('message', 'Successfully added!');

        //
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
        $user = User::where('id', $id)->first();
        $roles = Role::pluck('name', 'id')->all();
        return view('admin.users.edit', ['user' => $user, 'roles' => $roles]);
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

        $this->validate($request, [
            'name' => "required|string|max:255|unique:users,name," . $id,
            'email' => "required|string|email|max:255|unique:users,email," . $id,
            # 'password' => 'required|string|min:6|confirmed',
        ]);

        if (!empty($request->password)) {
            $this->validate($request, [
                'password' => 'required|string|min:6|confirmed',
            ]);
        }

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if (!empty($request->password)) {
            $user->password = bcrypt($request->password);
        }
        $user->is_active = is_null($request->is_active) ? 0 : 1;
        $user->role_id = $request->role_id;
        $user->update();


        return redirect()->route('users.index')->with('message', 'Successfully edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user_to_delete = User::findOrFail($id);
        $user_to_delete->delete();

        return redirect()->route('users.index')->with('message', 'Utilizatorul ' . $user_to_delete->name . ' was successfully deleted!');
        //
    }
}
