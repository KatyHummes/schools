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
                    <h1 class="text-pink-600 ">Editar Aluno</h1>
                </a>
            </div>
        </header>

        <div class="flex flex-col items-center justify-center h-screen">
            <a href="{{ route('edit', $student->id) }}"
                class="absolute top-0 left-4 flex gap-2 font-medium text-purple-700 mt-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                </svg>
                Voltar</a>
            @if ($errors->any())
                <div class="text-red-500 text-lg font-bold">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nome</label>
                        <input type="text" id="name" name="name" value="{{ $student->name }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="Digite o Nome">
                    </div>
                    <div class="mb-6">
                        <label for="birth" class="block mb-2 text-sm font-medium text-gray-900">Nascimento</label>
                        <input type="date" id="birth" name="birth" value="{{ $student->birth }}"
                            {{ date('d-m-Y', strtotime($student->birth)) }}
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="Digite a data de Nascimento">
                    </div>
                    <div class="mb-6">
                        <label for="sex" class="block mb-2 text-sm font-medium text-gray-900">Sexo</label>
                        <input type="text" id="sex" name="sex" value="{{ $student->sex }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="Digite o Sexo">
                    </div>
                    <div class="mb-6">
                        <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900">CPF</label>
                        <input type="text" id="cpf" name="cpf" value="{{ $student->cpf }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="000.000.000-00">
                    </div>
                    <div class="mb-6">
                        <label for="country" class="block mb-2 text-sm font-medium text-gray-900">País</label>
                        <input type="text" id="country" name="country" value="{{ $student->country }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="Digite o País">
                    </div>
                    <div class="mb-6">
                        <label for="state" class="block mb-2 text-sm font-medium text-gray-900">Estado</label>
                        <input type="text" id="state" name="state" value="{{ $student->state }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="Digite o Estado">
                    </div>
                    <div class="mb-6">
                        <label for="city" class="block mb-2 text-sm font-medium text-gray-900">Cidade</label>
                        <input type="text" id="city" name="city" value="{{ $student->city }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="Digite o Nome">
                    </div>
                </div>

                <div>
                    <label for="biography" class="block mb-2 text-sm font-medium text-gray-900">Biografia</label>
                    <textarea id="biography" rows="5" name="biography"300
                        class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray- focus:border-blue-500 focus:ring-1 focus:ring-blue-500 focus:outline-none"
                        placeholder="Escreva um pouco sobre o Aluno!">{{ $student->biography }}</textarea>
                </div>
                <button class="bg-green-300 mt-4 py-2 px-12 rounded-2xl" type="submit">Enviar</button>

            </form>
        </div>

    </div>
@endsection
