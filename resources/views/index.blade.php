<!DOCTYPE html>
<html lang="en">
@include('layout/link')
<style>
    html,
    body {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .loader {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        z-index: 1000;
        background-color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 2rem;
        transition: all 0.3s linear;
    }

    .loader img {
        height: 10rem;
        width: 10rem;
    }

    .loader-line {
        width: 13rem;
        height: 1rem;
        position: relative;
        overflow: hidden;
        background-color: #ddd;

        -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        border-radius: 20px;
    }

    .loader-line:before {
        content: "";
        position: absolute;
        left: -50%;
        height: 1rem;
        width: 40%;
        background-color: red;
        -webkit-animation: lineAnim 1s linear infinite;
        -moz-animation: lineAnim 1s linear infinite;
        animation: lineAnim 1s linear infinite;
        -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        border-radius: 20px;
    }

    @keyframes lineAnim {
        0% {
            left: -40%;
        }

        50% {
            left: 20%;
            width: 80%;
        }

        100% {
            left: 100%;
            width: 100%;
        }
    }
</style>

<body>
    @include('layout/sidebar')
    <div class="loader">
        <img src={{ asset('./img/man.png') }} alt="">
        <div class="loader-line"></div>
    </div>
    <div class="global-container">
        @yield('content')
    </div>
    <script src="{{ asset('./js/jquery.js') }}"></script>
    @include('layout/script')
    @yield('js')
</body>

</html>
