<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('./css/main.css') }}>
    <title>Login</title>
</head>

<body>
    @if (session()->has('error'))
        <div class="alert" style="width: 100%">
            <div class="alert-danger" style="width: 50%">
                <p>
                    <ion-icon name="alert-circle-outline"></ion-icon>
                </p>
                <p>error </p>
                <p>{{ session('error') }}</p>
                <p class="btn-hide-alert">
                    <ion-icon name="close-outline"></ion-icon>
                </p>
            </div>
        </div>
    @endif
    @if (session()->has('logout'))
        <div class="alert" style="width: 100%">
            <div class="alert-edit" style="width: 50%">
                <p>
                    <ion-icon name="alert-circle-outline"></ion-icon>
                </p>
                <p>Success! </p>
                <p>{{ session('logout') }}</p>
                <p class="btn-hide-alert">
                    <ion-icon name="close-outline"></ion-icon>
                </p>
            </div>
        </div>
    @endif
    <div class="login">
        <div class="login-wrapper">
            <div class="login-wrapper-title">
                <p>Login To My Portofolio</p>
                <div>
                    Tidak Punya akun? <a href="">Buat Akun</a>
                </div>
            </div>
            <form action={{ route('login') }} method="POST" class="login-wrapper-content">
                @csrf
                <div class="login-wrapper-content-item">
                    <p>Email</p>
                    <input class="@error('email') unvalidated-input @enderror" type="email"
                        placeholder="example@email.com" name="email" id="email">
                    @error('email')
                        <div class="unvalidated">
                            {{ $message }}
                            <div class="unvalidated-popup">
                                <ion-icon name="information-circle-outline"></ion-icon>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="login-wrapper-content-item">
                    <p>Password</p>
                    <input class="@error('password') unvalidated-input @enderror" type="password" name="password"
                        id="password">
                    @error('password')
                        <div class="unvalidated">
                            {{ $message }}
                            <div class="unvalidated-popup">
                                <ion-icon name="information-circle-outline"></ion-icon>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="login-wrapper-content-item">
                    <button>Login</button>
                </div>
            </form>
        </div>
    </div>
    <script src={{ asset('./js/jquery.js') }}></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        $('.btn-hide-alert').on('click', function() {
            $('.alert').addClass('hide')
        })
        setTimeout(() => {
            $('.alert').addClass('hide')
        }, 4000);
    </script>
</body>

</html>
