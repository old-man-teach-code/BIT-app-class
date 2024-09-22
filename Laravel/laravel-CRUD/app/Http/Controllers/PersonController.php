<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PersonController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        try {
            $people = Person::select('id', 'name', 'age')->orderByDesc('id')->get();
            error_log(json_encode($people));
            return view('person', ['people' => $people]);
        } catch (\Throwable $th) {
            Log::error("Lỗi tại PersonController -> index: " . $th->getLine() . " - " . $th->getMessage());
            return redirect()->back()->with('error', 'Lỗi khi lấy danh sách người dùng ' . $th->getMessage());
        }
    }

    /**
     * Summary of store
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            $name = $request->name;
            $age = $request->age;
            // Eloquent ORM
            $newPerson = new Person();
            $newPerson->name = $name;
            $newPerson->age = $age;
            $newPerson->save();
            return redirect()->back()->with('success', 'Tạo người dùng thành công');
        } catch (\Throwable $th) {
            Log::error("Lỗi tại PersonController -> store: " . $th->getLine() . " - " . $th->getMessage());
            return redirect()->back()->with('error', 'Lỗi khi tạo người dùng ' . $th->getMessage());
        }

    }
}
