<?php 
require_once "base/BInsInsumoImagen.php"; 
class InsInsumoImagen extends BInsInsumoImagen
{ 
    public function getPathImagenParaTienda($thumb = false) {
        $path_thumb = '';
        if ($thumb) {
            //$path_thumb = "thumbs/";
        }
        $path = DbConfig::PATH_HTTP . 'archivos/imagenes/ins_insumo_imagen/' . $path_thumb . $this->getArchivo();
        //return $path;
        $path = DbConfig::PATH_ABSOLUTO . 'archivos/imagenes/ins_insumo_imagen/' . $path_thumb . $this->getArchivo();
        //return 'https://tienda.papelerakya.com/images/imagen_producto_default.jpg';
        
        if (file_get_contents($path)) {
            $imagen = new Imagick($path);
            if($thumb){
                $imagen->scaleImage(300, 300, true);
            }
            $imagen = $this->setMarcaAguaEnImagen($imagen);
            //$imagen = $this->setUrlEnPieImagen($imagen);
            //$imagen = $this->setLogoEnPieImagen($imagen);
            //$imagen = $this->setMarcaEnVerticeImagen($imagen);

            $image_data = "data:image/jpg;base64," . base64_encode($imagen->getImageBlob());
            return $image_data; // devuelve la imagen en b64, intervenida
        }
        return $path;
    }

    public function getTienePlantillaIncorporada($thumb = false) {
        $path_thumb = '';
        if ($thumb) {
            $path_thumb = "thumbs/";
        }
        $path = DbConfig::PATH_HTTP . 'archivos/imagenes/ins_insumo_imagen/' . $path_thumb . $this->getArchivo();

        $imagen = new Imagick($path);

        $tiene_plantilla_incorporada = false;

        $pixel = $imagen->getImagePixelColor($x = $imagen->getImageWidth() - 10, $y = 10);
        $colors = $pixel->getColor();
        $color_r = $colors['r'];
        $color_g = $colors['g'];
        $color_b = $colors['b'];
        if ($color_r > 240 && $color_g < 100 && $color_b < 100) {
            $tiene_plantilla_incorporada = true;
        }
        return $tiene_plantilla_incorporada;
    }

    public function setMarcaAguaEnImagen($imagen) {
        $imagen_marco = new Imagick(DbConfig::PATH_ABSOLUTO_TIENDA . 'images/logos/logo_kya_340_iso_transparente_alpha.png');
        $imagen_marco->scaleImage($imagen->getImageWidth() * 0.2, $imagen->getImageHeight() * 0.2, true);
        //$imagen_marco->rotateimage($color = 'none', $angulo = 360);

        $imagen->setImageVirtualPixelMethod(Imagick::VIRTUALPIXELMETHOD_TRANSPARENT);
        $imagen->compositeImage($imagen_marco, Imagick::COMPOSITE_OVER, (((($imagen->getImageWidth()) - ($imagen_marco->getImageWidth()))) / 2), (((($imagen->getImageHeight()) - ($imagen_marco->getImageHeight()))) / 2), Imagick::CHANNEL_ALPHA);

        return $imagen;
    }

    public function setUrlEnPieImagen($imagen) {

        $dibujo = new ImagickDraw();
        $dibujo->setFillColor('black');
        $dibujo->setFont(DbConfig::PATH_ABSOLUTO.'fonts/roboto/Roboto/Roboto-Black.ttf');
        $dibujo->setFontSize(20);
        $dibujo->setFontWeight(100);
        $dibujo->setFillOpacity(1);

        $imagen->annotateImage($dibujo, $imagen->getImageWidth() * 0.6, $imagen->getImageHeight() - 30, 0, DbConfig::CONFIG_GRAL_SITIO_WEB_MIN);

        return $imagen;
    }

    public function setLogoEnPieImagen($imagen) {

        $imagen_marco = new Imagick(DbConfig::PATH_ABSOLUTO . 'imgs/logo_horizontal_positivo_500.png');
        $imagen_marco->scaleImage(140, 120, true);

        $imagen->setImageVirtualPixelMethod(Imagick::VIRTUALPIXELMETHOD_TRANSPARENT);
        $imagen->compositeImage($imagen_marco, Imagick::COMPOSITE_OVER, 50, $imagen->getImageHeight() - 60);

        return $imagen;
    }

    public function setMarcaEnVerticeImagen($imagen) {

        $imagen_marco = new Imagick(DbConfig::PATH_ABSOLUTO . 'imgs/lae_marca_vertice.png');
        $imagen_marco->scaleImage(200, 200, true);

        $imagen->setImageVirtualPixelMethod(Imagick::VIRTUALPIXELMETHOD_TRANSPARENT);
        $imagen->compositeImage($imagen_marco, Imagick::COMPOSITE_OVER, $imagen->getImageWidth() - 200, 0);

        return $imagen;
    }
}
?>
