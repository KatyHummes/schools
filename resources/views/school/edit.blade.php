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
                <h1 class="text-pink-600 text-center mx-4">Editar Escola</h1>
            </div>

        </header>

        <div>
            <form action="{{ route('school.update', $school->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nome</label>
                        <input type="text" id="name" name="name" value="{{ old('name') ?? $school->name }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="Digite o Nome">
                        @if ($errors->has('name'))
                            <p
                                class="mt-2 p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                {{ $errors->first('name') }}
                            </p>
                        @endif
                    </div>

                    <div class="mb-6">
                        <label for="rede" class="block mb-2 text-sm font-medium text-gray-900">Rede</label>
                        <input type="text" id="rede" name="rede" value="{{ old('rede') ?? $school->rede }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="Digite o rede">
                            @if ($errors->has('rede'))
                            <p
                                class="mt-2 p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                {{ $errors->first('rede') }}
                            </p>
                        @endif
                    </div>
                    <div class="mb-6">
                        <label for="nivel" class="block mb-2 text-sm font-medium text-gray-900">Nível</label>
                        <input type="text" id="nivel" name="nivel" value="{{ old('nivel') ?? $school->nivel }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="Digite o nivel">
                            @if ($errors->has('nivel'))
                            <p
                                class="mt-2 p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                {{ $errors->first('nivel') }}
                            </p>
                        @endif
                    </div>
                    
                    <div class="mb-6">
                        <label for="country" class="block mb-2 text-sm font-medium text-gray-900">País</label>
                        <input type="text" id="country" name="country" value="{{ old('country') ?? $school->country }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="Digite o País">
                            @if ($errors->has('country'))
                            <p
                                class="mt-2 p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                {{ $errors->first('country') }}
                            </p>
                        @endif
                    </div>
                    <div class="mb-6">
                        <label for="state" class="block mb-2 text-sm font-medium text-gray-900">Estado</label>
                        <input type="text" id="state" name="state" value="{{ old('state') ?? $school->state }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="Digite o Estado">
                            @if ($errors->has('state'))
                            <p
                                class="mt-2 p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                {{ $errors->first('state') }}
                            </p>
                        @endif
                    </div>
                    <div class="mb-6">
                        <label for="city" class="block mb-2 text-sm font-medium text-gray-900">Cidade</label>
                        <input type="text" id="city" name="city" value="{{ old('city') ?? $school->city }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="Digite o Nome">
                            @if ($errors->has('city'))
                            <p
                                class="mt-2 p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                {{ $errors->first('city') }}
                            </p>
                        @endif
                    </div>
                </div>
                <button class="bg-green-500 mx-4 text-white font-bold mt-4 py-2 px-12 rounded-2xl"
                    type="submit">Enviar</button>

            </form>
        </div>

    </div>
@endsection
