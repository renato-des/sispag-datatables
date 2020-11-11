<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Datatables AJAX pagination with Search and Sort - Laravel</title>



    <!-- CSS -->
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('DataTables/datatables.min.css')}}"> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

    <!-- Script -->
    {{-- <script src="{{asset('jquery-3.4.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('DataTables/datatables.min.js')}}" type="text/javascript"></script> --}}


    {{-- <!-- Datatables CSS CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Datatables JS CDN -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> --}}

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>



</head>
<body>
    <div class="container">
        <h1 class="display-4">
            LaraTable
        </h1>

    </div>
    <div class="container">
        <table id='empTable' class="table table-striped table-bordered" style="width:100%">

            <thead>
                <tr>
                    <td>S.no</td>
                    <td>Username</td>
                    <td>Name</td>
                    <td>Email</td>
                </tr>
            </thead>
        </table>
    </div>

    <!-- Script -->
    <script type="text/javascript">
        $(document).ready(function() {

            // DataTable
            $('#empTable').DataTable({
                "language": {
                    "sEmptyTable": "Nenhum registro encontrado"
                    , "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros"
                    , "sInfoEmpty": "Mostrando 0 até 0 de 0 registros"
                    , "sInfoFiltered": "(Filtrados de _MAX_ registros)"
                    , "sInfoPostFix": ""
                    , "sInfoThousands": "."
                    , "sLengthMenu": "_MENU_ resultados por página"
                    , "sLoadingRecords": "Carregando..."
                    , "sProcessing": "Processando..."
                    , "sZeroRecords": "Nenhum registro encontrado"
                    , "sSearch": "Pesquisar"
                    , "oPaginate": {
                        "sNext": "Próximo"
                        , "sPrevious": "Anterior"
                        , "sFirst": "Primeiro"
                        , "sLast": "Último"
                    }
                    , "oAria": {
                        "sSortAscending": ": Ordenar colunas de forma ascendente"
                        , "sSortDescending": ": Ordenar colunas de forma descendente"
                    }
                    , "select": {
                        "rows": {
                            "_": "Selecionado %d linhas"
                            , "0": "Nenhuma linha selecionada"
                            , "1": "Selecionado 1 linha"
                        }
                    }
                    , "buttons": {
                        "copy": "Copiar para a área de transferência"
                        , "copyTitle": "Cópia bem sucedida"
                        , "copySuccess": {
                            "1": "Uma linha copiada com sucesso"
                            , "_": "%d linhas copiadas com sucesso"
                        }
                    }

                },

                processing: true
                , serverSide: true
                , ajax: "{{route('employees.getEmployees')}}"
                , columns: [{
                        data: 'id'
                    }
                    , {
                        data: 'username'
                    }
                    , {
                        data: 'name'
                    }
                    , {
                        data: 'email'
                    }
                , ]
            });

        });

    </script>
</body>
</html>
