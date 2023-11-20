@extends('layouts.main')
@section('content')
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-pink-600">Escola</h1>
            </div>
        </header>
        <div class="sm:px-6 lg:px-8 space-y-6 py-4">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                @include('components.toast.success')

                <div id="accordion-collapse" data-accordion="collapse" class="mb-8">
                    <h2 id="accordion-collapse-heading-1">
                        <button type="button" id="show-filter"
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right hover:underline focus:outline-none text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-pink-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:text-pink-600 dark:hover:bg-pink-400 gap-3"
                            data-accordion-target="#accordion-collapse-body-1" aria-expanded="false"
                            aria-controls="accordion-collapse-body-1">
                            <span>Filtrar</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-360 shrink-0" aria-hidden="false"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5 5 1 1 5" class="text-pink-500" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-1" class="hidden p-4 border-2 border-pink-200"
                        aria-labelledby="accordion-collapse-heading-1">
                        <form method="get" action="{{ route('school.filter') }}" class="filter-form">
                            @csrf
                            <div
                                class="grid grid-cols-2 gap-4 mt-4 text-xs text-gray-700 uppercase  dark:bg-gray-700 dark:text-gray-400">
                                <div class="mb-4">
                                    <label for="name">Escola:</label>
                                    <input type="text" name="name" id="name" value="{{ request('name') }}"
                                        class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>

                                <div class="mb-4">
                                    <label for="rede">Rede:</label>
                                    <select name="rede" id="rede"
                                        class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="" selected>Selecione...</option>
                                        <option value="Particular" @if (request('rede') == 'Particular') selected @endif>Particular
                                        </option>
                                        <option value="Pública" @if (request('rede') == 'Pública') selected @endif>Pública
                                        </option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="nivel">Nível:</label>
                                    <select name="nivel" id="nivel"
                                        class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="" selected>Selecione...</option>
                                        <option value="Fundamental" @if (request('nivel') == 'Fundamental')  @endif>Fundamental
                                        </option>
                                        <option value="Médio" @if (request('nivel') == 'Médio')  @endif>Médio
                                        </option>
                                        <option value="Faculdade" @if (request('nivel') == 'Faculdade')  @endif>Faculdade
                                        </option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="country ">País:</label>
                                    <input type="text" name="country" id="country" value="{{ request('country') }}"
                                        class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>

                            </div>
                            <button
                                class="m-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="submit" class="bg-blue-500 text-white px-4 py-2">Filtrar</button>
                        </form>
                    </div>
                </div>

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-pink-600">
                                    Escola
                                </th>
                                <th scope="col" class="px-6 py-3 text-pink-600">
                                    Rede
                                </th>
                                <th scope="col" class="px-6 py-3 text-pink-600">
                                    Nível
                                </th>
                                <th scope="col" class="px-6 py-3 text-pink-600">
                                    País
                                </th>
                                <th scope="col" class="px-6 py-3 text-pink-600">
                                    Ações
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($schools as $school)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $school->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $school->rede }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $school->nivel }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $school->country }}
                                    </td>
                                    <td class="px-6 py-4 mt-2 flex items-center justify-center gap-2">

                                        <a href="{{ route('school.edit', $school->id) }}" class="h-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 hover:text-pink-600">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </a>
                                        <a href="{{ route('school.view', $school->id) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 hover:text-pink-600">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>

                                        </a>

                                        <button class="show-modal" data-school-id="{{ $school->id }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>

                                        <form id="delete-form-{{ $school->id }}"
                                            action="{{ route('school.delete', $school->id) }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                Excluir
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div id="modal-container" class="modal-container">
                        <div class="modal flex flex-col justify-between">
                            <p>Tem certeza de que deseja excluir esta Escola?</p>
                            <div class="flex justify-around mt-4 ">
                                <button class="text-white bg-red-500 py-2 px-5 rounded-xl text-base font-medium" id="cancel-delete">Não</button>
                                <button class="text-white bg-green-500 py-2 px-5 rounded-xl text-base font-medium" id="confirm-delete">Sim</button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        {{ $schools->appends(Request::all())->links() }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modalContainer = document.getElementById('modal-container');
        const showModalButtons = document.querySelectorAll('.show-modal');
        const confirmDeleteButton = document.getElementById('confirm-delete');
        const cancelDeleteButton = document.getElementById('cancel-delete');
        const deleteForm = document.getElementById('delete-form');

        showModalButtons.forEach(button => {
            button.addEventListener('click', function() {
                const schoolId = this.getAttribute('data-school-id');
                const schoolDeleteForm = document.querySelector(`#delete-form-${schoolId}`);

                modalContainer.style.display = 'block';

                confirmDeleteButton.addEventListener('click', function() {
                    schoolDeleteForm.submit();
                    modalContainer.style.display = 'none';
                });

                cancelDeleteButton.addEventListener('click', function() {
                    modalContainer.style.display = 'none';
                });
            });
        });

        modalContainer.addEventListener('click', function(event) {
            if (event.target === modalContainer) {
                modalContainer.style.display = 'none';
            }
        });

        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape' && modalContainer.style.display === 'block') {
                modalContainer.style.display = 'none';
            }
        });

        $(document).ready(function() {
            $('.filter-form').hide();
            $('#show-filter').click(function() {
                $('.filter-form').slideToggle();
            });
        });
    });
</script>

<style>
    .modal-container {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
    }

    .modal {
        background-color: #fff;
        width: 300px;
        margin: 0 auto;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        text-align: center;
    }
</style>
