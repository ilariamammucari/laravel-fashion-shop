@extends('layouts.app')
@section('titolo', 'Shop Vestiti')

@section('content')
    <main>
        <ul>
            @foreach ($dresses as $dress)
                <li>
                    <p>{{ $dress->tipo }}</p>
                    <p>- {{ $dress->tessuto }}</p>
                    <p>- {{ $dress->taglia }}</p>
                </li>
            @endforeach
        </ul>
    </main>
@endsection