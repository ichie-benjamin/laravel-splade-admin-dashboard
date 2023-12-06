<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ request('filter.software_id') ? convertToWord(request('filter.software_id')) : 'All Software' }} Versions Listings
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">

                <div class="p-1">
                    <Link class="bg-indigo-600 text-white rounded-md  px-4 py-2" modal  href="{{ route('versions.create') }}?software_id={{ request('filter.software_id') }}">Add New Version
                    </Link>
                </div>


                <x-splade-table class="mt-5" :for="$data">
                    <x-splade-cell download as="$item">
                        @if($item->file)
                            <Link away class="text-white bg-blue-700 rounded-md px-2 py-1 mx-3" href="{{ $item->file }}">
                            Download
                            </Link>
                        @endif
                    </x-splade-cell>
                    <x-splade-cell actions as="$item">

{{--                        <Link class="text-green-600 hover:text-green-400 font-semibold" modal href="{{ route('versions.edit', $item) }}"> Edit </Link>--}}

                        <Link
                            class="text-red-600 hover:text-red-400 pl-3"
                            confirm="Delete"
                            confirm-text="Are you sure you want to delete this version?"
                            confirm-button="Delete"
                            cancel-button="Cancel"
                            href="{{ route('versions.destroy', $item) }}" method="DELETE">
                        Delete
                        </Link>

                    </x-splade-cell>
                </x-splade-table>
            </div>
        </div>
    </div>
</x-app-layout>
