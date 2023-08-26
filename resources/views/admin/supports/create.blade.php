<h1>Nova Dúvida</h1>

<form action="{{ route('supports.store') }}" method="post">
    @csrf
    <input type="text" name="subject" id="" placeholder="Assunto...">
    <textarea name="body" id="" cols="30" rows="10" placeholder="Descrição"></textarea>
    <button type="submit">Salvar</button>
</form>