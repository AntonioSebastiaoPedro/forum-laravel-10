<a href="{{ route('supports.index') }}">Voltar</a>
<h1>Detalhes da Dúvida {{ $support->id }}</h1>
<ul>
    <li>Assunto: {{ $support->subject }}</li>
    <li>Status: {{ $support->status }}</li>
    <li>Descrição: {{ $support->body }}</li>
</ul>