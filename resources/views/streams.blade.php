<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <link rel="stylesheet" href="{{ asset('/css/mdb.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
</head>

<body>


    <main>

        <section class="container">

            <h2>Список трансляций</h2>
            <div class="col-12">
                <div class="row">
                @foreach ($streams as $s)
                    <div class="col-4">
                        <h4>{{$s->name}}</h4>
                        <div class="image">
                            <img src="" />
                        </div>
                        <span class="name"></span>
                        <span class="name">{{$s->description}}</span>
                    </div>
                @endforeach
                </div>
            </div>
        </section>

    </main>
    <!--Main layout-->

    <!--Footer-->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
