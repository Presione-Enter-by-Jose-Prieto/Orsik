@extends('layouts.app')

@section('content')
    @include('components.header')
    <main class="mx-auto flex w-full max-w-3xl flex-col px-6 pt-28 pb-30">
        <section class="flex flex-col items-center text-center mb-6 md:mb-8">
            <img src="iconbanner.png" alt="Orsik" class="w-72 mb-6">
            <p class="text-base text-neutral-500 mb-12">Power <a class="underline underline-offset-2"
                    href="https://docs.ollama.com/integrations/openclaw">OpenClaw</a> with Ollama</p>
            <h1 class="text-3xl md:text-4xl font-medium font-rounded mb-6">The easiest way to build<br> with open models</h1>
        </section>
    </main>


    <div class="w-full max-w-6xl mx-auto px-6 py-12 mt-5">
        <div class="flex flex-row">
            <div class="w-1/2">
                <h1 class="text-4xl font-medium font-rounded mb-8">Facilita tu trabajo</h1>
                <p class="text-lg text-black mb-10">Orsik es la herramienta ideal para gestionar tus fichas formativas. Con Orsik, podrás gestionar tus
                    aprendices, visitas, bitácoras y mucho más.</p>
            </div>
            <div class="w-1/2 flex items-center justify-center">
                <img src="icon.ico" alt="Orsik" class="w-44 h-40">
            </div>
        </div>
    </div>

    <div class="h-300">

    </div>
@endsection
