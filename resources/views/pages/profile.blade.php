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
    <title>Profile</title>
</head>
<body>
<!--NAVBAR-->
<div class="w-screen h-20 p-5 bg-white shadow flex justify-center gap-5 items-center">
    <div class="w-10 h-10 bg-white bg-opacity-10 rounded-[100px]" >
        <img src="img/delicipad.jpg" alt="">
    </div>
    <div class="grow shrink basis-0 text-black text-[28px] font-medium font-roboto leading-9">Delicipad</div>
    <div class="bg-white justify-center items-center gap-10 flex">
        <a href='/' class="text-black text-base font-normal font-roboto leading-normal">Home</a>
        <a href='/menu' class="text-black text-base font-normal font-roboto leading-normal">Menu</a>
        <a href='/cart' class="text-black text-base font-normal font-roboto leading-normal">Cart</a>
        <a href='/payment' class="text-black text-base font-normal font-roboto leading-normal">Delivery</a>
        <a href='/profile' class="text-black text-base font-normal font-roboto leading-normal">Account</a>
        <div class="h-9 p-2 rounded-md border border-black border-opacity-10 justify-end items-center gap-1 flex">
            <div class="grow shrink basis-0 text-black text-opacity-50 text-sm font-normal font-roboto leading-tight">Search in site</div>
            <div class="w-5 h-5 relative" ></div>
        </div>
    </div>
    
</div>

<!--WELCOME-->
<div class="w-screen h-[216px] px-[170px] py-[60px] bg-black bg-opacity-60 justify-center items-center gap-[60px] inline-flex">
    <div class="grow shrink basis-0 flex-col justify-start items-center gap-6 inline-flex">
        <div class="w-[520px] text-center text-white text-[40px] font-bold font-roboto leading-[48px]">User Profile</div>
        <div class="w-[520px] text-center text-white text-base font-normal font-roboto leading-normal">Manage your personal information</div>
    </div>
</div>
<div class="w-screen h-[228px] px-[170px] py-[60px] bg-black bg-opacity-60 justify-center items-center gap-10 inline-flex">
    <div class="w-[100px] h-[100px] relative bg-zinc-300 bg-opacity-50 rounded-[50px]" ></div> 
    <div class="grow shrink basis-0 flex-col justify-start items-center gap-3 inline-flex">
        <div class="self-stretch text-white text-2xl font-bold font-roboto leading-loose">John Doe</div>
        <div class="self-stretch justify-start items-center gap-1.5 inline-flex">
            <div class="px-1 py-0.5 bg-zinc-300 bg-opacity-50 rounded-sm border border-black border-opacity-10 justify-center items-center gap-0.5 flex">
                <div class="text-black text-xs font-normal font-roboto leading-none">Gold Member</div>
            </div>
        </div>
        <div class="self-stretch text-white text-base font-normal font-roboto leading-normal">Welcome back!</div>
    </div>
    <div class="flex-col justify-start items-start gap-3 inline-flex">
        <div class="h-12 p-3 rounded-lg border border-white flex-col justify-center items-center flex">
            <div class="text-white text-base font-medium font-['Roboto'] leading-normal">Log Out</div>
        </div>
        <div class="h-12 p-3 bg-black rounded-lg flex-col justify-center items-center flex">
            <div class="text-white text-base font-medium font-['Roboto'] leading-normal">Edit Profile</div>
        </div>
    </div>
</div>

<!--Form-->
<div class="w-screen h-[552px] px-[170px] py-[60px] justify-center items-center gap-[60px] inline-flex">
    <div class="grow shrink basis-0 flex-col justify-start items-center gap-6 inline-flex">
        <div class="w-[520px] text-center text-black text-[40px] font-bold font-['Roboto'] leading-[48px]">Personal Information</div>
        <div class="h-20 flex-col justify-center items-start gap-1 flex">
            <div class="self-stretch text-black text-sm font-medium font-['Roboto'] leading-tight">Username</div>
            <div class="self-stretch px-3 py-2 bg-white rounded-md border border-black border-opacity-10 justify-start items-center gap-1 inline-flex">
                <div class="grow shrink basis-0 h-5 text-black text-opacity-50 text-sm font-normal font-['Roboto'] leading-tight">Enter your username</div>
            </div>
            <div class="self-stretch text-black text-opacity-50 text-xs font-normal font-['Roboto'] leading-none">Your username will be displayed publicly</div>
        </div>
        <div class="h-20 flex-col justify-center items-start gap-1 flex">
            <div class="self-stretch text-black text-sm font-medium font-['Roboto'] leading-tight">Profile Picture</div>
            <div class="self-stretch px-3 py-2 bg-white rounded-md border border-black border-opacity-10" ></div>
            <div class="self-stretch text-black text-opacity-50 text-xs font-normal font-['Roboto'] leading-none">Upload a profile picture</div>
        </div>
        <div class="h-20 flex-col justify-center items-start gap-1 flex">
            <div class="self-stretch text-black text-sm font-medium font-['Roboto'] leading-tight">Location</div>
            <div class="self-stretch px-3 py-2 bg-white rounded-md border border-black border-opacity-10 justify-start items-center gap-1 inline-flex">
                <div class="grow shrink basis-0 h-5 text-black text-opacity-50 text-sm font-normal font-['Roboto'] leading-tight">Enter your location</div>
            </div>
            <div class="self-stretch text-black text-opacity-50 text-xs font-normal font-['Roboto'] leading-none">Your location will be used to personalize your experience</div>
        </div>
        <div class="flex-col justify-start items-start gap-3 flex">
            <div class="h-12 p-3 bg-black rounded-lg flex-col justify-center items-center flex">
                <div class="text-white text-base font-medium font-['Roboto'] leading-normal">Save Changes</div>
            </div>
        </div>
    </div>
</div>

<!--Footer-->
<div class="w-screen h-[220px] p-[60px] justify-center items-center gap-[60px] inline-flex">
    <div class="w-[810px] justify-center items-center gap-[60px] flex">
        <div class="w-[416px] self-stretch text-center text-black text-xl font-normal font-roboto leading-7">© 2022 Padang Restaurant. All rights reserved.</div>
        <div class="w-[150px] self-stretch text-center text-black text-xl font-normal font-roboto leading-7">Terms of Service</div>
        <div class="w-[124px] self-stretch text-center text-black text-xl font-normal font-roboto leading-7">Privacy Policy</div>
    </div>
</div>
</body>
</html>