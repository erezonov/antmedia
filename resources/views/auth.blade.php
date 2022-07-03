<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('/css/mdb.min.css') }}" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
</head>

<body>


    <main>
        <div class="container">
            <section class="container">
                <div class="row">
                    <div class="col-2">
                    </div>
                    <div class="col-8">
                        <form action={{ route('auth') }} method="POST">
                            <div class="form-group">
                                <label for="emailinput">Email address</label>
                                <input name="email" class="form-control" id="emailinput" aria-describedby="emailHelp"
                                    placeholder="Enter email">

                            </div>
                            <div class="form-group">
                                <label for="passwordInput">Password</label>
                                <input type="password" name="password" class="form-control" id="passwordInput"
                                    placeholder="Password">
                            </div>

                            <button type="submit" class="btn btn-primary">Авторизация</button>
                        </form>


                        <a href="{{ route('formRegister') }}">Регистрация</a>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="col-2">
                    </div>
                </div>
            </section>

        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer>


    </footer>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
