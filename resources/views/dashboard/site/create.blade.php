<x-app-layout>
    <x-slot name="header">
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            Create new user--}}
{{--        </h2>--}}
    </x-slot>

    <x-splade-modal>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Livetrader
        </h2>
    <div class="py-12">

        <x-splade-form action="{{ route('sites.store') }}">
            <x-splade-input required label="Username (Unique livetrader name)" name="username" />

            <x-splade-input required  class="mt-3" label="Platform Name" name="name" />

            <x-splade-input required class="mt-3" label="Admin Email" name="admin_email" />
            <x-splade-input required class="mt-3" label="Admin Password" name="admin_password" />

            <x-splade-input class="mt-3" label="Support Email" name="support_email" />

            <x-splade-submit class="mt-3" class="mt-3" label="Submit" />

        </x-splade-form>
    </div>
    </x-splade-modal>
</x-app-layout>
