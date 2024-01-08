
@forelse ($data as $item)
<div class="container px-8 max-w-96 mb-10">      
  <div class= "rounded-lg shadow-lg p-10 bg-slate-200 h-[530px] relative">
      <div class="h-[450px]">
        <div class="justify-center flex">
          <img src="{{ asset('storage/img/' . $item->foto) }}" alt="" class="object-cover justify-center top-0 flex rounded-lg h-[200px] w-[200px]">
        </div>
        <h1 class= "font-bold mt-6 pt-1 pb-2">{{$item['nama_menu']}}</h1>
        <div class='relative'>
          <div class='absolute -top-9 -right-28'>
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
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{$item['jenis_makanan']}}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=" h-[50px]">
          <p class="mt-6">{{$item['deskripsi']}}.</p>
        </div>
        <h1 class='mt-3 text-right'>{{$item['harga']}}</h1>
        <form action='/pesan' method='POST' class=" flex justify-center mt-8">
          @csrf
          <input type="hidden" value="{{$item['id_menu']}}" name='id_menu'>
          <input type="hidden" value="1" name='id_user'>
        <button class="button1" type='submit'>
          <span class="relative z-10">PESAN</span>
        </button>
      </form>
       </button>
      </form>
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