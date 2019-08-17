@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">Characters</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active bg-dark text-white" href="{{ route('reports') }}">Reports</a>
              </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 mt-5">
            <div class="card">
                <div class="card-header bg-primary">
                Specs
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($specs as $key => $spec)
                        <li class="list-group-item bg-dark">
                            <table>
                                <tr>
                                    <td width="300"><img width="45" src="{{ $spec->spec->avatar }}"></td>
                                    <td>{{ $spec->total }}</td>
                                </tr>
                            </table>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="col-sm-3 mt-5">
            <div class="card">
                <div class="card-header bg-primary">
                Races
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($races as $key => $race)
                        <li class="list-group-item bg-dark">
                            <table>
                                <tr>
                                    <td width="300"><img width="45" src="{{ $race->race->avatar }}"></td>
                                    <td>{{ $race->total }}</td>
                                </tr>
                            </table>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="col-sm-3 mt-5">
            <div class="card">
                <div class="card-header bg-primary">
                Classes
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($classes as $key => $class)
                        <li class="list-group-item bg-dark">
                            <table>
                                <tr>
                                    <td width="300"><img width="45" src="{{ $class->class->avatar }}"></td>
                                    <td>{{ $class->total }}</td>
                                </tr>
                            </table>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="col-sm-3 mt-5">
            <div class="card">
                <div class="card-header bg-primary">
                Professions
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($professions as $key => $professions)
                        <li class="list-group-item bg-dark">
                            <table>
                                <tr>
                                    <td width="300"><img width="45" src="{{ $professions->avatar }}"></td>
                                    <td>{{ $professions->total }}</td>
                                </tr>
                            </table>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
</div>

@endsection
