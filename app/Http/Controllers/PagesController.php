<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;

class PagesController extends Controller
{
    public function index(){
        $classes = Classroom::all()->toArray();
        return view('pages.index', compact('classes'));
    }
    public function detail(){
        return view('pages.detail');
    }
    public function quiz(){
        return view('pages.quiz');
    }
    public function classcreate(){
        return view('pages.classcreate');
    }
    public function login(){
        return view('pages.login');
    }
}
