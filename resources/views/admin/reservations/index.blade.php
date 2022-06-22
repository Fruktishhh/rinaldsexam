<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rezervāciju saraksts') }}
        </h2>
    </x-slot>

    

    <div class="py-12">
        <div class="max-w-7x2 mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 white:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400">
    <tr>
    <th scope="col" class="px-6 py-3">
        @sortablelink('name','Vārds')
    </th>
    <th scope="col" class="px-6 py-3">
        @sortablelink('surname','Uzvārds')
    </th>
    <th scope="col" class="px-6 py-3">
    Ē-pasts
    </th>
    <th scope="col" class="px-6 py-3">
    Tālrunis
    </th>
    <th scope="col" class="px-6 py-3">
        Ierīce
        </th>
    <th scope="col" class="px-6 py-3">
        @sortablelink('resdate','Rezervēšanas datums')
        </th>
        <th scope="col" class="px-6 py-3">
            @sortablelink('enddate','Rezervēšanas beigu datums')
            </th>
            
    <th scope="col" class="px-6 py-3">
    
    </th>
    </tr>
    </thead>
    <tbody>
   
        @foreach($reservations as $reservation)
        <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700">
            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap white:text-white">
                {{ $reservation->name }}
            </td>
            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap white:text-white">
                {{ $reservation->surname }}
            </td>
            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap white:text-white">
                {{ $reservation->email}}
            </td>
            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap white:text-white">
                {{ $reservation->phone }}
            </td>
            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap white:text-white">
                {{ $reservation->Device }}
            </td>
            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap white:text-white">
                {{ $reservation->resdate }}
            </td>
            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap white:text-white">
                {{ $reservation->enddate }}
            </td>
            
            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap white:text-white">
                <div class="flex space-x-2">
                    <a href="{{ route('admin.reservations.edit', $reservation->id) }}"
                        class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-black">Apskatīt Rezervāciju</a>
                   <form            
                   class="px-4 py-2 bg-red-500 hover:bg-red-red rounded-lg text-black" 
                   method="POST" 
                   action="{{ route('admin.reservations.destroy', $reservation->id) }}"
                   onsubmit="return confirm('Vai esi parliecināts?');">
                   @csrf
                   @method('DELETE')
                   <button type="submit">Pabeigt Rezervaciju</button>
                  </form>       
                </div>
            </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    {!!$reservations->appends(\Request::except('page'))->render()!!}
    </div>
    
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
