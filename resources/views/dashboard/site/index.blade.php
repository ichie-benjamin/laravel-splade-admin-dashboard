<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Livetrader Platform Listings
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">

                <div class="p-1">
                    <Link class="bg-indigo-600 text-white rounded-md  px-4 py-2" modal  href="{{ route('sites.create') }}">Create New Platform
                    </Link>
                </div>



                <x-splade-table class="mt-5" :for="$data">


                    <x-splade-cell crm_url as="$item">
                        <a class="text-blue-500" href="{{ $item->crm_url }}" target="_blank" >{{ $item->crm_url }}</a>
                    </x-splade-cell>
                    <x-splade-cell front_end_url as="$item">
                        <a class="text-blue-500" href="{{ $item->front_end_url }}" target="_blank">{{ $item->front_end_url }}</a>
                    </x-splade-cell>
                    <x-splade-cell actions as="$item">

                        {{--                        <Link class="text-green-600 hover:text-green-400 font-semibold" modal href="{{ route('versions.edit', $item) }}"> Edit </Link>--}}

                        <Link class="bg-green-700 text-white rounded-md  px-4 py-2 mr-2"
                              slideover  href="{{ route('sites.show', $item) }}">
                        View
                        </Link>

{{--                        <Link--}}
{{--                            class="text-white bg-red-500 rounded-md  px-2 py-2 mr-2"--}}
{{--                            confirm="Delete"--}}
{{--                            confirm-text="Are you sure you want to delete this version?"--}}
{{--                            confirm-button="Delete"--}}
{{--                            cancel-button="Cancel"--}}
{{--                            href="{{ route('sites.destroy', $item) }}" method="DELETE">--}}
{{--                        Delete--}}
{{--                        </Link>--}}

                        @if($item->status != 'custom_domain_pending' && !$item->custom_domain_connected)
                        <Link class="bg-blue-700 text-white rounded-md mr-2 px-2 py-2"
                              modal  href="{{ route('sites.connect_domain', $item) }}">
                        Connect Domain
                        </Link>
                        @endif

                            <Link class="bg-blue-700 text-white rounded-md  px-2 py-2"
                                  method="POST"
                                  href="{{ route('sites.refresh', $item->id) }}">
                            <i class="las la-sync-alt"></i>
                            </Link>



                    </x-splade-cell>
                </x-splade-table>
            </div>
        </div>
    </div>
</x-app-layout>
