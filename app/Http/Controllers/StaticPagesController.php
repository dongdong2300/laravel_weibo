<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        // 参数一(必填)：视图文件路径；参数二(非必填)：需要传递的数据；
        return view('static_pages/home');
    }

    public function about()
    {
        return view('static_pages/about');
    }

    public function help()
    {
        return view('static_pages/help');
    }
}
