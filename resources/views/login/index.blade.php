<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RSUD KILISUCI KOTA KEDIRI</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/signin.css')}}">
</head>
<body>
<form class="form-signin text-center" >
    <img src="{{asset('img/kota_kediri.png')}}" alt="" width="100" height="100">
    <h1 class="h3 mb-3 font-weight-normal">SIM LAB RSUD KILISUCI KOTA KEDIRI</h1>
    <label for="inputAdmin" class="sr-only">Username</label>
    <input type="text" id="inputAdmin" class="form-control" placeholder="Username" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <div class="checkbox mb-3">
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>

</form>

</body>
</html>