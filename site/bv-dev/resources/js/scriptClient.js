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

alert('Este es el script de java');