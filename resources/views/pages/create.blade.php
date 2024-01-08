<!-- resources/views/pages/crud_adm.blade.php -->

{{-- @extends('layout.app') --}}

{{-- @section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Menu</title>
</head>
<body>
    <div class="w-screen h-20 p-5 bg-transparent shadow flex justify-center gap-5 items-center border-b-2 border-black border-opacity-100">
        <div class="w-10 h-10 bg-white bg-opacity-10 rounded-[100px]" >
            <img src="img/delicipad.jpg" alt="">
        </div>
        <div class="grow shrink basis-0 text-black text-[28px] font-medium font-['Roboto'] leading-9">Delicipad Admin</div>
        <div class="bg-black justify-center items-center p-3 rounded flex w-18 h-18">
            <a href='/crud_adm' class="text-white text-base font-bold font-['Roboto'] leading-normal">Back</a>
        </div>   
    </div>
    <div class="relative justify-center items-center flex">
        <div class="m-[100px] bg-white divide-gray-200 dark:bg-gray-800 dark:divide-gray-700 relative flex flex-col w-[280px] justify-start items-center border rounded-[10px]">
            <div class="justify-center flex relative align-center px-5 py-5">
                <form action="simpan_data" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="name" class="text-[14px] font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400 flex w-[250px] mt-1">Nama Menu:</label>
                    <input type="text" name="nama_menu" class="pr-2 mt-1 w-full h-6 border border-black border-opacity-1 rounded-md ring-0 outline-0 text-left" required>
                    <br>
                    <label for="name" class="text-[14px] font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400 flex w-[250px] mt-1">jenis:</label>
                    <select id="jenis_makanan" name="jenis_makanan" class="pr-2 mt-1 w-[100px] h-6 border border-black border-opacity-1 rounded-md ring-0 outline-0">
                        <option value="food">Food</option>
                        <option value="drinks">Drink</option>
                        <option value="desserts">Dessert</option>
                        <option value="snacks">Snacks</option>
                        <option value="vegetables">Vegetables</option>
                        <option value="internasional_foods">International Foods</option>
                        <option value="other">Other</option>
                    </select>
                    <br>
                    <label for="name" class="text-[14px] font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400 flex w-[250px] mt-1">deskripsi:</label>
                    <textarea type="text" name="deskripsi" class="resize-none mt-1 w-full h-[100px] border border-black border-opacity-1 rounded-md ring-0 outline-0" required></textarea>
                    <br>
                    <label for="name" class="text-[14px] font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400 flex w-[250px] mt-1">info:</label>
                    <input type="text" name="info" class="mt-1 w-full h-6 border border-black border-opacity-1 rounded-md ring-0 outline-0" required>
                    <br>
                    <label for="name" class="text-[14px] font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400 flex w-[250px] mt-1">harga:</label>
                    <input type="text" name="harga" class="mt-1 w-[100px] h-6 border border-black border-opacity-1 rounded-md ring-0 outline-0" required>
                    <br>
                    <label for="name" class="text-[14px] font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400 flex w-[250px] mt-1">foto:</label>
                    <input type="file" name="foto" class="mt-1 w-[200px] h-6 justify-center items-center flex" required>
                    <br>
                    <div class="relative flex justify-center mt-10">
                        <button type="submit" class="justify-center items-center flex bg-red-500 w-[100px] h-[40px] rounded-md">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </body>
</html>    