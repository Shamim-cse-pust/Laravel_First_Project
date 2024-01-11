<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendContoller extends Controller
{
    public function home()
    {
        return view('home',[
            'page_name'=> 'Home Page',
            'title'=>"Home"
        ]);
    }
    public function about()
    {
        $title="About";
        return view('about',[
            'page_name'=> 'About Page',
            'title'=>"About"

        ]);
    }
    public function contact()
    {
        $page_name= "Contact Page";
        $title="contact";
        return view('contact',compact('page_name','title'));
    }
    public function service()
    {
        $page_name="Service Page";
        $product=[
            'name'=>"shamim",
            'mobile'=>'01784766676',
            'village'=>'mouhali'
        ];
        $title="service";
    return view('service',compact('product','title'));
    }
    public function sendme(Request $request)
    {
        $secreat_key="01784";
    $user_key= $request->user_key;

    $data=[
        'name'=>"shamim",
        'mobile'=>'01784766676',
        'village'=>'mouhali'
    ];

    if($user_key==$secreat_key){
    return response()->json([
                "products"=> $data,
            ],200);
        }
        else
        {
            return "Not Match";
        }
    }
}
