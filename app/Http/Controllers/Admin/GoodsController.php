<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    //显示商品信息
    public function lists()
    {
        return view('admin.goodList');
    }
}
