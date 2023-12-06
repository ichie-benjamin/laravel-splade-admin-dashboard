<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Software Listings
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-1">
                <Link class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-200" modal href="{{ route('software.create') }}">Create new user</Link>
            </div>

            <div class="bg-white mt-5 overflow-hidden shadow-sm sm:rounded-lg p-2">

                <x-splade-table :for="$data" />
            </div>
        </div>
    </div>
</x-app-layout>
