<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'us_clave';

$us_usuario = new UsUsuario();
$error = new DbError();

if (Gral::esPost()) {
    $hdn_id = Gral::getVars(1, 'hdn_id');
    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $chk_omitir_control_clave = Gral::getVars(1, 'chk_omitir_control_clave', 0);

    $accion = '';
    if (trim($btn_guardar) != '') {
        $accion = 'guardar';
    }

    $us_usuario = new UsUsuario();
    $us_usuario->setId($hdn_id);

    $txt_clave_old = Gral::getVars(1, 'txt_clave_old');
    $txt_clave_new = Gral::getVars(1, 'txt_clave_new');
    $txt_clave_new_repetida = Gral::getVars(1, 'txt_clave_new_repetida');
    $chk_forzar = $_POST['chk_forzar'];


    switch ($accion) {
        case 'guardar':
            //$error = $us_usuario->control();
            $error = new DbError();
            $estado = false;


            if (!$chk_forzar == 1) {
                if (Ctrl::esVacio($txt_clave_old)) {
                    $estado = false;
                    $error->addError(100, 'Clave Anterior');
                }
            }

            if (Ctrl::esVacio($txt_clave_new)) {
                $estado = false;
                $error->addError(100, 'Clave Nueva');
            }
            if (Ctrl::esVacio($txt_clave_new_repetida)) {
                $estado = false;
                $error->addError(100, 'Clave Nueva Repetida');
            }

            $usuario_actual = UsUsuario::esValido($us_usuario->getUsuario(), $txt_clave_old);

            if ($chk_forzar == 1) {
                $usuario_actual = true;
            }

            if ($usuario_actual) {
                if ($chk_omitir_control_clave) {
                    if ($txt_clave_new == $txt_clave_new_repetida) {
                        $estado = true;
                    } else {
                        $error->addError(151, 'Clave Nueva');
                    }
                } else {
                    if (UsClave::esClaveValida($txt_clave_new, $error_cod)) {
                        if ($txt_clave_new == $txt_clave_new_repetida) {
                            $estado = true;
                        } else {
                            $error->addError(151, 'Clave Nueva');
                        }
                    } else {
                        $error->addError($error_cod, 'Clave Nueva');
                    }
                }
            } else {
                $error->addError(150, 'Clave Actual');
            }


            if ($estado && !$error->getExisteError()) {
                $us_usuario->setNuevaClave($txt_clave_new);

                header('Location: us_usuario_clave.php?cs=1&id=' . $us_usuario->getId());
            }
            break;
    }
}

if (!$error->getExisteError()) {
    $hdn_id = Gral::getVars(2, 'id');
    if (trim($hdn_id) != '')
        $us_usuario->setId($hdn_id);
}

// ------------------------------------------------------------------------------
// se verifica si el usuario tiene capacidad de administrar claves de otros usuarios o solo la suya
// ------------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado(UsCredencial::US_USUARIO_CLAVE_MULTIUSUARIO)){
    if($hdn_id != $user->getId()){
	header("Location: us_noautorizado.php");
        exit;
    }
}


$us_clave_actual = $us_usuario->getClaveActual();
?>
<?php include 'parciales/head.php' ?>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo' >
        <form id='formu' name='formu' method='post' action=''>
            <div class='adm_cuerpo_titulo'><?php Lang::_lang('Usuario') ?> </div>
            <div class='contenedor central'>

                <?php include 'parciales/confirmacion.php'; ?>
                <?php include 'parciales/error.php'; ?>

                <table border='0' cellspacing='10' class='adm_carga_datos clave-datos' align='center' style="font-size: 11px;">

                    <tr>
                        <td width='200' class='adm_carga_datos_titulos'><?php Lang::_lang('Usuario') ?></td>
                        <td width='420' class='adm_carga_datos_datos'>
                            <div style="font-size: 15px; font-weight: bold;"><?php echo $us_usuario->getDescripcion() ?></div>
                        </td>
                        <td width='300' rowspan="4" >

                            <div class="clave-consideraciones">

                                <h3>Consideraciones para Claves</h3>

                                <ul>
                                    <li>La clave debe tener entre 6 y 16 caracteres.</li>
                                    <li>La clave debe tener al menos 1 letra minúscula.</li>
                                    <li>La clave debe tener al menos 1 letra mayúscula.</li>
                                    <li>La clave debe tener al menos 1 número.</li>
                                </ul>

                                <?php if (UsCredencial::getEsAcreditado('US_USUARIO_CLAVE_ACCION_OMITIR_CONTROL')) { ?>
                                    <div class="clave-consideraciones-omitir">
                                        <input type="checkbox" name="chk_omitir_control_clave" id="chk_omitir_control_clave" value="1" />
                                        <label for="chk_omitir_control_clave"><strong>Omitir Control de Clave</strong></label>
                                    </div>
                                <?php } ?>

                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td class=''>&nbsp;</td>
                        <td align="left" class="texto_gral_gri">&nbsp;Ultimo cambio de contraseña el dia <strong><?php echo Gral::getFechaHoraToWeb($us_clave_actual->getCreado()) ?></strong> hs.</td>
                    </tr>
                    <tr>
                        <td class='adm_carga_datos_titulos'><?php Lang::_lang('Contrasena Actual') ?></td>
                        <td class='adm_carga_datos_datos'>

                            <input name='txt_clave_old' type='password' class='textbox' id='txt_clave_old' size='20' />

                            <?php if (UsCredencial::getEsAcreditado('US_USUARIO_CLAVE_ACCION_NO_SOLICITAR_ANTIGUA')) { ?>
                                <input type="checkbox" name="chk_forzar" id="chk_forzar" value="1">
                                <label for="chk_forzar"><strong>No solicitar clave antigua</strong></label>
                            <?php } ?>
                        </td>
                    </tr>

                    <tr>
                        <td class='adm_carga_datos_titulos'><?php Lang::_lang('Contrasena Nueva') ?></td>
                        <td class='adm_carga_datos_datos'>

                            <input name='txt_clave_new' type='password' class='textbox' id='txt_clave_new' size='20' />

                            <input type="checkbox" name="chk_clave_mostrar" id="chk_clave_mostrar" value="1" />
                            <label for="chk_forzar"><strong>Mostrar claves</strong></label>
                        </td>
                    </tr>

                    <tr>
                        <td class='adm_carga_datos_titulos'><?php Lang::_lang('Repita Contrasena Nueva') ?></td>
                        <td class='adm_carga_datos_datos'>

                            <input name='txt_clave_new_repetida' type='password' class='textbox' id='txt_clave_new_repetida' size='20' />				  </td>
                    </tr>

                    <tr>
                        <td class='adm_carga_datos_titulos'><?php Lang::_lang('Observaciones') ?></td>
                        <td class='adm_carga_datos_datos'>

                            <textarea name='txa_observacion' rows='5' cols='50' id='txa_observacion' class='textbox'><?php echo $us_usuario->getObservacion() ?></textarea>				  </td>
                    </tr>
                </table>
                <table border='0' align='center'>
                    <tr>
                        <td width='450' class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php echo $us_usuario->getId() ?>'/>

                            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang('Volver al Listado') ?>' onclick='location.href = "us_usuario_adm.php"' />
                            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
                        </td>
                    </tr>
                </table>

            </div>
        </form>
    </div>
    <div id='pie'><?php include 'parciales/pie.php' ?></div>

</body>
</html>
<script>

    $('#chk_clave_mostrar').attr('checked', false);

    $('#chk_clave_mostrar').click(function () {

        name = $('#txt_clave_new').attr('name');
        value = $('#txt_clave_new').attr('value');

        name_repetida = $('#txt_clave_new_repetida').attr('name');
        value_repetida = $('#txt_clave_new_repetida').attr('value');

        if ($(this).attr('checked'))
        {
            html = '<input type="text" name="' + name + '" value="' + value + '" class="textbox" id="txt_clave_new"/>';
            $('#txt_clave_new').after(html).remove();

            html = '<input type="text" name="' + name_repetida + '" value="' + value_repetida + '" class="textbox" id="txt_clave_new_repetida"/>';
            $('#txt_clave_new_repetida').after(html).remove();
        } else
        {
            html = '<input type="password" name="' + name + '" value="' + value + '" class="textbox" id="txt_clave_new"/>';
            $('#txt_clave_new').after(html).remove();

            html = '<input type="password" name="' + name_repetida + '" value="' + value_repetida + '" class="textbox" id="txt_clave_new_repetida"/>';
            $('#txt_clave_new_repetida').after(html).remove();
        }
    });

</script>

