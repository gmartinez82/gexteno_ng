
<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_VINCULO_PDE_TRIBUTO_EXENCION')){ ?>
<div class='vinculo pde_tributo_exencion' padre='prv_proveedor' hijo='pde_tributo_exencion' padre_id='<?php echo $prv_proveedor->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('PdeTributoExencions') ?>
        <?php 
        $cantidad_pde_tributo_exencions = count($prv_proveedor->getPdeTributoExencions());
        echo ($cantidad_pde_tributo_exencions > 0) ? '('.$cantidad_pde_tributo_exencions.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='pde_tributo_exencion_txt_buscar' id='pde_tributo_exencion_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_VINCULO_PDE_TRIBUTO_EXENCION_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_tributo_exencion/pde_tributo_exencion_alta.php?prv_proveedor_id=<?php Gral::_echo($prv_proveedor->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'prv_proveedor', 'pde_tributo_exencion', <?php Gral::_echo($prv_proveedor->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PdeTributoExencion') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

