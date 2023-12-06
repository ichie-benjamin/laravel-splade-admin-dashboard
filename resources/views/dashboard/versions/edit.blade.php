<x-app-layout>
    <x-slot name="header">
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            Create new user--}}
{{--        </h2>--}}
    </x-slot>

    <x-splade-modal>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editing {{ $version->software_id }} version {{ $version->version }}
        </h2>
    <div class="py-12">

        <x-splade-form :default="$version" action="{{ route('versions.store') }}">
            <x-splade-select name="software_id" :options="$software" choices />
            <x-splade-input class="mt-3" required type="number" step="any" label="Version Number" name="version" />
            <x-splade-input class="mt-3" label="Title" name="title" />
            <x-splade-textarea class="mt-3" name="description" label="Change Log / Description" autosize />

            <x-splade-file class="mt-3" filepond lable="File" name="file" />

            <x-splade-submit class="mt-3" label="Update" />

        </x-splade-form>
    </div>
    </x-splade-modal>
</x-app-layout>
