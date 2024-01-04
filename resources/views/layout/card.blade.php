
@forelse ($data as $item)
<div class="container px-8 max-w-96 mb-10 bg-green-500 ">
    <div class= "rounded-lg shadow-lg p-10 bg-white" >
      <div>
        <img src="img/{{$item['foto']}}" alt="" class="rounded-lg ">
        <h1 class= "font-bold mt-6">{{$item['nama_menu']}}</h1>
        <div class='relative'>
          <div class='absolute -top-6 -right-28'>
            <div class="max-w-14 mx-auto cursor-pointer button bg-gray-800 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">
              <p class='text-sm'>info</p>
            </div>
            <div class="object p-4 mt-4 shadow-xl ">
              <div class="max-w-sm rounded">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                  <p class="text-gray-700 text-base">{{$item['info']}}</p>
                </div>
                <div class="px-6 py-4">
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="mt-6">{{$item['deskripsi']}}.</p>
        <h1 class='mt-3 text-right'>{{$item['harga']}}</h1>
        <div class=" flex justify-center mt-8">
        <button class="button1" >
          <span class="relative z-10">PESAN</span>
        </button>
        </div>
      </div>
    </div>
  </div>
    @empty
    <h1>data blm ada</h1>
  @endforelse

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