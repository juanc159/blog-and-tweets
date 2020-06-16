@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Twiter Api
                </div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $user->name}}</div>

                <div class="card-body">
                    <p>Entradas Publicadas:</p>
                    <ul>
                        @foreach ($entries as $entry)
                        <li><a href="{{route('entries.show',$entry->id)}}">{{$entry->titulo}}</a></li>
                        @endforeach  
                   </ul>
                </div>
                 
                
                
            </div>
        </div>
    </div>
</div>
@endsection
