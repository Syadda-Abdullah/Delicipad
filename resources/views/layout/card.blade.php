<div class="container px-8 mx-auto max-w-96 mb-10 ">
    <div class= "rounded-lg shadow-lg p-10 bg-slate-100" >
      <div>
        <img src="img/rendang2.jfif" alt="" class="rounded-lg ">
        <h1 class= "font-bold mt-6">Rendang</h1>
        <div class='relative'>
          <div class='absolute -top-6 -right-28'>
            <div class="max-w-14 mx-auto cursor-pointer button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              <p class='text-sm'>info</p>
            </div>
            <div class="object p-4 mt-4 shadow-xl ">
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

        </div>
        <p class="mt-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, nihil.</p>
        <div class=" flex justify-center mt-8">
        <button class="rounded-full relative flex h-[50px] w-40 items-center justify-center overflow-hidden bg-gray-800 text-white shadow-2xl transition-all before:absolute before:h-0 before:w-0 before:rounded-full before:bg-orange-600 before:duration-500 before:ease-out hover:shadow-orange-600 hover:before:h-56 hover:before:w-56">
          <span class="relative z-10">PESAN</span>
        </button>
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
    transform: scaleY(1) skewX(0deg) translateX(200px) translateY(-100px);

  }  
</style>