<?php 
require_once "base/BSldSliderImagen.php"; 
class SldSliderImagen extends BSldSliderImagen
{
    const SIZE_MAX_ANCHO = 2000;
    const SIZE_MAX_ALTO = 600;
    
    public function getPathImagenParaTienda($thumb = false){
        $path_thumb = '';
        if($thumb) {
            //$path_thumb = "thumbs/";
        }
        //$path = DbConfig::PATH_HTTP.'archivos/imagenes/sld_slider_imagen/'.$path_thumb.$this->getArchivo();
        //return $path;
        $path = DbConfig::PATH_ABSOLUTO.'archivos/imagenes/sld_slider_imagen/'.$path_thumb.$this->getArchivo();
        //return 'https://tienda.papelerakya.com/images/imagen_producto_default.jpg';

        if (file_get_contents($path)) {
            $imagen = new Imagick($path);
            if($thumb){
                //$imagen->scaleImage(300, 300, true);
            }            
            //$imagen = $this->setMarcaAguaEnImagen($imagen);
            //$imagen = $this->setUrlEnPieImagen($imagen);
            //$imagen = $this->setLogoEnPieImagen($imagen);
            //$imagen = $this->setMarcaEnVerticeImagen($imagen);

            $image_data = "data:image/jpg;base64," . base64_encode($imagen->getImageBlob());
            return $image_data; // devuelve la imagen en b64, intervenida
        }
        
        return $path;
    }
}
?>