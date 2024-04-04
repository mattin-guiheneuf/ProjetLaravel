<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sauce;

class SauceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sauces = Sauce::all();
        return view('sauces.index', compact('sauces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sauces.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'manufacturer' => 'required',
            'description' => 'required',
            'mainPepper' => 'required',
            'imageUrl' => 'required',
            'heat' => 'required | min:1 | max:10'
        ]);

        $sauce = new Sauce($request->all());
        $sauce->userId = auth()->user()->id;
        $sauce->save();

        return redirect()->route('sauces.index')->with('success', 'Sauce ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sauce = Sauce::findOrFail($id);
        return view('sauces.show', compact('sauce'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sauce = Sauce::findOrFail($id);
        return view('sauces.edit', compact('sauce'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'manufacturer' => 'required',
            'description' => 'required',
            'mainPepper' => 'required',
            'imageUrl' => 'required',
            'heat' => 'required | min:1 | max:10'
        ]);

        $sauce = Sauce::findOrFail($id);

        $sauce->update([$request->all()]);

        return redirect()->route('sauces.index')->with('success', 'Sauce modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sauce = Sauce::findOrFail($id);
        $sauce->delete();

        return redirect()->route('sauces.index')->with('success', 'Sauce supprimée avec succès');
    }

    /**
     * 
     */
    public function like($id) {
        
        $sauce = Sauce::findOrFail($id);
        $userId = auth()->id();

        $usersLiked = is_array($sauce->usersLiked) ? json_decode($sauce->usersLiked) : array();
        $usersDisliked = is_array($sauce->usersDisliked) ? json_decode($sauce->usersDisliked) : array();

        if (in_array($userId, $usersDisliked)) {
            $sauceDislikes = $sauce->dislikes;
            $sauceDislikes --;
            unset($usersDisliked[array_search($userId, $usersDisliked)]);

            $sauce->setAttribute('usersDisliked', $usersDisLiked);
            $sauce->setAttribute('dislikes', $sauceDislikes);
        }

        $sauceLikes = $sauce->likes;
        $sauceLikes ++;

            //$usersLiked = is_array($sauce->usersLiked) ? $sauce->usersLiked : [];
            /*
            if($usersLiked == null) {
                $usersLiked = array();
            }
            */

        array_push($usersLiked, $userId);

        $sauce->setAttribute('usersLiked', $usersLiked);
        $sauce->setAttribute('likes', $sauceLikes);

        $sauce->save();

        return redirect()->route('sauces.index')->with('success', 'Like ajouté avec succès');
    }

    /**
     * 
     */
    public function dislike($id) {
        $sauce = Sauce::findOrFail($id);
        $sauce->increment('dislikes');
        return redirect()->back()->with('success', 'Dislike ajouté avec succès');
    }
}




