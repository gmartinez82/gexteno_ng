<?php
include "_autoload.php";
$afip_citi_prc_id = Gral::getVars(2, 'afip_citi_prc_id', 0);

$afip_citi_prc = AfipCitiPrc::getOxId($afip_citi_prc_id);
if ($afip_citi_prc) {
    $afip_citi_descripcion = $afip_citi_prc->getDescripcion();

    $afip_citi_cabeceras = $afip_citi_prc->getAfipCitiCabeceras();
}
?>

<div class="datos modal-afip-citi-regenerar-cabecera-prc" afip_citi_prc_id="<?php Gral::_echo($afip_citi_prc_id); ?>">
    <form id='form_afip_citi_regenerar_cabecera_prc' name='form_afip_citi_regenerar_cabecera_prc' method='POST' action='' >

        <div class="par">
            <div class="label">
                <?php Lang::_lang('Proceso'); ?>
            </div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_descripcion); ?>
            </div>
        </div>
        <table id='listado_afip_citi_cabecera_prc' border='0' align='center' class='listado'>
            <tr>
                <td width='20' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Id'); ?>
                </td>
                <td width='20' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Inicial'); ?>
                </td>
                <td width='20' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Actual'); ?>
                </td>
                <td width='200' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Observacion'); ?>
                </td>
                <td width='600' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Datos'); ?>
                </td>
                <td width='40' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Descargar'); ?>
                </td>
            </tr>

            <?php
            foreach ($afip_citi_cabeceras as $afip_citi_cabecera):
                $estado = ($afip_citi_cabecera->getEstado()) ? 'habilitado' : 'deshabilitado';

                $afip_citi_ventas_cbtes = $afip_citi_cabecera->getAfipCitiVentasCbtes();
                $afip_citi_ventas_alicuotass = $afip_citi_cabecera->getAfipCitiVentasAlicuotass();
                $afip_citi_compras_cbtes = $afip_citi_cabecera->getAfipCitiComprasCbtes();
                $afip_citi_compras_alicuotass = $afip_citi_cabecera->getAfipCitiComprasAlicuotass();
                $afip_citi_compras_importacioness = $afip_citi_cabecera->getAfipCitiComprasImportacioness();
                ?>
                <tr id="tr_afip_citi_cabecera_uno_<?php Gral::_echo($afip_citi_cabecera->getId()) ?>" class="uno" identificador="<?php Gral::_echo($afip_citi_cabecera->getId()) ?>">

                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="id">
                            <?php Gral::_echo($afip_citi_cabecera->getId()); ?>
                        </div>
                    </td>

                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="inicial">
                            <?php if ($afip_citi_cabecera->getInicial()) { ?>
                                <img src='imgs/tilde_<?php echo $afip_citi_cabecera->getInicial() ?>.png' width='16' border='0' alt="img" title="<?php Gral::_echo(GralSiNo::getOxId($afip_citi_cabecera->getInicial())->getDescripcion()) ?>" />
                            <?php } else { ?>
                                -
                            <?php } ?>                                
                        </div>
                    </td>

                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="actual">
                            <?php if ($afip_citi_cabecera->getActual()) { ?>
                                <img src='imgs/tilde_<?php echo $afip_citi_cabecera->getActual() ?>.png' width='16' border='0' alt="img" title="<?php Gral::_echo(GralSiNo::getOxId($afip_citi_cabecera->getActual())->getDescripcion()) ?>" />
                            <?php } else { ?>
                                -
                            <?php } ?>                                
                        </div>
                    </td>

                    <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="creado">
                            Creado el <?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_cabecera->getCreado())); ?> por <?php Gral::_echo($afip_citi_cabecera->getCreadoPorDescripcion()) ?>
                        </div>
                        <div class="observacion">
                            <?php Gral::_echo($afip_citi_cabecera->getObservacion()); ?>
                        </div>
                    </td>

                    <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <?php include "bloque_cabecera_info.php" ?>
                    </td>

                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <ul class="adm_botones_acciones">
                            <?php if ($afip_citi_cabecera->getActual()): ?>
                                <?php if (UsCredencial::getEsAcreditado('AFIP_CITI_PRC_GESTION_ACCION_DESCARGAR_ARCHIVO_ACTUAL')): ?>
                                    <a href="<?php echo Gral::getPath('path_http') ?>admin/ajax/modulos/afip_citi_prc_gestion/set_afip_citi_descargar_archivo_prc.php?afip_citi_cabecera_prc_id=<?php echo $afip_citi_cabecera->getId() ?>" target="_blank">
                                        <img src='imgs/ord_desc.png' width='20' border='0' title="Descargar Archivos Proceso AFIP CITI"/>
                                    </a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </ul>
                    </td>

                </tr>
                <?php
            endforeach;
            ?>
        </table>    


    </form>
</div>

<script>
    setInit();
    setInitAfipCitiPrc();
</script>