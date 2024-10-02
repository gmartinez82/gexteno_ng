// archivo js del modulo 'prv_importacion_lista'
var img_loading = "<img src='imgs/loading.gif' />";
var img_loading_gr = "<img src='imgs/loading_gr.gif' />";
var html_loading_img = "<div style='margin-left:100px;margin-top:100px;'><img src='imgs/loading.gif' /> Procesando ...</div>";
var html_loading_img_min = "<div style='margin-left:10px;margin-top:10px;'><img src='imgs/loading.gif' /> Procesando ...</div>";
var html_loading_img_row_ajax = "<div style='position:absolute; margin-left:-105px; margin-top:6px;'>" + img_loading + "</div>";
var html_loading_img_data_ajax = "<div id='html_loading_img_data_ajax' style='position:absolute; margin-left:40%; margin-top:50px;'>" + img_loading_gr + "</div>";

var oTable_Tab2;
var oTable_Tab3;
var oTable_Tab4;

$(document).ready(function () {
    setInitPrvInsumo();
    tab1Show();
});

function setInitPrvInsumo() {
    debugTab3Uno();

    // paso 1
    setChangeCmbProveedor();
    setChangeCmbConvenioDescuento();
    setClickImportacionPendienteCancelar();

    setClickBtnVincularInsumo();
    buscarInsumoModalVincular();
    buscarMatrizModalVincular();
    setClickInsumo();
    setClickMatriz();
    setClickMatrizInsumo();
    setClickNuevoInsumo();
    setClickDesvincularInsumo();
    setClickCerrarModalVincularInsumo();

    setInit();
    setInitTabs();
    tab2Show();

    tab3Show();
    tab3Restablecer();

    tab4Show();
    tab5Show();


    setClickActualizaCodigoMarca();
    setClickActualizaCodigoOEM();

    setChangeCmbPieza();
    setChangeCmbMarca();
    setClickActualizaCosto();
    setClickActualizaDescripcion();
    setClickCancelarRegistro();
    setClickAceptarDescripcionMatriz();
    setClickRestaurarDescripcionMatriz();
    setClickCerrarDescripcionMatriz();
    setClickDescripcionMatriz();

    setChangeCmbHojaTrabajo();

    // select all
    setClickChkAllNuevo();
}

function verLoadingPaso() {
    $('#div_prv_importacion_lista').css("opacity", "0.4");
    $('#div_prv_importacion_lista').before(html_loading_img_data_ajax);
}

function ocultarLoadingPaso() {
    $('#html_loading_img_data_ajax').remove();
    $('#div_prv_importacion_lista').css("opacity", "1");
}

function verLoadingUno(id) {
    $('#tr_prv_insumo_' + id).css("opacity", "0.4");
}

function ocultarLoadingUno(id) {
    $('#tr_prv_insumo_' + id).css("opacity", "1");
}

function setInitTabs() {
    var tab = $("#tabs");
    //alert(tab.attr('select'));

    $("#tabs").tabs({
        beforeLoad: function (event, ui) {
            ui.jqXHR.fail(function () {
                ui.panel.html(
                        "No puede mostrarse la pestaña. Vamos a tratar de solucionar este problema tan pronto como sea posible.");
            });
        },
    });

    if (tab.attr('select') == 4) {
        $("#tabs").tabs({active: 3});
    }
}

function tab1Show() {

    $.ajax({
        type: "POST",
        url: "ajax/modulos/prv_importacion_lista/prv_insumo_tab_1.php",
        success: function (respuesta) {
            $("#tabs-1").html(respuesta);
            setInitPrvInsumo();
        },
        complete: function (jqXHR, estado) {
            console.log(estado);
        },
        error: function (jqXHR, estado, error) {
            console.log(estado);
            console.log(error);
        }
    });
}

function tab2Show() {
    $("#siguiente_tabs_2").unbind();
    $("#siguiente_tabs_2").click(function () {
        var estado = true;
        var archivo = $("#archivo_excel").val();

        if ($("#cmb_prv_proveedor_id").val() == 0) {
            alert('Debe seleccionar un Proveedor!');
            estado = false;
            return 0;
        }
        if ($("#archivo_excel").val() == '') {
            alert('Debe seleccionar un Archivo!');
            estado = false;
            return 0;
        } else {
            var extension = archivo.substring(archivo.lastIndexOf("."));
            if (extension !== ".xlsx" && extension !== ".xls") {
                alert("El archivo de tipo " + extension + " no es valido. Solo se permiten .xls y .xlsx");
                estado = false;
                return 0;
            }
        }

        if (estado) {
            handleFiles();
        }
        $("#tabs").tabs({active: 1});
    });
}

function tab3Show() {
    $("#siguiente_tabs_3").unbind();
    $("#siguiente_tabs_3").click(function () {
        // se fuerza para mostrar todos los registros de la tabla
        oTable_Tab2.page.len(-1).draw();

        $.ajax({
            type: "POST",
            url: "ajax/modulos/prv_importacion_lista/tab_3_inicializar.php",
            data: $("#formulario_configurar_columnas").serialize(),
            beforeSend: function (objeto) {
                verLoadingPaso();
            },
            success: function (respuesta) {

                //$("#tabs-3").html(respuesta);
                ocultarLoadingPaso();
                $("#tabs").tabs({active: 2});

                /*
                 oTable_Tab3 = $('#tabla_tabs_3').DataTable({
                 "lengthMenu": [[5, 10, 25, 50, 100, 500, -1], [5, 10, 25, 50, 100, 500, "Todos"]],
                 "iDisplayLength": 10,
                 "aoColumnDefs": [ { 'bSortable': false, 'aTargets': [ 1 ] } ],
                 "initComplete": function( settings, json ) {
                 ocultarLoadingPaso();
                 },
                 language: {
                 url: '../comps/DataTables-1.10.12/i18n/Spanish.json',
                 }
                 });
                 $("#tabs").tabs({active: 2});
                 */
                setInitPrvInsumo();
                /*
                 oTable_Tab3.on('draw.dt', function () {
                 setInitPrvInsumo();
                 });
                 */

                var modulo = 'prv_importacion_lista';
                var pagina = 1;
                refreshAdmAll(modulo, pagina);
            },
            complete: function (jqXHR, estado) { // Esta funcion se ejecuta despues de success o error
                console.log(estado);
            },
            error: function (jqXHR, estado, error) {
                console.log(estado);
                console.log(error);
            }
        });

    });
}

function tab3Restablecer() {
    $(".restablecer_importacion").unbind();
    $(".restablecer_importacion").click(function () {
        var prv_importacion_id = $(this).parents('.uno').attr('prv_importacion_id');

        $.ajax({
            type: 'GET',
            url: "ajax/modulos/prv_importacion_lista/get_tab_importacion.php",
            data: "prv_importacion_id=" + prv_importacion_id,
            dataType: "html",
            beforeSend: function (objeto) {
                verLoadingPaso();
            },
            success: function (respuesta) {
                ocultarLoadingPaso();
                if (respuesta == 2) { // tab_3
                    restablecerImportacionTab3(prv_importacion_id);
                } else {
                    return;
                }
                setInitPrvInsumo();
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });

    });
}

function restablecerImportacionTab3(prv_importacion_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/prv_importacion_lista/tab_3_restablecer.php",
        data: "prv_importacion_id=" + prv_importacion_id,
        dataType: "html",
        beforeSend: function (objeto) {
            verLoadingPaso();
        },
        success: function (respuesta) {

            //$("#tabs-3").html(respuesta);
            ocultarLoadingPaso();
            $("#tabs").tabs({active: 2});

            /*
             oTable_Tab3 = $('#tabla_tabs_3').DataTable({
             "lengthMenu": [[5, 10, 25, 50, 100, 500, -1], [5, 10, 25, 50, 100, 500, "Todos"]],
             "iDisplayLength": 10,
             "aoColumnDefs": [ { 'bSortable': false, 'aTargets': [ 1 ] } ],
             "initComplete": function( settings, json ) {
             ocultarLoadingPaso();
             $("#tabs").tabs({active: 2});
             },
             //"processing": true,
             //"serverSide": true,
             //"ajax": "../admin/ajax/modulos/prv_importacion_lista/server_processing.php",
             language: {
             url: '../comps/DataTables-1.10.12/i18n/Spanish.json',
             }
             });
             */
            setInitPrvInsumo();
            setInit();
            /*
             oTable_Tab3.on('draw.dt', function () {
             setInitPrvInsumo();
             });
             */

            var modulo = 'prv_importacion_lista';
            var pagina = 1;
            refreshAdmAll(modulo, pagina);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function tab4Show() {
    $("#siguiente_tabs_4").unbind();
    $("#siguiente_tabs_4").click(function () {

        if (confirm('Finalizar el Proceso?')) {

            // se realiza control de datos 
            if (!controlConflictosTab3()) {
                return false;
            }

            $.ajax({
                type: "POST",
                url: "ajax/modulos/prv_importacion_lista/prv_insumo_tab_5.php",
                data: "",
                beforeSend: function (objeto) {
                    verLoadingPaso();
                },
                success: function (respuesta) {
                    ocultarLoadingPaso();
                    $("#tabs-5").html(respuesta);
                    $("#tabs").tabs({active: 3});
                    setInitPrvInsumo();

                    //location.href = '?id=43&tab=4';
                },
                complete: function (jqXHR, estado) {
                    console.log(estado);
                },
                error: function (jqXHR, estado, error) {
                    console.log(estado);
                    console.log(error);
                }
            });
        }

        /*
         // se fuerza para mostrar todos los registros de la tabla
         oTable_Tab3.page.len(-1).draw();
         
         $.ajax({
         type: "POST",
         url: "ajax/modulos/prv_importacion_lista/prv_insumo_tab_4.php",
         data: $("#formu").serialize(),
         beforeSend: function (objeto) {
         verLoadingPaso();
         },
         success: function (respuesta) {
         
         $("#tabs-4").html(respuesta);
         
         $('#tabla_tabs_4').DataTable({
         "lengthMenu": [[5, 10, 25, 50, 100, 500, -1], [5, 10, 25, 50, 100, 500, "Todos"]],
         "iDisplayLength": 10,
         "initComplete": function( settings, json ) {
         ocultarLoadingPaso();
         },
         language: {
         url: '../comps/DataTables-1.10.12/i18n/Spanish.json',
         }
         });
         $("#tabs").tabs({active: 3});
         setInitPrvInsumo();
         },
         complete: function (jqXHR, estado) {
         console.log(estado);
         },
         error: function (jqXHR, estado, error) {
         alert(error.message());
         console.log(estado);
         console.log(error);
         }
         });
         */
    });
}

function tab5Show() {
    $("#siguiente_tabs_5").unbind();
    $("#siguiente_tabs_5").click(function () {
        $.ajax({
            type: "POST",
            url: "ajax/modulos/prv_importacion_lista/prv_insumo_tab_5.php",
            data: "",
            beforeSend: function (objeto) {
                verLoadingPaso();
            },
            success: function (respuesta) {
                ocultarLoadingPaso();
                $("#tabs-5").html(respuesta);
                $("#tabs").tabs({active: 4});
                setInitPrvInsumo();

                //location.href = '?id=43&tab=4';
            },
            complete: function (jqXHR, estado) {
                console.log(estado);
            },
            error: function (jqXHR, estado, error) {
                console.log(estado);
                console.log(error);
            }
        });
    });
}

function controlConflictosTab3() {
    var estado = false;
    var importacion_id = $('#div_prv_importacion_lista #tabla_tabs_3').attr('importacion_id');
    $.ajax({
        type: "GET",
        url: "ajax/modulos/prv_importacion_lista/control_tab3.php",
        data: 'importacion_id=' + importacion_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
            $('.errores-paso').html('');
            verLoadingPaso();
        },
        success: function (data) {
            var arr = data;

            // se limpian todos los errores
            $(".label-error").html('');

            if (arr['error'] === true) {

                var error_html = '';
                var error_mensaje = '';
                var len = Object.keys(arr['error_arr']).length;
                for (var i = 0; i < len; i++) {
                    //alert(arr['error_arr'][i].mensaje);
                    error_mensaje = arr['error_arr'][i].mensaje;
                    error_html = '<div class="error-paso">' + error_mensaje + '</div>';
                    $('.errores-paso').append(error_html);
                }
                estado = false;
                ocultarLoadingPaso();
            } else {
                estado = true;
                ocultarLoadingPaso();
            }
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
    return estado;
}

function setChangeCmbProveedor() {
    $('#cmb_prv_proveedor_id').unbind();
    $('#cmb_prv_proveedor_id').change(function () {

        // se actualiza combo de convenio de descuento
        var proveedor_id = $(this).val();
        setConvenioDescuentoCmbPorProveedor(proveedor_id);

    });
}

function setChangeCmbConvenioDescuento() {
    $('#cmb_prv_convenio_descuento_id').unbind();
    $('#cmb_prv_convenio_descuento_id').change(function () {

        // se actualiza combo de convenio de descuento
        var convenio_descuento_id = $(this).val();
        getDescuentoDeConvenioDescuento(convenio_descuento_id);

    });
}

function setConvenioDescuentoCmbPorProveedor(proveedor_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/prv_convenio_descuento/get_json_prv_convenio_descuento_por_prv_proveedor.php",
        data: "proveedor_id=" + proveedor_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
            verLoadingPaso();
        },
        success: function (data) {
            ocultarLoadingPaso();
            var arr = data;
            var len = Object.keys(arr).length;
            var cmb = $('#cmb_prv_convenio_descuento_id');

            cmb.empty();
            cmb.append('<option value="">...</option>');
            for (var i = 0; i < len; i++) {
                cmb.append('<option value="' + arr[i].id + '">' + arr[i].descripcion + '</option>');
            }

        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

function getDescuentoDeConvenioDescuento(convenio_descuento_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/prv_convenio_descuento/get_json_descuento_por_prv_convenio_descuento.php",
        data: "convenio_descuento_id=" + convenio_descuento_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            $("#descuento").val(arr['descuento']);

            if (convenio_descuento_id != 0) {
                $("#descuento").prop('readonly', true);
            } else {
                $("#descuento").prop('readonly', false);
            }

        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

function handleFiles() {

    var file_data = $('#archivo_excel').prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);
    form_data.append('cmb_prv_proveedor_id', $('#cmb_prv_proveedor_id').val());
    form_data.append('cmb_prv_convenio_descuento_id', $('#cmb_prv_convenio_descuento_id').val());
    form_data.append('cmb_ins_marca_id', $('#cmb_ins_marca_id').val());
    form_data.append('cmb_pieza_id', $('#cmb_pieza_id').val());
    form_data.append('descuento', $('#descuento').val());

    $.ajax({
        type: "POST",
        url: "ajax/modulos/prv_importacion_lista/prv_insumo_tab_2.php",
        dataType: 'html',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        beforeSend: function (objeto) {
            $("#tabs-2").html('Subiendo archivo...');
            verLoadingPaso();
        },
        success: function (respuesta) {

            try {
                var respuesta_json = $.parseJSON(respuesta);
                if (typeof respuesta_json == 'object') {
                    // proceso de respuesta en JSON
                    
                    var arr_err = respuesta_json;
                    alert(arr_err['error_msg']);
                    
                    ocultarLoadingPaso();
                    
                    $("#tabs-2").html('El proceso fue detenido');
                    
                }

            } catch (exp) {
                // proceso de respuesta en HTML
                $("#tabs-2").html(respuesta);

                oTable_Tab2 = $('#tabla_tabs_2').DataTable({
                    "lengthMenu": [[5, 10, 25, 50, 100, 500, -1], [5, 10, 25, 50, 100, 500, "Todos"]],
                    "iDisplayLength": 10,
                    "bSort": false,
                    "ajax": "../excel/tab_2/arrays/arrays2.txt",
                    "deferRender": true,
                    "initComplete": function (settings, json) {
                        ocultarLoadingPaso();
                    },
                    language: {
                        url: '../comps/DataTables-1.10.12/i18n/Spanish.json',
                    }
                });
            }

            setInitPrvInsumo();
        },
        complete: function (jqXHR, estado) { // Esta funcion se ejecuta despues de success o error
            console.log(estado);
        },
        error: function (jqXHR, estado, error) {
            console.log(estado);
            console.log(error);
        }
    });
}

function setChangeCmbHojaTrabajo() {
    $('#cmb_worksheet').unbind();
    $('#cmb_worksheet').change(function () {

        var worksheet = $(this).val();

        $.ajax({
            type: "POST",
            url: "ajax/modulos/prv_importacion_lista/prv_insumo_tab_2.php",
            data: "pos_worksheet=" + worksheet,
            dataType: "html",
            beforeSend: function (objeto) {
                verLoadingPaso();
            },
            success: function (respuesta) {

                $("#tabs-2").html(respuesta);

                oTable_Tab2 = $('#tabla_tabs_2').DataTable({
                    "lengthMenu": [[5, 10, 25, 50, 100, 500, -1], [5, 10, 25, 50, 100, 500, "Todos"]],
                    "iDisplayLength": 10,
                    "bSort": false,
                    "ajax": "../excel/tab_2/arrays/arrays2.txt",
                    "deferRender": true,
                    "initComplete": function (settings, json) {
                        ocultarLoadingPaso();
                    },
                    language: {
                        url: '../comps/DataTables-1.10.12/i18n/Spanish.json',
                    }
                });
                setInitPrvInsumo();
            },
            complete: function (jqXHR, estado) { // Esta funcion se ejecuta despues de success o error
                console.log(estado);
            },
            error: function (jqXHR, estado, error) {
                console.log(estado);
                console.log(error);
            }
        });

    });
}

function setClickBtnVincularInsumo() {
    $(".btn_ver_modal").unbind();
    $(".btn_ver_modal").click(function () {
        var identificador = $(this).parents('tr.uno').attr('identificador');
        verModalVincularInsumo(identificador);
    });

}

function verModalVincularInsumo(identificador) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/prv_importacion_lista/modal_vincular_insumo.php",
        data: "identificador=" + identificador,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html('');
            $('.div_modal').dialog({
                width: '80%',
                height: '600',
                modal: true,
                title: 'Vincular Insumo ',
                close: function () {
                    refreshPrvInsumoUno(identificador);
                }
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitPrvInsumo();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function refreshPrvInsumoUno(identificador) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/prv_importacion_lista/refresh_prv_insumo_uno.php",
        data: "identificador=" + identificador,
        dataType: "html",
        beforeSend: function (objeto) {
            verLoadingUno(identificador);
        },
        success: function (data) {
            ocultarLoadingUno(identificador);
            $('#tr_prv_insumo_' + identificador).html(data);
            //$('#tr_prv_insumo_' + identificador).addClass('conflicto');

            setInitPrvInsumo();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function buscarInsumoModalVincular() {
    var consulta;
    // se quitan todos los eventos al elemento
    $(".div_modal #busqueda_insumo").unbind();

    //comprobamos si se pulsa una tecla
    $(".div_modal #busqueda_insumo").keyup(function (e) {
        //obtenemos el texto introducido en el campo de búsqueda
        consulta = $("#busqueda_insumo").val();

        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;

        //hace la búsqueda
        $.ajax({
            type: "POST",
            url: "ajax/modulos/prv_importacion_lista/buscador_ins_matriz.php",
            data: "buscar_insumo=" + consulta,
            dataType: "html",
            beforeSend: function () {
                $("#resultado_insumo").html(img_loading);
            },
            success: function (data) {
                $("#resultado_insumo").html(data);

                setInitPrvInsumo();
            },
            error: function (jqXHR, estado, error) {
                console.log(estado);
                console.log(error);
            }
        });
    });
}

function buscarMatrizModalVincular() {
    var consulta;
    // se quitan todos los eventos al elemento
    $(".div_modal #busqueda_matriz").unbind();

    //comprobamos si se pulsa una tecla
    $(".div_modal #busqueda_matriz").keyup(function (e) {
        //obtenemos el texto introducido en el campo de búsqueda
        consulta = $("#busqueda_matriz").val();
        //hace la búsqueda
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;

        $.ajax({
            type: "POST",
            url: "ajax/modulos/prv_importacion_lista/buscador_ins_matriz.php",
            data: "buscar_matriz=" + consulta,
            dataType: "html",
            beforeSend: function () {
                $("#resultado_matriz").html(img_loading);
            },
            success: function (data) {
                $("#resultado_matriz").html(data);

                setInitPrvInsumo();
            },
            error: function (jqXHR, estado, error) {
                console.log(estado);
                console.log(error);
            }
        });
    });
}

function setClickInsumo() {
    $(".btn_asignar_insumo").unbind();
    $(".btn_asignar_insumo").click(function () {
        var identificador = $('input#fila').val();

        var insumo_id = $(this).attr('insumo_id');

        // seteamos sel en el class del uno
        $('.bloque .uno').removeClass('sel');
        $(this).addClass('sel');

        $.ajax({
            type: 'GET',
            url: "ajax/modulos/prv_importacion_lista/tab_3_set_click_vincular.php",
            data: "identificador=" + identificador + "&insumo_id=" + insumo_id,
            dataType: "html",
            beforeSend: function (objeto) {
                //verLoadingPaso();
            },
            success: function (data) {
                //ocultarLoadingUno(identificador);
                //refreshPrvInsumoUno(identificador);

                //$('#tr_prv_insumo_' + identificador).html(data);
                $('.div_modal').dialog("close");
                setInitPrvInsumo();
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
    });
}

function setClickMatriz() {
    $(".btn_asignar_matriz").unbind();
    $(".btn_asignar_matriz").click(function () {
        var identificador = $('input#fila').val();

        var matriz_id = $(this).attr('matriz_id');

        // seteamos sel en el class del uno
        $('.bloque .uno').removeClass('sel');
        $(this).addClass('sel');

        $.ajax({
            type: 'GET',
            url: "ajax/modulos/prv_importacion_lista/tab_3_set_click_vincular.php",
            data: "identificador=" + identificador + "&matriz_id=" + matriz_id,
            dataType: "html",
            beforeSend: function (objeto) {
                //verLoadingPaso();
            },
            success: function (data) {
                //ocultarLoadingUno(identificador);
                //refreshPrvInsumoUno(identificador);

                //$('#tr_prv_insumo_' + identificador).html(data);
                $('.div_modal').dialog("close");
                setInitPrvInsumo();
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
    });
}

function setClickMatrizInsumo() {
    $("#crear_insumo").unbind();
    $("#crear_insumo").click(function () {
        var identificador = $('input#fila').val();

        $.ajax({
            type: 'GET',
            url: "ajax/modulos/prv_importacion_lista/tab_3_set_click_check_nvo.php",
            data: "identificador=" + identificador + "&nuevo=1",
            dataType: "html",
            beforeSend: function (objeto) {
                //verLoadingPaso();
            },
            success: function (data) {
                //ocultarLoadingUno(identificador);
                refreshPrvInsumoUno(identificador);

                //$('#tr_prv_insumo_' + identificador).html(data);
                $('.div_modal').dialog("close");
                setInitPrvInsumo();
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
    });
}

function setClickNuevoInsumo() {
    $(".check_nuevo input[type=checkbox]").unbind();
    $(".check_nuevo input[type=checkbox]").click(function () {
        var identificador = $(this).parents('tr.uno').attr('identificador');

        if ($(this).prop('checked')) {
            var data = "identificador=" + identificador + "&nuevo=1";
        } else {
            var data = "identificador=" + identificador + "&nuevo=0";
        }

        $.ajax({
            type: 'GET',
            url: "ajax/modulos/prv_importacion_lista/tab_3_set_click_check_nvo.php",
            data: data,
            dataType: "html",
            beforeSend: function (objeto) {
                //verLoadingUno(identificador);
            },
            success: function (data) {
                //ocultarLoadingUno(identificador);

                refreshPrvInsumoUno(identificador);

                //$('#tr_prv_insumo_' + identificador).html(data);
                setInitPrvInsumo();
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
    });
}

function setClickDesvincularInsumo() {
    $("#desvincular_insumo").unbind();
    $("#desvincular_insumo").click(function () {
        var identificador = $('input#fila').val();

        $.ajax({
            type: 'GET',
            url: "ajax/modulos/prv_importacion_lista/tab_3_set_click_check_nvo.php",
            data: "identificador=" + identificador + "&nuevo=0",
            dataType: "html",
            beforeSend: function (objeto) {
                //verLoadingUno(identificador);
            },
            success: function (data) {
                //ocultarLoadingUno(identificador);
                //refreshPrvInsumoUno(identificador);

                //$('#tr_prv_insumo_' + identificador).html(data);
                $('.div_modal').dialog("close");
                setInitPrvInsumo();
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
    });
}

function setClickCerrarModalVincularInsumo() {
    $("#cerrar_modal").unbind();
    $("#cerrar_modal").click(function () {
        $('.div_modal').dialog("close");
    });
}

function setClickActualizaDescripcion() {
    $(".check_descripcion").unbind();
    $(".check_descripcion").click(function () {
        var identificador = $(this).parents('tr.uno').attr('identificador');

        if ($(this).prop('checked')) {
            var data = "identificador=" + identificador + "&descripcion=1";
        } else {
            var data = "identificador=" + identificador + "&descripcion=0";
        }

        $.ajax({
            type: 'GET',
            url: "ajax/modulos/prv_importacion_lista/tab_3_set_click_check_descripcion_insumo.php",
            data: data,
            dataType: "html",
            beforeSend: function (objeto) {
                //verLoadingUno(identificador);
            },
            success: function (data) {
                //ocultarLoadingUno(identificador);
                refreshPrvInsumoUno(identificador);

                //$('#tr_prv_insumo_' + identificador).html(data);
                setInitPrvInsumo();
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
    });
}

function setClickDescripcionMatriz() {
    $(".descripcion_insumo").unbind();
    $(".descripcion_insumo").click(function () {
        var identificador = $(this).parents('tr.uno').attr('identificador');
        verModalDescripcionMatriz(identificador);
    });
}

function verModalDescripcionMatriz(identificador) {

    $.ajax({
        type: 'GET',
        url: "ajax/modulos/prv_importacion_lista/modal_descripcion_matriz.php",
        data: "identificador=" + identificador,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_descripcion_matriz').html(img_loading);
            $('.div_modal_descripcion_matriz').dialog({
                width: '600',
                height: '300',
                modal: true,
                title: 'Descripcion Personalizada de Insumo y Matriz',
                close: function () {
                    refreshPrvInsumoUno(identificador);
                }
            });
        },
        success: function (data) {
            $('.div_modal_descripcion_matriz').html(data);
            setInitPrvInsumo();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickAceptarDescripcionMatriz() {
    $("#aceptar_descripcion").unbind();
    $("#aceptar_descripcion").click(function () {

        var identificador = $('input#fila_descripcion').val();
        var descripcion_matriz = $('input#descripcion_matriz').val();
        var descripcion_insumo = $('input#descripcion_insumo').val();

        $.ajax({
            type: 'GET',
            url: "ajax/modulos/prv_importacion_lista/tab_3_set_click_check_aceptar_descripcion_matriz.php",
            data: "identificador=" + identificador + "&descripcion_matriz=" + descripcion_matriz + "&descripcion_insumo=" + descripcion_insumo,
            dataType: "html",
            beforeSend: function (objeto) {
                //verLoadingUno(identificador);
            },
            success: function (data) {
                //ocultarLoadingUno(identificador);
                refreshPrvInsumoUno(identificador);

                //$('#tr_prv_insumo_' + identificador).html(data);
                $('.div_modal_descripcion_matriz').dialog("close");
                setInitPrvInsumo();
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
    });
}

function setClickRestaurarDescripcionMatriz() {
    $("#restaurar_descripcion").unbind();
    $("#restaurar_descripcion").click(function () {

        var identificador = $('input#fila_descripcion').val();

        $.ajax({
            type: 'GET',
            url: "ajax/modulos/prv_importacion_lista/tab_3_set_click_check_cancelar_descripcion_matriz.php",
            data: "identificador=" + identificador,
            dataType: "html",
            beforeSend: function (objeto) {
                //verLoadingUno(identificador);
            },
            success: function (data) {
                //ocultarLoadingUno(identificador);
                refreshPrvInsumoUno(identificador);

                //$('#tr_prv_insumo_' + identificador).html(data);
                $('.div_modal_descripcion_matriz').dialog("close");
                setInitPrvInsumo();
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
    });
}

function setClickCerrarDescripcionMatriz() {
    $("#cerrar_descripcion").unbind();
    $("#cerrar_descripcion").click(function () {
        $('.div_modal_descripcion_matriz').dialog("close");
    });
}

function setClickActualizaCosto() {
    $(".check_actualizar input[type=checkbox]").unbind();
    $(".check_actualizar input[type=checkbox]").click(function () {
        var identificador = $(this).parents('tr.uno').attr('identificador');

        if ($(this).prop('checked')) {
            var data = "identificador=" + identificador + "&actualiza_costo=1";
        } else {
            var data = "identificador=" + identificador + "&actualiza_costo=0";
        }

        $.ajax({
            type: 'GET',
            url: "ajax/modulos/prv_importacion_lista/tab_3_set_click_check_actualizar_costo.php",
            data: data,
            dataType: "html",
            beforeSend: function (objeto) {
                //verLoadingUno(identificador);
            },
            success: function (data) {
                //ocultarLoadingUno(identificador);
                refreshPrvInsumoUno(identificador);

                //$('#tr_prv_insumo_' + identificador).html(data);
                setInitPrvInsumo();
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
    });
}

function setChangeCmbMarca() {
    $('#tabla_tabs_3 tr .t3_td_cod_marca .cmb_marca.marca').unbind();
    $('#tabla_tabs_3 tr .t3_td_cod_marca .cmb_marca.marca').change(function () {

        var marca_id = $(this).val();
        if (marca_id == '')
            marca_id = 0;

        var identificador = $(this).parents('tr.uno').attr('identificador');

        $.ajax({
            type: 'GET',
            url: "ajax/modulos/prv_importacion_lista/tab_3_set_click_cmb_marca.php",
            data: "identificador=" + identificador + "&marca_id=" + marca_id,
            dataType: "html",
            beforeSend: function (objeto) {
                //verLoadingUno(identificador);
            },
            success: function (data) {
                //ocultarLoadingUno(identificador);
                refreshPrvInsumoUno(identificador);

                //$('#tr_prv_insumo_' + identificador).html(data);
                setInitPrvInsumo();
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
    });
}

function setChangeCmbPieza() {
    $('#tabla_tabs_3 tr .t3_td_cod_pieza .cmb_marca.pieza').unbind();
    $('#tabla_tabs_3 tr .t3_td_cod_pieza .cmb_marca.pieza').change(function () {

        var marca_id = $(this).val();
        if (marca_id == '')
            marca_id = 0;

        var identificador = $(this).parents('tr.uno').attr('identificador');

        $.ajax({
            type: 'GET',
            url: "ajax/modulos/prv_importacion_lista/tab_3_set_click_cmb_oem.php",
            data: "identificador=" + identificador + "&pieza_id=" + marca_id,
            dataType: "html",
            beforeSend: function (objeto) {
                //verLoadingUno(identificador);
            },
            success: function (data) {
                //ocultarLoadingUno(identificador);
                refreshPrvInsumoUno(identificador);

                //$('#tr_prv_insumo_' + identificador).html(data);
                setInitPrvInsumo();
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
    });
}

function setClickActualizaCodigoMarca() {
    $("#tabla_tabs_3 tr .t3_td_cod_marca .codigo.marca").unbind();

    $("#tabla_tabs_3 tr .t3_td_cod_marca .codigo.marca").blur(function (e) {
        var identificador = $(this).parents('tr.uno').attr('identificador');
        var codigo = $(this).val();

        //var keyCode = e.keyCode;
        //if (keyCode != 13)
        //    return;

        $.ajax({
            type: "GET",
            url: "ajax/modulos/prv_importacion_lista/tab_3_set_click_txt_codigo_marca.php",
            data: "identificador=" + identificador + "&codigo=" + codigo,
            dataType: "html",
            beforeSend: function () {
                //verLoadingUno(identificador);
            },
            success: function (data) {
                //ocultarLoadingUno(identificador);
                refreshPrvInsumoUno(identificador);

                //$('#tr_prv_insumo_' + identificador).html(data);
                setInitPrvInsumo();
            },
            error: function (jqXHR, estado, error) {
                console.log(estado);
                console.log(error);
            }
        });
    });
}

function setClickActualizaCodigoOEM() {
    $("#tabla_tabs_3 tr .t3_td_cod_pieza .codigo.pieza").unbind();

    $("#tabla_tabs_3 tr .t3_td_cod_pieza .codigo.pieza").blur(function (e) {
        var identificador = $(this).parents('tr.uno').attr('identificador');
        var codigo = $(this).val();

        //var keyCode = e.keyCode;
        //if (keyCode != 13) {
        //    return;
        //}

        $.ajax({
            type: "GET",
            url: "ajax/modulos/prv_importacion_lista/tab_3_set_click_txt_codigo_oem.php",
            data: "identificador=" + identificador + "&codigo=" + codigo,
            dataType: "html",
            beforeSend: function () {
                //verLoadingUno(identificador);
            },
            success: function (data) {
                //ocultarLoadingUno(identificador);
                refreshPrvInsumoUno(identificador);

                //$('#tr_prv_insumo_' + identificador).html(data);
                setInitPrvInsumo();
            },
            error: function (jqXHR, estado, error) {
                console.log(estado);
                console.log(error);
            }
        });
    });
}

function setClickCancelarRegistro() {
    $('.cancelar_registro').unbind();
    $('.cancelar_registro').click(function () {
        var identificador = $(this).parents('tr.uno').attr('identificador');
        var cancelado = $(this).attr('cancelado');

        $.ajax({
            type: 'GET',
            url: "ajax/modulos/prv_importacion_lista/tab_3_set_click_check_cancelar_registro.php",
            data: "identificador=" + identificador + "&cancelado=" + cancelado,
            dataType: "html",
            beforeSend: function (objeto) {
                //verLoadingUno(identificador);
            },
            success: function (respuesta) {
                //ocultarLoadingUno(identificador);
                refreshPrvInsumoUno(identificador);

                //$('#tr_prv_insumo_' + identificador).html(respuesta);
                setInitPrvInsumo();
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
    });
}

function debugTab3Uno() {

    $(".t3_td_nro_fila").unbind();
    $(".t3_td_nro_fila").click(function () {
        var identificador = $(this).parents('tr.uno').attr('identificador');
        verModalDebugTab3(identificador);
    });
}

function verModalDebugTab3(identificador) {

    $.ajax({
        type: 'GET',
        url: "ajax/modulos/prv_importacion_lista/modal_debug_tab_3_uno.php",
        data: "identificador=" + identificador,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_debug_tab_3').html('');
            $('.div_modal_debug_tab_3').dialog({
                width: '95%',
                height: '200',
                modal: true,
                title: 'Registro de Excel ',
            });
        },
        success: function (data) {
            $('.div_modal_debug_tab_3').html(data);
            setInitPrvInsumo();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}



function restablecerImportacionTab4(prv_importacion_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/prv_importacion_lista/prv_insumo_tab_4.php",
        data: "prv_importacion_id=" + prv_importacion_id,
        dataType: "html",
        beforeSend: function (objeto) {
            verLoadingPaso();
        },
        success: function (respuesta) {

            $("#tabs-4").html(respuesta);

            oTable_Tab4 = $('#tabla_tabs_4').DataTable({
                "lengthMenu": [[5, 10, 25, 50, 100, 500, -1], [5, 10, 25, 50, 100, 500, "Todos"]],
                "iDisplayLength": 10,
                "initComplete": function (settings, json) {
                    ocultarLoadingPaso();
                },
                language: {
                    url: '../comps/DataTables-1.10.12/i18n/Spanish.json',
                }
            });
            $("#tabs").tabs({active: 3});
            setInitPrvInsumo();

            oTable_Tab4.on('draw.dt', function () {
                setInitPrvInsumo();
            });
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickImportacionPendienteCancelar() {
    $('.restablecer .importacions.activas .cancelar').unbind();
    $('.restablecer .importacions.activas .cancelar').click(function () {
        var prv_importacion_id = $(this).parents('.uno').attr('prv_importacion_id');

        if (confirm("Desea cancelar importacion?")) {
            $.ajax({
                type: 'GET',
                url: "ajax/modulos/prv_importacion_lista/prv_importacion_cancelar.php",
                data: "prv_importacion_id=" + prv_importacion_id,
                dataType: "html",
                beforeSend: function (objeto) {
                    verLoadingPaso();
                },
                success: function (respuesta) {
                    ocultarLoadingPaso();
                    refreshPrvBloqueImportacionesActivas();
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("errorx "+ objeto.status);
                }
            });
        }
    });
}

function refreshPrvBloqueImportacionesActivas() {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/prv_importacion_lista/prv_bloque_importaciones_activas.php",
        dataType: "html",
        beforeSend: function (objeto) {
            verLoadingPaso();
        },
        success: function (data) {
            ocultarLoadingPaso();
            $('.restablecer').html(data);

            setInitPrvInsumo();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickChkAllNuevo() {
    $('#tabla_tabs_3 #check_all_nuevo').unbind();
    $('#tabla_tabs_3 #check_all_nuevo').click(function () {
        var importacion_id = $(this).parents('#tabla_tabs_3').attr('importacion_id');

        if ($(this).prop('checked')) {
            var todos = "todos=1";
            var texto = 'Desea seleccionar todos?';
        } else {
            var todos = "todos=0";
            var texto = 'Desea deseleccionar todos?';
        }

        if (confirm(texto)) {
            $.ajax({
                type: 'GET',
                url: "ajax/modulos/prv_importacion_lista/tab_3_all_nuevo.php",
                data: todos,
                dataType: "html",
                beforeSend: function (objeto) {
                    //verLoadingUno(identificador);
                },
                success: function (data) {
                    //ocultarLoadingUno(identificador);

                    restablecerImportacionTab3(importacion_id);

                    setInitPrvInsumo();
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("errorx "+ objeto.status);
                }
            });
        } else {
            return false;
        }


    });
}