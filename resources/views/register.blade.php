<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="register-form" class="form" action="{{ route('save') }}" method="post">
                           
                        @if(Session::get('success'))
                            <div class="allert allert-succes">
                            {{Session::get('success')}}
                            </div>
                        @endif


                        @if(Session::get('fail'))
                            <div class="allert allert-danger">
                            {{Session::get('fail')}}
                            </div>
                        @endif




                            @csrf
                            <h3 class="text-center text-info">Create new account</h3>

                            <div class="form-group">
                                <label for="firstname" class="text-info">First name</label><br>
                                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter your firstname" value="{{old('firstname')}}">
                                <span class="text-danger">@error('firstname'){{ $message }} @enderror</span>
                            </div>

                            <div class="form-group">
                                <label for="lastname" class="text-info">Last name</label><br>
                                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter your lasttname" value="{{old('firstname')}}">
                                <span class="text-danger">@error('lastname'){{ $message }} @enderror</span>
                            </div>


                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Enter your email" value="{{old('email')}}">
                                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                            </div>

                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>

                            <div id="register-link" class="text-right">
                                <a href="{{ route('login')}}" class="text-info">Already have an account?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</body>
</html>