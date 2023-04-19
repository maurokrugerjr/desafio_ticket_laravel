@extends ('layouts.main')

@section ('title', 'Tickets')

@section ('content')

<div class="col-md-10 offset-md-1 gerenciamento-title-container">
    <h1>Todos Tickets:</h1>
</div>
<div class="col-md-10 offset-md-1 gerenciamento-tickets-container">
    @if(count($tickets) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo ticket</th>
                <th scope="col">Prioridade</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tickets as $ticket)
                <tr>
                    <td scropt="row">{{ $loop->index + 1 }}</td>
                    <td><a href="/detalhes/{{ $ticket->id }}">{{ $ticket->title }}</a></td>
                    <td>{{ $ticket->prioridade }}</td>
                    <td>
                        <a href="/create/ {{ $ticket->id }} " class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a>
                        <form action="/create/{{ $ticket->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn"> <ion-icon name="trash-outline"></ion-icon>Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach    
        </tbody>
    </table>
    @else
    <p>Ainda não existem Tickets.</p>
    @endif

</div>



@endsection 