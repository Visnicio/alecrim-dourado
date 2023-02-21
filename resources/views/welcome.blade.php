<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Alecrim Dourado</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @vite('resources/css/app.css')

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased " style="background-color: #f3f6f9">
        <header>
            <nav class="p-4">
                <div class="container mx-auto flex justify-between items-center">
                    <h1 class="font-bold text-2xl text-black">Alecrim Dourado</h1>
                    <div>
                        <a href="" class="mr-5">Sobre o projeto</a>
                        <a href="https://github.com/Visnicio/alecrim-dourado" class="mr-5" target="_blank">Repositório</a>
                        <a href="/login" >Login</a>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <section class="bg-orange-900">
                <div class="container mx-auto py-44 grid grid-cols-12">
                    <div class="col-span-6">
                        <h2 class="text-2xl text-white mb-10">Versão Alpha 0.1.0</h2>
                        <h1 class="text-5xl text-white font-bold">A SOLUÇÃO COMPLETA PARA A GESTÃO DE SUA CRECHE</h1>
                        <button class="px-3 py-2 bg-white rounded-lg mt-5 hover:bg-gray-100 transition-all duration-100">SAIBA MAIS</button>
                    </div>
                </div>
            </section>
            <section>
                <div class="container mx-auto py-20 grid grid-cols-12 items-center">
                    <div class="col-span-5">
                        <div class="text-3xl mb-10 font-bold">SUA SEGURANÇA EM PRIMEIRO LUGAR</div>
                        <p>O Alecrim Dourado vem de uma iniciativa FOSS (Free and Open Source Software), isto quer dizer que todo nosso código fonte esta disponível em nosso repositório. Você pode acompanhar nossa equipe de desenvolvimento trabalhando nos bastidores.</p>
                    </div>
                    <div class="col-span-6 col-start-7">
                        <img src="{{ asset('img/landpage/code.png') }}" alt="" class="w-full h-auto">
                    </div>
                </div>
            </section>
            <section class="bg-orange-900">
                <div class="container mx-auto py-20 flex items-center flex-col">
                    <div class="text-3xl font-bold text-white">ESTAMOS EM FASE ALPHA</div>
                    <p class="text-white my-5">Atualmente o Alecrim dourado não esta disponível para acesso, estamos trabalhando para entregar uma versão estável para nossa fase Beta, sem bugs ou problemas. Sua experiência é nossa prioridade.</p>
                    <p class="text-white">Caso queira ser notificado quando nossa versão Beta estiver disponível preencha o formulário abaixo</p>
                    <form action="" action="post" class="mt-20 px-20 py-10 bg-white rounded-2xl shadow-md">
                        @csrf
                        <div class="flex flex-col">
                            <label for="name" class="mb-2">Informe seu nome completo</label>
                            <input type="text" name="name" id="name" class="px-3 py-2 border-2 rounded-full border-black">
                        </div>
                        <div class="flex flex-col mt-5">
                            <label for="email" class="mb-2">Informe seu email</label>
                            <input type="email" name="email" id="email" class="px-3 py-2 border-2 rounded-full border-black">
                        </div>
                        <button class="w-full bg-orange-900 border-2 hover:bg-transparent transition-all duration-100 border-black mt-10 px-3 py-2 rounded-3xl">Enviar</button>
                    </form>
                </div>
            </section>
            <section>
                <div class="container mx-auto py-20 grid grid-cols-12 items-center">
                    <div class="col-span-5 flex justify-center">
                        <img src="{{ asset('img/landpage/coder.png') }}" class="w-96 h-auto">
                    </div>
                    <div class="col-span-6 col-start-7">
                        <div class="text-3xl font-bold mb-5">ACOMPANHE NOSSO DESENVOLVIMENTO</div>
                        <p class="mb-2">Enquanto você aguarda o lançamento de nossa versão beta você pode acompanhar nosso desenvolvimento acessando nosso repositório no <a href="https://github.com/Visnicio/alecrim-dourado" class="text-orange-900">github.com</a>.</p>
                        <p>Em nossas Issues você pode encontrar o que nossos Alpha Testers estão encontrando e como nossa equipe tem lidado com as situações</p>
                    </div>
                </div>
            </section>
        </main>
        <footer class="bg-orange-900">
            <div class="container mx-auto py-10 flex flex-col items-center">
                <div class="text-white">Alecrim Dourado - 2023 - {{date('Y')}} &copy;</div>
                <small class="text-white">Mantido por Vinicius Antonio da Silva</small>
            </div>
        </footer>
    </body>
</html>
