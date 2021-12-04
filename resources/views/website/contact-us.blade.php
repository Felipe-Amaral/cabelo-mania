@extends('layouts.website')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <h1 class="text-white h1-page">Contato</h1>
        </div>

        <div class="row mt-3">
            <div class="col">
                <p>Uma visita ao Cabelo Mania é uma experiência completa, da espera à despedida.

                    Para garantir o seu conforto, contamos com estacionamento próprio.
                </p>
{{--
                •	Telefone: (11) 2673-9394
                •	WhatsApp: (11) 99618-3734 --}}
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="subject">Assunto</label>
                    <input type="text" name="subject" id="subject" class="form-control">
                </div>

                <div class="mb-3">

                </div>
                <label for="email-body">Mensagem</label>
                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>

                <button type="submit" class="btn btn-success my-4">Enviar</button>
            </div>
        </div>

        <hr>
    </div>


    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d384.46349098984706!2d-46.55850671048855!3d-23.544952807493942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5e8bc2bcc2ad%3A0xd8047e9770a7f6d4!2sR.%20Francisco%20Marengo%2C%20885%20-%20Tatuap%C3%A9%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2003313-000!5e0!3m2!1spt-BR!2sbr!4v1633273354141!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy"></iframe>
@endsection
