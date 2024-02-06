
  <div class="lg:w-6/12 mx-auto text-center">
    <img src="{{asset('images/expert-mind/logo.png')}}" alt="" class="w-8/12 mx-auto lg:w-8/12 mb-5">
    <h1 class="text-3xl font-extrabold uppercase">Pessoas com mentes especialistas produzem mais 🧠</h1>
  </div>

<style scoped>
  #hero{
    background-color: rgb(0,0,0);
    background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.6) 100%),url('{{ asset('images/expert-mind/bg-hero.jpg') }}');
    background-size: cover;
    background-position: center;
  }
  /* MOBILE */
  @media only screen and (max-width: 600px) {
    #hero{
      background-color: rgb(0,0,0);
      background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.6) 100%),url('{{ asset('images/expert-mind/bg-hero.jpg') }}');
      background-size: cover;
      background-position: top;
      background-repeat: no-repeat;
    } 
  }
</style>