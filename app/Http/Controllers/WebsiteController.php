<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    

                    public function index()
                    { 
                        $data = [
                            'title'=>'Home'
                              ];

                        return view('website.index',$data);
                    }


public function contacts()
{
    $data = [
        'title'=>'Contact'
    ];
    return view('website.Contact',$data);
}

public function overview()
{
    $data = [
    'title'=>'overview'
    ];
    return view('website.overview',$data);
}

public function Store()
{
    $data = [
    'title'=>'Store'
    ];
    return view('website.store',$data);
}

public function upcominggames()
{
    $data = [
        'title'=>'Upcominggames'
    ];
    return view('website.upcominggames',$data);
}



}
