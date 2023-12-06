<div class="relative flex items-top justify-center min-h-screen bg-gray-100-  sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <Link href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</Link>
            @else
                <Link href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</Link>

                @if (Route::has('register'))
                    <Link href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</Link>
                @endif
            @endauth
        </div>
    @endif


        <!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->


        <div class="p-12">
            <div
                class="mx-auto max-w-lg text-center lg:mx-0 ltr:lg:text-left rtl:lg:text-right"
            >
                <h2 class="text-3xl font-bold sm:text-4xl">Welcome to Livetrader SAAS</h2>

                <p class="mt-4 text-gray-600">
                    Empower your trading strategies with LiveTrader, the cutting-edge SaaS platform designed for traders of all levels. Whether you're a seasoned professional or just starting, our intuitive interface and powerful tools elevate your trading experience.
                </p>

                <p class="mt-4 text-gray-600">
                    Access a comprehensive suite of features, including real-time market data, customizable trading bots, and seamless integration with major exchanges. With LiveTrader, you can create, test, and deploy automated strategies swiftly, giving you an edge in today's dynamic markets.
                </p>
                <a
                    href="/dashboard"
                    class="mt-8 inline-block rounded bg-indigo-600 px-3 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400"
                >
                    Get Started
                </a>
            </div>
        </div>



</div>

