<?php

namespace App\Http\Controllers;

use App\Exports\StocksExport;
use App\Http\Requests\CsvRequest;
use App\Imports\StocksImport;
use Illuminate\Http\Request;
use Excel;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('task');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CsvRequest $request)
    {
        //
        Excel::import(new StocksImport, $request->file('csv'));
        return (view('task'));
    }

    //Download the resource

    public function download(){
        return Excel::download(new StocksExport, 'stock.xlsx');
    }
}
