@extends('layouts.app')
@section('titolo', 'Shop Vestiti')

@section('content')
    <main>
        <div class="container">
            <div class="d-flex">
                @foreach ($dresses as $dress)

                    <div class="p-5">
                        {{ $dress->tipo }}:
                        <ul>
                            <li>
                                Tessuto: {{ $dress->tessuto }}
                            </li>
                            <li>
                                Taglia: {{ $dress->taglia }}
                            </li>
                        </ul>
                    </div>

                @endforeach
            </div>
        </div>
    </main>
@endsection