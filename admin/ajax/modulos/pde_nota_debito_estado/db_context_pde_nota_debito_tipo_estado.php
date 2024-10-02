<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_nota_debito_estado_id = Gral::getVars(2, 'pde_nota_debito_estado_id');
$pde_nota_debito_estado = PdeNotaDebitoEstado::getOxId($pde_nota_debito_estado_id);
$pde_nota_debito_tipo_estado = $pde_nota_debito_estado->getPdeNotaDebitoTipoEstado();

?>
<div class="datos" id="<?php Gral::_echo($pde_nota_debito_tipo_estado->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeNotaDebitoTipoEstado') ?>: 
        <strong><?php Gral::_echo($pde_nota_debito_tipo_estado->getId()) ?> - <?php Gral::_echo($pde_nota_debito_tipo_estado->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_nota_debito_tipo_estado_alta.php?id=<?php echo($pde_nota_debito_tipo_estado->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaDebitoTipoEstado') ?>: <strong><?php Gral::_echo($pde_nota_debito_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeNotaDebitoEstado::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_debito_estado->getFiltrosArrXCampo('PdeNotaDebitoTipoEstado', 'pde_nota_debito_tipo_estado_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeNotaDebitoEstados') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_nota_debito_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

