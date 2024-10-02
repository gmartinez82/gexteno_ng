<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'rep_us_navegacion';
$db_nombre_pagina = 'rep_us_navegacion';

if (Gral::esPost()) {
    $cmb_us_usuario_id = Gral::getVars(Gral::VARS_POST, 'cmb_us_usuario_id', 0, Gral::TIPO_INTEGER);
    $txt_desde = Gral::getVars(Gral::VARS_POST, 'txt_desde', '', Gral::TIPO_STRING);
    $txt_hasta = Gral::getVars(Gral::VARS_POST, 'txt_hasta', '', Gral::TIPO_STRING);

    $txt_hora_desde = Gral::getVars(Gral::VARS_POST, 'txt_hora_desde', '', Gral::TIPO_STRING);
    $txt_hora_hasta = Gral::getVars(Gral::VARS_POST, 'txt_hora_hasta', '', Gral::TIPO_STRING);
    
    $txt_desde = Gral::getFechaToDB($txt_desde);
    $txt_hasta = Gral::getFechaToDB($txt_hasta);

    include "rep_us_navegacion_php_excel.php";
} else {
    $txt_desde = Gral::getFechaToWeb(Date::sumarDias(date('Y-m-d'), -7));
    $txt_hasta = date('d/m/Y');
    
    $txt_hora_desde = '00:00';
    $txt_hora_hasta = '23:59';
}
?>

<?php include 'parciales/head.php' ?>

<body>
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>
    <div id='menu'><?php include 'parciales/menuh.php' ?></div>
    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('UsNavegacion') ?> </div>
        <div class='contenedor central reportes'>
            <br />
            <br />
            <form id="form_buscador" name="form_buscador" method="post" action="" target="_blank">
                <div class="buscador">
                    <div class="titulo"><?php Lang::_lang('Reporte de') ?> <?php Lang::_lang('Lista de UsNavegacion') ?></div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Usuario') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(true), '...'), $cmb_us_usuario_id, 'textbox ') ?>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Desde') ?></div>
                        <div class="dato">
                            <input id="txt_desde" name="txt_desde" value="<?php echo $txt_desde; ?>" size="10" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
                            <input type="button" id="cal_txt_desde" value=" ... ">
                            <script type='text/javascript'>
                                Calendar.setup({
                                    inputField: 'txt_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_desde', onUpdate: function () {
                                    }
                                });
                            </script>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Hasta') ?></div>
                        <div class="dato">
                            <input id="txt_hasta" name="txt_hasta" value="<?php echo $txt_hasta; ?>" size="10" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha HASTA') ?>" />
                            <input type="button" id="cal_txt_hasta" value=" ... ">
                            <script type='text/javascript'>
                                Calendar.setup({
                                    inputField: 'txt_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_hasta', onUpdate: function () {
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    
                    <div class='col par'>
                        <div class='label'>Hora Desde</div>
                        <div class='dato'>
                            <input type='text' size='4' class='textbox horamin' id='txt_hora_desde' name='txt_hora_desde' value='<?php Gral::_echo($txt_hora_desde) ?>' />
                        </div>
                    </div>

                    <div class='col par'>
                        <div class=label>Hora Hasta</div>
                        <div class='dato'>
                            <input type='text' size='4' class='textbox horamin' id='txt_hora_hasta' name='txt_hora_hasta' value='<?php Gral::_echo($txt_hora_hasta) ?>' />
                        </div>
                    </div>
                    
                    <div class="botonera">
                        <input id="btn_enviar" name="btn_enviar" class="boton" type="submit" value="<?php Lang::_lang('Ver Reporte') ?>" />
                    </div>
                </div>
            </form>
            <br />
        </div>
    </div>
    <div id='pie'><?php include 'parciales/pie.php' ?></div>
    <div id="div_contextual"></div>
    <div class="div_modal"></div>
</body>
</html>
