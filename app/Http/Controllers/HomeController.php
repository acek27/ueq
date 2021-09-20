<?php

namespace App\Http\Controllers;

use App\Models\Responden;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function show()
    {
        return view('admin.unfinished');
    }

    public function anyData()
    {
        return DataTables::of(Responden::where('status', 1))
            ->addColumn('action', function ($data) {
//                $edit = '<a href="' . route($this->route . '.edit', [$this->route => $data->id]) . '"><i class="fa fa-edit text-primary"></i></a>';
//                $del = '<a href="#" data-id="' . $data->id . '" class="hapus-data"> <i class="fa fa-trash text-danger"></i></a>';
//                return $edit . '&nbsp' . '&nbsp' . $del;
            })
            ->make(true);
    }

    public function unfinished()
    {
        return DataTables::of(Responden::where('status', 0))
            ->addColumn('action', function ($data) {
                $edit = '<a href="' . route('responden.edit', $data->key) . '"></i>edit</a>';
//                $del = '<a href="#" data-id="' . $data->id . '" class="hapus-data"> <i class="fa fa-trash text-danger"></i></a>';
                return $edit;
            })
            ->make(true);
    }
}
