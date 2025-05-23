<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.hotels');
    }
    public function junior()
    {
        return view('pages.junior');
    }
    public function exec()
    {
        return view('pages.executive');
    }
    public function book()
    {
        return view('pages.booking');
    }
    public function super()
    {
        return view('pages.super');
    }
    public function checkout()
    {
        return view('pages.checkout');
    }
    public function end()
    {
        return view('pages.succ');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
