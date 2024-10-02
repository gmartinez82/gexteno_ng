<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$us_memo = UsMemo::getOxId($id);
//Gral::prr($us_memo);
?>

<div class="tabs ficha-us_memo" identificador="<?php echo $us_memo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

        <li><a href="#tab_us_memo_estado"><?php Lang::_lang(UsMemoEstado) ?></a></li>
    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par us_memo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_memo->getId()) ?>
            </div>
        </div>

	
        <div class="par us_memo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_memo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_memo us_usuario_id">
            <div class="label"><?php Lang::_lang('Usuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_memo->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_memo us_memo_tipo_estado_id">
            <div class="label"><?php Lang::_lang('UsMemoTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_memo->getUsMemoTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_memo us_memo_tipo_id">
            <div class="label"><?php Lang::_lang('UsMemoTipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_memo->getUsMemoTipo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_memo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_memo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par us_memo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_memo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par us_memo orden">
            <div class="label"><?php Lang::_lang('Orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_memo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par us_memo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_memo->getEst()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

    <!-- Tab UsMemoEstado -->
    <div id="tab_us_memo_estado" class="datos">

        <div class="titulo"><?php Lang::_lang('Historial de UsMemoEstado del UsMemo') ?></div>

        <div class="bloque-historial-estados">

            <table border="0" class="tabla-modal">
                <tr>
                    <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Fecha"); ?></td>
                    <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang("Estado"); ?></td>
                    <td class="adm_tbl_encabezado" width="450" align='center'><?php Lang::_lang("Observaciones"); ?></td>
                    <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Creado por"); ?></td>
                    <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Actual"); ?></td>
                </tr>
                <?php
                $us_memo_estados = $us_memo->getUsMemoEstados(null, null, null, array(array('campo' => 'id', 'orden' => 'desc')));
                $cont = 0;
                foreach ($us_memo_estados as $us_memo_estado) {
                    $cont++;
                    $strong = ($cont == 1) ? 'strong' : '';
                    ?>
                    <tr class="uno us_memo_estado_id_<?php echo $us_memo_estado->getId() ?>" identificador="<?php echo $us_memo_estado->getId() ?>">
                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="fecha">
                                <?php Gral::_echo(Gral::getFechaHoraToWEB($us_memo_estado->getCreado())); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                            <div class="tipo-estado">
                                <img src="imgs/us_memo_tipo_estado/<?php Gral::_echo($us_memo_estado->getUsMemoTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                                <?php Gral::_echo($us_memo_estado->getUsMemoTipoEstado()->getDescripcion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                            <div class="observacion">
                                <?php Gral::_echo($us_memo_estado->getObservacion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="creado-por-descripcion">
                                <?php Gral::_echo($us_memo_estado->getCreadoPorDescripcion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="actual">
                                <img src="imgs/btn_estado_<?php echo $us_memo_estado->getActual(); ?>.gif" width="15" alt="hab" />
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </table>

        </div>
        <br />
        
    </div>    

    <!-- Tab  -->
    <div id="tab_" class="datos">

        <div class="titulo"><?php Lang::_lang('') ?></div>

        <div class="bloque-">
            <?php if(file_exists('modal_ficha_bloque_.php')){ ?>
                <?php include 'modal_ficha_bloque_.php' ?>
            <?php }else{ ?>
                Debe incluir el bloque HTML en el archivo 'modal_ficha_bloque_.php'
            <?php } ?>
        </div>
        
    </div>
        
</div>

