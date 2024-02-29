<div id='bttnwpp' class='fixed bottom-5'>
    <div class='flex flex-col w-screen  items-center'>
        <a href="https://wa.me/5511989300627"><button class="text-white px-10 py-5 bg-green-500 border-4 border-solid border-green-500 hover:hidden absolute rounded-full" target="_blank">
            <div class='flex flex-row items-center gap-5'>
            <img class=''src="{{asset('images/expert-mind/WPP.svg')}}" alt="" />
            <h2 class='text-2xl'>Entre em Contato</h2>               
            </div>
        </button>
        <button class="px-10 py-5 bg-white text-green-500 border-4 border-solid border-green-500 rounded-full">
            <div class='flex flex-row items-center gap-5'>
            <img class=''src="{{asset('images/expert-mind/WPP-Dark.svg')}}" alt="" />
            <h2 class='text-2xl'>Entre em Contato</h2>               
            </div>
        </button>
        </a>
    </div>
</div>

<script>
$(document).ready(function(){
   $(window).on('scroll', function() {
      $('.scroll-aparecer').stop();
      if($(this).scrollTop() > 200) {
         $('#bttnwpp').animate({
            height:"100px"
         }, 1000); /*Defina aqui o tempo em milisegundos */
      }else{
         $('#bttnwpp').animate({
         height:"0"
         }, 1000); /*Defina aqui o tempo em milisegundos */
      }
   });
});
</script>