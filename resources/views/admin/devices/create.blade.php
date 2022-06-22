<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ierīču pievienošana') }}
        </h2>
    </x-slot>

    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.devices.index') }}" 
                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rouned-lg text-white">Ierīces</a>
            </div>
            <div class="m-2 p-2">


                <form method="POST" action="{{route('admin.devices.store') }}" enctype="multipart/form-data">
                    @csrf
 

                    <div class="mb-6">
                    <label for="DeviceeName" class="block mb-2 text-sm font-medium text-gray-900 white:text-gray-300">Ierīce</label>
                    <input type="text" id="DeviceName" name="DeviceName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500" required="">
                    </div>

                    <div class="mb-6">
                    <label for="Device" class="block mb-2 text-sm font-medium text-gray-900 white:text-gray-300">Modelis</label>
                    <input type="text" id="Device" name="Device" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500" required="">
                    </div>
                    <div class="mb-6">
                        <label for="manufacturer" class="block mb-2 text-sm font-medium text-gray-900 white:text-gray-300">Ražotājs</label>
                        <input type="text" id="manufacturer" name="manufacturer" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500" required="">
                        </div>
                        <div class="mb-6">
                            <label for="identifier" class="block mb-2 text-sm font-medium text-gray-900 white:text-gray-300">identifikators</label>
                            <input type="text" id="identifier" name="identifier" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500" required="">
                            </div>
                            <div class="mb-6">
                                <label for="ISN" class="block mb-2 text-sm font-medium text-gray-900 white:text-gray-300">Sērijas Numurs</label>
                                <input type="text" id="ISN" name="ISN" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500" required="">
                                </div>
                   
                    
                    
                    
                    <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rouned-lg text-white">Pievienot jaunu ierīci</button>
                    </form>
                    
                


            </div>

    </div>
</div>

</x-admin-layout>
