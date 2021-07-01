<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\Shelves;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::paginate(15);
        return view('admin.book.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tags::all();
        $shelves = Shelves::all();
        return view('admin.book.create', compact('categories', 'tags', 'shelves'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'book.image' => 'nullable|image',
        ], $this->getCustomErrorMessages());
        $validator->validate();

        $book = Book::create($request->book);
        $book->tags()->sync($request->tags);

        //работа с обложкой книги, загрузка в базу
        if ($request->hasFile('book.image')) {
            $patchDate = date('Y-m');
            $uploadedImage = $request->file('book.image')->store("images/{$patchDate}");
            $book->update(['image' => $uploadedImage ?? null]);
        }
        $book->save();

        return redirect()->route('books.index')->with('success', 'Книга успешно создана');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id)->with(['reader', 'tags'])->where('id', '=', $id)->get()->first();
        return view('admin.book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::with('tags')->where('id', '=', $id)->get()->first();
        $shelves = Shelves::all();
        $categories = Category::all();
        $tags = Tags::all();
        return view('admin.book.edit', ['book' => $book, 'categories' => $categories, 'shelves' => $shelves, 'tags' => $tags]);
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
        $validator = Validator::make($request->all(), [
            'book.image' => 'nullable|image',
        ], $this->getCustomErrorMessages());
        $validator->validate();

        $book = Book::findOrFail($id);
        $book->tags()->sync($request->tags);
        $book->update($request->book);

        //работа с обложкой книги, загрузка в базу
        if ($request->hasFile('book.image')) {
            $patchDate = date('Y-m');
            $uploadedImage = $request->file('book.image')->store("images/{$patchDate}");
            $book->update(['image' => $uploadedImage ?? null]);
        }
        $book->save();

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return back();
    }

    public function getCustomErrorMessages() : array
    {
        return [
            'image' => 'Загружаемый файл должен быть фотографией!'
        ];
    }
}
