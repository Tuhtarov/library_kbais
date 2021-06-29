<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Journal;
use App\Models\Reader;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class MainController extends Controller
{
    public function index()
    {
        $readers = Reader::all();
        $books = Book::all();
        $journal = Journal::all()->sortByDesc('added_at');
        $journal = new Paginator($journal, '15');
        return view('admin.main.main', ['readers' => $readers, 'books' => $books, 'journal' => $journal]);
    }
}
