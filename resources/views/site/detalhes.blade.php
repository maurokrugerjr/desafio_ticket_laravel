@extends ('layouts.main')

@section ('title', 'Tickets')

@section ('content')


    <div id="detalhes-ticket" class="card col-md-3">
        <div class="card-body">
            <h3 class="card-title">Ticket : {{ $ticket->title}}</h3>
            <p>Rotulo:
                <ul>
                    @foreach ($ticket->itemsRotulo as $itemRotulo )
                       - {{ $itemRotulo }} <br>
                    @endforeach
                </ul>
            </p>
            <p>Categoria: 
                <ul>
                    @foreach ($ticket->itemsCategoria as $itemCategoria )
                       - {{ $itemCategoria }} <br>
                    @endforeach
                </ul>
            </p>
            <p>Descrição: {{ $ticket->description }}</p>
            <p>Prioridade: {{$ticket->prioridade }} </p>
        </div>
    </div>


@endsection