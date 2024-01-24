
<div class="flex h-screen overflow-hidden antialiased-">
    <!-- Sidebar -->

    <SideBar v-slot="side_menu">

    @include('layouts.partials.sidebar')

    <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
        <!-- ===== Header Start ===== -->

        @include('layouts.partials.header')

        <!-- ===== Header End ===== -->


        <main>
            <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">


            <div class="mx-auto- max-w-242.5-">

                @if(isset($header))

            <!-- Breadcrumb Start -->
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                    {{ $header }}
                </h2>

                <nav>
                    <ol class="flex items-center gap-2">
                        <li><a class="font-medium" href="{{ route('admin.dashboard') }}">Dashboard /</a></li>
                        <li class="text-primary">{{ $header }}
                        </li>
                    </ol>
                </nav>
            </div>
            <!-- Breadcrumb End -->
                @endif

                {{ $slot }}

            </div>

            </div>
    </main>
</div>

    </SideBar>

</div>
