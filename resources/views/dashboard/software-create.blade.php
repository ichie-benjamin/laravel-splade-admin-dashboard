<x-app-layout>
    <x-slot name="header">
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            Create new user--}}
{{--        </h2>--}}
    </x-slot>

    <x-splade-modal>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add new software
        </h2>
    <div class="py-12">

        <x-splade-form action="{{ route('software.store') }}">
            <x-splade-input required label="Software Name" name="name" />

            <x-splade-submit class="mt-3" label="Submit" />

        </x-splade-form>
    </div>
    </x-splade-modal>
</x-app-layout>
