
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Login | Admin Panel</title>


    <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

    <link rel="stylesheet" href= "{{ asset('css/style.css')}} " >


</head>

<body>



    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login
                        <a style="float: right;" href="{{url('/admin')}}">Admin Home</a>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                {{ Form::open(array('action'=>'AdminLoginController@store')) }}

                                    <div class="form-group awesome ">
                                        {{Form::label('email','Email')}}
                                        {{Form::email('email',null,array('class'=>'form-control','placeholder'=>'Email','required'))}}

                                    </div>

                                    <div class="form-group awesome ">

                                        {{Form::label('password','Password')}}
                                        {{Form::password('password',array('class'=>'form-control','placeholder'=>'password','required'))}}

                                    </div>

                                    <div class="form-group ">

                                         <div class="">
                                        {{Form::submit('Login',array('class'=>'btn btn-primary'))}}

                                         </div>
                                        <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                                        <a class="btn btn-link" href="{{ url('/admin/adminLogin/create') }}">Yet not registered? Click here ?</a>
                                    </div>


                                 {{Form::close()}}
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>


<!--

<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

            @if ($errors->has('email'))
                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                        </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-4 control-label">Password</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control" name="password">

            @if ($errors->has('password'))
                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-sign-in"></i> Login
            </button>

            <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
            <a class="btn btn-link" href="{{ url('/admin/adminLogin/create') }}">Yet not registered? Click here ?</a>
        </div>
    </div>
</form>
-->
</html>





