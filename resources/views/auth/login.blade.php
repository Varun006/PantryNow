@extends('layouts.public.main')

@section('title')
    <title>Register / Login</title>
@stop

@section('page-title')
    <section id="page-title">
        <div class="container clearfix">
            <h1>My Account</h1>
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">account</li>
            </ol>
        </div>
    </section>
@stop

@section('content')
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="col_one_third nobottommargin">

                    <div class="well well-lg nobottommargin">
                        <form id="login-form" name="login-form" class="nobottommargin" action="{{ route('login') }}"
                              method="post">

                            <h3>Login to your Account</h3>
                            {{ csrf_field() }}

                            <div class="col_full">
                                <label for="login-form-username">Email ID:</label>
                                <input type="text" id="login-form-username" name="email" value=""
                                       class="form-control"/>
                            </div>

                            <div class="col_full">
                                <label for="login-form-password">Password:</label>
                                <input type="password" id="login-form-password" name="password" value=""
                                       class="form-control"/>
                            </div>

                            <div class="col_full bottommargin">
                                <button class="button button-3d nomargin" id="login-form-submit"
                                        name="login-form-submit" value="login">Login
                                </button>
                                <a href="#" class="fright">Forgot Password?</a>
                            </div>

                            <div class="col_full margin center">
                                {{--<span style="color: red">--}}
                                    {{--Credentials do not match. Please click forgot password if you do not remember your password.--}}
                                    @if (count($errors))
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                {{--</span>--}}
                            </div>

                        </form>
                    </div>

                </div>

                <div class="col_two_third col_last nobottommargin">

                    <h3>Don't have an Account? Register Now.</h3>

                    <p>
                        Creating an account is easy. It takes under 2 minutes. No need to fill your address for check
                        out. It will be pre filled. Register now!
                    </p>

                    <form id="register-form" name="register-form" class="nobottommargin"
                          action="{{ route('register') }}" method="post">

                        {{ csrf_field() }}

                        <div class="col_half">
                            <label for="register-form-name">Name:</label>
                            <input type="text" id="name" name="name" value=""
                                   class="form-control {{ $errors->has('name') ? 'error' : '' }}"/>
                        </div>

                        <div class="col_half col_last">
                            <label for="register-form-email">Email Address:</label>
                            <input type="text" id="email" name="email" value=""
                                   class="form-control {{ $errors->has('email') ? 'error' : '' }} "/>
                        </div>

                        <div class="clear"></div>

                        <div class="col_half">
                            <label for="register-form-phone">Phone:</label>
                            <input type="text" id="phone" name="phone" value=""
                                   class="form-control" {{ $errors->has('phone') ? 'error' : '' }}/>
                        </div>

                        <div class="col_half col_last">
                            <label for="register-form-password">Choose Password:</label>
                            <input type="password" id="register-form-password" name="password" value=""
                                   class="form-control {{ $errors->has('password') ? 'error' : '' }}"/>
                        </div>

                        <div class="clear"></div>

                        <div class="col_half">
                            <label for="">City name:</label>
                            <input type="text" id="register-form-repassword" name="city" value="" placeholder="Mumbai"
                                   class="form-control {{ $errors->has('city') ? 'error' : '' }}"/>
                        </div>

                        <div class="col_half col_last">
                            <label for="register-form-repassword">Zip Code</label>
                            <input type="text" id="street" name="zip" value="" placeholder="400001"
                                   class="form-control {{ $errors->has('zip') ? 'error' : '' }}"/>
                        </div>

                        <div class="clear"></div>

                        <div class="col_full">
                            <label for="street">Street Name</label>
                            <input type="text" id="street" name="street" placeholder="Carter Road"
                                   value="" class="form-control {{ $errors->has('street') ? 'error' : '' }}"/>
                        </div>

                        <div class="col_full">
                            <label for="building-details">Building Name , wing and floor</label>
                            <input type="text" id="street" name="building_details" placeholder="ABC Building, B - 302"
                                   value="" class="form-control {{ $errors->has('building_details') ? 'error' : '' }}"/>
                        </div>

                        <div class="col_full">
                            <label for="building-details">Landmark (Optional)</label>
                            <input type="text" id="street" name="landmark" value="" placeholder="Opp to famous studio"
                                   class="form-control {{ $errors->has('landmark') ? 'error' : '' }}"/>
                        </div>

                        <div class="col_full nobottommargin">
                            <button class="button button-3d button-black nomargin" id="register-form-submit"
                                    value="register">Register Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop