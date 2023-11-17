@extends('layouts.main')
@section('content')
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="py-6 px-4 sm:px-6 lg:px-8">
                <a href="{{ route('students') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-pink-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                    </svg>
                    <h1 class="text-pink-600 ">Visualizar Aluno</h1>
                </a>
            </div>
        </header>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">

            <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Nome</label>
                <input type="text" id="title" name="title" value="{{ $student->name }}" readonly
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
            </div>
            <div class="mb-6">
                <label for="birth" class="block mb-2 text-sm font-medium text-gray-900">Nascimento</label>
                <input type="date" id="birth" name="birth" value="{{ $student->birth }}" readonly
                    
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
            </div>
            <div class="mb-6">
                <label for="sex" class="block mb-2 text-sm font-medium text-gray-900">Sexo</label>
                <input type="text" id="sex" name="sex" value="{{ $student->sex }}" readonly
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
            </div>
            <div class="mb-6">
                <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900">CPF</label>
                <input type="text" id="cpf" name="cpf" value="{{ $student->cpf }}" readonly
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
            </div>
            <div class="mb-6">
                <label for="country" class="block mb-2 text-sm font-medium text-gray-900">País</label>
                <input type="text" id="country" name="country" value="{{ $student->country }}" readonly
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
            </div>
            <div class="mb-6">
                <label for="state" class="block mb-2 text-sm font-medium text-gray-900">Estado</label>
                <input type="text" id="state" name="state" value="{{ $student->state }}" readonly
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
            </div>
            <div class="mb-6">
                <label for="city" class="block mb-2 text-sm font-medium text-gray-900">Cidade</label>
                <input type="text" id="city" name="city" value="{{ $student->city }}" readonly
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
            </div>
        </div>

        <div class="mx-4 p-4">
            <label for="biography" class="block mb-2 text-sm font-medium text-gray-900">Biografia</label>
            <textarea id="biography" rows="5" name="biography"300 readonly
                class="w-full text-sm text-gray-900 bg-gradient-to-r rounded-lg border border-gray- focus:border-blue-500 focus:ring-1 focus:ring-blue-500 focus:outline-none">{{ $student->biography }}</textarea>
        </div>
    </div>
@endsection
