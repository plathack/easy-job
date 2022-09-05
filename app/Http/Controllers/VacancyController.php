<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function store()
    {
        return Vacancy::all();
    }

    public function index(Request $request)
    {
        return Vacancy::where('id', $request['id'])->get();
    }

    public function create(Request $request)
    {
        $vacancy = $request->validate([
            'title' => ['required', 'string'],
            'company' => ['required', 'string'],
            'salary' => ['required', 'integer'],
            'experience' => ['required', 'string'],
            'description' => ['required', 'string'],
            'skills' => ['required', 'string']
        ]);

        Vacancy::insert($vacancy);

        return 'Вакансия успешно добавлена!';
    }

    public function update(Request $request)
    {
        $vacancy = $request->validate([
            'title' => ['required', 'string'],
            'company' => ['required', 'string'],
            'salary' => ['required', 'integer'],
            'experience' => ['required', 'string'],
            'description' => ['required', 'string'],
            'skills' => ['required', 'string']
        ]);

        Vacancy::where('id', $request['id'])->update($vacancy);

        return 'Данные по вакансии успешно обновлены!';
    }

    public function delete(Request $request)
    {
        Vacancy::where('id', $request['id'])->delete();

        return 'Данные успешно удалены';
    }
}
