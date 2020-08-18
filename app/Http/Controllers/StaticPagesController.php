<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaticPagesController extends Controller
{
    public function home()
    {
        $feed_items = [];
        if (Auth::check()) {
            /**
             * @var User $user
             */
            $user       = Auth::user();
            $feed_items = $user->feed()->paginate(30);
        }

        // 参数一(必填)：视图文件路径；参数二(非必填)：需要传递的数据；
        return view('static_pages/home', compact('feed_items'));
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
