<div class="columns-4 space-y-3 justify-center text-center mx-auto">
    <div class="border border-white rounded-3xl p-2 lg:w-[90px]">
      <p id="days" class="days text-3xl font-extrabold">0</p>
      <span class="text-[10px]">Dias</span>
    </div>
    <div class="border border-white rounded-3xl p-2 lg:w-[90px]">
      <p id="hours" class="hours text-3xl font-extrabold">0</p>
      <span class="text-[10px]">Horas</span>
    </div>
    <div class="border border-white rounded-3xl p-2 lg:w-[90px]">
      <p id="min" class="min text-3xl font-extrabold">0</p>
      <span class="text-[10px]">Minutos</span>
    </div>
    <div class="border border-white rounded-3xl p-2 lg:w-[90px]">
      <p id="sec" class="sec text-3xl font-extrabold">0</p>
      <span class="text-[10px]">Segundos</span>
    </div>
  </div>
  <script>
    let daysItem = document.querySelector(".days");
   let hoursItem = document.querySelector(".hours");
   let minItem = document.querySelector(".min");
   let secItem = document.querySelector(".sec");
  
  
   let countDown = () => {
     let futureDate = new Date("26 Sep 2023 20:00:00");
     let currentDate = new Date();
     let myDate = futureDate - currentDate;
     //console.log(myDate);
  
     let days = Math.floor(myDate / 1000 / 60 / 60 / 24);
  
     let hours = Math.floor(myDate / 1000 / 60 / 60) % 24;
  
     let min = Math.floor(myDate / 1000 / 60) % 60;
  
     let sec = Math.floor(myDate / 1000) % 60;
  
     daysItem.innerHTML = days;
     hoursItem.innerHTML = hours;
     minItem.innerHTML = min;
     secItem.innerHTML = sec;
   }
  
   countDown()
  
   setInterval(countDown, 1000)
  
  
  
  
  </script>
  