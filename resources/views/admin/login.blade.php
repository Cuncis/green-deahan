<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex, nofollow" />
    <title>Admin Login – Green Deahan Sport</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="min-h-screen bg-gray-950 flex items-center justify-center px-4">

    <div class="w-full max-w-sm">
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-green-700 mb-4">
                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </div>
            <h1 class="text-white text-xl font-semibold">Green Deahan Admin</h1>
            <p class="text-gray-500 text-sm mt-1">Masuk untuk mengelola konten</p>
        </div>

        <form method="POST" action="{{ route('admin.login.post') }}"
            class="bg-gray-900 rounded-2xl p-6 shadow-2xl border border-gray-800">
            @csrf

            @if ($errors->any())
                <div class="mb-4 rounded-lg bg-red-900/40 border border-red-700/50 text-red-300 text-sm px-4 py-3">
                    {{ $errors->first() }}
                </div>
            @endif

            <div class="mb-4">
                <label for="login" class="block text-sm text-gray-400 mb-1.5">Username / Email</label>
                <input id="login" type="text" name="login" value="{{ old('login') }}" required autofocus
                    autocomplete="username" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2.5 text-white text-sm
                           placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent
                           transition @error('login') border-red-500 @enderror" placeholder="username atau email" />
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm text-gray-400 mb-1.5">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2.5 text-white text-sm
                           placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent
                           transition" placeholder="••••••••" />
            </div>

            <div class="flex items-center justify-between mb-6">
                <label class="flex items-center gap-2 text-sm text-gray-400 cursor-pointer">
                    <input type="checkbox" name="remember" class="w-4 h-4 rounded bg-gray-700 border-gray-600 text-green-600
                                                                   focus:ring-green-600 focus:ring-offset-gray-900">
                    Ingat saya
                </label>
            </div>

            <button type="submit" class="w-full bg-green-700 hover:bg-green-600 text-white font-semibold py-2.5 rounded-lg
                           transition focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2
                           focus:ring-offset-gray-900">
                Masuk
            </button>
        </form>
    </div>

</body>

</html>