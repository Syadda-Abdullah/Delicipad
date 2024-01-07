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
<body>
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
<div class=''>
    <div>
        <div class='w-screen h-60 bg-gray-500 relative'>
            <div class='absolute w-full'>
                <div class='container mx-auto'>
                    <h1 class='text-white flex justify-center items-center h-full mt-4'>SET YOUR LOCATION</h1>
                </div>
                    <div class='flex relative justify-center items-center mt-8 w-screen'>
                        <h1 class='w-32 h-32 bg-slate-600 rounded-xl mr-10'></h1>
                        <img src="img/364.jpg" alt="" class='absolute rounded-xl max-w-32 ml-5 mt-5 left-[300px] '>
                        <div class='w-[600px] h-32 bg-white rounded-xl shadow-xl '>
                            <h1 class='flex justify-center p-5 font-mono'> Tentukan kebahagiaan Anda dengan hanya satu klik. Atur lokasi pengantaran makanan favorit Anda di sini, dan nikmati kelezatan yang diantar langsung ke pintu Anda. Jangan biarkan lapar menghalangi petualangan rasa Anda! </h1>
                        </div>
                    </div>
            </div>
        </div>
        <div class='mb-10 border-solid container mt-10 px-8 mx-auto max-w-xl rounded-lg shadow-lg p-10 bg-slate-100 min-h-60'>
            <h1 class='flex justify-center mb-10'>SET YOUR LOCATION</h1>
            <div class='flex'>
              <img src="img/34.jpg" alt="" class=' max-w-48 rounded-l-full rounded-r-lg border-r-8 mr-5'>
              <div class='flex flex-col'>
                
                <form action="/simpanalamat" method="post">>
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="flex w-72 flex-col gap-6">
                      <div class="relative h-11 w-full min-w-[200px]">
                        <input
                          placeholder="Jln.Ph,mustofa no67 , rt03/04 ,Bandung"
                          class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                          value="" name="alamat_tujuan"/>
                        <label class="after:content[' '] pointer-events-none absolute left-0 -top-2.5 flex h-full w-full select-none text-sm font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-2.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-pink-500 after:transition-transform after:duration-300 peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:after:scale-x-100 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                          Alamat Lengkap
                        </label>
                      </div>
                      <div class="relative h-11 w-full min-w-[200px]">
                        <input
                          class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                          placeholder=" "
                          value="" name='catatan'
                        />
                        <label class="after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-pink-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:after:scale-x-100 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                          Catatan Tambahan
                        </label>
                      </div>
                      <div class="relative h-10 w-full min-w-[200px]">
                        <input
                          class="peer h-full w-full rounded-[7px] border border-blue-gray-200 bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                          placeholder=" "
                          value="" name='no_telp'
                        />
                        <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                          No Telp
                        </label>
                      </div>
                    </div>
                    <button type="submit" class="button1 mt-7" >
                        <span class="relative z-10">Simpan Alamat</span>
                    </button>
                </form>
                
              </div>

            </div>
          </div>
    </div>
</div>
</body>
</html>

