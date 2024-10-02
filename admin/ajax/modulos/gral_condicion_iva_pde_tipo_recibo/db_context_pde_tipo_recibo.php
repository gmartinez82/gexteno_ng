<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gral_condicion_iva_pde_tipo_recibo_id = Gral::getVars(2, 'gral_condicion_iva_pde_tipo_recibo_id');
$gral_condicion_iva_pde_tipo_recibo = GralCondicionIvaPdeTipoRecibo::getOxId($gral_condicion_iva_pde_tipo_recibo_id);
$pde_tipo_recibo = $gral_condicion_iva_pde_tipo_recibo->getPdeTipoRecibo();

?>
<div class="datos" id="<?php Gral::_echo($pde_tipo_recibo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeTipoRecibo') ?>: 
        <strong><?php Gral::_echo($pde_tipo_recibo->getId()) ?> - <?php Gral::_echo($pde_tipo_recibo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_tipo_recibo_alta.php?id=<?php echo($pde_tipo_recibo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeTipoRecibo') ?>: <strong><?php Gral::_echo($pde_tipo_recibo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GralCondicionIvaPdeTipoRecibo::getFiltrosArrGral() ?>&arr=<?php echo $gral_condicion_iva_pde_tipo_recibo->getFiltrosArrXCampo('PdeTipoRecibo', 'pde_tipo_recibo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoRecibos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_tipo_recibo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

