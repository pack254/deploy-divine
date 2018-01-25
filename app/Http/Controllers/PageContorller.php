<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageContorller extends Controller
{
    public function homePage()
    {
        return view('home');
    }

    public function saleMemberPage()
    {
        return view('sale-member');
    }

    public function orderDetailPage()
    {
        return view('order-detail');
    }

    public function aboutPage()
    {
        return view('about');
    }

    public function contactPage()
    {
        return view('contact');
    }
}
