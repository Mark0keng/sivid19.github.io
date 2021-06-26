<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('index');
    }
    public function homeTest(){
        return view('indexTest');
    }

    public function about(){
        return view('layout/about');
    }

    public function dashboard(){
        return view('dashboard');
    public function login(){
        return view('login');
    }
    public function signup(){
        return view('signup');
    }
    public function berita(){
        return view('berita');
    }
}
