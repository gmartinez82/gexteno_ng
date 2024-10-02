<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_oc_enviado_id = Gral::getVars(2, 'pde_oc_enviado_id');
$pde_oc_enviado = PdeOcEnviado::getOxId($pde_oc_enviado_id);
$pde_oc = $pde_oc_enviado->getPdeOc();

?>
<div class="datos" id="<?php Gral::_echo($pde_oc->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeOc') ?>: 
        <strong><?php Gral::_echo($pde_oc->getId()) ?> - <?php Gral::_echo($pde_oc->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_oc_alta.php?id=<?php echo($pde_oc->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOc') ?>: <strong><?php Gral::_echo($pde_oc->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeOcEnviado::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_enviado->getFiltrosArrXCampo('PdeOc', 'pde_oc_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeOcEnviados') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_oc->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

