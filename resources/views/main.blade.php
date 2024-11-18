<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Estacionamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<nav class="text-secondary rounded border border-dark m-5">
    <div class="row align-items-center m-3">
        <div class="col">
            <ul class="nav">

                <li class="nav-item">
                    <a class="mx-1 btn btn-secondary" href="{{ route("parking.home") }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="mx-1 btn btn-secondary" href="{{ route("parking.sector1") }}">
                        Setor 1
                    </a>
                </li>

                <li class="nav-item">
                    <a class="mx-1 btn btn-secondary" href="{{ route("parking.sector2") }}">
                        Setor 2
                    </a>
                </li>

                <li class="nav-item">
                    <a class="mx-1 btn btn-secondary" href="{{ route("parking.sector3") }}">
                        Setor 3
                    </a>
                </li>

                <li class="nav-item">
                    <a class="mx-1 btn btn-secondary" href="{{ route("parking.freeParking") }}">
                        Vagas Livres
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

@yield('content')

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
