<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous">



</head>
<body>
    <div class="container" style="margin-top: 5%">
        <div class="row">
            <div class="col-md-12">
                <h2>People List</h2>
                <div style="margin-right: 10%; float: right">
                    <a href='{{url("Majer/50439/add-people")}}' class="btn btn-info">Add People</a>
                </div>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Country</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp

                        @foreach ($data as $stu)
                        <tr>
                            <td>{{$stu->id}}</td>
                            <td>{{$stu->name}}</td>
                            <td>{{$stu->surname}}</td>
                            <td>{{$stu->email}}</td>
                            <td>{{$stu->phone}}</td>
                            <td>{{$stu->address}}</td>
                            <td>{{$stu->country}}</td>
                            
                            <td>
                            <a href='{{url("Majer/50439/edit-people/".$stu->id)}}' class="btn btn-info">Edit</a>
                            
                            <a href="{{url('Majer/50439/delete-people/'.$stu->id)}}" class="btn btn-danger">Delete
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>