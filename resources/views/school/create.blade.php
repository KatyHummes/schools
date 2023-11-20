@extends('layouts.main')
@section('content')
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-pink-600">Criar Escola</h1>
            </div>
        </header>
        <div class="sm:px-6 lg:px-8 space-y-6 py-4">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                @include('components.toast.success')
                <form action="{{ route('school.store') }}" method="POST">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Digite o Nome">
                            @if ($errors->has('name'))
                                <p
                                    class="p-4 my-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                    {{ $errors->first('name') }}
                                </p>
                            @endif
                        </div>

                        <div>
                            <label for="rede"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rede</label>
                            <select id="rede" name="rede" value="{{ old('rede') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Selecione uma opção</option>
                                <option value="M">Particular</option>
                                <option value="F">Publica</option>
                            </select>
                            @if ($errors->has('rede'))
                                <p
                                    class="p-4 my-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                    {{ $errors->first('rede') }}
                                </p>
                            @endif
                        </div>

                        <div>
                            <label for="nivel"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nível</label>
                            <select id="nivel" name="nivel" value="{{ old('nivel') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Selecione uma opção</option>
                                <option value="M">Fundamental</option>
                                <option value="F">Médio</option>
                                <option value="O">Faculdade</option>
                            </select>
                            @if ($errors->has('nivel'))
                                <p
                                    class="p-4 my-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                    {{ $errors->first('nivel') }}
                                </p>
                            @endif
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <label for="country"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">País</label>
                            <input type="text" id="country" name="country" value="{{ old('country') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Digite o País">
                            @if ($errors->has('country'))
                                <p
                                    class="p-4 my-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                    {{ $errors->first('country') }}
                                </p>
                            @endif
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <label for="state"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estado</label>
                            <input type="text" id="state" name="state" value="{{ old('state') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Digite o Estado">
                            @if ($errors->has('state'))
                                <p
                                    class="p-4 my-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                    {{ $errors->first('state') }}
                                </p>
                            @endif
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <label for="city"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cidade</label>
                            <input type="text" id="city" name="city" value="{{ old('city') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Digite a Cidade">
                            @if ($errors->has('city'))
                                <p
                                    class="p-4 my-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                    {{ $errors->first('city') }}
                                </p>
                            @endif
                        </div>

                    </div>

                    <button type="submit"
                        class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
