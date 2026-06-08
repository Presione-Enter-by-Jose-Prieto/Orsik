@extends('layouts.app')

@section('content')
    <main class="mx-auto flex w-full max-w-3xl flex-col px-6 pt-28 pb-20">
        <section class="flex flex-col items-center text-center mb-6 md:mb-8">
            <img src="img32.png" alt="Orsik" class="w-72 mb-6 select-none pointer-events-none" draggable="false" style="filter: drop-shadow(0 0 10px #2c830022);">
            <p class="text-base text-neutral-500 mb-12">Potencia tu trabajo con <a class="underline underline-offset-2"
                    href="https://docs.ollama.com/integrations/openclaw">Orsik</a></p>
            <h1 class="text-3xl md:text-4xl font-medium font-rounded mb-6">Acompañando en cada paso <br> del aprendizaje</h1>
        </section>
    </main>

    <div class="w-full max-w-6xl mx-auto px-6 py-12 mt-5 flex flex-col gap-y-40 mb-20">
        <div class="flex flex-row">
            <div class="w-1/2">
                <h1 class="text-4xl font-medium font-rounded mb-8">¿Qué es Orsik?</h1>
                <p class="text-lg text-black mb-10">Orsik es una plataforma web creada en Laravel para el seguimiento y monitoreo de la etapa productiva de los aprendices del SENA. Con ella puedes gestionar aprendices, visitas, bitácoras y mucho más.</p>
            </div>
            <div class="w-1/2 flex items-center justify-center">
                <img src="Documento.png" alt="Orsik" class="w-46 h-41 select-none pointer-events-none" draggable="false">
            </div>
        </div>
        <div class="flex flex-row">
            <div class="w-1/2 flex items-center justify-center">
                <img src="img36.png" alt="Orsik" class="w-70 h-56 select-none pointer-events-none" draggable="false">
            </div>
            <div class="w-1/2">
                <h1 class="text-4xl font-medium font-rounded mb-8">¿Para quién está diseñada Orsik?</h1>
                <p class="text-lg text-black mb-10">Orsik está diseñada principalmente para los instructores del SENA que supervisan la etapa productiva de una ficha formativa. El sistema les da una vista centralizada de las fichas asignadas, el control de visitas y la comunicación con los aprendices.</p>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="w-1/2">
                <h1 class="text-4xl font-medium font-rounded mb-8">¿Cómo ayuda a los aprendices?</h1>
                <p class="text-lg text-black mb-10">Los aprendices pueden registrar y subir evidencias de su progreso (fotos, documentos y bitácoras), consultar el control de visitas programadas por su instructor, recibir retroalimentación y comunicarse directamente mediante mensajería interna. Esto facilita el seguimiento, la transparencia y la comunicación continua entre aprendiz e instructor.</p>
            </div>
            <div class="w-1/2 flex items-center justify-center">
                <img src="ositopc.png" alt="Orsik" class="w-65 h-65 select-none pointer-events-none" draggable="false">
            </div>
        </div>
    </div>
@endsection
