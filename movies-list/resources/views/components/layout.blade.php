<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
    <title>{{$title}}</title>
</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top bg-light d-flex justify-content-center"><a href="/series"><img src="{{asset('images/logo.png')}}" alt="" style="max-width:200px;"></a></nav>
    <div class=" d-flex justify-content-center">
        <div class="d-flex flex-column">

                {{$slot}}
        </div>
    </div>

</body>

</html>
