<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class=" text-lg text-gray-800 leading-tight">
                User Listing
            </h2>

            <div class="">
                <Link class="bg-blue-900 text-white rounded-xl  px-4 py-3" modal  href="{{ route('admin.users.create') }}">
                Add User
                </Link>
            </div>
        </div>

    </x-slot>

    <x-card>
        <x-splade-lazy>
                    <x-slot:placeholder>
                        <x-table-skeleton />
                    </x-slot:placeholder>

                    <x-splade-table class="mt-5" :for="$data">


                        <x-splade-cell actions as="$item">
                            <Link
                                class="text-white bg-red-600 rounded-md  px-2 py-2 mr-2"
                                confirm="Delete"
                                confirm-text="Are you sure you want to delete this permission?"
                                confirm-button="Delete"
                                cancel-button="Cancel"
                                href="{{ route('admin.users.destroy', $item) }}" method="DELETE">
                            <i class="las la-trash-alt"></i>
                            </Link>


                            <Link
                                modal
                                class="text-white bg-yellow-400 rounded-md  px-2 py-2 mr-2"
                                href="{{ route('admin.users.edit', $item) }}">
                            <i class="las la-edit"></i>
                            </Link>

                        </x-splade-cell>
                    </x-splade-table>


                </x-splade-lazy>
    </x-card>
</x-app-layout>
