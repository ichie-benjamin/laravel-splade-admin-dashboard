<x-app-layout>
    <x-slot name="header"></x-slot>

    <x-splade-modal max-width="4xl">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add New Sub Category
        </h2>
    <div class="py-12">

        <x-splade-form class="space-y-2" action="{{ route('admin.categories.store') }}">

            <div class="grid md:grid-cols-2 gap-4">
                <x-splade-input required label="Name" name="name" />

                <x-splade-select required default="1" label="Status" name="status">
                    <option selected value="1">Active</option>
                    <option value="0">Disabled</option>
                </x-splade-select>

            </div>

            <div class="grid md:grid-cols-2 gap-4">


                <x-splade-select required label="Select Category" name="category_id" choices remote-url="{{ route('api.categories.index') }}" remote-root="data" option-label="name" option-value="id" />


                <x-splade-file label="Icon" name="icon" filepond max-size="2MB" />

            </div>

            <x-splade-textarea label="Description" name="description" autosize />

            <x-splade-submit class="mt-3" class="mt-3" label="Submit" />

        </x-splade-form>

    </div>
    </x-splade-modal>
</x-app-layout>
