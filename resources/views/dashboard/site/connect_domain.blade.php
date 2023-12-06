<x-app-layout>
    <x-slot name="header">
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            Create new user--}}
{{--        </h2>--}}
    </x-slot>

    <x-splade-modal>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Connect Custom Domain to {{ $site->name }}
        </h2>
    <div class="py-12">

        <x-splade-form action="{{ route('sites.connect_domain', $site->id) }}">
            <x-splade-input required label="Custom Domain" name="custom_domain" />

            <x-splade-submit class="mt-3" class="mt-3" label="Connect" />

        </x-splade-form>
    </div>
    </x-splade-modal>
</x-app-layout>
