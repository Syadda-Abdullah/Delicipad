<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class='bg-white'>

<nav>
<div class="w-screen h-20 p-5 bg-white shadow flex justify-center gap-5 items-center">
    <div class="w-10 h-10 bg-white bg-opacity-10 rounded-[100px]" >
        <img src="img/delicipad.jpg" alt="">
    </div>
    <div class="grow shrink basis-0 text-black text-[28px] font-medium font-roboto leading-9">Delicipad</div>
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

{{-- <div class=''>
  <div class='container mt-10 px-8 mx-auto max-w-xl rounded-lg shadow-lg p-10 bg-white min-h-60'>
    <h1 class='flex justify-center mb-10'>SET YOUR LOCATION</h1>
    <div class='flex'>
      <img src="img/34.jpg" alt="" class=' max-w-48 rounded-l-full rounded-r-lg border-r-8 mr-5'>
      <div class='flex flex-col'>
        <div class="flex w-72 flex-col gap-6">
          <div class="relative h-11 w-full min-w-[200px]">
            <input
              placeholder="Jln.Ph,mustofa no67 , rt03/04 ,Bandung"
              class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
            />
            <label class="after:content[' '] pointer-events-none absolute left-0 -top-2.5 flex h-full w-full select-none text-sm font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-2.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-pink-500 after:transition-transform after:duration-300 peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:after:scale-x-100 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
              Alamat Lengkap
            </label>
          </div>
          <div class="relative h-11 w-full min-w-[200px]">
            <input
              class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
              placeholder=" "
            />
            <label class="after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-pink-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:after:scale-x-100 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
              Catatan Tambahan
            </label>
          </div>
          <div class="relative h-10 w-full min-w-[200px]">
            <input
              class="peer h-full w-full rounded-[7px] border border-blue-gray-200 bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
              placeholder=" "
            />
            <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
              No Telp
            </label>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div> --}}

<div class='flex items-center justify-center space-x-8 w-screen min-h-screen '>
  
  <div class=''>
    @forelse ($data as $item)
      <div class="container mt-10 px-8 mx-auto max-w-96 mb-10 rounded-lg shadow-lg p-10 bg-white min-h-60">
          <img src="{{ asset('storage/img/' . $item->foto) }}" alt="rendang" class="max-w-28 rounded-lg shadow-sm">
          <div class="flex">
            <form action="/hapus" method="post">
              @csrf
              <input type="hidden" name='id_transaksi' value="{{$item->id_transaksi}}">
              <button name='hapus' class="max-w-28 max-h-10 rounded-full mt-4 text-red hover:before:bg-redborder-red-500 relative h-[50px] w-40 overflow-hidden border border-red-500 bg-white px-3 text-red-500 shadow-2xl transition-all before:absolute before:bottom-0 before:left-0 before:top-0 before:z-0 before:h-full before:w-0 before:bg-red-500 before:transition-all before:duration-500 hover:text-white hover:shadow-red-500 hover:before:left-0 hover:before:w-full">
                  <span class="relative z-10">CANCEL</span></button>
              <div class="flex flex-col  ml-36 -mt-36 ">
                  <h1 class='font-bold '>{{$item->nama_menu}}</h1>
                  <p>{{$item->harga}}</p>
                  {{-- <h1>{{$item['id_menu']}}</h1> --}}
                  {{-- <h3 class="font-bold">Total </h3>
                  <p>Rp.40,0000</p>
                  <div class="custom-number-input h-10 w-32">
                      <label for="custom_number" class="mt-5 w-full text-gray-700 text-sm font-semibold">Jumlah pesanan
                      </label>
                      <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-2">
                      <button data-action="decrement" class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                          <span class="m-auto text-2xl font-thin">−</span>
                      </button>
                      <input type="number" class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom_number" value="1">
                      <button data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                      <span class="m-auto text-2xl font-thin">+</span>
                      </button>
                      </div>
                  </div> --}}
              </div>
            </form>
          </div>
      </div>
      @empty
      <h1>blm ada data</h1>
      @endforelse
  </div>
  
  
  <div class='flex-[0.3]'>
      <div class="container mt-10 px-8 mx-auto max-w-96 mb-10 rounded-lg shadow-lg p-10 bg-white min-h-60 " >
        <form action="/simpanpembayaran" method="post">
          @csrf
          <div class="mb-4">
              <div class="relative h-10 w-full min-w-[200px]">
                <input
                  class="peer h-full w-full rounded-[7px] border border-blue-gray-200 bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-teal-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                  placeholder=" " 
                  value="" name='kode_promo'
                />
                <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-teal-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-teal-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-teal-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                  Kode Promo
                </label>
                {{-- <input type="time" name='tgl_transaksi' value=""> --}}
              </div>
            </div>
            <div class='grid'>
                <h3 class='font-bold mb-8 mt-3'> Metode </h3>
                  <div class='relative'>
                    <div class= 'absolute -top-16 right-0'>
                      {{-- option pembayaran --}}
                      <div class='flex items-center justify-center'>
                        <select
                                  class="shadow-lg outline-none focus:outline-none p-2 bg-white rounded-3xl"
                                  value={selectedValue}
                                  onChange={handleSelectChange}
                                  name='pembayaran'
                                >
                                  
                                    <option value='pembayaran' key={i}>
                                        Pembayaran 
                                    </option>
                                    <option value='Qris' key=''>
                                        Qris
                                    </option>
                                    <option value='Ovo' key=''>
                                        Ovo 
                                    </option>
                                    <option value='COD' key=''>
                                        COD
                                    </option>
                                    <option value='M-Banking' key=''>
                                        M-Banking
                                    </option>
                                  
                                </select>
                        
                        </div>
                    </div>
                  </div>
                <div class='grid'>
                  <h3 class='font-bold '> Pengiriman </h3>
                  <div class='relative'>
                    <div class='absolute -top-6 right-0'>
                      <p> Rp.10,000</p>
                    </div>
                    
                  </div>
                  <h3 class='font-bold mt-6'> Total </h3>
                  <input type="hidden" value="y" name='status'>
                  
                </div>
            </div>
            <div class= 'flex mt-10 justify-center l'>
              <button class="button_beli" type='submit'>
                <span class="relative z-10">BELI</span>
              </button>
            </div>
        </form>
      </div>
  </div>
</div>

<style>
    input[type='number']::-webkit-inner-spin-button,
    input[type='number']::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
  
    .custom-number-input input:focus {
      outline: none !important;
    }
  
    .custom-number-input button:focus {
      outline: none !important;
    }
</style>


</body>
</html>

<script>
    function decrement(e) {
      const btn = e.target.parentNode.parentElement.querySelector(
        'button[data-action="decrement"]'
      );
      const target = btn.nextElementSibling;
      let value = Number(target.value);
      value--;
      target.value = value;
    }
  
    function increment(e) {
      const btn = e.target.parentNode.parentElement.querySelector(
        'button[data-action="decrement"]'
      );
      const target = btn.nextElementSibling;
      let value = Number(target.value);
      value++;
      target.value = value;
    }
  
    const decrementButtons = document.querySelectorAll(
      `button[data-action="decrement"]`
    );
  
    const incrementButtons = document.querySelectorAll(
      `button[data-action="increment"]`
    );
  
    decrementButtons.forEach(btn => {
      btn.addEventListener("click", decrement);
    });
  
    incrementButtons.forEach(btn => {
      btn.addEventListener("click", increment);
    });

    const dropdownButton = document.getElementById('dropdown-button');
    const dropdownMenu = document.getElementById('dropdown-menu');
    let isDropdownOpen = false; // Set to true to open the dropdown by default, false to close it by default

    // Function to toggle the dropdown
    function toggleDropdown() {
        isDropdownOpen = !isDropdownOpen;
        if (isDropdownOpen) {
            dropdownMenu.classList.remove('hidden');
        } else {
            dropdownMenu.classList.add('hidden');
        }
    }

    // Initialize the dropdown state
    toggleDropdown();

    // Toggle the dropdown when the button is clicked
    dropdownButton.addEventListener('click', toggleDropdown);

    // Close the dropdown when clicking outside of it
    window.addEventListener('click', (event) => {
        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
            isDropdownOpen = false;
        }
    });
    


  </script>