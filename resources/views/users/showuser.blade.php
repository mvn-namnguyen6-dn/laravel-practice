<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>User</title>
    <style>
        .add:link,
        .add:visited {
            background-color: #6ad314;
            color: white;
            padding: 6px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 10px;
            float: right;
        }

        .add:hover,
        .add:active {
            background-color: rgb(125, 228, 141);
        }

        .edit:link, .edit:visited{
            background-color: #2713ba;
            color: white;
            padding: 6px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 10px;

        }
        .edit:hover, .edit:active{
            background-color: rgb(63, 123, 206);
        }
        .delete:link , .delete:visited{
            background-color: #cf091d;
            color: white;
            padding: 6px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 10px;

        }
        .delete:hover{
            background-color: rgb(169, 68, 68);
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

<body class="antialiased">
    <div class=".container-md" style="margin: 50px 10% ;">
        @if (Session::has('success'))
        <div class="success">

            {{Session::get('success')}}
        </div>
        @endif
        <div>
            <a class="add" href="{{ url('adduser') }}">add</a>
        </div>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">user id</th>
                    <th scope="col">username</th>
                    <th scope="col">email</th>
                    <th scope="col"> action </th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($data as $user)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td> <a class="edit" href="{{ url('edituser/' . $user->id) }}"> Edit </a>|
                            <a class="delete" href="{{ 'deleteuser/' . $user->id }}"> Delete</a> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>
-->
</body>

</html>
