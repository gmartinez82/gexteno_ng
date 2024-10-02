<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * @author Esteban Martinez
 * @creado 10/10/2016
 * @modificado_por Esteban Martinez
 * @modificado 19/10/2016
 */

include "_autoload.php";

$os_tipo_id = Gral::getVars(2, "os_tipo_id", 0);
$os_tipo    = OsTipo::getOxId($os_tipo_id);


if($os_tipo)
{
    $arr = array(
            "id" => $os_tipo->getId(),
            "descripcion" => $os_tipo->getDescripcion(),
            "plantilla"   => $os_tipo->getPlantilla()
    );
}
else
{
    $arr = array("id" => 0, "descripcion" => "", "plantilla"   => "");
}

$arr_json = json_encode($arr);

echo $arr_json;

?>