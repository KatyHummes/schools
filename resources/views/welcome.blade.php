
@extends('layouts.main')
@section('content')
<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    <header class="bg-white dark:bg-gray-800 shadow">
        <div class="py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-pink-600">Seja bem Vindo {{ $user }}</h1>
        </div>
    </header>
</div>
    
@endsection
