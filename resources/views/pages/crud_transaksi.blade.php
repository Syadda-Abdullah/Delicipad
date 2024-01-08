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
    <body>
        <div class="w-screen h-20 p-5 bg-transparent shadow flex justify-center gap-5 items-center border-b-2 border-black border-opacity-100">
            <div class="w-10 h-10 bg-white bg-opacity-10 rounded-[100px]" >
                <img src="img/delicipad.jpg" alt="">
            </div>
            <div class="grow shrink basis-0 text-black text-[28px] font-medium font-['Roboto'] leading-9">Delicipad Admin</div>
            <div class="bg-black justify-center items-center p-3 rounded flex w-18 h-18">
                <a href='/admin' class="text-white text-base font-bold font-['Roboto'] leading-normal">Back</a>
            </div>   
        </div>
        <div class="p-10 pb-0 relative flex w-full justify-center align-center font-['Roboto'] text-[28px] font-bold text-black">Tabel Menu</div>
        <div class="max-w-full mx-[200px] mt-[50px] ">
            <div class="flex flex-col">
            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden">
                        <table class="relative min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700 border-collapse border border-black border-opacity-100 rounded-mb justify-center align-center">
                            <thead class="w-full bg-gray-100 dark:bg-gray-700 text-center items-center justify-center relative">
                                <tr>
                                    <th scope="col" class="py-3 px-6 text-[14px] font-medium tracking-wider text-center text-gray-700 uppercase dark:text-gray-400">
                                        ID
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-[14px] font-medium tracking-wider text-center text-gray-700 uppercase dark:text-gray-400">
                                        ID_USER
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-[14px] font-medium tracking-wider text-center text-gray-700 uppercase dark:text-gray-400">
                                        ID_MENU
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-[14px] font-medium tracking-wider text-center text-gray-700 uppercase dark:text-gray-400">
                                        ALAMAT_TUJUAN
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-[14px] font-medium tracking-wider text-center text-gray-700 uppercase dark:text-gray-400">
                                        KODE_PROMO
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-[14px] font-medium tracking-wider text-center text-gray-700 uppercase dark:text-gray-400">
                                        NO_TELP
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-[14px] font-medium tracking-wider text-center text-gray-700 uppercase dark:text-gray-400">
                                        CATATAN
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-[14px] font-medium tracking-wider text-center text-gray-700 uppercase dark:text-gray-400">
                                        STATUS
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-[14px] font-medium tracking-wider text-center text-gray-700 uppercase dark:text-gray-400">
                                        PEMBAYARAN
                                    </th>
                                    <th scope="col" class="p-4">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                @forelse ($data as $item)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="py-4 px-6 text-sm text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$item['id_transaksi']}}</td>
                                    <td class="py-4 px-6 text-sm text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$item['id_user']}}</td>
                                    <td class="py-4 px-6 text-sm text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$item['id_menu']}}</td>
                                    <td class="py-4 px-6 text-sm text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$item['alamat_tujuan']}}</td>
                                    <td class="py-4 px-6 text-sm text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$item['kode_promo']}}</td>
                                    <td class="py-4 px-6 text-sm text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$item['no_telp']}}</td>
                                    <td class="py-4 px-6 text-sm text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$item['catatan']}}</td>
                                    <td class="py-4 px-6 text-sm text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$item['status']}}</td>
                                    <td class="py-4 px-6 text-sm text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$item['pembayaran']}}</td>
                                    <td class="py-4 px-6 text-sm text-center font-medium text-gray-900 whitespace-nowrap dark:text-white flex justify-center">
                                        @if ($item->foto)
                                            <img src="img/{{$item->foto}}" alt="{{$item->foto}}" class="max-w-[80px]">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td class="py-4 px-6 text-sm text-center font-medium text-right whitespace-nowrap">
                                        <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                                @empty
                                    
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-[10px] w-[150px] h-[50px] bg-gray-700 justify-center align-center text-center items-center flex rounded-md border border-1 border-black">
            <a href="/update_transaksi" class="w-full h-full text-white text-[18px] font-medium font-['Roboto'] flex items-center justify-center">Update Data</a>
        </div>
        </div>
    </body>
</body>
</html>