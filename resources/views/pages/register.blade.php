<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Register</title>
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
        <a href='/profile' class="text-black text-base font-normal font-roboto leading-normal">Account</a>
    </div>
    
</div> 

<!--LOGIN FORM-->
<div class="max-w-lg mx-auto my-10 bg-white p-8 rounded-xl shadow shadow-slate-300">
        <h1 class="text-4xl font-medium">Register</h1>
        <p class="text-slate-500">Hi, Welcome to Delicipad 👋</p>

        <form action="/register" method="post" class="my-10">
            @csrf
            <div class="flex flex-col space-y-5">
                <label for="username">
                    <p class="font-medium text-slate-700 pb-2">Full Name</p>
                    <input id="username" name="username" type="text" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Your Full Name">
                </label>
                <label for="email">
                    <p class="font-medium text-slate-700 pb-2">Email address</p>
                    <input id="email" name="email" type="email" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Enter email address">
                </label>
                <label for="password">
                    <p class="font-medium text-slate-700 pb-2">Password</p>
                    <input id="password" name="password" type="password" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Enter your password">
                </label>
                <div class="flex flex-row justify-between">
                    <div>
                        <label for="remember" class="">
                            <input type="checkbox" id="remember" class="w-4 h-4 border-slate-200 focus:bg-indigo-600">
                            Remember me
                        </label>
                    </div>
                </div>
                <button type="submit" class="w-full py-3 font-medium text-white bg-indigo-600 hover:bg-indigo-500 rounded-lg border-indigo-500 hover:shadow inline-flex space-x-2 items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                      </svg>
                      <span>Sign Up</span>
                </button>
                <p class="text-center">Have an Account? <a href="/login" class="text-indigo-600 font-medium inline-flex space-x-1 items-center"><span>Login now </span><span><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                  </svg></span></a></p>
            </div>
        </form>
</div>

<!--FOOTER-->
<div class="w-screen h-[220px] p-[60px] justify-center items-center gap-[60px] inline-flex">
    <div class="w-[733px] justify-center items-center gap-[60px] flex">
        <div class="w-[416px] self-stretch text-center text-black text-xl font-normal font-roboto leading-7">© 2021 Delicipad. All rights reserved.</div>
        <div class="w-[257px] self-stretch text-center text-black text-xl font-normal font-roboto leading-7">Terms of Use | Privacy Policy</div>
    </div>
</div>

</body>
</html>