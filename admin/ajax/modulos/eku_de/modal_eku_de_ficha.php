<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de = EkuDe::getOxId($id);
//Gral::prr($eku_de);
?>

<div class="tabs ficha-eku_de" identificador="<?php echo $eku_de->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

        <li><a href="#tab_eku_de_ope_estado"><?php Lang::_lang(EkuDeOpeEstado) ?></a></li>
    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de eku_de_ope_tipo_estado_id">
            <div class="label"><?php Lang::_lang('EkuDeOpeTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de->getEkuDeOpeTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de eku_dverfor">
            <div class="label"><?php Lang::_lang('eku_dverfor') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de->getEkuDverfor()) ?>
            </div>
        </div>
		
        <div class="par eku_de eku_a002_id_cdc">
            <div class="label"><?php Lang::_lang('eku_a002_id_cdc') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de->getEkuA002IdCdc()) ?>
            </div>
        </div>
		
        <div class="par eku_de eku_a003_ddvid">
            <div class="label"><?php Lang::_lang('eku_a003_ddvid') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de->getEkuA003Ddvid()) ?>
            </div>
        </div>
		
        <div class="par eku_de eku_a004_dfecfirma">
            <div class="label"><?php Lang::_lang('eku_a004_dfecfirma') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de->getEkuA004Dfecfirma()) ?>
            </div>
        </div>
		
        <div class="par eku_de eku_a005_dsisfact">
            <div class="label"><?php Lang::_lang('eku_a005_dsisfact') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de->getEkuA005Dsisfact()) ?>
            </div>
        </div>
		
        <div class="par eku_de eku_de_xml">
            <div class="label"><?php Lang::_lang('eku_de_xml') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de->getEkuDeXml()) ?>
            </div>
        </div>
		
        <div class="par eku_de eku_pp02_id_cdc">
            <div class="label"><?php Lang::_lang('eku_pp02_id_cdc') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de->getEkuPp02IdCdc()) ?>
            </div>
        </div>
		
        <div class="par eku_de eku_pp03_ddecproc">
            <div class="label"><?php Lang::_lang('eku_pp03_ddecproc') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de->getEkuPp03Ddecproc()) ?>
            </div>
        </div>
		
        <div class="par eku_de eku_pp04_ddigval">
            <div class="label"><?php Lang::_lang('eku_pp04_ddigval') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de->getEkuPp04Ddigval()) ?>
            </div>
        </div>
		
        <div class="par eku_de eku_pp050_destres">
            <div class="label"><?php Lang::_lang('eku_pp050_destres') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de->getEkuPp050Destres()) ?>
            </div>
        </div>
		
        <div class="par eku_de eku_pp051_dprotaut">
            <div class="label"><?php Lang::_lang('eku_pp051_dprotaut') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de->getEkuPp051Dprotaut()) ?>
            </div>
        </div>
		
        <div class="par eku_de codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

    <!-- Tab EkuDeOpeEstado -->
    <div id="tab_eku_de_ope_estado" class="datos">

        <div class="titulo"><?php Lang::_lang('Historial de EkuDeOpeEstado del EkuDe') ?></div>

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
                $eku_de_ope_estados = $eku_de->getEkuDeOpeEstados(null, null, null, array(array('campo' => 'id', 'orden' => 'desc')));
                $cont = 0;
                foreach ($eku_de_ope_estados as $eku_de_ope_estado) {
                    $cont++;
                    $strong = ($cont == 1) ? 'strong' : '';
                    ?>
                    <tr class="uno eku_de_ope_estado_id_<?php echo $eku_de_ope_estado->getId() ?>" identificador="<?php echo $eku_de_ope_estado->getId() ?>">
                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="fecha">
                                <?php Gral::_echo(Gral::getFechaHoraToWEB($eku_de_ope_estado->getCreado())); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                            <div class="tipo-estado">
                                <img src="imgs/eku_de_ope_tipo_estado/<?php Gral::_echo($eku_de_ope_estado->getEkuDeOpeTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                                <?php Gral::_echo($eku_de_ope_estado->getEkuDeOpeTipoEstado()->getDescripcion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                            <div class="observacion">
                                <?php Gral::_echo($eku_de_ope_estado->getObservacion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="creado-por-descripcion">
                                <?php Gral::_echo($eku_de_ope_estado->getCreadoPorDescripcion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="actual">
                                <img src="imgs/btn_estado_<?php echo $eku_de_ope_estado->getActual(); ?>.gif" width="15" alt="hab" />
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

