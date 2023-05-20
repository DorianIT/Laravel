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
                    <a href="{{url('add-people')}}" class="btn btn-info">Add People</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
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
                            <td>{{$stu->email}}</td>
                            <td>{{$stu->phone}}</td>
                            <td>{{$stu->address}}</td>
                            <td>
                            <a href="{{url('edit-people/'.$stu->id)}}" class="btn btn-info">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <form method="post" action="{{url('people')}}">
                    @csrf
                    <div class="md3">
                        <label class="form-label">Search by id</label>
                        <input type="text" class="form-control" name="id" 
                        placeholder="Enter id" value="{{old('name')}}">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('people-list')}}"class="btn btn-danger">Back</a>

            </div>
        </div>
    </div>
</body>
</html>