// archivo js del modulo 'cli_cliente_gestion'

$(function ($) {
    setInitCliClienteGestion();
});

function setInitCliClienteGestion() {
    // ficha
    setClickCliClienteGestionFicha();

}

/*
 Ver Ficha del Cliente
 */
function setClickCliClienteGestionFicha() {
    $('#listado_adm_cli_cliente_gestion .adm_botones_accion.ver-ficha').unbind();
    $('#listado_adm_cli_cliente_gestion .adm_botones_accion.ver-ficha').click(function (e) {
        var id = $(this).parents('.uno').attr('identificador');
        verModalFichaCliCliente(id);
    });
}


function verModalFichaCliCliente(id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/cli_cliente_gestion/modal_cli_cliente_gestion_ficha.php",
        data: 'id=' + id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 650,
                modal: true,
                title: 'Ficha del Cliente',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            refreshAdmUno('cli_cliente_gestion', id);

            $('.div_modal').html(data);
            setInitCliClienteGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}