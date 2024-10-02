<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$per_persona_id = Gral::getVars(2, 'per_persona_id');
$per_persona = PerPersona::getOxId($per_persona_id);
$gral_area = $per_persona->getGralArea();

?>
<div class="datos" id="<?php Gral::_echo($gral_area->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralArea') ?>: 
        <strong><?php Gral::_echo($gral_area->getId()) ?> - <?php Gral::_echo($gral_area->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_area_alta.php?id=<?php echo($gral_area->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralArea') ?>: <strong><?php Gral::_echo($gral_area->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PerPersona::getFiltrosArrGral() ?>&arr=<?php echo $per_persona->getFiltrosArrXCampo('GralArea', 'gral_area_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PerPersonas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_area->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

