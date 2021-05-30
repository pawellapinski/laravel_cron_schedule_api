@extends('app')
@section('content')
    <h1 class="text-center">Autor postu {{$id}}</h1>
    <div class="card card-default">
        <div class="card-header"> Treść : </div>
        <div class="card-body">
            <ul class="list-group">
                @foreach($collections as $collection)
                    <li class="list-group-item">
                        <div class="card-header">{{$collection['title']}}</div>
                        <div class="card-body">{{$collection['body']}}</div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection
