@extends('layouts.main')
@section('content')
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="py-6 px-4 sm:px-6 lg:px-8 flex items-center">
                <a href="{{ route('schools') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-pink-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                    </svg>
                </a>
                <h1 class="text-pink-600 text-center mx-4">Visualizar Escola</h1>
            </div>
        </header>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">

            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nome</label>
                <input type="text" id="name" name="name" value="{{ $school->name }}" readonly
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
            </div>
            <div class="mb-6">
                <label for="rede" class="block mb-2 text-sm font-medium text-gray-900">Rede</label>
                <input type="text" id="rede" name="rede" value="{{ $school->rede }}" readonly
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
            </div>
            <div class="mb-6">
                <label for="nivel" class="block mb-2 text-sm font-medium text-gray-900">Nível</label>
                <input type="text" id="nivel" name="nivel" value="{{ $school->nivel }}" readonly
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
            </div>
            <div class="mb-6">
                <label for="country" class="block mb-2 text-sm font-medium text-gray-900">País</label>
                <input type="text" id="country" name="country" value="{{ $school->country }}" readonly
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
            </div>
            <div class="mb-6">
                <label for="state" class="block mb-2 text-sm font-medium text-gray-900">Estado</label>
                <input type="text" id="state" name="state" value="{{ $school->state }}" readonly
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
            </div>
            <div class="mb-6">
                <label for="city" class="block mb-2 text-sm font-medium text-gray-900">Cidade</label>
                <input type="text" id="city" name="city" value="{{ $school->city }}" readonly
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
            </div>
        </div>
    </div>
@endsection
