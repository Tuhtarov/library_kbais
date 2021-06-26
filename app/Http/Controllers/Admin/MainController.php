<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Journal;
use App\Models\Reader;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $readers = Reader::all();
        $books = Book::all();
        $journal = Journal::paginate(10);
        return view('admin.main.main', ['readers' => $readers, 'books' => $books, 'journal' => $journal]);
    }
}
