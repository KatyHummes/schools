<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\School;
use App\Http\Requests\SchoolRequest;
use Illuminate\Validation\ValidationException;

class SchoolController extends Controller
{
    public function store(SchoolRequest $request)
    {
        // dd($request->all());

        try {
            School::create([
                'name' => $request->input('name'),
                'rede' => $request->input('rede'),
                'nivel' => $request->input('nivel'),
                'country' => $request->input('country'),
                'state' => $request->input('state'),
                'city' => $request->input('city'),
            ]);

            return redirect()->back()->with('success', 'Escola criado com sucesso!');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Erro ao criar Escola.');
        }
    }

    public function create()
    {
        return view('school.create');
    }

    public function schools()
    {
        $schools = School::paginate(10);
        return view('school.schools', compact('schools'));
    }

    public function filter(Request $request)
    {
        $query = School::query();
    
        // Filtros
        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }
    
        if ($request->filled('nivel')) {
            $query->where('nivel', $request->input('nivel'));
        }      
    
        if ($request->filled('rede')) {
            $query->where('rede', $request->input('rede'));
        }
    
        if ($request->filled('country')) {
            $query->where('country', 'like', '%' . $request->input('country') . '%');
        }
        $schools = $query->paginate(10);
        return view('school.schools', compact('schools'));
    }

    public function edit($id)
    {
        $school = School::find($id, ['id', 'name']);
        return view('school.edit', compact('school'));
    }
    

    public function view($id)
    {
        $school = School::find($id);
        return view('school.view', compact('school'));
    }

    public function update(SchoolRequest $request, $id)
    {
        // dd($request->all());
        $school = School::find($id);
        $school->update([
            'name' => $request->input('name'),
            'rede' => $request->input('rede'),
            'nivel' => $request->input('nivel'),
            'country' => $request->input('country'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
        ]);

        return redirect()->route('schools')->with('updated', 'Aluno atualizado com sucesso');

    }
}
