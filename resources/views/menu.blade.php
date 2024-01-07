<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<body id="body" class='bg-slate-800'>

<!-- component -->
<nav class="flex dark:bg-slate-900 items-center relative justify-between bg-white px-5 py-6 w-full">
  <div>
   <img src="img/delicipad.jpg" alt="Logo" class="max-w-14">
  </div>
  <ul id="drawer" role="menu" class=" sm:gap-14 transition-left ease-[cubic-bezier(0.4, 0.0, 0.2, 1)] delay-150  sm:flex  flex flex-col cursor-pointer absolute min-h-screen -left-48 sm:static w-48 top-0 bg-white sm:shadow-none shadow-xl sm:bg-transparent sm:flex-row sm:w-auto sm:min-h-0 dark:bg-slate-900  ">
    <li class="font-medium text-sm p-3 hover:bg-slate-300 dark:hover:bg-slate-800 sm:p-0 sm:hover:bg-transparent text-primary">
      <a href="#" class="dark:text-white">MENU</a>
    </li>
    <li class="font-medium text-sm p-3 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-800 sm:p-0 sm:hover:bg-transparent text-gray-600 hover:text-primary transition-colors">
      <a href="#" class="dark:text-white">HOME</a>
    </li>
    <li class="font-medium text-sm p-3 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-800 sm:p-0 sm:hover:bg-transparent text-gray-600 hover:text-primary transition-colors">
      <a href="#" class="dark:text-white">ABOUT</a>
    </li>
  </ul>
  <div class="flex gap-3 items-center ">
    <div id= "shownavbar" class="h-10 w-10 hover:ring-4 user cursor-pointer relative ring-blue-700/30 rounded-full bg-cover bg-center bg-[url('https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')]">
      
       <div id="navbar" class=" drop-down  w-48 overflow-hidden bg-white rounded-md shadow absolute top-12 right-3">
        <ul>
          <li class="px-3 py-3 text-sm font-medium flex items-center space-x-2 hover:bg-slate-400">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </span>
            <span> Setting </span>
          </li>
          <li class="px-3  py-3  text-sm font-medium flex items-center space-x-2 hover:bg-slate-400">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
</svg>
            </span>
            <a href=""> Cart </a>
          </li>
          <li class="px-3  py-3 text-sm font-medium flex items-center space-x-2 hover:bg-slate-400">
            <span>
         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
</svg>
            </span>
            <span> Logout </span>
          </li>
      
        </ul>
      </div>
    </div>
    <div class="sm:hidden cursor-pointer" id="mobile-toggle">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path class="dark:stroke-white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
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
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <div>
      <h2 class="text-2xl font-bold tracking-tight text-white flex justify-center ">DAFTAR MENU</h2>
    </div>
    <div class='mt-3 flex justify-center gap-x-4 mx-auto'>
      <button class="button2">
        <span class="relative z-10">KERANJANG</span>
      </button>
      <div class='container p-4 mx-auto bg-white rounded-lg '>
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