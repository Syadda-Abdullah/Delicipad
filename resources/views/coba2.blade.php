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
<div class="flex-col items-center justify-center">
    <div class="w-32 mx-auto cursor-pointer button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
      Hover me
    </div>
    <div class="object p-4 mt-4 shadow-xl">
      <div class="max-w-sm rounded">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
          <p class="text-gray-700 text-base">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
          </p>
        </div>
        <div class="px-6 py-4">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>
        </div>
      </div>
    </div>
  </div>
  
  <style>
  .object{
    width: 300px;
    height: 300px;
    opacity: 0;
    background: white;
    border-radius: 5%;
    border-color: #d3d3d3;
    border-width: thin;
    transform: scaleY(0.8) skewX(10deg);
    transform-origin: 50% 0%;
    transition-duration: 0.25s;
  }
  .button:hover + .object {
    opacity: 1;
    transform: scaleY(1) skewX(0deg);
  }  
  </style>
</body>
</html>