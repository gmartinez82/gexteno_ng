<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gral_condicion_iva_pde_tipo_nota_credito_id = Gral::getVars(2, 'gral_condicion_iva_pde_tipo_nota_credito_id');
$gral_condicion_iva_pde_tipo_nota_credito = GralCondicionIvaPdeTipoNotaCredito::getOxId($gral_condicion_iva_pde_tipo_nota_credito_id);
$pde_tipo_nota_credito = $gral_condicion_iva_pde_tipo_nota_credito->getPdeTipoNotaCredito();

?>
<div class="datos" id="<?php Gral::_echo($pde_tipo_nota_credito->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeTipoNotaCredito') ?>: 
        <strong><?php Gral::_echo($pde_tipo_nota_credito->getId()) ?> - <?php Gral::_echo($pde_tipo_nota_credito->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_tipo_nota_credito_alta.php?id=<?php echo($pde_tipo_nota_credito->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeTipoNotaCredito') ?>: <strong><?php Gral::_echo($pde_tipo_nota_credito->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GralCondicionIvaPdeTipoNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $gral_condicion_iva_pde_tipo_nota_credito->getFiltrosArrXCampo('PdeTipoNotaCredito', 'pde_tipo_nota_credito_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoNotaCreditos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_tipo_nota_credito->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

