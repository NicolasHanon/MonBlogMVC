<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBilletRequest;
use App\Http\Requests\UpdateBilletRequest;
use App\Models\Billet;

class BilletController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $billets = Billet::all();
        return view('index',compact('billets'));
    }

    public function show(Billet $billet)
    {
        //
        $commentaires = $billet->commentaires;
        return view('vBillet', compact('billet','commentaires'));
    }
}
