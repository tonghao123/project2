<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
//    public function index()
//    {
//        //判断session中是否存在用户的信息
////        dump(session('user'));
//        if(!session('user')){
//         return redirect('admin/login');
//        }
//        return  view('admin.index1');
//    }
//
//
//    //显示登录视图
//    public function showLogin()
//    {
//        return view('admin.login');
//    }
//
//    public function doLogin(Request $request)
//    {
//        //定义验证规则
//        $rules = array(
//            'username' => 'required',
//            'password' => 'required',
//        );
//        $message = array(
//            'username.required'=>'用户名不能为空',
//            'password.required'=>'密码不能为空',
//        );
//        $this->validate($request,$rules,$message);
//        //获取表单提交的数据
//        $username = $request->input('username');
//        $password = $request->input('password');
//        //原生的sql语句
//        $link = mysqli_connect('localhost','root','');
//        //选择数据库
//        mysqli_select_db($link,'s60');
//        //设置字符集
//        mysqli_set_charset($link,'utf8');
//        //准备sql和执行sql
//        $sql = "select * from user where name= '{$username}'and pwd = '{$password}'";
//        $res = mysqli_query($link,$sql);
//        $user = mysqli_fetch_assoc($res);
//        if($user){
//            session(['user'=>$user]);
//            return redirect('admin/index');
//        }else{
//            return back();
//        }
//
//        return '登录';
//    }
//获取配置文件中的信息
        public function index()
        {
            return view('admin.index1');
            $result = DB::table('student')
                ->where('id',32)
                ->delete();
//            $result = DB::table('student')
//                ->where('id',32)
//                ->update(
//                    [
//                        'name' => '辉辉',
//                    ]
//                );
//            $data = array(
//                'name' => '华华',
//                'age' => 23,
//                'sex' => 2,
//                'grade'=> 's60'
//            );
//           $result = DB::table('student')->insertGetId($data);
//           $ids = [3,29];
//           $result = DB::table('student')
//               ->when($ids,function($query) use ($ids) {
//                    return $query->whereIn('id',$ids);
//                },function($query) {
//                    return $query->orderBy('id', 'desc');
//                })->get();
           dd($result);

        }

}

