
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Signup | Admin Panel</title>


    <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

    <link rel="stylesheet" href= "{{ asset('css/style.css')}} " >


</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register

                        <a style="float: right;" href="{{url('/admin')}}">Admin Home</a>
                    </div>

                    <div class="panel-body">






                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                {{Form::open(array('action'=>'AdminSignUpController@store'))}}


                                <div class="form-group awesome ">
                                    {{Form::label('name','Name')}}
                                    {{Form::text('name',null,array('class'=>'form-control','placeholder'=>'Enter Your Name','required'))}}

                                </div>

                                <div class="form-group awesome ">
                                    {{Form::label('email','Email')}}
                                    {{Form::email('email',null,array('class'=>'form-control','placeholder'=>'Email','required'))}}

                                </div>


                                <div class="form-group awesome ">

                                    {{Form::label('password','Password')}}
                                    {{Form::password('password',array('class'=>'form-control','placeholder'=>'password','required'))}}

                                </div>
                                <div class="form-group awesome ">

                                    {{Form::label('confirmed_password','Confirmed Password')}}
                                    {{Form::password('confirmed_password',array('class'=>'form-control','placeholder'=>'Re-enter password','required'))}}

                                </div>

                                <div class="form-group ">

                                    <div class="">
                                        {{Form::submit('Signup',array('class'=>'btn btn-primary'))}}

                                    </div>

                                    <a class="btn btn-link" href="{{ url('/admin/adminLogin/') }}">Already registered? Click here ?</a>
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
</html>
