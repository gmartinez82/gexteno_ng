<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_nota_credito_archivo = PdeNotaCreditoArchivo::getOxId($id);
//Gral::prr($pde_nota_credito_archivo);
?>

<div class="tabs ficha-pde_nota_credito_archivo" identificador="<?php echo $pde_nota_credito_archivo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_nota_credito_archivo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_archivo->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_nota_credito_archivo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_archivo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_archivo pde_nota_credito_id">
            <div class="label"><?php Lang::_lang('PdeNotaCredito') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_archivo->getPdeNotaCredito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_archivo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_archivo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_archivo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_archivo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_archivo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_archivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_archivo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_archivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_archivo archivo">
            <div class="label"><?php Lang::_lang('Archivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_archivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_archivo peso">
            <div class="label"><?php Lang::_lang('Peso') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_archivo->getPeso()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_archivo tipo">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_archivo->getTipo()) ?>
            </div>
        </div>
	
    </div>    

</div>

