<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Responden;
use Illuminate\Support\Facades\Request;

class RespondenController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        Request::validate([
            'email' => ['required', 'unique:respondens']
        ]);
        Request::merge(['key' => uniqid()]);
        $data = Responden::create(Request::all());
        if ($data->confirm == 1) {
            return redirect()->route('responden.edit', $data->key);
        } elseif ($data->confirm == 0) {
            return redirect()->back()->with('message', 'Anda tidak memenuhi syarat, Terima kasih!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Responden::where('key', $id)->first();
        $kuesioner = Item::paginate(7);
        return view('kuesioner.index', compact('data', 'kuesioner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Responden::where('key', $id)->first();
        return view('responden.index', compact('data'));
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
        Request::validate([
            'name' => ['required'],
            'gender' => ['required'],
            'age' => ['numeric', 'required'],
            'location' => ['required'],
        ]);
        $data = Responden::findOrFail($id);
        $data->update(Request::all());
        return redirect()->route('resonden.show', $data->key)
            ->with('message', 'Berhasil menyimpan data personal.');
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
}
