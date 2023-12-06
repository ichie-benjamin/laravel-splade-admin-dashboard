<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class=" text-lg text-gray-800 leading-tight">
                Permissions Listing
            </h2>

            <div class="flex gap-2">
                <x-splade-form action="{{ route('admin.permissions.generate') }}">
                    <x-splade-submit class="mt-4-" label="Generate all permissions" />
                </x-splade-form>
            </div>
        </div>

    </x-slot>

    <x-card>
        <x-splade-lazy>
                    <x-slot:placeholder>
                        <x-table-skeleton />
                    </x-slot:placeholder>

                    <x-splade-table class="mt-5" :for="$data">

                        <x-splade-cell description as="$item">
                            {{ Str::limit($item->description, 30) }}
                        </x-splade-cell>

                        <x-splade-cell permissions as="$item">
                            {{ $item->permissions->count() }}
                        </x-splade-cell>


                        <x-splade-cell actions as="$item">
                            <Link
                                class="text-white bg-red-600 rounded-md  px-2 py-2 mr-2"
                                confirm="Delete"
                                confirm-text="Are you sure you want to delete this permission?"
                                confirm-button="Delete"
                                cancel-button="Cancel"
                                href="{{ route('admin.permissions.destroy', $item) }}" method="DELETE">
                            <i class="las la-trash-alt"></i>
                            </Link>

                        </x-splade-cell>
                    </x-splade-table>


                </x-splade-lazy>
    </x-card>
</x-app-layout>
