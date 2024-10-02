// archivo js del modulo 'vta_vendedor_descuento_gestion'
$(function ($) {
    setInitVtaVendedorDescuentoGestion();
});

function setInitVtaVendedorDescuentoGestion() {
    // Cambios en el Spinner
    setChangeTxtDescuentoMaximo();

}

function setChangeTxtDescuentoMaximo() {
    var timeout;
    //alert('Sacar alert!');

    // Evento correspondiente al CHANGE de la caja de texto de descuento
    $("#listado_adm_vta_vendedor_descuento_gestion .textbox.spinner.descuento_maximo").unbind();
    $("#listado_adm_vta_vendedor_descuento_gestion .textbox.spinner.descuento_maximo").keyup(function (e) {
        // solo numeros
        this.value = (this.value + '').replace(/[^.0-9]/g, '');
        var max = 100;
        var descuento_maximo = $(this).val();
        var vta_vendedor_id = $(this).attr('vta_vendedor_id');
        var ins_etiqueta_id = $(this).attr('ins_etiqueta_id');
        var elem = $(this);

        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }

        if (descuento_maximo.length > 0 && descuento_maximo < max) {
            if (e.which == 13) {
                timeout = setTimeout(function () {
                    setVtaVendedorDescuentoMaximo(elem, ins_etiqueta_id, vta_vendedor_id, descuento_maximo);
                }, 100);
            } else {
                timeout = setTimeout(function () {
                    setVtaVendedorDescuentoMaximo(elem, ins_etiqueta_id, vta_vendedor_id, descuento_maximo);
                }, 1500);
            }
        } else {
            alert('El descuento maximo es del ' + max + '%');
            setVtaVendedorDescuentoMaximo(elem, ins_etiqueta_id, vta_vendedor_id, max);
        }
    });

    $(".spinner.descuento_maximo").each(function () {
        $(this).spinner({
            min: 0,
            max: 100,
            step: 0.1,
            numberFormat: "n",
            spin: function (event, ui) {
                var descuento_maximo = ui.value;
                var vta_vendedor_id = $(this).attr('vta_vendedor_id');
                var ins_etiqueta_id = $(this).attr('ins_etiqueta_id');
                var elem = $(this);

                if (timeout) {
                    clearTimeout(timeout);
                    timeout = null;
                }

                timeout = setTimeout(function () {
                    setVtaVendedorDescuentoMaximo(elem, ins_etiqueta_id, vta_vendedor_id, descuento_maximo);
                }, 1000);
            }
        });
    });

}

function setVtaVendedorDescuentoMaximo(elem, ins_etiqueta_id, vta_vendedor_id, descuento_maximo) {
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_vendedor_descuento_gestion/set_vta_vendedor_descuento_gestion_set_descuento_maximo.php",
        data: 'ins_etiqueta_id=' + ins_etiqueta_id + '&vta_vendedor_id=' + vta_vendedor_id + '&descuento_maximo=' + descuento_maximo,
        dataType: "json",
        beforeSend: function (objeto) {
//            $('.div_modal').html(img_loading);
            $(".textbox").removeClass('input-error');
            $(".label-error").html("");
        },
        success: function (data) {
            var arr = data;
            if (arr["error"]) {
                alert('Ups! Ocurrio un error.');
            } else {
                elem.parents('td').fadeOut(100);
                elem.parents('td').fadeIn(100);
                
                
//                alert('Guardado correctamente.');
//                refreshVtaPresupuestoGestionEdicionAdmUno(vta_presupuesto_ins_insumo_id);
            }

            setInitVtaVendedorDescuentoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}