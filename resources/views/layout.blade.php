<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <!--css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--style-->
    <style>
        /* The side navigation menu */
        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        /* Sidebar links */
        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        /* Active/current link */
        .sidebar a.active {
            background-color: #212529;
            color: white;
        }

        /* Links on mouse-over */
        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
        div.content {
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
        }

        /* On screens that are less than 700px wide, make the sidebar into a topbar */
        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                float: left;
            }

            div.content {
                margin-left: 0;
            }
        }

        /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
    </style>
</head>

<body>
    <!--overall container-->
    <div class="container">
        <!--row for navbar-->
        <div class="row">
            <div class="col-md-12">
                <!--start of navbar-->
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <h3>Gotei13</h3>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </nav>
            </div>
        </div>
        <!--row for sidebar-->
        <div class="row">
            <!--side-->
            <div class="col-md-3">
                <div class="sidebar">
                    <a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                    <a class="{{ Request::is('members') ? 'active' : '' }}" href="{{ url('/members') }}">Members</a>
                    <a class="{{ Request::is('captains') ? 'active' : '' }}" href="{{ url('/captains') }}">Captains</a>
                    <a class="{{ Request::is('zanpakutos') ? 'active' : '' }}"
                        href="{{ url('/zanpakutos') }}">Zanpakutos</a>
                </div>

            </div>
            <!-- Page content -->
            <div class="col-md-9">

                <!--yield to insert child content-->
                @yield('content')

            </div>

        </div>
    </div>
</body>

</html>
