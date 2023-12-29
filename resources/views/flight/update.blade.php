<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div>
    <h1>Employees Details</h1>
    <a href="{{url('/')}}" class="btn btn-success">home</a>
</div>

<form action="{{route('update',$data->id)}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Mã máy bay</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="Aircraft_ID" value="{{$data->Aircraft_ID}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Sân bay khởi hành</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="Departure_Airport" value="{{$data->Departure_Airport}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Sân bay đến</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="Arrival_Airport" value="{{$data->Arrival_Airport}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Thời gian cất cánh</label>
        <input type="date" class="form-control" id="exampleInputPassword1" name="Departure_Time" value="{{$data->Departure_Time}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Thời gian đến</label>
        <input type="date" class="form-control" id="exampleInputPassword1" name="Arrival_Time" value="{{$data->Arrival_Time}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Thời gian chặn bay dự kiến</label>
        <input type="time" class="form-control" id="exampleInputPassword1" name="Flight_Duration" value="{{$data->Flight_Duration}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
