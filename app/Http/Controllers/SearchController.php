<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Shelves;
use App\Models\Tags;
use Illuminate\Pagination\Paginator;

class SearchController extends Controller
{
    /**
     * Метод обрабатывает поиск книг по слагу тега.
     * В случае успешного результата: редиректит на view, отображающее результат поиска.
     * В случае провального результата: редирект на view, сообщающее об отстутствии результата поиска.
     * @param string $slug
     */
    public function searchBooksByTag(string $slug)
    {
        $result = Tags::with('books')->where('slug', '=', $slug)->get()->first();
        if ($result) {
            $books = new Paginator($result->books, 15);
            $search = $result->title;
            $typeSearch = 'тегу';
            return view('search.book.result', compact('books', 'search', 'typeSearch'));
        }
        return view('search.book.result');
    }

    /**
     * Метод обрабатывает поиск книг по слагу категории.
     * В случае успешного результата: редиректит на view, отображающее результат поиска.
     * В случае провального результата: редирект на view, сообщающее об отстутствии результата поиска.
     * @param string $slug
     */
    public function searchBooksByCategory(string $slug)
    {
        $result = Category::with('books')->where('slug', '=', $slug)->get()->first();
        if ($result) {
            $books = new Paginator($result->books, 15);
            $search = $result->title;
            $typeSearch = 'категории';
            return view('search.book.result', compact('books', 'search', 'typeSearch'));
        }
        return view('search.book.result');

    }

    /**
     * Метод обрабатывает поиск книг по слагу категории.
     * В случае успешного результата: редиректит на view, отображающее результат поиска.
     * В случае провального результата: редирект на view, сообщающее об отстутствии результата поиска.
     * @param string $slug
     */
    public function searchBooksByShelf(string $slug)
    {
        $result = Shelves::with('books')->where('slug', '=', $slug)->get()->first();
        if ($result) {
            $books = new Paginator($result->books, 15);
//            $books = $result->books()->paginate(15);
            $search = $result->title;
            $typeSearch = 'полке';
            return view('search.book.result', compact('books', 'search', 'typeSearch'));
        }
        return view('search.book.result');

    }

}
