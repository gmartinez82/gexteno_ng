
<?php



$vta_facturas      = $cntb_periodo->getVtaFacturasXCntbDiarioAsiento();
$vta_nota_creditos = $cntb_periodo->getVtaNotaCreditosXCntbDiarioAsiento();
$vta_nota_debitos  = $cntb_periodo->getVtaNotaDebitosXCntbDiarioAsiento();
$vta_recibos       = $cntb_periodo->getVtaRecibosXCntbDiarioAsiento();

$pde_facturas      = $cntb_periodo->getPdeFacturasXCntbDiarioAsiento();
$pde_nota_creditos = $cntb_periodo->getPdeNotaCreditosXCntbDiarioAsiento();
$pde_nota_debitos  = $cntb_periodo->getPdeNotaDebitosXCntbDiarioAsiento();
$pde_recibos       = $cntb_periodo->getPdeRecibosXCntbDiarioAsiento();

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?>'>
    <div class="id">
        <?php Gral::_echo($cntb_periodo->getId()) ?>
    </div>
</td>   

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?>'>
    <div class="descripcion">
        <?php Gral::_echo($cntb_periodo->getDescripcion()) ?>
    </div>
    <?php if (count($cntb_periodo->getArrDescripcionExtendidaParaBackend()) > 0): ?>
        <div class="descripcion-extendida">
            <?php foreach ($cntb_periodo->getArrDescripcionExtendidaParaBackend() as $arr_descripcion_extendida): ?>
                <?php if (trim($arr_descripcion_extendida['dato']) != ''): ?>
                    <div class="descripcion-extendida-uno">
                        <div class="par">
                            <div class="label">
                                <?php Gral::_echo($arr_descripcion_extendida['label']) ?>            
                            </div>
                            <div class="dato">
                                <?php Gral::_echo($arr_descripcion_extendida['dato']) ?>            
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>                
</td>   
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?>'>
    <div class="cntb_ejercicio_id <?php Gral::_echo($cntb_periodo->getCntbEjercicio()->getCodigo()) ?> ">   
        <?php Gral::_echo($cntb_periodo->getCntbEjercicio()->getDescripcion()) ?>
    </div>
</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <?php include "bloque_comprobantes_ventas_info.php"; ?>
</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <?php include "bloque_comprobantes_compras_info.php"; ?>
</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class="adm_botones_acciones">
        <?php if (UsCredencial::getEsAcreditado('CNTB_PERIODO_GESTION_ACCION_REGENERAR')): ?>
            <li class='adm_botones_accion modal-regenerar-periodo'>
                <img src='imgs/btn_refresh.png' width='18' border='0' title="Renerar Periodo"/>
            </li>
        <?php endif; ?>
    </ul>
</td>