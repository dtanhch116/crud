<?php

namespace App\Http\Controllers;

use App\Models\Flights;
use Illuminate\Http\Request;

class flightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Flights::all();
        return view('flight.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('flight.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $model = new Flights;
        $model->fill($data);
        $model->save();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Flights::find($id);
        return view('flight.update',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $flight = Flights::find($id);
        $flight->fill($data);
        $flight->save();
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $flight = Flights::find($id);
        $flight->delete();
        return redirect()->route('home');
    }
}
