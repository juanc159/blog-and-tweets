@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $entry->titulo}}</div>

                <div class="card-body">
                    {{ $entry->contenido}}    
                                  
                </div>
                @can('update', $entry) 
                    <hr>
                    <a href="{{route('entries.edit',$entry->id)}}" class="btn btn-primary">Editar</a> 
                @endcan
                
                
            </div>
        </div>
    </div>
</div>
@endsection
