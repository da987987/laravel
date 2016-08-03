<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class myController extends Controller
{
     public function index()
    {
        return "首頁";
    }

    public function contact_us()
    {
        return "聯絡我們";
    }
    public function login()
    {
        return "login";
    }
    public function logout()
    {
        return "logout";
    }
    public function products()
    {
        return "products";
    }
    public function products_category()
    {
        return "products_category";
    }
    public function products_brands()
    {
        return "products_brands";
    }
    public function products_details($id)
    {
        return "$id";
    }
    public function blog()
    {
        return "blog";
    }
    public function blog_post($id)
    {
        return "$id";
    }
    public function search($key_word)
    {
        return "$key_word";
    }
    public function cart()
    {
        return "cart";
    }
    public function checkout()
    {
        return "checkout";
    }

}
