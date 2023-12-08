<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="dark:text-white text-lg text-gray-800 leading-tight">
                Post listing
            </h2>

            <div class="p-1-">
                <Link class="bg-blue-900 text-white rounded-xl  px-4 py-3"  href="{{ route('admin.posts.create') }}">
                 Add new post
                </Link>
            </div>
        </div>

    </x-slot>

    <x-card>
        <div class="mx-auto">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">

                <x-splade-lazy>
                    <x-slot:placeholder>
                        <x-table-skeleton />
                    </x-slot:placeholder>

                    <x-splade-table class="mt-5" :for="$data">

                        <x-splade-cell featured_image as="$item">
                            <img class="h-10 w-10" src="{{ $item->featured_image }}" />
                        </x-splade-cell>

                        <x-splade-cell featured as="$item">
                            <Link method="POST" href="{{ route('api.posts.toggle',['id' => $item->id]) }}">
                            <label class="relative inline-flex items-center mb-5 cursor-pointer">
                                <input @if($item->featured) checked @endif type="checkbox" value="" class="sr-only peer">
                                <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                            </label>
                            </Link>

                        </x-splade-cell>



                        <x-splade-cell actions as="$item">
                            <Link
                                class="text-white bg-red-600 rounded-md  px-2 py-2 mr-2"
                                confirm="Delete"
                                confirm-text="Are you sure you want to delete this post?"
                                confirm-button="Delete"
                                cancel-button="Cancel"
                                href="{{ route('admin.posts.destroy', $item) }}" method="DELETE">
                            <i class="las la-trash-alt"></i>
                            </Link>

                        </x-splade-cell>
                    </x-splade-table>


                </x-splade-lazy>
            </div>
        </div>
    </x-card>
</x-app-layout>
