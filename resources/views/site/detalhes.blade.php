@extends ('layouts.welcome')

@section ('title', 'Tickets')

@section ('content')


    <div id="detalhes-ticket" class="card col-md-3">
        <div class="card-body">
            <h3 class="card-title">Ticket : {{ $ticket->title}}</h3>
            <p>Rotulo: </p>
            <p>Categoria: </p>
            <p>Descrição: {{ $ticket->description }}</p>
            <p>Prioridade: {{$ticket->prioridade}} </p>
        </div>
    </div>


@endsection