<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM Connect | Manage Your Outreach</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans antialiased">

    <nav class="flex items-center justify-between p-6 bg-white shadow-sm">
        <div class="text-2xl font-bold text-indigo-600">CRM<span class="text-gray-900">Twilio</span></div>
        <div>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm font-semibold text-gray-900 hover:text-indigo-600">Dashboard →</a>
                @else
                    <a href="{{ route('login') }}" class="px-5 py-2.5 text-sm font-semibold text-white bg-indigo-600 rounded-lg hover:bg-indigo-500 transition shadow-md">Login</a>
                @endauth
            @endif
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-6 py-24 text-center">
        <h1 class="text-5xl font-extrabold text-gray-900 tracking-tight sm:text-6xl mb-6">
            Smart CRM, powered by <span class="text-indigo-600">Twilio.</span>
        </h1>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-10">
            Communicate with your leads, automate your SMS workflows, and track every interaction in one place.
        </p>

        <div class="flex justify-center gap-4">
            @auth
                <a href="{{ url('/dashboard') }}" class="px-8 py-4 bg-indigo-600 text-white font-bold rounded-xl hover:bg-indigo-700 shadow-lg transition">
                    Go to Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="px-8 py-4 bg-indigo-600 text-white font-bold rounded-xl hover:bg-indigo-700 shadow-lg transition">
                    Access Your Account
                </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="px-8 py-4 bg-white text-gray-900 font-bold rounded-xl border border-gray-200 hover:bg-gray-50 shadow-sm transition">
                        Sign Up
                    </a>
                @endif
            @endauth
        </div>

        <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
            <div class="p-6 bg-white rounded-xl shadow-sm border border-gray-100">
                <div class="text-indigo-600 mb-2 font-bold uppercase text-xs tracking-wider">Messaging</div>
                <h3 class="text-xl font-semibold mb-2">Twilio Integration</h3>
                <p class="text-gray-500">Instant SMS and voice capabilities directly from your lead profiles.</p>
            </div>
            <div class="p-6 bg-white rounded-xl shadow-sm border border-gray-100">
                <div class="text-indigo-600 mb-2 font-bold uppercase text-xs tracking-wider">Analytics</div>
                <h3 class="text-xl font-semibold mb-2">Real-time Data</h3>
                <p class="text-gray-500">Monitor engagement rates and response times at a glance.</p>
            </div>
            <div class="p-6 bg-white rounded-xl shadow-sm border border-gray-100">
                <div class="text-indigo-600 mb-2 font-bold uppercase text-xs tracking-wider">Security</div>
                <h3 class="text-xl font-semibold mb-2">Secure Access</h3>
                <p class="text-gray-500">Enterprise-grade authentication to keep your customer data safe.</p>
            </div>
        </div>
    </main>

</body>
</html>