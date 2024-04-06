<!DOCTYPE html>
<html>
    <head>
        <title>Student CRUD</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <style>
            .mb-50{
                margin-bottom: 50px;
            }
            .btn-view{
                background-color: #009700;
                color: white;
            }
            .btn-view:hover, .btn-view:active{
                background-color: green !important;
                color: white !important;
            }
            .alert-danger{
                padding: 5px;
            }
            hr{
                opacity: .1;
            }
            .box-sh{
                box-shadow: 0 10px 14px 0 rgba(0,0,0,0.06);
            }
            svg{
                margin-top: -6px;
            }
            .pl-20{
                padding-left: 20px;
            } 
            #navbarNav{
                gap: 10px;
            }
            .btn-group-sm>.btn, .btn-sm {
                --bs-btn-padding-y: 0.2rem;
            }
            thead tr{
                border-bottom: 1px solid #979797;
            }
            thead tr th{
                text-align: center !important;
                padding-right: .5rem !important;
            }
            tbody tr td{
                text-align: center;
            }
            /*      /////////       */
            table.dataTable thead>tr>th.sorting:before, table.dataTable thead>tr>th.sorting_asc:before, table.dataTable thead>tr>th.sorting_desc:before, table.dataTable thead>tr>th.sorting_asc_disabled:before, table.dataTable thead>tr>th.sorting_desc_disabled:before, table.dataTable thead>tr>td.sorting:before, table.dataTable thead>tr>td.sorting_asc:before, table.dataTable thead>tr>td.sorting_desc:before, table.dataTable thead>tr>td.sorting_asc_disabled:before, table.dataTable thead>tr>td.sorting_desc_disabled:before{
                content: '';
            }
            table.dataTable thead>tr>th.sorting:after, table.dataTable thead>tr>th.sorting_asc:after, table.dataTable thead>tr>th.sorting_desc:after, table.dataTable thead>tr>th.sorting_asc_disabled:after, table.dataTable thead>tr>th.sorting_desc_disabled:after, table.dataTable thead>tr>td.sorting:after, table.dataTable thead>tr>td.sorting_asc:after, table.dataTable thead>tr>td.sorting_desc:after, table.dataTable thead>tr>td.sorting_asc_disabled:after, table.dataTable thead>tr>td.sorting_desc_disabled:after{
                content: '';
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-50 box-sh">
            <!-- <a class="navbar-brand" href="#">
                <i class="bi bi-people-fill"></i>
            </a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse pl-20" id="navbarNavAltMarkup">
                <div id="navbarNav" class="navbar-nav ml-20">
                <a class="nav-item nav-link" href="{{ url('/student') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
    </svg>
                    Studenci
                </a>
                <a class="nav-item nav-link" href="{{ url('/student/create') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
</svg>
                    Dodaj Studenta
                </a>
                </div>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>
    
    </body>
</html>