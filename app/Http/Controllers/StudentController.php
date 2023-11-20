<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\School;
use App\Models\Student;
use Illuminate\Http\Request;
use Carbon\Carbon;


class StudentController extends Controller
{
    public function create()
    {
        $schools = School::get(['id', 'name']);
        return view('student.create', compact('schools'));
    }

    public function store(StudentRequest $request)
    {
        // dd($request->all());

        try {
            $cpf = $this->removeCpfPunctuation($request->input('cpf'));
            Student::create([
                'school_id' => $request->input('school_id'),
                'name' => $request->input('name'),
                'birth' => $request->input('birth'),
                'sex' => $request->input('sex'),
                'cpf' => $cpf, 
                'biography' => $request->input('biography'),
                'country' => $request->input('country'),
                'state' => $request->input('state'),
                'city' => $request->input('city'),
            ]);

            return redirect()->back()->with('success', 'Aluno criado com sucesso!');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Erro ao criar Aluno.');
        }
    }

    private function removeCpfPunctuation($cpf)
{
    return preg_replace('/[^0-9]/', '', $cpf);
}

    public function students()
    {
        $students = Student::paginate(10);
        return view('student.students', compact('students'));
    }

    public function filter(Request $request)
    {
        $query = Student::query();
    
        // Filtros
        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }
    
        if ($request->filled('start_birth')) {
            $query->where('birth', '>=', $request->input('start_birth'));
        }
        
        if ($request->filled('final_birth')) {
            $query->where('birth', '<=', $request->input('final_birth'));
        }        
    
        if ($request->filled('sex')) {
            $query->where('sex', $request->input('sex'));
        }
    
        if ($request->filled('cpf')) {
            $query->where('cpf', 'like', '%' . $request->input('cpf') . '%');
        }
    
        $students = $query->paginate(10);
    
        return view('student.students', compact('students'));
    }

    public function delete($id)
    {
        // dd($id);
        $student = Student::find($id);
        $student->delete();
        return redirect()->back()->with('success', 'Aluno deletado com sucesso.');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        $schools = School::get(['id', 'name']);
        return view('student.edit', compact('student', 'schools'));
    }
    
    public function update(StudentRequest $request, $id)
    {
        try {
        // dd($request->all());
        $cpf = $this->removeCpfPunctuation($request->input('cpf'));
        $student = Student::find($id);
        $student->update([
            'name' => $request->input('name'),
            'birth' => $request->input('birth'),
            'sex' => $request->input('sex'),
            'cpf' => $cpf,
            'country' => $request->input('country'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'biography' => $request->input('biography'),
        ]);
        return redirect()->back()->with('success', 'Aluno atualizado com sucesso!');
    } catch (ValidationException $e) {
        return redirect()->back()->withErrors($e->errors())->withInput();
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Erro ao atualizar Aluno.');
    }

    }

    public function view($id)
    {
        $student = Student::find($id);
        return view('student.view', compact('student'));
    }
}
