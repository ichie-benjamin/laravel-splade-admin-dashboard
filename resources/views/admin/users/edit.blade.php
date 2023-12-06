<x-app-layout>
    <x-slot name="header"></x-slot>
    <x-splade-modal max-width="4xl">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editing {{ $user->name }}
        </h2>
        <div class="py-12">

            <x-splade-form :default="$user" class="space-y-2" method="PUT" action="{{ route('admin.users.update', $user->id) }}">

                <div class="grid grid-cols-2 gap-2">
                    <x-splade-input required label="First Name" name="first_name" />

                    <x-splade-input required label="Last Name" name="last_name" />

                </div>
                <div class="grid grid-cols-2 gap-2">
                    <x-splade-input required label="Email Address" name="email" />
                    <x-splade-input type="password" label="Password (leave empty to retain old password)" name="password" />
                </div>

                <x-splade-select  label="Role" name="role" :options="$roles" option-label="display_name" option-value="id" />

                <x-splade-submit class="mt-3" class="mt-3" label="Submit" />

            </x-splade-form>

        </div>
    </x-splade-modal>
</x-app-layout>
