var myURLCliente = 'api/Client';

//obtiene todos los clientes

$(document).ready(function (getClients) {
        $('#clients').DataTable({
            ajax: 'data/objects.txt',
            columns: [
                { data: 'first_name' },
                { data: 'last_name' },
                { data: 'email' },
                { data: 'phone' },
            ],
        });
    });


function habilitaDatosCliente(nuTipo) {
    //Esta funcion muestra en pantalla los datos del cliente para crear o actualizar clientes
    $("#campos").empty();
    $("#campos").show();
    let campos = "<h2>Ingrese la informacion del Cliente</h2>";

    if (nuTipo == 2) {
        campos += "<input type=hidden id=idClient disabled class=input><br>";
    }

    campos += "<label width: 180px;>Nombre: </label><input type=text id=nameClient class=input><br>";
    if (nuTipo == 1){
        campos += "<label width: 180px;>Correo: </label><input type=text id=emailClient class=input><br>";
    }else{
        campos += "<label width: 180px;>Correo: </label><input type=text id=emailClient disabled class=input><br>";
    }

    campos += "<label width: 180px;>Contraseña:   </label><input type=password id=passClient class=input><br>";

    campos += "<label width: 180px;>Edad:   </label><input type=number id=ageClient class=input><br>";

    //si el tipo es 1 es para crearlo y si el tipo es 2 para actaulizarlo
    if (nuTipo == 1) {
        campos += "<button onclick=saveClient() >Guardar Cliente</button>";
    } else {
        campos += "<button onclick=updateClient() >Guardar Cliente</button>";
    }
    campos += "</div>";
    $("#campos").append(campos);
}

//obtiene los datos digitados en el formulario de clientes
function getClientInfo() {
    let id = $("#id").val();
    let first_name = $("#first_name").val();
    let last_name = $("#last_name").val();
    let email = $("#email").val();
    let phone = $("#phone").val();

    let client = {
        id: id,
        first_name: first_name,
        last_name: last_name,
        email: email,
        phone: phone
    };

    return client;
}


//esta funcion crea el cliente
function saveClient() {

    let data = getClientInfo();
    let dataToSend = JSON.stringify(data);

    console.log(data);
    console.log(dataToSend);

    $.ajax({
        url: myURLCliente+'/save',
        type: 'POST',
        contentType: 'application/json',
        data: dataToSend,
        success: function (clients) {
            getClients();
        },
        error: function (xhr, status) {
            alert('ha sucedido un problema');
        }
    });

}

//esta funcion actualiza el cliente
function updateClient() {

    let data = getClientInfo();
    let dataToSend = JSON.stringify(data);

    console.log(data);
    console.log(dataToSend);

    $.ajax({
        url: myURLCliente+'/update',
        type: 'PUT',
        contentType: 'application/json',
        data: dataToSend,
        success: function (clients) {
            getClients();

        },
        error: function (xhr, status) {
            alert('ha sucedido un problema');
        }
    });

}

//esta función obtiene el dato del cliente y lo muestra en el formulario de actualización.
function getDetailClient(id) {
    habilitaDatosCliente(2);

    $.ajax({
        url: myURLCliente + "/" + id,
        type: 'GET',
        dataType: 'json',
        success: function (clients) {
            let cs = clients;
            console.log("Mensaje1"+cs);
            console.log("Mensaje2"+clients.items);

            $("#id").val(cs.id);
            $("#first_name").val(cs.first_name);
            $("#last_name").val(cs.last_name);
            $("#email").val(cs.email);
            $("#phone").val(cs.phone);

        },
        error: function (xhr, status) {
            alert('ha sucedido un problema', status.data);
        }
    });
}
function deleteClient(id) {

    let data = { id: id };
    let dataToSend = JSON.stringify(data);
    $.ajax({
        url: myURLCliente+'/'+id,
        type: 'DELETE',
        contentType: 'application/json',
        data: dataToSend,
        success: function (client) {
            getClients();
        },
        error: function (xhr, status) {
            alert('ha sucedido un problema');
        }
    });
}