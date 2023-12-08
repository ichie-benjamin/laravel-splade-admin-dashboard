<x-app-layout>


    <x-splade-lazy>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-2 mb-4">

            @foreach($stats as $i)
                <div class="max-w-sm p-6 bg-white border
            flex justify-between
            border-gray-200 rounded-xl shadow dark:bg-gray-800
            dark:border-gray-700">
                    <div class="">
                        <p class="mb-4 text-2xl-
                   font-light tracking-tight dark:text-white">
                            {{ $i['title'] }}
                        </p>
                        <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $i['value'] }}
                        </h5>
                    </div>
                    <img src="{{ $i['icon'] }}" />
                </div>
            @endforeach

        </div>
    </x-splade-lazy>



    <div class=" mb-5 bg-white rounded-xl shadow dark:bg-gray-800">
        <div class="flex justify-between p-4 md:p-6 pb-0 md:pb-0">
            <div>
                <p class="leading-none text-xs font-light text-gray-500 dark:text-white pb-1">
                    STATISTICS
                </p>
                <p class="text-base font-bold text-gray-500 dark:text-gray-400">
                    SALES REPORT
                </p>
            </div>
            <div
                class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
                23%
                <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
                </svg>
            </div>
        </div>

        <x-splade-data :default="$chart">
            <apexchart
                :width="data.width"
                :height="data.height"
                :type="data.type"
                :options="data.options"
                :series="data.series"
            />
        </x-splade-data>


        <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between mt-5 p-4 md:p-6 pt-0 md:pt-0">
            <div class="flex justify-between items-center pt-5">
                <!-- Button -->
                <button
                    id="dropdownDefaultButton"
                    data-dropdown-toggle="lastDaysdropdown"
                    data-dropdown-placement="bottom"
                    class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
                    type="button">
                    Last 7 days
                    <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</a>
                        </li>
                    </ul>
                </div>
                <a
                    href="#"
                    class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                    Sales Report
                    <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>



    <x-splade-lazy>
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div class="w-full max-w-md- p-4- bg-white border border-gray-200 rounded-xl shadow sm:p-8- dark:bg-gray-800 dark:border-gray-700">
                <div class="flex sm:p-4 p-4 items-center justify-between mb-4
            border-b border-gray-200 dark:border-gray-700 pb-2">
                    <h5 class="text-xl font-bold leading-none text-gray-900
                dark:text-white">Recent posts</h5>
                    {{--                <a href="#" class="text-sm font-medium text-blue-600--}}
                    {{--                hover:underline dark:text-blue-500">--}}
                    {{--                    View all--}}
                    {{--                </a>--}}
                </div>
                <div class="flow-root sm:px-4 px-4">

                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Plan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Date
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($recent['recent_posts'] as $i)
                                <tr class="bg-white border-b dark:bg-gray-800
                        dark:border-gray-700">
                                    <td class="px-6 py-4">
                                        {{ $i->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $i->plan?->title }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $i->created_at }}
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="w-full max-w-md- p-4- bg-white border border-gray-200 rounded-xl shadow sm:p-8- dark:bg-gray-800 dark:border-gray-700">
                <div class="flex sm:p-4 p-4 items-center justify-between mb-4 border-b border-gray-200 dark:border-gray-700 pb-2">
                    <h5 class="text-xl font-bold leading-none text-gray-900
                dark:text-white">Popular posts</h5>

                </div>
                <div class="flow-root sm:px-4 px-4">

                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Plan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Date
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($recent['popular_posts'] as $i)
                                <tr class="bg-white border-b dark:bg-gray-800
                        dark:border-gray-700">
                                    <td class="px-6 py-4">
                                        {{ $i->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $i->plan?->title }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $i->created_at }}
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </x-splade-lazy>


</x-app-layout>
