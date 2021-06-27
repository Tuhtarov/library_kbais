<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shelves;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShelfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shelves = Shelves::paginate(10);
        return view('admin.shelf.index', ['shelves' => $shelves]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shelf.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Shelves::create($request->all());
        return redirect()->route('shelves.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shelve = Shelves::findOrFail($id);
        return view('admin.shelf.edit', ['shelve' => $shelve]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $shelve = Shelves::findOrFail($id);
        $shelve->update([
            'title' => $request->shelve['title'],
            'slug' => Str::slug($request->shelve['slug'])
        ]);
        return redirect()->route('shelves.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shelve = Shelves::findOrFail($id);
        $shelve->delete();
        return redirect()->route('shelves.index');
    }
}
