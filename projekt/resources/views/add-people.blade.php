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
                <h2>Add People</h2>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <form method="post" action="{{url('save-people')}}">
                    @csrf
                    <div class="md3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" 
                        placeholder="Enter name" value="{{old('name')}}">
                        @error('name')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="md3">
                        <label class="form-label">Surname</label>
                        <input type="text" class="form-control" name="surname" 
                        placeholder="Enter surname" value="{{old('surname')}}">
                        @error('surname')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="md3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" 
                        placeholder="Enter email address" value="{{old('email')}}">
                        @error('email')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="md3">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" 
                        placeholder="Enter phone number" value="{{old('phone')}}">
                        @error('phone')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="md3">
                        <label class="form-label">Address</label>
                        <textarea class="form-control" name="address" 
                        placeholder="Enter address">{{old('address')}}</textarea>
                        @error('address')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="md3">
                        <label class="form-label">Country</label>
                        <textarea class="form-control" name="country" 
                        placeholder="Enter address">{{old('country')}}</textarea>
                        @error('country')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('people-list')}}"class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>