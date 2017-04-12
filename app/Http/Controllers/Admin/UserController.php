<?php

namespace App\Http\Controllers\Admin;

use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
   //显示用户信息列表
    public function lists()
    {
        $search = [
            'name' => '辉辉',
            'age' => 23
        ];
        //查询所有数据
        $users = DB::table('student')->paginate(3);
        return view('admin.userlist')->with('users',$users)->with('search',$search);
    }

    public function index()
    {
          $result = User::all()->toArray();
          dd($result);
          return 111;
    }
}
