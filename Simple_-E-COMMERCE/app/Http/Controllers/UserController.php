<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private static $user, $users;
    public function index()
    {
        return view('admin.user.index');
    }

    public static function create(Request $request)
    {
        self::$user = new User();
        self::$user->name = $request->name;
        self::$user->email = $request->email;
        self::$user->password = bcrypt($request->password);
        self::$user->save();
        return redirect('/admin/user/manage')->with('message', 'New User Created Successfully');
    }
    public function manage()
    {
        self::$users = User::all();
        return view('admin.user.manage', ['users'=>self::$users]);
    }

    public static function edit($id)
    {
        self::$user = User::find($id);
        return view('admin.user.edit', ['user'=>self::$user]);
    }
    
    public static function update(Request $request, $id)
    {
        self::$user = User::find($id);
        self::$user->name = $request->name;
        self::$user->email = $request->email;
        self::$user->password = bcrypt($request->password);
        self::$user->save();
        return redirect('/admin/user/manage');
    }
    public static function delete($id)
    {
        self::$user = User::find($id);
        self::$user->delete();
        return redirect('/admin/user/manage');
    }
    
}
