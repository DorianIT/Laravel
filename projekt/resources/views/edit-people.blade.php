<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top: 5%">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit People</h2>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <form method="post" action="{{url('Majer/50439/update-people')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="md3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" 
                        placeholder="Enter name" value="{{$data->name}}">
                        @error('name')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="md3">
                        <label class="form-label">Surname</label>
                        <input type="text" class="form-control" name="surname" 
                        placeholder="Enter surname" value="{{$data->surname}}">
                        @error('surname')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="md3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" 
                        placeholder="Enter email address" value="{{$data->email}}">
                        @error('email')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="md3">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" 
                        placeholder="Enter phone number" value="{{$data->phone}}">
                        @error('phone')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="md3">
                        <label class="form-label">Address</label>
                        <textarea class="form-control" name="address" 
                        placeholder="Enter address">{{$data->address}}</textarea>
                        @error('address')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="md3">
                        <label class="form-label">Country</label>
                        <input type="text" class="form-control" name="country" 
                        placeholder="Enter country name" value="{{$data->country}}">
                        @error('country')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('Majer/50439/people-list')}}"class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>