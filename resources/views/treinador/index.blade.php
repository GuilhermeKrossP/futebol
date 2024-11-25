@foreach($treinadors as $treinador)
    <div>
        <h3>{{ $treinador->nome }}</h3>
        <a href="{{ url('treinador/'.$treinador->id.'/edit') }}"><button>Novo Técnico</button></a>
        <form action="{{ url('treinador/'.$treinador->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Demitido</button>
        </form>
    </div>
@endforeach