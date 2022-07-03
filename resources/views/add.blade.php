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

            <h2>Добавить трансляцию</h2>
            <div class="col-12">
                <form action={{ route('addstream') }} method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" />


                    </div>
                    <div class="form-group">
                        <label for="nameinput">Name</label>
                        <input name="name" class="form-control" id="nameinput" aria-describedby="emailHelp"
                            placeholder="Enter name" value="{{ old('name') }}" />

                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input name="description" class="form-control" id="description" aria-describedby="emailHelp"
                            placeholder="Enter description" value="{{ old('description') }}" />

                    </div>
                    <div class="form-group">
                        <label for="formFile" class="form-label">Loadfile</label>
                        <input class="form-control" name="image" type="file" id="formFile"
                        value=""
                        >
                    </div>

                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </form>
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
        </section>

    </main>
    <!--Main layout-->

    <!--Footer-->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
