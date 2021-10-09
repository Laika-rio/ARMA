<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public $yearLists = [
        '2010',
        '2011',
        '2012',
        '2013',
        '2014',
        '2015',
        '2016'
    ];

    public function index(){
        return view('index');
    }

    public function add_to_data(){
        return view('add_data');
    }
}
