<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Application::orderBy('name')->get();
        return view('apps.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apps.create');
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
            'name'      => 'required',
            'url'       => 'required'
        ]);

        Application::create([
            'name'      => $request->name,
            'url'       => $request->url
        ]);

        return redirect(route('apps.create'))
        ->with('success', 'App create successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Application $app)
    {
        $token = auth()->user()->createToken('Personal Access Token')->accessToken;
        return redirect($app->url.'token='.$token);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $app)
    {
        return view('apps.edit', compact('app'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $app)
    {
        $request->validate([
            'name'      => 'required',
            'url'       => 'required'
        ]);

        $app->update([
            'name'      => $request->name,
            'url'       => $request->url
        ]);

        return redirect(route('apps.index'))
        ->with('success', 'App update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $app)
    {
        $app->delete();
        return redirect(route('apps.index'))
        ->with('success', 'App delete successfuly');
    }
}
