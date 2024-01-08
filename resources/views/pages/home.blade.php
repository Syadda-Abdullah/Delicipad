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
    <title>Home</title>
</head>
<body>
<!--NAVBAR-->
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

<!--WELCOME-->
<div class="w-screen h-[520px] px-[170px] py-[60px] justify-center items-center gap-[60px] flex relative" style="background-image: url('img/homewelcome1.jpg'); background-size: cover; background-position: center; background-blur: 15px; ">
    <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
        <div class="self-stretch text-white text-base font-normal font-roboto leading-normal">Welcome To Delicipad</div>
        <div class="self-stretch text-white text-base font-normal font-roboto leading-normal">Experience the authentic flavors of Padang cuisine.</div>
        <div class="justify-start items-start gap-3 inline-flex">
            <div class="w-40 p-3 rounded-lg border border-white flex-col justify-center items-center inline-flex">
                <a class="text-white text-base font-medium font-roboto leading-normal" href="/menu">View Menu</a>
            </div>
            <div class="w-40 p-3 bg-black rounded-lg flex-col justify-center items-center inline-flex">
                <a class="text-white text-base font-medium font-roboto leading-normal" href="/payment">Order Now</a>
            </div>
        </div>
    </div>
    <div class="grow shrink basis-0 h-[400px] py-1 justify-start items-start flex">
        <div class="w-[600px] h-[392px] relative rounded-full" >
            <img src="img/home3.png" alt="" class="rounded-md h-[400px]" style="width: 600px;">
        </div>
    </div>
</div>

<!--MENU HIGHLIGHT-->
<div class="w-screen h-[728px] px-[170px] py-[60px] justify-center items-center gap-[60px] inline-flex">
    <div class="grow shrink basis-0 flex-col justify-start items-center gap-6 inline-flex">
        <div class="w-[520px] text-center text-black text-[40px] font-bold font-roboto leading-[48px]">Popular Dishes</div>
        <div class="w-[520px] text-center text-black text-base font-normal font-roboto leading-normal">Discover our most loved Padang dishes.</div>
        <div class="self-stretch py-5 justify-center items-center gap-10 inline-flex">
            <div class="grow shrink basis-0 rounded-md border border-black border-opacity-10 flex-col justify-start items-center inline-flex" >
                <div class="self-stretch h-[340px] justify-start items-start inline-flex">
                    <div class="w-[340px] h-[340px] relative bg-zinc-300 bg-opacity-50" style="background-image: url('img/rendang2.jpg'); background-size: cover; background-position: center; height: 340px;">
                        <div class="w-[308px] h-4 left-[16px] top-[162px] absolute text-center text-black text-xs font-normal font-roboto leading-none"></div>
                        <div class="px-2 py-1 left-0 top-0 absolute bg-black bg-opacity-5 rounded-tl-md rounded-br-md flex-col justify-center items-center inline-flex">
                            <div class="text-black text-xs font-medium font-roboto leading-none">Spicy</div>
                        </div>
                    </div>
                </div>
                <div class="self-stretch h-[108px] p-3 flex-col justify-start items-start gap-1 flex">
                    <div class="self-stretch text-black text-base font-normal font-roboto leading-normal">Beef Rendang</div>
                    <div class="self-stretch text-black text-xl font-medium font-roboto leading-7">Rp. 27.000</div>
                    <div class="self-stretch justify-start items-center gap-2 inline-flex">
                    </div>
                </div>
            </div>
            <div class="grow shrink basis-0 rounded-md border border-black border-opacity-10 flex-col justify-start items-center inline-flex">
                <div class="self-stretch h-[340px] justify-start items-start inline-flex">
                    <div class="w-[340px] h-[340px] relative bg-zinc-300 bg-opacity-50" style="background-image: url('img/nasi.jpg'); background-size: cover; background-position: center; height: 340px;">
                        <div class="w-[308px] h-4 left-[16px] top-[162px] absolute text-center text-black text-xs font-normal font-roboto leading-none"></div>
                        <div class="px-2 py-1 left-0 top-0 absolute bg-black bg-opacity-5 rounded-tl-md rounded-br-md flex-col justify-center items-center inline-flex">
                            <div class="text-black text-xs font-medium font-roboto leading-none">Vegetarian</div>
                        </div>
                    </div>
                </div>
                <div class="self-stretch h-[108px] p-3 flex-col justify-start items-start gap-1 flex">
                    <div class="self-stretch text-black text-base font-normal font-roboto leading-normal">Nasi Padang</div>
                    <div class="self-stretch text-black text-xl font-medium font-roboto leading-7">Rp. 18.000</div>
                </div>
            </div>
            <div class="grow shrink basis-0 rounded-md border border-black border-opacity-10 flex-col justify-start items-center inline-flex">
                <div class="self-stretch h-[340px] justify-start items-start inline-flex">
                    <div class="w-[340px] h-[340px] relative bg-zinc-300 bg-opacity-50" style="background-image: url('img/baso.jpg'); background-size: cover; background-position: center; height: 340px;">
                        <div class="px-2 py-1 left-0 top-0 absolute bg-black bg-opacity-5 rounded-tl-md rounded-br-md flex-col justify-center items-center inline-flex">
                            <div class="text-black text-xs font-medium font-roboto leading-none">Vegan</div>
                        </div>
                    </div>
                </div>
                <div class="self-stretch h-[108px] p-3 flex-col justify-start items-start gap-1 flex">
                    <div class="self-stretch text-black text-base font-normal font-roboto leading-normal">Baso</div>
                    <div class="self-stretch text-black text-xl font-medium font-roboto leading-7">Rp. 10.000</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--ABOUT-->
<div class="w-screen h-[540px] px-[170px] py-[60px] justify-center items-center gap-[60px] inline-flex">
    <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
        <div class="self-stretch text-black text-[40px] font-bold font-roboto leading-[48px]">Our Story</div>
        <div class="self-stretch text-black text-base font-normal font-roboto leading-normal">Discover the history behind Padang Restaurant.</div>
    </div>
    <div class="grow shrink basis-0 py-5 flex-col justify-center items-center gap-10 inline-flex">
        <div class="self-stretch justify-start items-center gap-10 inline-flex">
            <div class="grow shrink basis-0 h-[184px] p-4 rounded-md border border-black border-opacity-10 justify-center items-start gap-4 flex">
                <div class="w-[100px] h-[100px] justify-start items-start flex" style="background-image: url('img/about.jpg'); background-size: cover; background-position: center;">
                    <div class="w-[100px] h-[100px] relative bg-opacity-50 rounded-md "></div>
                </div>
                <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                    <div class="self-stretch text-black text-xl font-medium font-roboto leading-7">Family Heritage</div>
                    <div class="self-stretch text-black text-opacity-50 text-sm font-normal font-roboto leading-tight">Since 1985</div>
                    <div class="self-stretch h-12 text-black text-base font-normal font-roboto leading-normal">Padang Restaurant has been serving authentic Padang cuisine for over three decades. Our recipes are passed down through generations.</div>
                    <div class="self-stretch py-1 justify-start items-center gap-2 inline-flex">
                    </div>
                </div>
            </div>
        </div>
        <div class="self-stretch justify-start items-center gap-10 inline-flex">
            <div class="grow shrink basis-0 h-[156px] p-4 rounded-md border border-black border-opacity-10 justify-center items-start gap-4 flex">
                <div class="w-[100px] h-[100px] justify-start items-start flex" style="background-image: url('img/rendang.jpg'); background-size: cover; background-position: center;">
                    <div class="w-[100px] h-[100px] relative bg-opacity-50" ></div>
                </div>
                <div class="grow shrink basis-0 flex-col justify-start items-start gap-2 inline-flex">
                    <div class="self-stretch text-black text-xl font-medium font-roboto leading-7">Quality Ingredients</div>
                    <div class="self-stretch h-12 text-black text-base font-normal font-roboto leading-normal">We source only the freshest and finest ingredients to create our delicious dishes. With an emphasis on local produce, we strive to deliver authentic flavors with every bite.</div>
                    <div class="self-stretch py-1 justify-start items-center gap-2 inline-flex">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--RIVEWS-->
<div class="w-screen h-[312px] px-[170px] py-[60px] justify-center items-center gap-[60px] inline-flex">
    <div class="grow shrink basis-0 flex-col justify-start items-start gap-6 inline-flex">
        <div class="self-stretch text-black text-[40px] font-bold font-roboto leading-[48px]">Customer Reviews</div>
        <div class="self-stretch text-black text-base font-normal font-roboto leading-normal">Read what our customers have to say.</div>
        <div class="flex-col justify-start items-start gap-3 flex">
            <div class="h-12 p-3 bg-black rounded-lg flex-col justify-center items-center flex">
                <div class="text-white text-base font-medium font-roboto leading-normal">Write a Review</div>
            </div>
        </div>
    </div>
    <div class="grow shrink basis-0 h-48 justify-center items-center gap-10 flex">
        <div class="grow shrink basis-0 p-6 bg-black bg-opacity-5 rounded-md flex-col justify-center items-center gap-4 inline-flex">
            <div class="self-stretch justify-start items-center gap-1 inline-flex">
                <div class="grow shrink basis-0 h-8 justify-start items-center gap-2 flex">
                    <div class="w-8 h-8 relative bg-black bg-opacity-10 rounded-[32px]" ></div>
                    <div class="grow shrink basis-0 flex-col justify-start items-start inline-flex">
                        <div class="self-stretch h-5 w-5text-black text-sm font-medium font-roboto leading-tight">John Doe</div>
                    </div>
                </div>
                <div class="w-[58.26px] h-[9.81px] relative" ></div>
            </div>
            <div class="self-stretch h-[72px] text-black text-base font-normal font-roboto leading-normal">Amazing food and friendly staff! The Beef Rendang is out of this world.</div>
            <div class="self-stretch justify-start items-center gap-2 inline-flex">
            </div>
        </div>
        <div class="grow shrink basis-0 p-6 bg-black bg-opacity-5 rounded-md flex-col justify-center items-center gap-4 inline-flex">
            <div class="self-stretch justify-start items-center gap-1 inline-flex">
                <div class="grow shrink basis-0 h-8 justify-start items-center gap-2 flex">
                    <div class="w-8 h-8 relative bg-black bg-opacity-10 rounded-[32px]" ></div>
                    <div class="grow shrink basis-0 flex-col justify-start items-start inline-flex">
                        <div class="self-stretch h-5 text-black text-sm font-medium font-roboto leading-tight">John Doe</div>
                    </div>
                </div>
                <div class="w-[58.26px] h-[9.81px] relative" ></div>
            </div>
            <div class="self-stretch h-[72px] text-black text-base font-normal font-roboto leading-normal">Amazing food and friendly staff! The Beef Rendang is out of this world.</div>
            <div class="self-stretch justify-start items-center gap-2 inline-flex">
            </div>
        </div>
        <div class="grow shrink basis-0 p-6 bg-black bg-opacity-5 rounded-md flex-col justify-center items-center gap-4 inline-flex">
            <div class="self-stretch justify-start items-center gap-1 inline-flex">
                <div class="grow shrink basis-0 h-8 justify-start items-center gap-2 flex">
                    <div class="w-8 h-8 relative bg-black bg-opacity-10 rounded-[32px]" ></div>
                    <div class="grow shrink basis-0 flex-col justify-start items-start inline-flex">
                        <div class="self-stretch h-5 text-black text-sm font-medium font-roboto leading-tight">Jane Smith</div>
                    </div>
                </div>
                <div class="w-[58.26px] h-[9.81px] relative" ></div>
            </div>
            <div class="self-stretch h-[72px] text-black text-base font-normal font-roboto leading-normal">Great place for authentic Padang cuisine. The Nasi Padang is a must-try!</div>
            <div class="self-stretch justify-start items-center gap-2 inline-flex">
            </div>
        </div>
    </div>
</div>

<!--MENUS-->
<div class="w-screen h-[648px] px-[170px] py-[60px] justify-center items-center gap-[60px] inline-flex">
    <div class="grow shrink basis-0 flex-col justify-start items-center gap-6 inline-flex">
        <div class="w-[520px] text-center text-black text-[40px] font-bold font-roboto leading-[48px]">Our Menu</div>
        <div class="w-[520px] text-center text-black text-base font-normal font-roboto leading-normal">Browse our extensive menu offerings.</div>
        <div class="flex-col justify-start items-start gap-3 flex">
            <div class="h-12 p-3 bg-black rounded-lg flex-col justify-center items-center flex">
                <a class="text-white text-base font-medium font-roboto leading-normal" href="/menu">View Full Menu</a>
            </div>
        </div>
        <div class="self-stretch py-5 justify-center items-start gap-10 inline-flex">
            <div class="grow shrink basis-0 py-3 flex-col justify-center items-center gap-5 inline-flex">
                <div class="w-[100px] h-[100px] bg-black bg-opacity-5 rounded-[50px] justify-center items-center inline-flex">
                    <div class="w-[100px] self-stretch text-center text-black text-[62.50px] font-normal font-roboto leading-[100px]">🍛</div>
                </div>
                <div class="self-stretch h-[60px] flex-col justify-start items-start gap-2 flex">
                    <div class="self-stretch text-center text-black text-xl font-normal font-roboto leading-7">Main Course</div>
                    <div class="self-stretch text-center text-black text-opacity-50 text-base font-normal font-roboto leading-normal">Beef, Chicken, Seafood</div>
                </div>
                <div class="self-stretch text-center text-black text-[28px] font-medium font-roboto leading-9">Explore our flavorful main course options.</div>
            </div>
            <div class="grow shrink basis-0 py-3 flex-col justify-center items-center gap-5 inline-flex">
                <div class="w-[100px] h-[100px] bg-black bg-opacity-5 rounded-[50px] justify-center items-center inline-flex">
                    <div class="w-[100px] self-stretch text-center text-black text-[62.50px] font-normal font-roboto leading-[100px]">🥗</div>
                </div>
                <div class="self-stretch h-[60px] flex-col justify-start items-start gap-2 flex">
                    <div class="self-stretch text-center text-black text-xl font-normal font-roboto leading-7">Vegetarian</div>
                    <div class="self-stretch text-center text-black text-opacity-50 text-base font-normal font-roboto leading-normal">Healthy and delicious</div>
                </div>
                <div class="self-stretch text-center text-black text-[28px] font-medium font-roboto leading-9">Discover our vegetarian dishes.</div>
            </div>
            <div class="grow shrink basis-0 py-3 flex-col justify-center items-center gap-5 inline-flex">
                <div class="w-[100px] h-[100px] bg-black bg-opacity-5 rounded-[50px] justify-center items-center inline-flex">
                    <div class="w-[100px] self-stretch text-center text-black text-[62.50px] font-normal font-roboto leading-[100px]">🍨</div>
                </div>
                <div class="self-stretch h-[60px] flex-col justify-start items-start gap-2 flex">
                    <div class="self-stretch text-center text-black text-xl font-normal font-roboto leading-7">Dessert</div>
                    <div class="self-stretch text-center text-black text-opacity-50 text-base font-normal font-roboto leading-normal">Sweet treats to end your meal</div>
                </div>
                <div class="self-stretch text-center text-black text-[28px] font-medium font-roboto leading-9">Indulge in our mouthwatering desserts.</div>
            </div>
        </div>
    </div>
</div>

<!--FOOTER-->
<div class="w-screen h-[220px] p-[60px] justify-center items-center gap-[60px] inline-flex">
    <div class="w-[932px] justify-center items-center gap-[60px] flex">
        <div class="w-[82px] self-stretch text-center text-black text-xl font-normal font-roboto leading-7">About Us</div>
        <div class="w-[51px] self-stretch text-center text-black text-xl font-normal font-roboto leading-7">Menu</div>
        <div class="w-[99px] self-stretch text-center text-black text-xl font-normal font-roboto leading-7">Order Food</div>
        <div class="w-[71px] self-stretch text-center text-black text-xl font-normal font-roboto leading-7">Delivery</div>
        <div class="w-[74px] self-stretch text-center text-black text-xl font-normal font-roboto leading-7">Reviews</div>
        <div class="w-[75px] self-stretch text-center text-black text-xl font-normal font-roboto leading-7">Account</div>
        <div class="w-[120px] self-stretch text-center text-black text-xl font-normal font-roboto leading-7">Contact/Help</div>
    </div>
</div>
</body>
</html>