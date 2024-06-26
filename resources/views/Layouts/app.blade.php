<html>

<head>
    <title>App Name - @yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #9C27B0;
            color: white;
            text-align: center;
        }

    </style>

</head>

<body>
    @section('sidebar')

    @show

    <div class="container">
        @yield('content')

    </div>
    <div class="pull-left" style="position: absolute">
        <a class="btn btn-success" href="{{ route('entreprises.index') }}" title="an entreprise" > <i class="">Entreprise</i>
            </a>
    </div><br>
    <div class="pull-left" style="position: absolute; margin-top: 25px">
        <a class="btn btn-success" href="{{ route('projects.index') }}" title="an product" > <i class="">Product</i>
            </a>
    </div><br>
    <div class="pull-left">
        <a class="btn btn-success" href="{{ route('chooses.create') }}" style="position: absolute; margin-top: 50px"> <i class="">Choose</i>
            </a>
    </div>
    <div class="text-center footer">

        <h4>The writer needs a job</h4>
        <h4>+234 806 605 6233</h4>
        <h4>kingsconsult001@gmail.com</h4>

    </div>
</body>

</html>
