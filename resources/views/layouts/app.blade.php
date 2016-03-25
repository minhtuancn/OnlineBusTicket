<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Admin </title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}


    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }
        tr{
            font-family: "Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
        }


        .active {
            background-color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="container">

        <ul>
            <li><a class="active" href="/">Home</a></li>
            <li><a href="/places">Places</a></li>
            <li><a href="#contact">Bus</a></li>
            <li><a href="#about">Bus Type</a></li>
            <li><a href="/admin/routes">Routes</a></li>
            <li><a href="/admin/all_routes">All Routes</a></li>
            <li><a href="#about">Company</a></li>
            <li><a href="#about">All Companies</a></li>
        </ul>

        <div class="col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit and Delete Places
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped place-table">
                            <thead>
                            <th>Place</th>
                            </thead>


                            <tbody>
                            @foreach($allPlaces as $allPlace)
                                <tr>

                                    <td class="table-text">{{$allPlace->place_name}}</td>
                                    <td>
                                        <form action="/place/{{ $allPlace->place_id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" id="delete-place-{{ $allPlace->place_id }}" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Delete
                                            </button>
                                        </form>
                                    </td>


                                </tr>
                            @endforeach
                            </tbody>


                        </table>

                    </div>
                </div>



        <div class="panel panel-default">
            <div class="panel-heading">Add New Place </div>
            <div class="panel-body">
                @yield('content')
            </div>
        </div>



        </div>
        <!-- JavaScripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

</body>
</html>