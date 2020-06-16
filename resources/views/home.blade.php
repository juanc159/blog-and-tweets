@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   <p>Mis Entradas</p>
                   <ul>
                        @foreach ($entries as $entry)
                        <li><a href="{{$entry->getUrl()}}">{{$entry->titulo}}</a></li>
                        @endforeach  
                   </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
