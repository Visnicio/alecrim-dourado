<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alecrim Dourado | Administrativo</title>
    <meta name="author" content="Viktor" />
    <meta name="keywords" content="Riffours, Sorteio, Rifa, Sorteio Iphone, Sorteio Rifa" />
    <meta name="description" content="Site Oficial da Riffours, sorteios a baixo custo. Garanta já seu ticket e concorra a prêmios exclusivos." />

    @vite('resources/css/app.css')
    {{-- @vite('resources/js/app.js') --}}
</head>
<body>
    <div class="grid grid-cols-12 min-h-screen">
        <aside class='bg-orange-900 px-5 py-20 col-span-1 text-white'>
            <h1 class="text-2xl font-bold mb-10">
                <a href="/">Alecrim dourado</a>
            </h1>
            <ul class="text-xl">
                <li class="mb-5">
                    <a href="/students" class="">Alunos</a>
                </li>
                <li>
                    <a href="">Chamada</a>
                </li>
            </ul>
        </aside>
        <div class="col-span-11">
            @yield('content')
        </div>
    </div>
</body>
@yield('scripts')
{{-- <footer class="bg-orange-900 p-10 text-white">
    <div class="container mx-auto text-white text-center">
        <div class="font-bold">Alecrim Dourado &copy; {{date("Y")}}</div>
        <small>Desenvolvido por Vinicius Antonio da Silva</small>
    </div>
</footer> --}}
</html>
