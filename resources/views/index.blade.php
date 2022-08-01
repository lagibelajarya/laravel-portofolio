<!DOCTYPE html>
<html lang="en">
@include('layout/link')

<body>
    <div class="global-container">
        @yield('content')
    </div>
    <script src="{{ asset('./js/jquery.js') }}"></script>
    @include('layout/script')
    @yield('js')
</body>

</html>
