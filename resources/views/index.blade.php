@extends('app')
@section('content')

    <div class="text-center">Posty Autora:</div>
    <div class="card-default">
        <div class="card-header">
            Posty
        </div>
        <div class="card-body">
            <ul class="list-group">
                @foreach($uniqueUserIds as $uniqueUserId)

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="col-md-3">
                            Autor : {{$uniqueUserId['userId']}}
                        </div>
                        <span
                            class="badge badge-primary badge-pill"> {{$countUnique[$uniqueUserId['userId']]}} - Posty </span>
                        <div class="col-m-6">
                            <a href="{{ route('post.show', $uniqueUserId['userId']) }}"
                               class="btn btn-sm float-right btn-success"> Zobacz więcej </a>
                        </div>
                    </li>




                @endforeach
            </ul>
        </div>
    </div>


@endsection
