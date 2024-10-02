// archivo js del modulo 'prv_proveedor_gestion'

$(function ($) {
    setInitPrvProveedorGestion();
});

function setInitPrvProveedorGestion() {
    // codigo

    // ficha
    setClickPrvProveedorGestionFicha();

}

/*
 Ver Ficha del Proveedor
 */
function setClickPrvProveedorGestionFicha() {
    $('#listado_adm_prv_proveedor_gestion .adm_botones_accion.ver-ficha').unbind();
    $('#listado_adm_prv_proveedor_gestion .adm_botones_accion.ver-ficha').click(function (e) {
        var id = $(this).parents('.uno').attr('identificador');
        verModalFichaPrvProveedor(id);
    });
}


function verModalFichaPrvProveedor(id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/prv_proveedor_gestion/modal_prv_proveedor_gestion_ficha.php",
        data: 'id=' + id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 650,
                modal: true,
                title: 'Ficha del Proveedor',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            refreshAdmUno('prv_proveedor_gestion', id);

            $('.div_modal').html(data);
            setInitPrvProveedorGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}