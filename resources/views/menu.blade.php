<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')


  <style>
    
    

    .body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    swiper-container {
      width: 100vw;
      height: 400px;
    }

    swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction:column; 
      position: relative;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
</head>
<body id="body" class='bg-white'>

<!-- component -->
<!--NAVBAR-->
<nav>
<div class="w-screen h-20 p-5 bg-white shadow flex justify-center gap-5 items-center">
    <div class="w-10 h-10 bg-white bg-opacity-10 rounded-[100px]" >
        <img src="img/delicipad.jpg" alt="">
    </div>
    <div class="grow shrink basis-0 text-black text-[28px] font-medium font-['Roboto'] leading-9">Delicipad</div>
    <div class="bg-white justify-center items-center gap-10 flex">
        <a href='/' class="text-black text-base font-normal font-['Roboto'] leading-normal">Home</a>
        <a href='/menu' class="text-black text-base font-normal font-['Roboto'] leading-normal">Menu</a>
        <a href='/cart' class="text-black text-base font-normal font-['Roboto'] leading-normal">Cart</a>
        <a href='/payment' class="text-black text-base font-normal font-['Roboto'] leading-normal">Delivery</a>
        <a href='/profile' class="text-black text-base font-normal font-['Roboto'] leading-normal">Account</a>
        <div class="relative h-9 rounded-md border border-black border-opacity-30 justify-end items-center gap-1 flex">
            <input type='text' placeholder='Search in site' class="pl-2 relative flex w-full h-8 rounded-md text-black border-0 ring-0 outline-0 text-opacity-1 text-sm font-normal font-['Roboto'] leading-tight">
            <button type='submit' style="background-image: url('/img/search.png'); background-size: contain; background-position:center; background-repeat:no-repeat;" alt='se' class="relative w-7 h-7 relative z-2 mr-2" ></button>
        </div>
    </div>
    
</div>
</nav>

<div class="bg-[url('/img/bgimg.jpg')]">
  <div class=' mt-10 body'>
    <swiper-container class="mySwiper" pagination="true" autoplay='true'>
      <swiper-slide><img src="img/baner.jpg" alt=""><p class='absolute text-2xl font-extrabold text-white'>PROMO</p></swiper-slide>
      <swiper-slide><img src="img/1339.jpg" alt=""></swiper-slide>
      <swiper-slide><img src="img/baner3.jpg" alt=""></swiper-slide>
      <swiper-slide><img src="img/baner4.jpg" alt=""></swiper-slide>
      <swiper-slide><img src="img/baner5.jpg" alt=""></swiper-slide>
      <swiper-slide><img src="img/baner6.jpg" alt=""></swiper-slide>
      <swiper-slide><img src="img/baner7.jpg" alt=""></swiper-slide>
      <swiper-slide><img src="img/baner8.jpg" alt=""></swiper-slide>
      <swiper-slide><img src="img/baner9.jpg" alt=""></swiper-slide>
    </swiper-container>
  
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
  
  </div>
  <div class='flex gap-x-20'>
    <img src="img/restorant.jpg" alt="" class='max-w-lg mt-8 rounded-r-full shadow-xl'>
    <div class='mt-20 w-[500px] h-[200px] rounded-xl bg-slate-100 shadow-xl '>
      <h1 class='font-mono p-5'> Selamat datang di dunia cita rasa tanpa batas! Temukan kelezatan dari setiap sudut dunia di sini. Pilihlah dengan bebas dari daftar menu kami yang beragam, dan nikmati pengalaman kuliner yang tak terlupakan. Setiap hidangan adalah kisah rasa yang menanti untuk ditemukan</h1>
    </div>
  </div>

  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <div>
      <h2 class="text-2xl font-bold tracking-tight text-black flex justify-center ">DAFTAR MENU</h2>
    </div>
    <div class='mt-3 flex justify-center gap-x-4 mx-auto'>
      <button class="button2">
        <span class="relative z-10">KERANJANG</span>
      </button>
      <div class='container p-4 mx-auto bg-slate-200 rounded-lg '>
        <div class='flex gap-x-5'>
          <h1 class='font-mono'>Kategori</h1>
          <div class='flex gap-x-5'>
            <div class='rounded-xl flex flex-col justify-between relative bg-gray-800 '>
              <input type="checkbox" id="cb4" value="cb4"
              class='
              absolute appearance-none h-4 w-10 bg-gray-400 rounded-full -mt-2
                  checked:bg-yellow-300 checked:shadow-[0_0px_5px_yellow]
                  transition-all duration-300 peer '/>
              <label for='cb4' class='w-24 rounded-full p-1 flex flex-row justify-center px-2 peer-checked:text-yellow-300 select-none text-white'>Foods</label>
          </div>
            <div class='rounded-xl flex flex-col justify-between relative bg-gray-800 '>
              <input type="checkbox" id="cb5" value="cb5"
              class='
              absolute appearance-none h-4 w-10 bg-gray-400 rounded-full -mt-2
                  checked:bg-blue-500 checked:shadow-[0_0px_5px_blue]
                  transition-all duration-300 peer '/>
              <label for='cb5' class='w-24 rounded-full p-1 flex flex-row justify-center px-2 peer-checked:text-blue-500 select-none text-white'>Drinks</label>
          </div>
          <div class='rounded-xl flex flex-col justify-between relative bg-gray-800 '>
            <input type="checkbox" id="cb6" value="cb6"
            class='
            absolute appearance-none h-4 w-10 bg-gray-400 rounded-full -mt-2
                checked:bg-red-500 checked:shadow-[0_0px_5px_red]
                transition-all duration-300 peer '/>
            <label for='cb6' class='w-24 rounded-full p-1 flex flex-row justify-center px-2 peer-checked:text-red-500 select-none text-white'>Snack</label>
        </div>
        <div class='rounded-xl flex flex-col justify-between relative bg-gray-800 '>
          <input type="checkbox" id="cb7" value="cb7"
          class='
          absolute appearance-none h-4 w-10 bg-gray-400 rounded-full -mt-2
              checked:bg-green-500 checked:shadow-[0_0px_5px_green]
              transition-all duration-300 peer '/>
          <label for='cb7' class='w-32 rounded-full p-1 flex flex-row justify-center px-2 peer-checked:text-green-500 select-none text-white'>Vegetables</label>
      </div>
      <div class='rounded-xl flex flex-col justify-between relative bg-gray-800 '>
        <input type="checkbox" id="cb8" value="cb8"
        class='
        absolute appearance-none h-4 w-10 bg-gray-400 rounded-full -mt-2
            checked:bg-pink-500 checked:shadow-[0_0px_5px_pink]
            transition-all duration-300 peer '/>
        <label for='cb8' class='w-28 rounded-full p-1 flex flex-row justify-center px-2 peer-checked:text-pink-500 select-none text-white'>Desserts</label>
    </div>
    <div class='rounded-xl flex flex-col justify-between relative bg-gray-800 '>
      <input type="checkbox" id="cb9" value="cb9"
      class='
      absolute appearance-none h-4 w-10 bg-gray-400 rounded-full -mt-2
          checked:bg-teal-400 checked:shadow-[0_0px_5px_teal]
          transition-all duration-300 peer '/>
      <label for='cb9' class='w-44 rounded-full p-1 flex flex-row justify-center px-2 peer-checked:text-teal-400 select-none text-white'>Internasional Foods</label>
  </div>
  <div class='rounded-xl flex flex-col justify-between relative bg-gray-800 '>
    <input type="checkbox" id="cb10" value="cb10"
    class='
    absolute appearance-none h-4 w-10 bg-gray-400 rounded-full -mt-2
        checked:bg-purple-500 checked:shadow-[0_0px_5px_purple]
        transition-all duration-300 peer '/>
    <label for='cb10' class='w-20 rounded-full p-1 flex flex-row justify-center px-2 peer-checked:text-purple-500 select-none text-white'>Other</label>
  </div>
        </div>
      </div>
    </div>
  </div>
  <div class='mt-8 w-[90vw] mx-auto flex flex-wrap '>
    @include("layout.card")
  </div>
  {{-- <div class="container px-8 mx-auto max-w-96 mb-10 ">
    <div class= "rounded-lg shadow-lg p-10 bg-slate-100" >
      <div>
        <img src="img/rendang2.jfif" alt="" class="rounded-lg ">
        <h1 class= "font-bold mt-6">Rendang</h1>
        <div class='relative'>
          <div class='absolute -top-6 right-0'>
            
          </div>

        </div>
        <p class="mt-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, nihil.</p>
        <div class=" flex justify-center mt-8">
        <button class="rounded-full relative flex h-[50px] w-40 items-center justify-center overflow-hidden bg-gray-800 text-white shadow-2xl transition-all before:absolute before:h-0 before:w-0 before:rounded-full before:bg-orange-600 before:duration-500 before:ease-out hover:shadow-orange-600 hover:before:h-56 hover:before:w-56">
          <span class="relative z-10">PESAN</span>
        </button>
        </div>
      </div>
    </div>
</div> --}}
  </div>
</div>



</body>
</html>
<script>
  let list = document.getElementById("navbar")
  let show = document.getElementById("shownavbar")
  let hide = document.getElementById("body")
  list.style.display = "none";
  show.onclick = () => {
    if (list.style.display === "block") {
      list.style.display = "none";
      
    } else {
      list.style.display = "block";
      
    }
  };

// untuk chekbox =================

// const childs = document.querySelectorAll('input');
// for(let i =0;i<childs.length;i++){
//     window.setTimeout(function(){
//         childs[i].checked = true; 
//     },(i+1)*500);
// }
// =========================================
</script>