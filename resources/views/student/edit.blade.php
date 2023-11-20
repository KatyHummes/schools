@extends('layouts.main')
@section('content')
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="py-6 px-4 sm:px-6 lg:px-8 flex items-center">
                <a href="{{ route('students') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-pink-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                    </svg>
                </a>
                <h1 class="text-pink-600 text-center mx-4">Editar Aluno</h1>
            </div>

        </header>

        <div>
            <form action="{{ route('student.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nome</label>
                        <input type="text" id="name" name="name" value="{{ old('name') ?? $student->name }}"
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
                        <label for="birth" class="block mb-2 text-sm font-medium text-gray-900">Nascimento</label>
                        <input type="date" id="birth" name="birth" value="{{ $student->birth }}"
                            {{ date('d-m-Y', strtotime($student->birth)) }}
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="Digite a data de Nascimento">
                        @if ($errors->has('birth'))
                            <p
                                class="mt-2 p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                {{ $errors->first('birth') }}
                            </p>
                        @endif
                    </div>

                    <div>
                        <label for="school_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Escola</label>
                        <select id="school_id" name="school_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="{{ $student->school->id }}" selected>{{ $student->school->name }}</option>
                            @foreach ($schools as $school)
                                <option value="{{ $school->id }}">{{ $school->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('school_id'))
                            <p
                                class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                {{ $errors->first('school_id') }}
                            </p>
                        @endif
                    </div>

                    <div>
                        <label for="sex"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sexo</label>
                        <select id="sex" name="sex"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" {{ old('sex', $student->sex) == '' ? 'selected' : '' }}>Selecione uma
                                opção</option>
                            <option value="Masculino" {{ old('sex', $student->sex) == 'Masculino' ? 'selected' : '' }}>
                                Masculino</option>
                            <option value="Feminino" {{ old('sex', $student->sex) == 'Feminino' ? 'selected' : '' }}>
                                Feminino</option>
                            <option value="Outro" {{ old('sex', $student->sex) == 'Outro' ? 'selected' : '' }}>Outro
                            </option>
                        </select>
                        @if ($errors->has('sex'))
                            <p
                                class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                {{ $errors->first('sex') }}
                            </p>
                        @endif
                    </div>
                    <div class="mb-6">
                        <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900">CPF</label>
                        <input type="text" id="cpf" name="cpf" value="{{ old('cpf') ?? $student->cpf }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="000.000.000-00">
                        @if ($errors->has('cpf'))
                            <p
                                class="mt-2 p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                {{ $errors->first('cpf') }}
                            </p>
                        @endif
                    </div>
                    <div class="mb-6">
                        <label for="country" class="block mb-2 text-sm font-medium text-gray-900">País</label>
                        <input type="text" id="country" name="country"
                            value="{{ old('country') ?? $student->country }}"
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
                        <input type="text" id="state" name="state" value="{{ old('state') ?? $student->state }}"
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
                        <input type="text" id="city" name="city"
                            value="{{ old('city') ?? $student->city }}"value="{{ old('city') ?? $student->city }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="Digite o Nome">
                        @if ($errors->has('city'))
                            <p
                                class="mt-2 p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                {{ $errors->first('city') }}
                            </p>
                        @endif
                    </div>
                    <div class=" md:col-p-2">
                        <label for="biography" class="block mb-2 text-sm font-medium text-gray-900">Biografia</label>
                        <textarea id="biography" rows="5" name="biography"300 value="{{ old('biography') ?? $student->biographycity }}"
                            class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border-gray-300 bg-gray-50 border focus:border-blue-500 focus:ring-1 focus:ring-blue-500 focus:outline-none"
                            placeholder="Escreva um pouco sobre o Aluno!">{{ $student->biography }}</textarea>
                        @if ($errors->has('biography'))
                            <p
                                class="mt-2 p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                {{ $errors->first('biography') }}
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
