<form action="{{ url('/times', $times->id) }}" method="POST">
    @csrf
    @METHOD('put')
    
    <input value="{{$times->nome_do_time}}" type="text" name="nome_do_time" placeholder="Time" required>
    <input value="{{$times->capitao}}" type="text" name="capitao" placeholder="Capitão" required>
    <input value="{{$times->pontuacao}}" type="text" name="pontuacao" placeholder="Pontos" required>
    <button type="submit">Alterar time</button>
</form>