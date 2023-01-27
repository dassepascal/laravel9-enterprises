<?php

namespace App\Http\Controllers;

use App\Models\Enterprise;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function indexEnterprises()
    {
        $enterprises = Enterprise::paginate(4);
        return view('enterprises',[
            'enterprises'=>$enterprises
        ]);
    }
    public function show(Enterprise $enterprise )
    {

        return view('enterprise',[
            'enterprise'=>$enterprise,

        ]);
    }
}

