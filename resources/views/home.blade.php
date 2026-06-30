@extends('layouts.app')

@section('content')
    @include('partials.hero')
    @include('partials.consulta')
    @include('partials.proyecto')
    @include('partials.respaldo')
    @include('partials.aspiracional')
    @include('partials.modelos')
    @include('partials.precios')
    @include('partials.planos')
    @include('partials.casa-club')
    @include('partials.amenidades')
    @include('partials.zona')

    {{-- Lifestyle bands — Real del Mar --}}
    @include('partials.banda', [
        'id' => 'golf',
        'img' => 'riviera-golf.jpg',
        'side' => 'left',
        'eyebrow' => 'Golf',
        'titulo' => 'Un recorrido entre <em>naturaleza y golf</em>',
        'texto' => 'Vive la experiencia de un campo de golf de 18 hoyos rodeado de naturaleza y vistas al océano. Un entorno pensado para disfrutar cada recorrido.',
        'cta' => ['label' => 'Conocer Real del Mar', 'href' => '#zona'],
    ])
    @include('partials.banda', [
        'id' => 'padel',
        'img' => 'riviera-padel.jpg',
        'side' => 'right',
        'eyebrow' => 'Pádel',
        'titulo' => 'Entre juegos y <em>momentos</em>',
        'texto' => 'Canchas de pádel rodeadas de paisajes naturales y un ambiente pensado para compartir, relajarse y disfrutar el día a otro ritmo.',
    ])
    @include('partials.banda', [
        'id' => 'alberca-mar',
        'img' => 'riviera-alberca-mar.jpg',
        'side' => 'left',
        'eyebrow' => 'Alberca',
        'titulo' => 'Alberca con <em>vista al mar</em>',
        'texto' => 'La alberca se encuentra dentro del hotel ubicado en Real del Mar, ideal para disfrutar del clima y relajarse frente al horizonte costero.',
    ])
    @include('partials.banda', [
        'id' => 'naturaleza',
        'img' => 'riviera-naturaleza.jpg',
        'side' => 'right',
        'eyebrow' => 'Naturaleza',
        'titulo' => 'Senderos rodeados de <em>naturaleza</em>',
        'texto' => 'Espacios pensados para disfrutar cada recorrido, desconectarte y aprovechar momentos al aire libre.',
    ])
    @include('partials.banda', [
        'id' => 'hipico',
        'img' => 'riviera-hipico.jpg',
        'side' => 'left',
        'eyebrow' => 'Club Hípico',
        'titulo' => 'Club Hípico en <em>Real del Mar</em>',
        'texto' => 'Actividades ecuestres dentro de Real del Mar, en un entorno pensado para disfrutar al aire libre y compartir nuevos momentos.',
    ])

    @include('partials.ubicacion')
    @include('partials.interiores')
    @include('partials.exteriores')
    @include('partials.asesoria')
    @include('partials.brokers')
    @include('partials.cta-final')
@endsection
