---
title: Sobre mim
description: Página falando sobre início da minha carreira até hoje e o motivo da existência do blog.
---
@extends('_layouts.main')

@section('body')
    <h1>Olá, meu nome é Davi 👋</h1>

    <img src="/assets/img/about.jpg"
        alt="About image"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <p class="mb-6 font-bold">
        Engenheiro de Software PHP, {{ $page->ageAuthor }} anos e de Maceió/AL 🇧🇷
    </p>
    <p class="mb-6">
        <span class="underline">Comecei minha jornada tech aos 16 anos em um curso técnico.</span>
        Minhas primeiras aulas foram sobre lógica de programação, escrevendo <i>pseudo-código</i> no papel,
        transcrevendo para <code>Pascal</code> e vendo a magia acontecer 🧙
        <br>
        O professor sempre passava pequenos desafios e isso era sempre estimulante, ficar "quebrando a cabeça" para achar uma solução!
        <br>
        Tive muita sorte na escolha do curso, porque {{ date('Y') - 2014 }} anos depois cá estou, ainda programando.
    </p>
    <p class="mb-6">
        <span class="bg-clip-text text-transparent bg-gradient-to-r from-sky-500 to-violet-500 font-semibold">
            Tenho trabalhado com <strong>PHP</strong> desde 2016
        </span> quando fiz meu 1º estágio em desenvolvimento, logo em seguida em 2017 iniciei a faculdade de Ciências da Computação.

        <br>

        Ao longo dos anos entrei em contato com outras plataformas como
        <code class="bg-purple-50 text-purple-700 ring-1 ring-purple-600/10">.NET</code>,
        <code class="bg-green-50 text-green-700 ring-1 ring-green-600/10">Node</code> e
        <code class="bg-red-50 text-red-700 ring-1 ring-red-600/10">Java</code>.

        Já implementei alguns sistemas para 🖥️Desktop e 📱Mobile utilizando <code>Windows Forms</code> e <code>Xamarin</code>
        na época que fui competidor da <i>Seletiva WorldSkills Kazan 2019</i>.
    </p>
    <p class="mb-6 text-white font-semibold">
        <span class="bg-gradient-to-r from-purple-500 to-indigo-500 rounded-l">
            &nbsp;Mesmo&nbsp;
        </span>
        <span class="bg-gradient-to-r from-indigo-500 to-purple-500">
            navegando entre essas diferentes <i>stacks</i>,
        </span>
        <span class="bg-gradient-to-r from-purple-500 to-indigo-500 rounded-r">
            sempre existia uma constante que é o PHP 🐘
        </span>
    </p>
    <p class="mb-6">
        Tive muito contato com sistemas legados, então já vi muito código diferente, eu diria.
        Isso me deu uma vivência diferente por me dá perspectiva de um sistema construído 10~20 anos atrás e sistemas novos construídos com frameworks,
        utilizando patterns e arquiteturas modernas. Um dos benefícios que essas experiências me trouxeram foi o apreço a documentação e organização,
        pois sem isso era quase impossível alterar algo nos sistemas com o mínimo de segurança e agilidade.
    </p>
    <p class="mb-6">
        <span class="font-bold underline decoration-2 decoration-indigo-500 hover:decoration-4">
            Gosto de documentar, escrever e ensinar, por isso decidi criar o blog!
        </span>
        <br>
        Espero que você goste do conteúdo que estou produzindo aqui e caso tenha alguma
        <span class="underline">crítica ou sugestão pode me mandar mensagem</span>
        , as vezes demoro pra responder, mas respondo 🙂
    </p>
    <p class="mb-6">
        Você pode me encontrar em
        <a href="https://www.linkedin.com/in/davigsilva/" target="blank">linkedin.com/in/davigsilva</a>
        e
        <a href="https://github.com/davigsilva" target="blank">github.com/davigsilva</a>
    </p>
@endsection
