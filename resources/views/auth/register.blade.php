@extends('base')


@section('title', 'Inscription')

@section('content')

    <div class="max-w-lg mx-auto p-6 bg-wite rounded-lg shadow-md">

        @if (session('success'))
            <div class="bg-green-400 border-green-400 text-green-700 px-4 py-3 rounded-relative" role="alert">
                <strong class="font-bold">Success !</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <form action="{{ route('registration.register') }}" method="POST" class="mt-6">

            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
                <input class="mt-1 p-3 block w-full border border-gray-300 outline-none rounded-md shadow-md" type="text"
                    id="name" name="name" value="{{ old('name') }}">
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input class="mt-1 p-3 block w-full border border-gray-300 outline-none rounded-md shadow-md" type="email"
                    id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input class="mt-1 p-3 block w-full border border-gray-300 outline-none rounded-md shadow-md" type="password"
                    id="password" name="password" value="{{ old('password') }}">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmer votre mot de passe</label>
                <input class="mt-1 p-3 block w-full border border-gray-300 outline-none rounded-md shadow-md" type="password_confirmation"
                    id="password_confirmation" name="password_confirmation" >
            </div>

            <button type="submit"
                class="w-full py-2 px-4 bg-blue-900 hover:bg-blue-700 text-white
         rounded-md cursor-pointer">
                S'inscrire
            </button>

            <p class="my-2">
                Déjà un compte ?
                <a href="{{ route('login') }}" class="text-red-500">Se connecter</a>
            </p>
        </form>

    </div>

@endsection
