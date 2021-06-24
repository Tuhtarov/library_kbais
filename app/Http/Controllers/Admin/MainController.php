<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reader;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $readers = Reader::all();
        return view('admin.main.main', ['readers' => $readers]);
    }

    /**
     * Добавляет читателя в журнал чтения.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request) {
        $reader = Reader::findOrFail($request->reader['id']);
        return 'успешно добавляется пользователь' . $reader->name;
    }
}
