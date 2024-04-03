<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('components.style')
</head>

<body class="bg-soft-blue">

    <div class="container">
        <div class="row align-items-center justify-content-center py-5" style="min-height: 100vh">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <a href="." class="logo mb-4">
                            <img src="{{ url('assets/images/logo.png') }}" alt="Logo">
                            <span>NewsOnlen</span>
                        </a>

                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.script')
</body>

</html>
