<h1>Editar Dúvida {{ $support->id }}</h1>
@if ($errors->any())
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
@endif
<form action="{{ route('supports.update', $support->id) }}" method="post">
    @csrf
    @method('patch')
    <input type="text" name="subject" id="" placeholder="Assunto..." value="{{ $support->subject }}">
    <textarea name="body" id="" cols="30" rows="10" placeholder="Descrição">{{ $support->body }}</textarea>
    <button type="submit">Salvar</button>
</form>