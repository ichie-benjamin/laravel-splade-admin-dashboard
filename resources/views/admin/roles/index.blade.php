<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class=" text-lg text-gray-800 leading-tight">
                Roles Listing
            </h2>

            <div class="p-1-">
                <Link class="bg-blue-900 text-white rounded-xl  px-4 py-3" modal  href="{{ route('admin.roles.create') }}">
                 Add Role
                </Link>
            </div>
        </div>

    </x-slot>

    <div class="py-12-">

        <div class="mx-auto">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">

                <x-splade-lazy>
                    <x-slot:placeholder>
                        <x-table-skeleton />
                    </x-slot:placeholder>

                    <x-splade-table class="mt-5" :for="$data">

                        <x-splade-cell description as="$item">
                            {{ Str::limit($item->description, 30) }}
                        </x-splade-cell>

                        <x-splade-cell permissions as="$item">
                            <Link href="{{ route('admin.roles.permissions', $item) }}">
                            {{ $item->permissions->count() }}
                            </Link>
                        </x-splade-cell>


                        <x-splade-cell actions as="$item">
                            <Link
                                class="text-white bg-red-600 rounded-md  px-2 py-2 mr-2"
                                confirm="Delete"
                                confirm-text="Are you sure you want to delete this role?"
                                confirm-button="Delete"
                                cancel-button="Cancel"
                                href="{{ route('admin.roles.destroy', $item) }}" method="DELETE">
                            <i class="las la-trash-alt"></i>
                            </Link>

                        </x-splade-cell>
                    </x-splade-table>


                </x-splade-lazy>
            </div>
        </div>
    </div>
</x-app-layout>
