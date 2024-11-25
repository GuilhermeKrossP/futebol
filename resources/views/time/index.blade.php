@foreach($times as $time)
    <div>
        <h3>{{ $time->nome_do_time }}</h3>
        <p>{{ $time->capitao }}</p>
        <p>{{ $time->pontuacao }}</p>
        <p>{{ $time->treinador->nome }}</p>
        <a href="{{ url('times/'.$time->id.'/edit') }}"><button>Trocas</button></a>
        <form action="{{ url('times/'.$time->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Desclassificado</button>
        </form>
    </div>
@endforeach