<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>    
    <div class="container">
        <div class="card mt-5 w-50 mx-auto">
            <h1 class="mx-3">Login system</h1>
            <div class="card-body">
                <form action="{{ url('login') }}" method="post">
                    @csrf()
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address *</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="email" value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback d-block">{{ $errors->first('email') }}</div>
                        @enderror
                    </div>
            
                    <div class="mb-3">
                        <label for="passwordLabel" class="form-label">Password *</label>
                        <input type="password" class="form-control" id="passwordLabel" name="password" value="">
                        @error('password')
                        <div class="invalid-feedback d-block">{{ $errors->first('password') }}</div>
                        @enderror
                    </div>
                    <a href="http://127.0.0.1:8000/" class="btn btn-primary">Login</a>
                </form>
            </div>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
