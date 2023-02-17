<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login | Alecrim Dourado</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @vite('resources/css/app.css')

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased bg-white grid grid-cols-12 min-h-screen">
        <div class="col-span-7 bg-orange-900 flex flex-col justify-center items-center">
            <h1 class="mb-10 text-3xl text-white font-bold">LOGIN - ALECRIM DOURADO</h1>
            <form action="/login" method='POST' class="bg-white p-10 rounded-2xl shadow-xl flex flex-col items-center">
                @csrf
                <div class="flex flex-col mb-5">
                    <label for="email">Informe seu email</label>
                    <input type="text" id='email' name='email' class="px-5 py-2 border-2 border-blue-200 rounded-xl">
                </div>
                <div class="flex flex-col">
                    <label for="password">Informe sua senha</label>
                    <input type="password" id='password' name='password' class="px-5 py-2 border-2 border-blue-200 rounded-xl">
                </div>

                @if ($errors->any())
                    <div class="col-span-12 px-3 py-4 text-red-700">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <button class="my-4 bg-orange-900 rounded-3xl px-10 py-2 transition-all duration-100 hover:bg-transparent border-2 boder-orange-900">LOGIN</button>
            </form>
        </div>
        <div class="col-span-5">

        </div>
    </body>
</html>
