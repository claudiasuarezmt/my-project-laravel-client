@extends('layout')

@section('title', "Cliente {$client->id}")

@section('content')

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript" src="js/scriptClient.js"></script>
</head>
<body>
    <div class="card">
        <h4 class="card-header">Create client</h4>
        <div class="card-body">

            <div id="menu"></div>
            <div id="loginzone"><a href="/oauth2/authorization/github">Haz click para iniciar Sesión</a></div>
            <div id="userZone" style="display: none"></div>
            <div class="contenido">
              <h1>
                <p>Clients List</p>
              </h1>
            </div>
            
            
            <div>
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                    </tfoot>
                </table>
              <br>
              <br>
              <br>
              <br>
              <br>
            </div>
            <div class="botones">
              <button onclick="getClients()">See Clients</button>
              <button onclick="habilitaDatosCliente(1)">Create Client</button>
            </div>
            <div class="formulario" id="campos">
            </div>
        </div>
    </div>
</body>
@endsection