@extends('layouts.main')
@section('title', 'Desafio 10K Obrigado')

@section('content')

<section id="hero" class="h-[850px] lg:h-screen py-10 lg:py-0 flex lg:items-center text-white">
  <div class="lg:w-10/12 mx-auto px-10 lg:px-0">
    <div class="lg:w-8/12 mx-auto">
      <h1 class="text-4xl text-center lg:text-8xl font-bold uppercase">Parabéns!</h1>
      <h2 class="text-2xl text-center lg:text-4xl mb-8">Seu ingresso está garantido. Agora você pode entrar no nosso <span class="bg-lime-600 font-bold">grupo exclusivo do whatsapp</span> para receber todos os nossos avisos</h2>
      <div class="lg:w-8/12 mx-auto">
        <a href="https://devzapp.com.br/api-engennier/campanha/api/redirect/654c64c9138ce9000126947b" class='bg-gradient-to-r from-green-600 to-lime-500 p-3 rounded-2xl text-white uppercase font-extrabold flex items-center justify-center shadow-2xl shadow-green-600'>ENTRAR NO GRUPO VIP</a>
      </div>
    </div>
  </div>
</section>

@endsection

<style scoped>
  #hero{
    background-color: rgb(0,0,0);
    background: linear-gradient(0deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.8) 100%),url('{{ asset('images/desafio-10k/bg-obrigado.jpg') }}');
    background-size: cover;
    background-position: center;
  }
  /* MOBILE */
  @media only screen and (max-width: 600px) {
    #hero{
      background-color: rgb(0,0,0);
      background: linear-gradient(0deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.8) 100%),url('{{ asset('images/desafio-10k/bg-obrigado.jpg') }}');
      background-size: cover;
      background-position: bottom;
      background-repeat: no-repeat;
    } 
  }
</style>