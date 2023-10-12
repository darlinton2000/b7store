<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="assets/loginSignUpStyle.css" />

    <title>B7Store - Selecione o seu estado</title>
</head>

<body>
    <div class="login-page">
        <div class="login-area">
            <h3 class="login-title">B7Store</h3>
            <div class="text-login">
                Selecione o seu estado
            </div>
            <form method="POST" action="{{ route('state_action') }}">
                @csrf

                <div class="name-area">
                    <div class="name-label">Nome</div>
                    <input type="text" class="@error('name') is-invalid @enderror" name="name" placeholder="Digite o seu nome" value="{{ @old('name') }}" />
                    @error('name')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="login-button">Selecionar</button>
            </form>
        </div>
    </div>
    <x-base.footer />
</body>

</html>
