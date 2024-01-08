<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <!-- component -->
<script src="https://cdn.tailwindcss.com"></script>
<body class="bg-gray-100">
  <div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6 text-center">Update id_transaksi</h1>
    <form class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md " action="/updatedata" method="post">
        @csrf
        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">id transaksi</label>
        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
          type="text" id="name" name="id_transaksi" placeholder="">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">id user</label>
        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
          type="text" id="email" name="id_user" placeholder="">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">id menu</label>
        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
          type="text" id="password" name="id_menu" placeholder="">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">Alamat tujuan</label>
        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
          type="text" id="confirm-password" name="alamat_tujuan" placeholder="">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">kode Promo</label>
        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
          type="text" id="confirm-password" name="kode_promo" placeholder="">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">no telp</label>
        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
          type="text" id="confirm-password" name="no_telp" placeholder="">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">catatan</label>
        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
          type="text" id="confirm-password" name="catatan" placeholder="">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">status</label>
        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
          type="text" id="confirm-password" name="status" placeholder="">
      </div>
      <button
        class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
        type="submit">Update</button>
    </form>
  </div>
</body>
</body>
</html>