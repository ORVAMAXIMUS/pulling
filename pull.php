$(document).ready(function (){
    cargarDataTable();
});

function cargarDataTable() {
    datatTable = $("#tblArticulos").DataTable({
        "ajax": {
            "url": "/admin/articulos/GetAll",
            "type": "GET",
            "datatype": "json"
        },
        "columns": [
            { "data": "id", "width": "5%" },
            { "data": "nombre", "width": "25%" },
            { "data": "categoria.nombre", "width": "15%" },
            { "data": "fechaCreacion", "width": "15%" },
            {
                "data": "id",
                "render": function (data) {
                    return `<div class='text-center'>
                            <a href='/Admin/Articulos/Edit/${data}' class='btn btn-success text-white' style='cursor:pointer; widht:100px;'>
                            <i class='fas fa-edit'></i> Editar</a>
                            &nbsp;
                            <a onclick=Delete("/Admin/Articulos/Delete/${data}") class='btn btn-danger text-white' style='cursor:pointer; widht:100px;'>
                            <i class='fas fa-trash-alt'></i> Borrar</a>
                            `;
                }, "width": "30%"
            }
        ],
        "language": {
            "emptyTable": "No hay registros"
        },
        "width": "100%"

    });
}
