<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <h1>{{$document->title}}</h1>
</div>
<div>
    {{$document->body}}
</div>
<hr>
@foreach($document->adjustments as $user)
    <li>{{$user->email}} on {{$user->pivot->updated_at->diffForHumans() }}</li>
@endforeach
</body>
</html>
