<x-app-layout>
    <x-slot name="header">
        <p class="text-capitalize">{{ $role->name }} permissions</p>
    </x-slot>


    <x-card>
        <x-splade-lazy>
            <x-slot:placeholder>
                <x-table-skeleton />
            </x-slot:placeholder>

            <div>
{{--                @foreach($permissions as $item)--}}
{{--                    <p>{{ $item }}</p>--}}
{{--                @endforeach--}}

                    <x-splade-form :default="$role" action="{{ route('admin.roles.permissions.update') }}" :default="$role">
                        <x-splade-checkboxes class="grid grid-cols-4 gap-3" name="permissions" :options="$permissions" relation />

                        <x-splade-input type="hidden" name="id" />

                        <x-splade-submit class="mt-4" label="Update" />

                    </x-splade-form>
            </div>
        </x-splade-lazy>
    </x-card>
</x-app-layout>
