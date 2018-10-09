<script>
    @if (count($errors) > 0)
        layer.alert('{{ $errors->all()[0] }}');
    @endif
    @if (session('status'))
        layer.alert('{{ session('status') }}');
    @endif
</script>