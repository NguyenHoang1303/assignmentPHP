<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Sweet Home</title>
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Best Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Life style</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact us</a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="col-md-9 mt-3">
        @foreach($apartments as $apartment)
            <div  class="col-md-4 float-left mb-3">
                <div class="card">
                    <img style="height: 300px" src="{{$apartment->thumbnail}}" class="card-img-top " alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$apartment->name}}</h5>
                        <p class="card-text">{{$apartment->price}}</p>
                        <p class="card-text">{{$apartment->description}}</p>
                        <p class="card-text">{{$apartment->status}}</p>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
    <div class="col-md-3"></div>

</div>















<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
