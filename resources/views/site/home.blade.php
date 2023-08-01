@extends('site/layout')
@section('title', 'Essa é a home')
@section('conteudo')

    @include('site/includes/mensagem', ['titulo'=>'Mensagem de sucesso!'])

    @component('site/components/sidebar')
        @slot('paragrafo')
            Texto do slot
        @endslot
    @endcomponent

    {{-- Isso é um comentário --}}
    <h1>Esta é nossa home</h1>

    {{-- Estruturas de controle --}}

    @auth
        Está autenticado
    @endauth

    @guest
        Não está autenticado
    @endguest

    @if($nome=='Reinaldo')
        true
    @else
        false
    @endif

    @switch($idade)
        @case(40)
            Idade correta
            @break

        @case(41)
            Idade incorreta
            @break

        @default
            Adicionar idade

    @endswitch

    @isset($nome)
        Nome está ok
    @endisset

    @empty($nome)
        Nome está vazio
    @endempty


    {{-- Estruturas de repetição --}}

    @for ($i=0; $i<10; $i++)
        {{$i}}
    @endfor

    @php
        $j = 10;
    @endphp
    @while ($j)
        @php
            $j--;
        @endphp
        J é {{$j}}
    @endwhile

    @foreach ($frutas as $fruta)
        {{ $fruta }}
    @endforeach

    @forelse ($frutas as $fruta)
        {{ $fruta }}
    @empty
        {{-- Array frutas está vazio --}}
    @endforelse



    {{-- Incorporar script --}}
    @push('style')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    @endpush


@endsection
