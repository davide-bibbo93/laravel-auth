<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auto;

class DashboardController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auto = Auto::all();
        return view('auto.index', compact('auto'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function show(Auto $auto)
    {
        return view('auto.show', compact('auto'));
    }

}
