<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Item;
use App\Models\Kuesioner;
use Illuminate\Support\Facades\Request;

class KuesionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Item::with('scales')->get();
        return view('kuesioner.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function feature()
    {
        $data = Feature::updateOrCreate([
            'item_id' => Request::get('item_id'),
            'responden_id' => Request::get('responden_id')],
            [
                'fitur' => Request::get('fitur')
            ]);
        return response()->json($data);
    }

    public function deletefeature()
    {
        Feature::where('responden_id', Request::get('responden_id'))
            ->where('item_id', Request::get('item_id'))->delete();
        return response()->json(['message' => 'success']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Request::merge(['responden_id' => $id]);
        Kuesioner::create(Request::all());
        return redirect()->back()->with('message', 'Berhasil menyimpan data kuesioner.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getItem($id)
    {
        $data = Item::findOrFail($id);
        return response()->json($data);
    }
}
