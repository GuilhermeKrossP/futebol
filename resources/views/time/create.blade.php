<form action="{{ url('/times') }}" method="POST">
    @csrf
    <input type="text" name="nome_do_time" placeholder="Time" required>
    <input type="text" name="capitao" placeholder="Capitão" required>
    <input type="text" name="pontuacao" placeholder="Pontos" required>

    <label for="treinador" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Treinador</label>
    <select name="treinador_id" id="treinador" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option selected>Escolha um treinador</option>
		@foreach($treinadors as $treinador)
    <option value="{{ $treinador->id}}">{{ $treinador->nome}}</option>
		@endforeach
    </select>


    <button type="submit">Selecionar Clube</button>
</form>