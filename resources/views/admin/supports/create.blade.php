<x-back-index title="Adicionar Dúvida"/>
<x-alert/>
<form action="{{ route('supports.store') }}" method="post">
    @include('admin.supports.partials.form')
</form>