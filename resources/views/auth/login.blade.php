<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    @include('partials/css')

</head>

<body class="animsition">
    <div class="jumbotron background">
                <div class="container">
                    <div class="login-wrap">
                        <div class="login-content">
                            <div class="login-logo">
                                <a href="#">
                                    <img src="{{ asset('images/Home.png')}}" alt="Home" width="30" height="30">
                                </a>
                            </div>
                            <div class="login-form">
                                <form action="{{route('login')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="login-checkbox">
                                        <label>
                                            <input type="checkbox" name="remember">Remember Me
                                        </label>

                                    </div>
                                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>

                                <div class="register-link">
                                    <p>
                                        Don't you have account?
                                        <a href="{{route('register')}}">Register</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



    </div>


    @include('partials/script')

</body>

</html>

<style>
.background{
    background-image: url("https://www.wallpapertip.com/wmimgs/0-3795_wallpaper-books-library-shelves-lighting-hd-book-library.jpg");
    background-size: 100%;

}
</style>
<!-- end document-->
