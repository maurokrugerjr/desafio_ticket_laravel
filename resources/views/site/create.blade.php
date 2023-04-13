@extends ('layouts.welcome')

@section ('title', 'Tickets')

@section ('content')

<div id="container-create">
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="title">Titulo do evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição ticket</label>
                <textarea name="description" class="form-control" id="description" ></textarea>
            </div>
            <div class="form-group">
                <label for="title">Rótulos:</label>
                <br>

                    <input type="checkbox" name="items[]" value="aprimoramento"> Aprimoramento

                    <input type="checkbox" name="items[]" value="pergunta"> Pergunta

                    <input type="checkbox" name="items[]" value="erro"> Erro

            </div>
            <div class="form-group">
                <label for="title">Categorias:</label>
                <br>

                    <input type="checkbox" name="items[]" value="semCategoria"> Sem categoria

                    <input type="checkbox" name="items[]" value="pagamentos_cobranças"> Pagamento/cobranças

                    <input type="checkbox" name="items[]" value="perguntaTecnica"> Pergunta técnica

            </div>
            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <select name="prioridade" id="prioridade" class="form-control">
                    <option value="0">ALTA</option>
                    <option value="1">BAIXA</option>
                </select>
                <input type="submit" class="btn btn-primary" value="Criar Ticket">
            </div>
        </div>
    </form>
</div>

@endsection