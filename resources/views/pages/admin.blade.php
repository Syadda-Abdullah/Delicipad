<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Admin</title>
</head>

<body>

    <!--NAVBAR-->
    <div class="w-screen h-20 p-5 bg-white shadow justify-center items-center gap-5 flex">
        <div class="w-10 h-10 bg-white bg-opacity-10 rounded-[100px]">
            <img src="img/delicipad.jpg" alt="">
        </div>
        <div class="grow shrink basis-0 text-black text-[28px] font-medium font-roboto leading-9">Delicipad Admin</div>
        <div class="bg-white justify-center items-center gap-10 flex">
            <div class="text-black text-base font-normal font-roboto leading-normal">Menu Items</div>
            <div class="text-black text-base font-normal font-roboto leading-normal">Purchase Transactions</div>
            <div class="text-black text-base font-normal font-roboto leading-normal">Reviews</div>
            <div class="text-black text-base font-normal font-roboto leading-normal">Settings</div>
            <div class="h-9 p-2 rounded-md border border-black border-opacity-10 justify-end items-center gap-1 flex">
                <div
                    class="grow shrink basis-0 text-black text-opacity-50 text-sm font-normal font-roboto leading-tight">
                    Search in site</div>
                <div class="w-5 h-5 relative"></div>
            </div>
        </div>
    </div>

    <!--WELCOME-->
    <div class="w-screen h-[216px] p-[60px] bg-black bg-opacity-60 justify-center items-center gap-[60px] flex"
        style="background-image: url('img/section.jpg'); background-size: cover; background-position: center; background-blur: 15px; ">
        <div class="grow shrink basis-0 flex-col justify-start items-center gap-6 inline-flex">
            <div class="w-[520px] text-center text-white text-[40px] font-bold font-roboto leading-[48px]">Delicipad
                Admin Page</div>
            <div class="w-[520px] text-center text-white text-base font-normal font-roboto leading-normal">Manage your
                restaurant's menu, transactions, reviews, and settings.</div>
        </div>
    </div>

    <!--MENU EDIT-->
    <div class="w-screen h-[468px] p-[60px] justify-center items-center gap-[60px] inline-flex">
        <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
            <div class="self-stretch text-black text-[40px] font-bold font-roboto leading-[48px]">Menu Items</div>
            <div class="self-stretch text-black text-base font-normal font-roboto leading-normal">Add, edit, or remove
                menu items.</div>
            <div class="flex-col justify-start items-start gap-3 flex">
                <div class="h-12 bg-black rounded-lg flex-col justify-center items-center flex relative">
                    <a href='/crud_adm'
                        class="h-full w-full pl-2 pr-2 text-white text-base font-medium font-['Roboto'] leading-normal flex text-center items-center">Add
                        New Item</a>
                </div>
            </div>
        </div>
        <div class="grow shrink basis-0 h-[348px] justify-center items-center gap-10 flex">
            <div
                class="grow shrink basis-0 rounded-md border border-black border-opacity-10 flex-col justify-start items-center inline-flex">
                <div class="w-60 h-60 justify-start items-start inline-flex">
                    <div class="w-60 h-60 relative bg-zinc-300 bg-opacity-50"
                        style="background-image: url('img/rendang.jpg'); background-size: cover; background-position: center; background-blur: 15px; ">
                        <div
                            class="w-52 h-4 left-[16px] top-[112px] absolute text-center text-black text-xs font-normal font-roboto leading-none">
                            Nasi Padang</div>
                        <div
                            class="px-2 py-1 left-0 top-0 absolute bg-black bg-opacity-5 rounded-tl-md rounded-br-md flex-col justify-center items-center inline-flex">
                            <div class="text-black text-xs font-medium font-roboto leading-none">Bestseller</div>
                        </div>
                    </div>
                </div>
                <div class="self-stretch h-[108px] p-3 flex-col justify-start items-start gap-1 flex">
                    <div class="self-stretch text-black text-base font-normal font-roboto leading-normal">Rendang</div>
                    <div class="self-stretch text-black text-xl font-medium font-roboto leading-7">Price: Rp.27.000
                    </div>
                    <div class="self-stretch justify-start items-center gap-2 inline-flex">
                        <div class="w-6 h-6 text-center text-black text-base font-normal font-roboto leading-normal">✏️
                        </div>
                        <div class="w-6 h-6 text-center text-black text-base font-normal font-roboto leading-normal">🗑️
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="grow shrink basis-0 rounded-md border border-black border-opacity-10 flex-col justify-start items-center inline-flex">
                <div class="w-60 h-60 justify-start items-start inline-flex">
                    <div class="w-60 h-60 relative bg-zinc-300 bg-opacity-50"
                        style="background-image: url('img/nasi.jpg'); background-size: cover; background-position: center; background-blur: 15px; ">
                        <div
                            class="w-52 h-4 left-[16px] top-[112px] absolute text-center text-black text-xs font-normal font-roboto leading-none">
                            Gado-Gado</div>
                        <div
                            class="px-2 py-1 left-0 top-0 absolute bg-black bg-opacity-5 rounded-tl-md rounded-br-md flex-col justify-center items-center inline-flex">
                            <div class="text-black text-xs font-medium font-roboto leading-none">Nasi Padang</div>
                        </div>
                    </div>
                </div>
                <div class="self-stretch h-[108px] p-3 flex-col justify-start items-start gap-1 flex">
                    <div class="self-stretch text-black text-base font-normal font-roboto leading-normal">Nasi Padang
                    </div>
                    <div class="self-stretch text-black text-xl font-medium font-roboto leading-7">Price: Rp.18.000
                    </div>
                    <div class="self-stretch justify-start items-center gap-2 inline-flex">
                        <div class="w-6 h-6 text-center text-black text-base font-normal font-roboto leading-normal">✏️
                        </div>
                        <div class="w-6 h-6 text-center text-black text-base font-normal font-roboto leading-normal">🗑️
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--TRANSAKSI-->
    <div class="w-screen h-[592px] p-[60px] justify-center items-center gap-[60px] inline-flex">
        <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
            <div class="self-stretch text-black text-[40px] font-bold font-roboto leading-[48px]">Purchase Transactions
            </div>
            <div class="flex-col justify-start items-start gap-3 flex">
                <div class="p-3 bg-black rounded-lg flex-col justify-center items-center flex">
                    <a href="crud_transaksi" class="text-white text-base font-medium font-roboto leading-normal">View
                        All Transactions</a>
                </div>
            </div>
        </div>
        <div class="grow shrink basis-0 py-5 flex-col justify-center items-center gap-10 inline-flex">
            <div class="self-stretch justify-start items-center gap-10 inline-flex">
                <div
                    class="grow shrink basis-0 h-[196px] p-4 rounded-md border border-black border-opacity-10 justify-center items-start gap-4 flex">
                    <div class="w-[100px] h-[100px] justify-start items-start flex">
                        <div class="w-[100px] h-[100px] relative bg-zinc-300 bg-opacity-50"
                            style="background-image: url('img/about.jpg'); background-size: cover; background-position: center;">
                        </div>
                    </div>
                    <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                        <div class="self-stretch text-black text-xl font-medium font-roboto leading-7">Transaction ID
                        </div>
                        <div
                            class="self-stretch text-black text-opacity-50 text-sm font-normal font-roboto leading-tight">
                            Date: September 12, 2021</div>
                        <div class="self-stretch text-black text-base font-normal font-roboto leading-normal">$50</div>
                        <div class="self-stretch py-1 justify-start items-center gap-1.5 inline-flex">
                            <div
                                class="px-1 py-0.5 bg-zinc-300 bg-opacity-50 rounded-sm border border-black border-opacity-10 justify-center items-center gap-0.5 flex">
                                <div class="text-black text-xs font-normal font-roboto leading-none">Completed</div>
                            </div>
                        </div>
                        <div class="self-stretch py-1 justify-start items-center gap-2 inline-flex">
                            <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                <div class="w-5 h-5 relative bg-black bg-opacity-10 rounded-[20px]"></div>
                                <div class="grow shrink basis-0 flex-col justify-start items-start inline-flex">
                                    <div
                                        class="self-stretch h-5 text-black text-sm font-medium font-roboto leading-tight">
                                        John Doe</div>
                                </div>
                            </div>
                            <div class="justify-start items-center gap-2 flex">
                                <div
                                    class="w-6 h-6 text-center text-black text-base font-normal font-roboto leading-normal">
                                    🔍</div>
                                <div
                                    class="w-6 h-6 text-center text-black text-base font-normal font-roboto leading-normal">
                                    📑</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="self-stretch justify-start items-center gap-10 inline-flex">
                <div
                    class="grow shrink basis-0 h-[196px] p-4 rounded-md border border-black border-opacity-10 justify-center items-start gap-4 flex">
                    <div class="w-[100px] h-[100px] justify-start items-start flex">
                        <div class="w-[100px] h-[100px] relative bg-zinc-300 bg-opacity-50"
                            style="background-image: url('img/about.jpg'); background-size: cover; background-position: center;">
                        </div>
                    </div>
                    <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                        <div class="self-stretch text-black text-xl font-medium font-roboto leading-7">Transaction ID
                        </div>
                        <div
                            class="self-stretch text-black text-opacity-50 text-sm font-normal font-roboto leading-tight">
                            Date: September 10, 2021</div>
                        <div class="self-stretch text-black text-base font-normal font-roboto leading-normal">$25</div>
                        <div class="self-stretch py-1 justify-start items-center gap-1.5 inline-flex">
                            <div
                                class="px-1 py-0.5 bg-zinc-300 bg-opacity-50 rounded-sm border border-black border-opacity-10 justify-center items-center gap-0.5 flex">
                                <div class="text-black text-xs font-normal font-roboto leading-none">Completed</div>
                            </div>
                        </div>
                        <div class="self-stretch py-1 justify-start items-center gap-2 inline-flex">
                            <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                <div class="w-5 h-5 relative bg-black bg-opacity-10 rounded-[20px]"></div>
                                <div class="grow shrink basis-0 flex-col justify-start items-start inline-flex">
                                    <div
                                        class="self-stretch h-5 text-black text-sm font-medium font-roboto leading-tight">
                                        Jane Smith</div>
                                </div>
                            </div>
                            <div class="justify-start items-center gap-2 flex">
                                <div
                                    class="w-6 h-6 text-center text-black text-base font-normal font-roboto leading-normal">
                                    🔍</div>
                                <div
                                    class="w-6 h-6 text-center text-black text-base font-normal font-roboto leading-normal">
                                    📑</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--REVIEWS-->
    <div class="w-screen h-[312px] p-[60px] justify-center items-center gap-[60px] inline-flex">
        <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
            <div class="self-stretch text-black text-[40px] font-bold font-roboto leading-[48px]">Reviews</div>
        </div>
        <div class="grow shrink basis-0 h-48 justify-center items-center gap-10 flex">
            <div
                class="grow shrink basis-0 p-4 bg-black bg-opacity-5 rounded-md flex-col justify-center items-center gap-4 inline-flex">
                <div class="self-stretch justify-start items-center gap-1 inline-flex">
                    <div class="grow shrink basis-0 h-8 justify-start items-center gap-2 flex">
                        <div class="w-8 h-8 relative bg-black bg-opacity-10 rounded-[32px]"></div>
                        <div class="grow shrink basis-0 flex-col justify-start items-start inline-flex">
                            <div class="self-stretch h-5 text-black text-sm font-medium font-roboto leading-tight">John
                                Doe</div>
                        </div>
                    </div>
                    <div class="w-[58.26px] h-[9.81px] relative"></div>
                </div>
                <div class="self-stretch h-[72px] text-black text-base font-normal font-roboto leading-normal">Great
                    food and excellent service!</div>
                <div class="self-stretch justify-start items-center gap-2 inline-flex">
                    <div class="w-6 h-6 text-center text-black text-base font-normal font-roboto leading-normal">👍
                    </div>
                    <div class="w-6 h-6 text-center text-black text-base font-normal font-roboto leading-normal">👎
                    </div>
                </div>
            </div>
            <div
                class="grow shrink basis-0 p-4 bg-black bg-opacity-5 rounded-md flex-col justify-center items-center gap-4 inline-flex">
                <div class="self-stretch justify-start items-center gap-1 inline-flex">
                    <div class="grow shrink basis-0 h-8 justify-start items-center gap-2 flex">
                        <div class="w-8 h-8 relative bg-black bg-opacity-10 rounded-[32px]"></div>
                        <div class="grow shrink basis-0 flex-col justify-start items-start inline-flex">
                            <div class="self-stretch h-5 text-black text-sm font-medium font-roboto leading-tight">Jane
                                Smith</div>
                        </div>
                    </div>
                    <div class="w-[58.26px] h-[9.81px] relative"></div>
                </div>
                <div class="self-stretch h-[72px] text-black text-base font-normal font-roboto leading-normal">Tasty
                    dishes and friendly staff.</div>
                <div class="self-stretch justify-start items-center gap-2 inline-flex">
                    <div class="w-6 h-6 text-center text-black text-base font-normal font-roboto leading-normal">👍
                    </div>
                    <div class="w-6 h-6 text-center text-black text-base font-normal font-roboto leading-normal">👎
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--SETINGS-->
    <div class="w-screen h-[488px] p-[60px] justify-center items-center gap-[60px] inline-flex">
        <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
            <div class="self-stretch text-black text-[40px] font-bold font-roboto leading-[48px]">Settings</div>
            <div class="flex-col justify-start items-start gap-3 flex">
                <div class="h-12 p-3 bg-black rounded-lg flex-col justify-center items-center flex">
                    <div class="text-white text-base font-medium font-roboto leading-normal">Manage Settings</div>
                </div>
            </div>
            <div class="self-stretch h-56 py-5 flex-col justify-center items-start flex">
                <div class="self-stretch py-4 justify-center items-center gap-4 inline-flex">
                    <div
                        class="w-[60px] h-[60px] bg-black bg-opacity-5 rounded-[30px] justify-center items-center flex">
                        <div
                            class="w-[60px] self-stretch text-center text-black text-[37.50px] font-normal font-roboto leading-[60px]">
                            ⚙️</div>
                    </div>
                    <div class="grow shrink basis-0 flex-col justify-start items-start inline-flex">
                        <div class="self-stretch text-black text-xl font-normal font-roboto leading-7">General</div>
                        <div
                            class="self-stretch text-black text-opacity-50 text-base font-normal font-roboto leading-normal">
                            Basic settings</div>
                    </div>
                    <div class="text-right text-black text-xl font-medium font-roboto leading-7">12</div>
                </div>
                <div class="self-stretch py-4 justify-center items-center gap-4 inline-flex">
                    <div
                        class="w-[60px] h-[60px] bg-black bg-opacity-5 rounded-[30px] justify-center items-center flex">
                        <div
                            class="w-[60px] self-stretch text-center text-black text-[37.50px] font-normal font-roboto leading-[60px]">
                            🔒</div>
                    </div>
                    <div class="grow shrink basis-0 flex-col justify-start items-start inline-flex">
                        <div class="self-stretch text-black text-xl font-normal font-roboto leading-7">Security</div>
                        <div
                            class="self-stretch text-black text-opacity-50 text-base font-normal font-roboto leading-normal">
                            User access</div>
                    </div>
                    <div class="text-right text-black text-xl font-medium font-roboto leading-7">6</div>
                </div>
            </div>
        </div>
        <div class="grow shrink basis-0 h-[368px] py-5 justify-start items-start flex">
            <div class="w-[520px] h-[328px] relative bg-zinc-300 bg-opacity-50 rounded-md"
                style="background-image: url('img/settings.png'); background-size: cover; background-position: center; background-blur: 15px;">
            </div>
        </div>
    </div>

</body>

</html>
