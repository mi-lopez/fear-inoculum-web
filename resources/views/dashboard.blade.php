@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active bg-dark text-white" href="#">Characters</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('reports') }}">Reports</a>
                  </li>
                </ul>

                <h1 class="text-center">{{ $characters_total }} pobretones (+ {{ count($characters) - $characters_total }} alts)</h1>


                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th>Nick</th>
                            <th>Spec</th>
                            <th>Race</th>
                            <th>Class</th>
                            <th colspan="2">Professions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($characters as $key => $character)
                            <tr class="text-center">
                                <td>@if ($character->alt)
                                        {{ $character->name }} <span class="badge badge-secondary">Alt</span>
                                    @else
                                        {{ $character->name }}
                                    @endif
                                </td>
                                <td><img width="35" src="{{ $character->spec->avatar }}"></td>
                                <td><img width="35" src="{{ $character->race->avatar }}"></td>
                                <td><img width="35" src="{{ $character->class->avatar }}"></td>
                                @foreach ($character->professions as $key => $profession)
                                    <td><img width="35" src="{{ $profession->avatar }}"></td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
