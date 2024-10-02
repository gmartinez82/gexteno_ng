// archivo js del modulo 'vta_recibo_item'
$(function ($) {
    setInitVtaReciboItemGestion();
});

function setInitVtaReciboItemGestion() {
    setChangeCmbVtaReciboItemConciliar();
    setChangeTxtImporteConciliado();
}


function setChangeCmbVtaReciboItemConciliar() {
    $('.cmb_vta_recibo_item_conciliar').unbind();
    $('.cmb_vta_recibo_item_conciliar').change(function (e) {
        var cmb_vta_recibo_item_conciliar = $(this).val();
        var vta_recibo_item_id = $(this).parents('.uno').attr('identificador');
        var vta_recibo_item_conciliado_id = $(this).parents('.uno').attr('vta_recibo_item_conciliado_id');
        var txt_importe_conciliado = $('#txt_importe_conciliado_' + vta_recibo_item_id).val();
        var elem = $(this);

        setVtaReciboItemConciliar(elem, cmb_vta_recibo_item_conciliar, vta_recibo_item_id, vta_recibo_item_conciliado_id, txt_importe_conciliado)
    });
}

function setVtaReciboItemConciliar(elem, vta_recibo_item_conciliar, vta_recibo_item_id, vta_recibo_item_conciliado_id, txt_importe_conciliado) {
    $.ajax({
        type: 'POST',
        url: 'ajax/modulos/vta_recibo_item_gestion/set_vta_recibo_item_gestion_item_conciliar.php',
        data: 'cmb_vta_recibo_item_conciliar=' + vta_recibo_item_conciliar + '&vta_recibo_item_id=' + vta_recibo_item_id + '&vta_recibo_item_conciliado_id=' + vta_recibo_item_conciliado_id + '&txt_importe_conciliado=' + txt_importe_conciliado,
        dataType: 'json',
        beforeSend: function (){
            //$("#cmb_gral_fp_forma_pago_id[" + key + "]").removeClass('input-error');
            //$("#cmb_gral_fp_forma_pago_id_" + key + "_error").html("");
        },
        success: function (data){
            var arr = data;
            var vta_recibo_item_conciliado_id = arr['vta_recibo_item_conciliado_id'];

            if (vta_recibo_item_conciliado_id != 0)
            {
                elem.parents('.uno').attr('vta_recibo_item_conciliado_id', vta_recibo_item_conciliado_id);
            }
            /*else
             {
             $('#txt_importe_conciliado_' + vta_recibo_item_id).val('');
             }*/
            refreshAdmUno('vta_recibo_item_gestion', vta_recibo_item_id);
            setInitVtaReciboItemGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (jqXHR, estado, error) {
        }
    });
}


function setChangeTxtImporteConciliado(){
    var timeout;
    $(".txt_importe_conciliado").unbind();
    $(".txt_importe_conciliado").keypress(function (e){
        var vta_recibo_item_id = $(this).parents('.uno').attr('identificador');
        var vta_recibo_item_conciliado_id = $(this).parents('.uno').attr('vta_recibo_item_conciliado_id');
        var txt_importe_conciliado = $(this).val();
        var elem = $(this);

        if (timeout){
            clearTimeout(timeout);
            timeout = null;
        }

        if (txt_importe_conciliado.length > 0){
            if (e.which == 13)//tecla enter
            {
                timeout = setTimeout(function () {
                    setVtaReciboItemConciliarImporte(elem, vta_recibo_item_id, vta_recibo_item_conciliado_id, txt_importe_conciliado);
                }, 100);
            }
            /*else
             {
             timeout = setTimeout(function(){
             setVtaReciboItemConciliarImporte(elem, vta_recibo_item_id, vta_recibo_item_conciliado_id, txt_importe_conciliado);
             }, 2500);
             }*/
        }
    });
}

function setVtaReciboItemConciliarImporte(elem, vta_recibo_item_id, vta_recibo_item_conciliado_id, importe_conciliado){
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_recibo_item_gestion/set_vta_recibo_item_gestion_item_conciliar_importe.php",
        data: 'vta_recibo_item_id=' + vta_recibo_item_id + '&vta_recibo_item_conciliado_id=' + vta_recibo_item_conciliado_id + '&txt_importe_conciliado=' + importe_conciliado,
        dataType: "json",
        beforeSend: function (objeto)
        {
            $(".textbox").removeClass('input-error');
            $(".label-error").html("");
        },
        success: function (data){
            refreshAdmUno('vta_recibo_item_gestion', vta_recibo_item_id);

            setInitVtaReciboItemGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}