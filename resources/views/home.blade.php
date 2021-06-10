@extends('layouts.main')


@section('content')

<section class="box">

    
    <ul>
        @foreach ( $boxes as $box )
        <li>
            <h2>Vacanza N  {{$box->id}} </h2>
            <h3>Descrizione: {{ $box->Description }} </h3>
            <h3>Durata: {{ $box->Duration }} </h3>
            <h3>Prezzo: {{ $box->Description }} </h3>
            <h3>Voto ( 1 / 5 ): {{ $box->Vote }} </h3>
        </li>
        @endforeach
    
    </ul>

</section>



@endsection