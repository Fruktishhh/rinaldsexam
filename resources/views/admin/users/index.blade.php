<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lietotāju saraksts') }}
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
    Vārds
    </th>
    <th scope="col" class="px-6 py-3">
    Uzvārds
    </th>
    <th scope="col" class="px-6 py-3">
    Ē-pasts
    </th>
    <th scope="col" class="px-6 py-3">
    Tālrunis
    </th>
    <th scope="col" class="px-6 py-3">
     Amats
        </th>
    <th scope="col" class="px-6 py-3">
    
    </th>
    </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700">
            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap white:text-white">
                {{ $user->name }}
            </td>
            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap white:text-white">
                {{ $user->surname }}
            </td>
            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap white:text-white">
                {{ $user->email}}
            </td>
            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap white:text-white">
                {{ $user->phone }}
            </td>
            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap white:text-white">
                {{ $user->class }}
            </td>
            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap white:text-white">
                
            </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
