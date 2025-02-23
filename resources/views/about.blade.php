@extends('main')

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sobre Nosotros - Medejoy</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Nunito:wght@300;400;600&display=swap" rel="stylesheet">

@section('content')
<div class="container about-container">
    <div class="row mt-4">
        <h1 class="title">Sobre Nosotros</h1>
        <p class="lead text-center">
            Somos Medejoy, una plataforma innovadora creada para brindar emoción y oportunidades de ganar increíbles premios en rifas seguras y transparentes.
        </p>
    </div>

    <div class="row mt-4">
        <h1 class="sub-title">Nuestra Misión</h1>
        <p class="lead text-center">
            Nuestra misión es ofrecer una plataforma de rifas en línea que no solo sea segura y confiable, sino que también esté diseñada para que cada usuario pueda vivir una experiencia divertida y emocionante. Queremos que "Medejoy" sea sinónimo de transparencia, accesibilidad y una comunidad conectada a través de la emoción de ganar.
        </p>
    </div>

    <div class="row mt-5">
        <div class="col-md-4 team-member">
            <div class="card shadow-sm">
                <img src="{{ asset ('icons/riwifave.png') }}" alt="Brayan Conde">
                <div class="card-body">
                    <h5 class="card-title">Brayan Conde</h5>
                    <p class="card-text">
                        Brayan es el desarrollador principal, especializado en PHP y Laravel, apasionado por construir soluciones web que marquen la diferencia.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 team-member">
            <div class="card shadow-sm">
                <img src="{{ asset ('icons/riwifave.png') }}" class="card-img-top" alt="Jeronimo Cruz">
                <div class="card-body">
                    <h5 class="card-title">Jerónimo Cruz</h5>
                    <p class="card-text">
                        Jeronimo es un experto en diseño de interfaces, responsable de crear experiencias de usuario atractivas y funcionales en la plataforma.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 team-member">
            <div class="card shadow-sm">
                <img src="{{ asset ('icons/riwifave.png') }}" class="card-img-top" alt="Santiago Londoño">
                <div class="card-body">
                    <h5 class="card-title">Santiago Londoño</h5>
                    <p class="card-text">
                        Santiago es el encargado de asegurar la calidad del software, garantizando que la plataforma funcione de manera eficiente y segura.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Botón de contacto -->
    <button class="contact">
        <a href="mailto:medejoy@medejoy.io?subject=Consulta%20sobre%20Medejoy" class="btn2">
            Contáctanos!
        </a>
    </button>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
