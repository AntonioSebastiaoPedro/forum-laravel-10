<x-back-index title="Detalhes da Dúvida {{ $support->id }}"/>
<ul>
    <li>Assunto: {{ $support->subject }}</li>
    <li>Status: {{ $support->status }}</li>
    <li>Descrição: {{ $support->body }}</li>
</ul>
<form action="{{ route('supports.destroy', $support->id) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form>