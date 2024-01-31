<nav class="sticky top-0 w-full bg-sky-900 py-5 z-10 backdrop-blur-lg">
  <div class="lg:w-11/12 mx-auto px-5 lg:px-0">
    <div class="px-5 grid grid-cols-12 gap-2 items-center justify-between flex lg:px-10">
      <div class="col-span-6 col-start-4 lg:col-span-2 flex items-center space-x-4">
        <img src="{{ asset('images/logo-nav.png') }}" alt="Logo">
      </div>
      <div id="bars-mobile" class="col-span-1 col-start-12 lg:hidden text-3xl">
        <ion-icon name="menu-outline"></ion-icon>
      </div>
      <div id="menu-mobile" class="col-span-12 mt-3 lg:mt-0 lg:col-span-10 hidden lg:block">
        <ul class="lg:flex lg:space-x-4 space-y-10 lg:space-y-0 items-center justify-end text-white uppercase text-sm">
          <a href="+556134354205">
            <li class="flex items-center space-x-3">
              <span class="flex text-cyan-400 text-lg">
                <ion-icon name="call-outline"></ion-icon>
              </span>
              <p>(61) 3435-4205</p>
            </li>
          </a>
          <a href="{{ config('app.whatsapp_link') }}{{ config('app.whatsapp_text') }}">
            <li class="flex items-center space-x-3">
              <span class="flex text-cyan-400 text-lg">
                <ion-icon name="logo-whatsapp"></ion-icon>
              </span>
              <p>(61) 99694-5723</p>
            </li>
          </a>
        </ul>
      </div>
    </div>
  </div>
</nav>
<script>
  document.getElementById('bars-mobile').addEventListener('click', function () {
    document.getElementById('menu-mobile').classList.toggle('hidden');
});

</script>