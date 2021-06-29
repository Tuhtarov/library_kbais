<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Journal;
use App\Models\Reader;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    /**
     * Добавляет запись в журнал чтения.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add(Request $request)
    {
        Journal::create($request->reader);
        return redirect()->route('main');
    }

    /**
     * Редактирует запись из журнала.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function edit(int $record_id)
    {
        $record = Journal::findOrFail($record_id);
        $readers = Reader::all();
        $books = Book::all();
        return view('admin.main.journal.edit', [
            'record' => $record,
            'readers' => $readers,
            'books' => $books
        ]);
    }

    /**
     * Обновляет запись из журнала.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, int $record_id)
    {
        $record = Journal::find($record_id);
        $record->update($request->reader);
        return redirect()->route('main');
    }

    /**
     * Удаляет запись из журнала.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $record_id)
    {
        $record = Journal::findOrFail($record_id);
        $record->delete();
        return redirect()->route('main');
    }

    /**
     * Метод принимает объект модели Journal, обновляет его св-во returned на true.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function confirmReturnBook(Journal $record)
    {
        $record->returned=true;
        $record->save();
        return redirect()->route('main');
    }

}
