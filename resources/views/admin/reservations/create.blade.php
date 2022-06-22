<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rezervācijas izveide') }}
        </h2>
    </x-slot>

    

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.reservations.index') }}" 
                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rouned-lg text-white">rezervācijas</a>
            </div>
            <div class="m-2 p-2">
                <form method="POST" id="postData" action="{{route('admin.reservations.store') }}">
                @csrf
                
                <div class="mb-6">
                    <label for="Device">Ierice</label><br/>
                    <select class="form-control block mb-2 text-sm font-medium text-gray-900 white:text-gray-300" name="Device">
                     
                      @foreach($devices as $device)
                   

                      <option id="Device" name="Device" value="{{$device->DeviceName}}">{{$device->DeviceName}} {{$device->Device}}</option>
                      
                      @endforeach
                     
                   
                    </select>
                </div> 

                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 white:text-gray-300">Vārds</label>
                    <input type="text" id="name" name="name" value="{{ Auth::user()->name; }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500" placeholder="name@flowbite.com" required="">

                    <label for="sur name" class="block mb-2 text-sm font-medium text-gray-900 white:text-gray-300">Uzvārds</label>
                    <input type="text" id="surname" name="surname" value="{{ Auth::user()->surname; }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500" placeholder="name@flowbite.com" required="">

                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 white:text-gray-300">Ē-pasts</label>
                    <input type="text" id="email" name="email" value="{{ Auth::user()->email; }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500" placeholder="name@flowbite.com" required="">

                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 white:text-gray-300">Tālrunis</label>
                    <input type="text" id="phone" name="phone" value="{{ Auth::user()->phone; }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500" placeholder="name@flowbite.com" required="">

                    <label for="resdate" class="block mb-2 text-sm font-medium text-gray-900 white:text-gray-300">Tālrunis</label>
                    <input type="date" id="resdate" name="resdate"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500" placeholder="name@flowbite.com" required="">

                    <label for="enddate" class="block mb-2 text-sm font-medium text-gray-900 white:text-gray-300">Tālrunis</label>
                    <input type="date" id="enddate" name="enddate"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500" placeholder="name@flowbite.com" required="">



                    <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                    
                    
                        <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rouned-lg text-white">Rezervēt</button>
                    </form>
                    
                


            </div>

    </div>
</div>

</x-admin-layout>
