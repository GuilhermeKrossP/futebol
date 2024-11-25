<form action="{{ url('/treinador', $treinadors->id) }}" method="POST">
    @csrf
    @METHOD('put')
    <!-- Abaixo conferir se está igual na função edit controller -->
    <input value="{{$treinadors->nome}}" type="text" name="nome" placeholder="Time" required> 
    <button type="submit">Bora Carai</button>
</form>