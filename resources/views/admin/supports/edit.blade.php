<x-back-index title="Editar Dúvida {{ $support->id }}"/>
<x-alert/>
<form action="{{ route('supports.update', $support->id) }}" method="post">
    @csrf
    @method('patch')
    @include('admin.supports.partials.form', [
        'suppor' => $support
    ])
</form>