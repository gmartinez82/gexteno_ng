<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$ins_insumo = InsInsumo::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('InsCategoria') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getInsCategoria()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('InsMatriz') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getInsMatriz()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('InsMarca') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getInsMarca()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion Corta') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getDescripcionCorta()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('descripcion_web') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getDescripcionWeb()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('codigo') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getCodigo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo Marca') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getCodigoMarca()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Codigo Interno') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getCodigoInterno()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo Importacion') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getCodigoImportacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Codigo Barra') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getCodigoBarra()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo Barra Interno') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getCodigoBarraInterno()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('URL Tienda') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getUrlTienda()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Unidad Medida') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getInsUnidadMedida()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Es Comprable') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_insumo->getEsComprable())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Es Consumible') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_insumo->getEsConsumible())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Es Vendible') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_insumo->getEsVendible())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Es Fabricable') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_insumo->getEsFabricable())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Es Transformable') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_insumo->getEsTransformableOrigen())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Es Destino Transformacion') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_insumo->getEsTransformableDestino())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('ins_unidad_medida_pedido_id') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getInsUnidadMedidaPedido()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('ins_tipo_consumo_id') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getInsTipoConsumo()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('retornable') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_insumo->getRetornable())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('identificable') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_insumo->getIdentificable())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Control Stock') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_insumo->getControlStock())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Punto de Minimo Default') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getPuntoMinimo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Punto de Pedido Default') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getPuntoPedido()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Punto de Maximo Default') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getPuntoMaximo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('cantidad_maxima_pedido') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getCantidadMaximaPedido()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('ins_tipo_necesidad_id') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getInsTipoNecesidad()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('ins_nivel_aprovisionamiento_id') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getInsNivelAprovisionamiento()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('hereda_marcas') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_insumo->getHeredaMarcas())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('venta_web') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_insumo->getVentaWeb())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('venta_mercadolibre') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_insumo->getVentaMercadolibre())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('venta_mayorista') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_insumo->getVentaMayorista())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GralTipoIvaVenta') ?></div>
        <div class='dato'><?php Gral::_echo(($ins_insumo->getGralTipoIvaVenta() != 'null') ? GralTipoIva::getOxId($ins_insumo->getGralTipoIvaVenta())->getDescripcion() : '') ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('GralTipoIvaVentaZ') ?></div>
        <div class='dato'><?php Gral::_echo(($ins_insumo->getGralTipoIvaVentaZ() != 'null') ? GralTipoIva::getOxId($ins_insumo->getGralTipoIvaVentaZ())->getDescripcion() : '') ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GralTipoIvaCompra') ?></div>
        <div class='dato'><?php Gral::_echo(($ins_insumo->getGralTipoIvaCompra() != 'null') ? GralTipoIva::getOxId($ins_insumo->getGralTipoIvaCompra())->getDescripcion() : '') ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('GralTipoIvaCompraZ') ?></div>
        <div class='dato'><?php Gral::_echo(($ins_insumo->getGralTipoIvaCompraZ() != 'null') ? GralTipoIva::getOxId($ins_insumo->getGralTipoIvaCompraZ())->getDescripcion() : '') ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Proporcion IVA') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getProporcionIva()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('ins_tipo_insumo_id') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getInsTipoInsumo()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('ins_tipo_fabricante_id') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getInsTipoFabricante()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Notas Internas') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getNotasInternas()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Datos Migracion') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getDatosMigracion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Claves') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getClaves()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Claves Atributos') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getClavesAtributos()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Claves Tienda') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getClavesTienda()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getOrden()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

