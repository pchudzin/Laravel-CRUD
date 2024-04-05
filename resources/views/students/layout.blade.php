<!DOCTYPE html>
<html>
    <head>
        <title>Student CRUD</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script> -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />

        <style>
            .mb-100{
                margin-bottom: 100px;
            }
            .btn-view{
                background-color: #009700;
                color: white;
            }
            .btn-view:hover, .btn-view:active{
                background-color: green !important;
                color: white !important;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-100">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link active" href="{{ url('/student') }}">Students</a>
            <a class="nav-item nav-link" href="{{ url('/student/create') }}">Add Student</a>
            <!-- <a class="nav-item nav-link" href="#">Pricing</a> -->
            </div>
        </div>
    </nav>
    <!-- <br><br><br> -->

        <div class="container">
            @yield('content')
        </div>
    
    </body>
</html>