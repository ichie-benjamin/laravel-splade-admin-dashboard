<x-app-layout>
    <x-slot name="header">
        Website settings
    </x-slot>
    <x-card>
        <div class="py-4">

            <x-splade-form :default="$settings" class="space-y-2" action="{{ route('admin.settings.store') }}">

                <div class="grid md:grid-cols-4 gap-4">
                    <div class="md:col-span-3 shadow rounded space-y-3 bg-blue-500- p-3">
                        <x-splade-input required label="Site Name" name="site_name" />
                        <x-splade-input required label="Site Slogan" name="site_slogan" />


                        <x-splade-textarea label="Description" name="site_description" autosize />


                    </div>

                 <div class="md:col-span-1 shadow rounded space-y-3 bg-blue-500- p-3">

                     <x-splade-file name="site_logo" preview label="Site Logo"
                                    filepond max-size="5MB" />

                     <x-splade-file name="admin_logo" preview label="Admin Logo"
                                    filepond max-size="5MB" />


                     <x-splade-submit class="mt-3" class="mt-3" label="Update" />
                 </div>



                </div>
            </x-splade-form>

        </div>
    </x-card>
</x-app-layout>
