<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .mainbody{
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: 	#818181;
        }
        form{
            padding: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #EAEBEB;
            flex-direction: column;
        }
        button{
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 10px;
            padding-bottom: 10px;
            font-size: 20px;
            border-radius: 20px;
        }
        input{
            font-size: 20px;
        }
        label{
            font-size: 20px;
        }
        .errors{
            color: red;
            font-size: 25px;
        }
        </style>
</head>
<body>
    <div class="mainbody">
        <form method="post" action="{{route('loginpage')}}">
            @csrf
            <h1>Welcome MUBA Projects</h1>
            <label>E-mail:</label>
            <input type="email" name="email" value="{{old('email')}}">
            <br>
            <label>Password:</label>
            <input type="password" name="pass" >
            <br>
            <button type="submit">Login</button>
        </form>
        <div class="errors">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    </div>
        <script>
            //jquery document ready
            $(document).ready(function(){
                $('.errors').fadeOut(5000);
            });
            
        </script>
</body>
</html>