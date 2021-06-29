<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Journal;
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
        //проверка правильности выбранной даты
        $whenReturn = strtotime($request->record['when_return']);
        $currentTime = strtotime(date('d-m-Y'));
        if($whenReturn < $currentTime) {
            return back()->with('errors', ['Ошибка в выбранной дате' => 'Прошлое - не вернуть :(']);
        }

        //проверка книги на её доступность (защита от скамера)
        $isRead = Journal::where('book_id', '=', $request->record['book_id'])
            ->where('returned', '=', false)
            ->get();
        if(count($isRead->all())) {
            return back()->with('errors', ['Ошибка в доступе' => 'Данную книгу уже читают!']);
        } else {
            return $this->addRecord($request);
        }
    }

    /**
     * Метод принимает объект модели Journal, обновляет его св-во returned на true.
     * Попутно обновляет статус книги.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function confirmReturnBook(Journal $record)
    {
        $record->book()->update([
            'reader_id' => null
        ]);
        $record->returned=true;
        $record->save();
        return back();
    }

    /**
     * Добавление записи в журнал чтения, с обновлением статуса книги.
     */
    private function addRecord(Request &$request) {
        try {
            $record = Journal::create($request->record)->with(['book', 'reader'])
                ->where('book_id', '=', $request->record['book_id'])
                ->where('reader_id', '=', $request->record['reader_id'])
                ->get()->first();
            $record->book->update([
                'reader_id' => $request->record['reader_id']
            ]);
            return redirect()->route('main')->with('success', "Запись '{$record->reader->getFullName()} - {$record->book->title}' успешно добавлена в журнал чтения!");
        } catch (\Exception $e) {
            return redirect()->route('main')->with('errors', ['Exception' => "{$e->getMessage()}"]);
        }
    }
}
