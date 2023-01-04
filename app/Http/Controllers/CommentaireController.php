<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentaireRequest;
use App\Models\Commentaire;
use App\Models\Billet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $idBillet
     * @return \Illuminate\Http\Response
     */
    public function create($idBillet)
    {
        //
        try {
            $billet = Billet::findOrFail($idBillet);
        }
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            Log::error('Commentaire : Billet non trouvé');
            return view('errors.unavaible');
        }
        catch (\Illuminate\Database\QueryException $e) {
            Log::error('Commentaire : base de données indisponible');
            return view ('errors.dberror');
        }
        return view ('vCommenter',compact('idBillet','billet'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentaireRequest $request)
    {
        //
        try {
            Commentaire::create($request->all());
        }
        catch (\Illuminate\Database\QueryException $e) {
            Log::error('Commentaire : insertion en base de données impossible');
            return view ('errors.dberror');
        }
        Log::info('Commentaire ajouté par : '.$request->ip());
        return view('vConfirmStore');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function show(Commentaire $commentaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaire $commentaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commentaire $commentaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentaire $commentaire)
    {
        //
    }
}
