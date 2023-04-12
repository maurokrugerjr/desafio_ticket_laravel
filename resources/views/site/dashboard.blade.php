@extends ('layouts.welcome')

@section ('title', 'Tickets')

@section ('content')

<div id="tickets-container" class="col-md-12">
    <h2>Tickets :</h2>
    <p>Veja todos os Tickets criados:</p>
    <div>
    @foreach ($tickets as $ticket)
        <div class="card col-md-3">
            <div class="card-body">
                <h5 class="card-title">Ticket : {{ $ticket->title}}</h5>
                <p>Rotulo: </p>
                <p>Categoria: </p>
                <a href="#" id="botton" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
    @endforeach
    </div>
</div>




@endsection 