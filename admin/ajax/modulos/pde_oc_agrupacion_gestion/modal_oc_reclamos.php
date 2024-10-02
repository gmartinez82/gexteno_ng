<?php
include "_autoload.php";

$oc_id = Gral::getVars(2, 'oc_id', 0);
$pde_oc = new PdeOc();
if($pde_oc != 0){
        $pde_oc = PdeOc::getOxId($oc_id);
}
$pde_oc_reclamos = $pde_oc->getPdeOcReclamos();

?>
<?php include "pde_oc_gestion_modal_top.php" ?>   

<table border="0" class="tabla-modal">
  <tr>
    <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Codigo') ?></td>
    <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Fecha') ?></td>
    <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Cod OC') ?></td>
    <td class="adm_tbl_encabezado" width="450" align='center'><?php Lang::_lang('Reclamo') ?></td>
    <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang('Generado Por') ?></td>
  </tr>
  <?php 
  $cont = 0;
  foreach($pde_oc_reclamos as $pde_oc_reclamo){ 
  $cont++;
  ?>
  <tr>
    <td class="adm_tbl_lineas" align="center">
        <?php Gral::_echo($pde_oc_reclamo->getCodigo()) ?>
    </td>
    <td class="adm_tbl_lineas" align="center">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_reclamo->getCreado())) ?>
    </td>
    <td class="adm_tbl_lineas" align="center">
		<?php if($pde_oc_reclamo->getPdeOc()){ ?>
        <div class="oc-codigo"><?php Gral::_echo($pde_oc_reclamo->getPdeOc()->getCodigo()) ?></div>
        <div class="oc-tipo-estado">
            <img src='imgs/pde_oc_estado/<?php Gral::_echo($pde_oc_reclamo->getPdeOc()->getPdeOcEstadoActual()->getPdeOcTipoEstado()->getCodigo()) ?>.png' width='12' align='absmiddle' />
            <?php Gral::_echo($pde_oc_reclamo->getPdeOc()->getPdeOcEstadoActual()->getPdeOcTipoEstado()->getDescripcion()) ?>
        </div>
        <?php } ?>
        </td>
    <td class="adm_tbl_lineas" align="left">
        <div class="motivo"><strong><?php Gral::_echo($pde_oc_reclamo->getPdeOcReclamoMotivo()->getDescripcion()) ?></strong>: </div>
        <div class="observacion"><?php Gral::_echo($pde_oc_reclamo->getObservacion()) ?></div>
    </td>
    <td class="adm_tbl_lineas" align="center">
        <?php Gral::_echo($pde_oc_reclamo->getCreadoPorDescripcion()) ?>
    </td>
  </tr>
  <?php } ?>
</table>
<br />
