@extends ('layouts.welcome')

@section ('title', 'Tickets')

@section ('content')

<div id="container-create">
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="title">Titulo do Ticket:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do ticket">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição ticket:</label>
                <textarea name="description" class="form-control" id="description" ></textarea>
            </div>
            <div class="form-group">
                <label for="title">Rótulos:</label>
                <br>
                    <input type="checkbox" name="itemsRotulo[]" value="Aprimoramento"> Aprimoramento
                    <input type="checkbox" name="itemsRotulo[]" value="Pergunta"> Pergunta
                    <input type="checkbox" name="itemsRotulo[]" value="Erro"> Erro
            </div>
            <div class="form-group">
                <label for="title">Categorias:</label>
                <br>
                    <input type="checkbox" name="itemsCategoria[]" value="Sem categoria"> Sem categoria
                    <input type="checkbox" name="itemsCategoria[]" value="Pagamentos cobranças"> Pagamento/cobranças
                    <input type="checkbox" name="itemsCategoria[]" value="Pergunta técnica"> Pergunta técnica
            </div>
            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <select name="prioridade" id="prioridade" class="form-control">
                    <option value="ALTA">ALTA</option>
                    <option value="BAIXA">BAIXA</option>
                </select>
                <input type="submit" class="btn btn-primary" value="Criar Ticket">
            </div>
        </div>
    </form>
</div>

@endsection