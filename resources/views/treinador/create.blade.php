<form action="{{ url('/treinador') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Treinador" required>
    <button type="submit">Contratado</button>
</form>