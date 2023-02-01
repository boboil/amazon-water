<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Page;
use App\Models\Product;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::getAllProducts();
        return view('index', compact('products'));
    }

    public function sustainability()
    {
        return view('sustainability');
    }

    public function spiring()
    {
        return view('spiring');
    }

    public function ambassador()
    {
        abort(404);
        return view('ambassador');
    }

    public function about()
    {
        return view('about');
    }

    public function support()
    {
        return view('support');
    }

    public function createFeedback(Request $request)
    {
        $feedback = new Feedback();
        $feedback->name = $request->input('name');
        $feedback->last_name = $request->input('last_name');
        $feedback->email = $request->input('email');
        $feedback->question = $request->input('question');
        $feedback->name = $request->input('name');
        $feedback->save();
        return redirect()->back()->with(['success' => 'message send']);
    }

    public function subscribe(Request $request)
    {
        $subscribe = new Subscriber();
        $subscribe->email = $request->input('email');
        $subscribe->save();
        return redirect()->back()->with(['success' => 'message send']);
    }

    public function terms($slug)
    {
        $page = Page::getPage($slug);
        return view('page', compact('page'));
    }
}
