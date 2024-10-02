<link href='<?php echo Gral::getPath('path_http') ?>admin/gen_widget/WIDGET_ULTIMAS_ACTUALIZACIONES/css/widget.css?<?php echo date('dH') ?>' rel='stylesheet' type='text/css' />

<div class="resultados">

    <?php include "novedades_en_bd.php" ?>

    <?php //include "novedades_20180914.php" ?>

    <div class="botonera">
        <?php if (UsCredencial::getEsAcreditado('NOV_NOVEDAD_GESTION')) { ?>
            <a href="nov_novedad_gestion.php" class="boton">Ver Novedades</a>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('NOV_NOVEDAD_ALTA')) { ?>
            <a href="nov_novedad_alta.php" class="boton">+ Agregar Nueva</a>
        <?php } ?>
    </div>

</div>

<script>
    setInitWidgetUltimasActualizaciones();

    function setInitWidgetUltimasActualizaciones() {
        setClickUltimasActualizacionesUno();
    }

    function setClickUltimasActualizacionesUno() {
        $('#cuerpo_widget_WIDGET_ULTIMAS_ACTUALIZACIONES .ultimas-actualizaciones .uno .link-info-extendida-ver').unbind();
        $('#cuerpo_widget_WIDGET_ULTIMAS_ACTUALIZACIONES .ultimas-actualizaciones .uno .link-info-extendida-ver').click(function () {
            var novedad_id = $(this).parents('.uno').attr('novedad_id');
            var leido = $(this).parents('.uno').attr('leido');

            $(this).parents('.uno').find('.link-info-extendida-ver').hide();
            $(this).parents('.uno').find('.info-extendida').show();

            if (leido == 0) {
                setNovedadLeido(novedad_id);
                $(this).parents('.uno').find('.icon-no-leido').fadeOut();
            }
        });
        $('#cuerpo_widget_WIDGET_ULTIMAS_ACTUALIZACIONES .ultimas-actualizaciones .uno .link-info-extendida-ocultar').unbind();
        $('#cuerpo_widget_WIDGET_ULTIMAS_ACTUALIZACIONES .ultimas-actualizaciones .uno .link-info-extendida-ocultar').click(function () {
            $(this).parents('.uno').find('.link-info-extendida-ver').show();
            $(this).parents('.uno').find('.info-extendida').hide();
        });
    }

    function setNovedadLeido(novedad_id) {
        $.ajax({
            type: 'POST',
            url: "gen_widget/WIDGET_ULTIMAS_ACTUALIZACIONES/ajax/set_novedad_leido.php",
            data: 'novedad_id=' + novedad_id,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (data) {

            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
    }
</script>