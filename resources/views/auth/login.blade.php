@extends('base')


@section('title', 'Se connecter')

@section('content')

    <div class="max-w-lg mx-auto p-6 bg-wite rounded-lg shadow-md">

        @if ($errors->any())
            <div class="bg-red-100 border-red-400 text-red-700 px-4 py-3 rounded-relative" role="alert">
                <strong class="font-bold">Erreur !</strong>
                <span class="block sm:inline">{{ $errors->first() }}</span>
            </div>
        @endif

        <form action="{{ route('login.submit') }}" method="POST" class="mt-6">

            @csrf

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input class="mt-1 p-3 block w-full border border-gray-300 outline-none rounded-md shadow-md" type="text"
                    id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input class="mt-1 p-3 block w-full border border-gray-300 outline-none rounded-md shadow-md" type="text"
                    id="password name="password value="{{ old('password') }}">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit"
                class="w-full py-2 px-4 bg-blue-900 hover:bg-blue-700 text-white
         rounded-md cursor-pointer">
                Se connecter
            </button>

            <p class="my-2">
                Pas de compte ?
                <a href="{{ route('register') }}" class="text-red-500">S'inscrire maintenant</a>
            </p>
        </form>

    </div>

@endsection
