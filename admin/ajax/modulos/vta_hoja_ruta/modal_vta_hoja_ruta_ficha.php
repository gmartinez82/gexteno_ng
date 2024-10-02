<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_hoja_ruta = VtaHojaRuta::getOxId($id);
//Gral::prr($vta_hoja_ruta);
?>

<div class="tabs ficha-vta_hoja_ruta" identificador="<?php echo $vta_hoja_ruta->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

        <li><a href="#tab_vta_hoja_ruta_estado"><?php Lang::_lang(VtaHojaRutaEstado) ?></a></li>
    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_hoja_ruta id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_hoja_ruta->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_hoja_ruta descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_hoja_ruta->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_hoja_ruta gral_ruta_id">
            <div class="label"><?php Lang::_lang('GralRuta') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_hoja_ruta->getGralRuta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_hoja_ruta ope_chofer_id">
            <div class="label"><?php Lang::_lang('OpeChofer') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_hoja_ruta->getOpeChofer()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_hoja_ruta vta_hoja_ruta_tipo_estado_id">
            <div class="label"><?php Lang::_lang('VtaHojaRutaTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_hoja_ruta->getVtaHojaRutaTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_hoja_ruta codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_hoja_ruta->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_hoja_ruta observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_hoja_ruta->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_hoja_ruta orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_hoja_ruta->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_hoja_ruta estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_hoja_ruta->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

    <!-- Tab VtaHojaRutaEstado -->
    <div id="tab_vta_hoja_ruta_estado" class="datos">

        <div class="titulo"><?php Lang::_lang('Historial de VtaHojaRutaEstado del VtaHojaRuta') ?></div>

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
                $vta_hoja_ruta_estados = $vta_hoja_ruta->getVtaHojaRutaEstados(null, null, null, array(array('campo' => 'id', 'orden' => 'desc')));
                $cont = 0;
                foreach ($vta_hoja_ruta_estados as $vta_hoja_ruta_estado) {
                    $cont++;
                    $strong = ($cont == 1) ? 'strong' : '';
                    ?>
                    <tr class="uno vta_hoja_ruta_estado_id_<?php echo $vta_hoja_ruta_estado->getId() ?>" identificador="<?php echo $vta_hoja_ruta_estado->getId() ?>">
                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="fecha">
                                <?php Gral::_echo(Gral::getFechaHoraToWEB($vta_hoja_ruta_estado->getCreado())); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                            <div class="tipo-estado">
                                <img src="imgs/vta_hoja_ruta_tipo_estado/<?php Gral::_echo($vta_hoja_ruta_estado->getVtaHojaRutaTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                                <?php Gral::_echo($vta_hoja_ruta_estado->getVtaHojaRutaTipoEstado()->getDescripcion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                            <div class="observacion">
                                <?php Gral::_echo($vta_hoja_ruta_estado->getObservacion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="creado-por-descripcion">
                                <?php Gral::_echo($vta_hoja_ruta_estado->getCreadoPorDescripcion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="actual">
                                <img src="imgs/btn_estado_<?php echo $vta_hoja_ruta_estado->getActual(); ?>.gif" width="15" alt="hab" />
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

