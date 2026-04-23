<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post" action="{{ route('proerties') }}">
 @csrf
        <div class="">
            <label >Email</label>
            <input type="email" name="email" value="email@gmail.com">
       </div>
@foreach
        <div class="">

            <label for="">password</label>
            <input type="password" placeholder="password" value="password" >
        </div>

        <div class="">
             <button type="submit">
                Login
            </button>
        </div>
        </body>
</form>
</html>