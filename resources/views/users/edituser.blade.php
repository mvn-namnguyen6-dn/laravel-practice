<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit user</title>

    <style>
                .back:link , .back:visited{
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;

        }
        .back:hover{
            background-color: #5c8073;
        }

          input {
            width: 60%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            resize: vertical;

        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;

            padding-top: 15px;
            width: 150px;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 200px;
        }
        .success{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 50px;
            background-color: #88a075;
            border-radius: 10px;
            font-size: 20px
        }
    </style>


</head>
<body>


    <div class="container">
        <h1> Edit user </h1>
        @if (Session::has('success'))
    <div class="success">
        {{Session::get('success')}}
    </div>

    @endif
    <form method="post" action="{{url('updateuser')}}">
            @csrf
        <input type="hidden" name="id" value="{{$data->id}}">
        Name:<br> <input type="text" name="name" value="{{$data->name}}"><br>
        Email:<br> <input type="email" name="email" value="{{$data->email}}"><br>
        Password:<br><input type="password" name="password" value="{{$data->password}}"><br><br>
        <input type="submit" value="Submit">
        <a class="back" href="{{ url('showuser') }}"> back </a>
    </form>
    </div>
</body>
</html>
