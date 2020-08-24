<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Task</title>
</head>
<body>
<div class="container">
    @if($errors)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <div class="form-group">
    {!! Form::open(['action'=>'StockController@store', 'files'=>true, 'method'=>'post'])!!}

    {!! Form::file('csv',['class'=>'form-control-file m-4 btn btn-danger']) !!}

    {!! Form::submit('Upload',['class'=>'form-control btn btn-secondary m-4']) !!}
    {!! Form::close() !!}
    {!! Form::open(['action'=>'StockController@download', 'method'=>'get']) !!}
    {!! Form::submit('Download',['class'=>'form-control btn btn-primary m-4']) !!}
    {!! Form::close() !!}
    </div>
</div>
</body>
</html>

