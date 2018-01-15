<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body style="background-color: ">
<div class="container">
    <img src="../assets/img/pic3.jpg">
    <form action="{{route('auth')}}" method="post">
        {{csrf_field()}}
        <div class="form-input">
            <input type="text" name="email" placeholder="Username">
        </div>
        <div class="form-input">
            <input type="password" name="password" placeholder="Password">
        </div>
        <input type="submit" name="submit" value="LOGIN" class="btn-login"><br>

        <a href="forget.html">Forget password?</a>
    </form>
</div>
</body>
</html>