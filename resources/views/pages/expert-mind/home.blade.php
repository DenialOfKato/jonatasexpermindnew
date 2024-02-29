@extends('layouts.main')
@section('title', 'Home')

@section('content')
  <section id="hero" class="flex items-center text-white h-[450px] lg:h-screen px-10 lg:px-0">
    @include('expert-mind.hero')
  </section>
  <section class="bg-gradient-to-b from-black to-neutral-900 py-10 px-10 lg:px-0 space-y-10 text-white">
    @include('expert-mind.quem-sou')
  </section>
  <section id="empresarios" class="bg-gradient-to-b from-red-600 to-blue-600 py-10 px-10 lg:px-0 space-y-10 text-white">
    @include('expert-mind.empresarios')
  </section>
  <section class="bg-gradient-to-b from-black to-neutral-900 py-10 px-10 lg:px-0 space-y-10 text-white">
    @include('expert-mind.pesquisa')
  </section>
  <section id="desenvolva" class="bg-gradient-to-b from-red-600 to-blue-600 py-10 px-10 lg:px-0 space-y-10 text-white">
    @include('expert-mind.desenvolva')
  </section>
  <section>
    @include('expert-mind.botao-zap')
  </section>
@endsection