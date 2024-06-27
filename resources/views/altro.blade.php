<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>altra pagina</h1>
    <a href="/">Welcome</a>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-wrap">
                @foreach ($teachers as $teacher)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{ $teacher->surname }}</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">{{ $teacher->name }}</h6>
                      <p class="card-text">{{ $teacher->email }} <br>
                        {{ $teacher->phone }} <br>
                        {{ $teacher->office_address }} <br>
                    </p>
                    </div>
                  </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>