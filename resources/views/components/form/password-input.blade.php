<div class="password-input-area">
    <input type="password" class="@error($name) is-invalid @enderror" name="{{ $name }}" placeholder="{{ $placeholder }}" id="{{ $id }}" />
    <img src="/assets/icons/eyeIcon.png" alt="Ícone mostrar/ocultar senha" onclick="togglePasswordVisibility('{{ $id }}')" />
</div>

<script>
    if (typeof togglePasswordVisibility !== 'function') {
        function togglePasswordVisibility(inputId) {
            const input = document.getElementById(inputId);
            if (input.type == 'password') {
                input.type = 'text';
            } else {
                input.type = 'password';
            }
        }
    }
</script>