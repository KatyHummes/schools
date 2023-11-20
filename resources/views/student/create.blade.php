@extends('layouts.main')
@section('content')
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-pink-600">Criar Aluno</h1>
            </div>
 
        </header>
        <div class="sm:px-6 lg:px-8 space-y-6 py-4">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                @include('components.toast.success')
                <form action="{{ route('student.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                            <input type="text" id="name" name="name" value="{{old('name')}}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Digite o Nome">
                            @if ($errors->has('name'))
                                <span
                                    class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                    {{ $errors->first('name') }}
                                </span>
                            @endif
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="birth"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data de nascimento</label>
                            <input type="date" id="birth" name="birth" value="{{old('birth')}}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @if ($errors->has('birth'))
                                <span
                                    class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                    {{ $errors->first('birth') }}
                                </span>
                            @endif
                        </div>
                        <div>
                            <label for="school_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Escola</label>
                            <select id="school_id" name="school_id" value="{{old('school_id')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" selected>Selecione uma opção</option>
                                @foreach($schools as $school)
                                    <option value="{{ $school->id }}">{{ $sex->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('school_id'))
                                <span class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                    {{ $errors->first('school_id') }}
                                </span>
                            @endif
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="cpf"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CPF</label>
                                <input type="text" id="cpf" name="cpf" placeholder="CPF"  value="{{old('cpf')}}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @if ($errors->has('cpf'))
                                <span
                                    class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                    {{ $errors->first('cpf') }}
                                </span>
                            @endif
                        </div>
                        <div>
                            <label for="sex"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sexo</label>
                            <select id="sex" name="sex" value="{{old('sex')}}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Selecione uma opção</option>
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>
                                <option value="O">Outro</option>
                            </select>
                            @if ($errors->has('sex'))
                                <span
                                    class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                    {{ $errors->first('sex') }}
                                </span>
                            @endif
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="country"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">País</label>
                            <input type="text" id="country" name="country" value="{{old('country')}}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Digite o País">
                            @if ($errors->has('country'))
                                <span
                                    class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                    {{ $errors->first('country') }}
                                </span>
                            @endif
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <label for="state"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estado</label>
                            <input type="text" id="state" name="state" value="{{old('state')}}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Digite o Estado">
                            @if ($errors->has('state'))
                                <span
                                    class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                    {{ $errors->first('state') }}
                                </span>
                            @endif
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="city"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cidade</label>
                            <input type="text" id="city" name="city" value="{{old('city')}}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Digite a Cidade">
                            @if ($errors->has('city'))
                                <span
                                    class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                    {{ $errors->first('city') }}
                                </span>
                            @endif
                        </div>
                        <div>
                            <label for="message"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Biografia</label>
                            <textarea id="biography" rows="4" name="biography" value="{{old('biography')}}"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Escreva um pouco sobre o Aluno!"></textarea>
                        </div>

                    </div>

                    <button type="submit"
                        class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('#cpf').mask('000.000.000-00', {reverse: true});
    </script>
@endsection
