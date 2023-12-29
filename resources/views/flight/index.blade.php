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
    <a href="{{route('add')}}" class="btn btn-success">Add new flight</a>
</div>

    <table class="table table-striped">
        <thead class="text-center">
{{--        <tr>--}}
{{--            <th scope="col">#</th>--}}
{{--            <th scope="col">Name</th>--}}
{{--            <th scope="col">Address</th>--}}
{{--            <th scope="col">Salary</th>--}}
{{--            <th scope="col">Action</th>--}}
{{--        </tr>--}}
        <tr>
            <th scope="col">#</th>
            <th scope="col">Mã máy bay</th>
            <th scope="col">Sân bay khởi hành</th>
            <th scope="col">Sân bay đến</th>
            <th scope="col">Thời gian cất cánh</th>
            <th scope="col">Thời gian hạ cánh</th>
            <th scope="col">Thời gian chặn bay dự kiến</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody class="text-center">
        @foreach($data as $key => $value)
            <tr>
                <th scope="row">{{$value->id}}</th>
                <td>{{$value->Aircraft_ID}}</td>
                <td>{{$value->Departure_Airport}}</td>
                <td>{{$value->Arrival_Airport}}</td>
                <td>{{$value->Departure_Time}}</td>
                <td>{{$value->Arrival_Time}}</td>
                <td>{{$value->Flight_Duration}}</td>
                <td>
                    <button class="btn btn-primary">Detail</button>
                    <a href="{{route('edit',$value->id)}}" class="btn btn-success">Update</a>
                    <a
                        href="{{route('destroy',$value->id)}}"
                       class="btn btn-danger"
                       onclick="return confirm('Are you sure you want to delete?')">
                        Delete
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
