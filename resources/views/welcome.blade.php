@extends('layouts.app')

@section('title', 'Bienvenue - EmailApp')

@section('content')
<div class="text-center py-8">
    <!-- Hero Badge -->
    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-400 text-xs font-semibold mb-6 shadow-inner">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
        </svg>
        Plateforme d'envoi d'e-mails Laravel
    </div>

    <!-- Main Title -->
    <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight bg-gradient-to-r from-white via-slate-100 to-slate-400 bg-clip-text text-transparent mb-4 leading-tight">
        Système d'Authentification & E-mail
    </h1>

    <p class="text-base text-slate-400 max-w-lg mx-auto mb-8 leading-relaxed">
        Une interface moderne et sécurisée pour gérer vos comptes utilisateurs, formulaires de connexion et envois d'e-mails.
    </p>

    <!-- Call to Actions -->
    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
        @auth
            <a href="{{ route('dashboard') }}"
               class="w-full sm:w-auto px-8 py-3.5 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 hover:from-indigo-600 hover:via-purple-600 hover:to-pink-600 text-white font-semibold rounded-xl text-sm shadow-lg shadow-indigo-500/25 hover:shadow-indigo-500/40 transition-all duration-200">
                Accéder au Tableau de Bord &rarr;
            </a>
        @else
            <a href="{{ route('login') }}"
               class="w-full sm:w-auto px-8 py-3.5 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 hover:from-indigo-600 hover:via-purple-600 hover:to-pink-600 text-white font-semibold rounded-xl text-sm shadow-lg shadow-indigo-500/25 hover:shadow-indigo-500/40 transition-all duration-200">
                Se connecter
            </a>
            <a href="{{ route('register') }}"
               class="w-full sm:w-auto px-8 py-3.5 bg-slate-900/80 hover:bg-slate-800 border border-slate-700 text-slate-200 font-semibold rounded-xl text-sm transition-all duration-200">
                Créer un compte
            </a>
        @endauth
    </div>
</div>
@endsection
