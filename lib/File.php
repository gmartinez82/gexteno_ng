<?php

class File {

    const PATH_PROD_IMG = 'archivos/imagenes/';
    const PATH_PROD_THUMBS = 'thumbs/';
    
    const SIZE_MAX_ANCHO = 800;
    const SIZE_MAX_ALTO = 600;

    /*
      Retorna un Tipo de Datos de acuerdo a su Tipo MIME
     */

    public function getTipoFromMime($type) {
        $tipo = '';
        switch ($type) {
            // PDF
            case 'application/pdf': $tipo = 'PDF';
                break;

            // Excel
            case 'application/msword': $tipo = 'DOC';
                break;
            case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document': $tipo = 'DOC';
                break;

            // Word
            case 'application/vnd.ms-excel': $tipo = 'XLS';
                break;
            case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet': $tipo = 'XLS';
                break;

            // Audio MP3
            case 'audio/mpeg': $tipo = 'MP3';
                break;

            // Imagen JPG
            case 'image/jpeg': $tipo = 'JPG';
                break;
            case 'image/pjpeg': $tipo = 'JPG';
                break;

            // Imagen GIF
            case 'image/gif': $tipo = 'GIF';
                break;

            // Imagen PNG
            case 'image/png': $tipo = 'PNG';
                break;
        }
        return $tipo;
    }

    /*
      Retorna un Tipo de Datos de acuerdo a su Tipo MIME
     */

    static function getMimeFromTipo($type) {
        $mime = '';
        switch ($type) {
            // Imagen JPG
            case 'JPG':
                $mime = 'image/jpeg';
                break;
            // Imagen GIF
            case 'GIF':
                $mime = 'image/gif';
                break;
            // Imagen PNG
            case 'PNG':
                $mime = 'image/png';
                break;
        }

        return $mime;
    }

    /*
      Retorna el tamanio de las imagenes grandes y thumbs
     */

    static function getImgTamanio($caso, $valor, $o) {

        // ---------------------------------------------------------------------
        // se verifica si existe personalizacion para clase particular
        // ---------------------------------------------------------------------
        $class = get_class($o);

        $size_max_ancho = self::SIZE_MAX_ANCHO;
        if (defined($class.'::SIZE_MAX_ANCHO')) {
            $size_max_ancho = $class::SIZE_MAX_ANCHO;
        }

        $size_max_alto = self::SIZE_MAX_ALTO;
        if (defined($class.'::SIZE_MAX_ALTO')) {
            $size_max_alto = $class::SIZE_MAX_ALTO;
        }
        // ---------------------------------------------------------------------
        
        switch ($caso) {
            case 0: //thumbs
                $imageok = 0;
                while ($imageok == 0) {
                    if ($valor[0] > 150 || $valor[1] > 150) { // ajustar imagen dentro de proporciones maximas definidas
                        $valor[0] = $valor[0] * 0.90;
                        $valor[1] = $valor[1] * 0.90;
                    }
                    else {
                        $imageok = 1;
                        return $valor;
                    }
                }
                break;
            case 1: //file
                $imageok = 0;
                while ($imageok == 0) {
                    if ($valor[0] > $size_max_ancho || $valor[1] > $size_max_alto) { // ajustar imagen dentro de proporciones maximas definidas
                        $valor[0] = $valor[0] * 0.90;
                        $valor[1] = $valor[1] * 0.90;
                    }
                    else {
                        $yimageoka = 1;
                        return $valor;
                    }
                }
                break;
        }
    }

    /*
      Metodo que realiza el upload de la imagen
     */

    public function uploadImg($txt_file, $o, $carpeta) {



        //Ruta de la imagen original
        $rutaImagenOriginal = $txt_file['tmp_name'];

        //Creamos una variable imagen a partir de la imagen original
        switch ($o->getTipo()) {
            case 'JPG': $img_original = imagecreatefromjpeg($rutaImagenOriginal);
                break;
            case 'GIF': $img_original = imagecreatefromgif($rutaImagenOriginal);
                break;
            case 'PNG': $img_original = imagecreatefrompng($rutaImagenOriginal);
                break;
        }


        //Se define el maximo ancho y alto que tendra la imagen final
        $arr_size_original = getimagesize($rutaImagenOriginal);

        $arr_size_grande = self::getImgTamanio(1, $arr_size_original, $o); // tamanio de imagen grande
        $ancho_final = (int) $arr_size_grande[0];
        $alto_final = (int) $arr_size_grande[1];

        $arr_size_thumb = self::getImgTamanio(0, $arr_size_original, $o); // tamanio de imagen thumb
        $ancho_thumb = (int) $arr_size_thumb[0];
        $alto_thumb = (int) $arr_size_thumb[1];

        // se setean ancho y alto de la imagen en el objeto
        $o->setAncho($ancho_final);
        $o->setAlto($alto_final);

        // ------------------------------------------------------------------------------------ Imagen Grande 
        //Creamos una imagen en blanco de tamanio $ancho_final  por $alto_final .
        $tmp = imagecreatetruecolor($ancho_final, $alto_final);

        switch ($o->getTipo()) {
            case "PNG":
                //$background = imagecolorallocate($img_original, 255, 255, 255);
                $background = imagecolorallocatealpha($img_original, 255, 255, 255, 127);
                imagecolortransparent($tmp, $background);
                imagealphablending($tmp, false);
                imagesavealpha($tmp, true);
                break;
            case "GIF":
                $background = imagecolorallocate($img_original, 255, 255, 255);
                imagecolortransparent($img_original, $background);
                break;
        }

        imagecopyresampled($tmp, $img_original, 0, 0, 0, 0, $ancho_final, $alto_final, $arr_size_original[0], $arr_size_original[1]);

        $archivo = Gral::getPathAbs() . self::PATH_PROD_IMG . $carpeta . '/' . $o->getArchivo();
        switch ($o->getTipo()) {
            case 'JPG': imagejpeg($tmp, $archivo, 90);
                break;
            case 'GIF': imagegif($tmp, $archivo, 90);
                break;
            case 'PNG': imagepng($tmp, $archivo, 9);
                break;
        }


        // --------------------------------------------------------------------------------- Imagen Thumbnail 
        //Creamos una imagen en blanco de tamanio $ancho_final  por $alto_final .
        $tmp = imagecreatetruecolor($ancho_thumb, $alto_thumb);

        switch ($o->getTipo()) {
            case "PNG":
                //$background = imagecolorallocate($img_original, 255, 255, 255);
                $background = imagecolorallocatealpha($img_original, 255, 255, 255, 127);
                imagecolortransparent($tmp, $background);
                imagealphablending($tmp, false);
                imagesavealpha($tmp, true);
                break;
            case "GIF":
                $background = imagecolorallocate($img_original, 255, 255, 255);
                imagecolortransparent($img_original, $background);
                break;
        }

        imagecopyresampled($tmp, $img_original, 0, 0, 0, 0, $ancho_thumb, $alto_thumb, $arr_size_original[0], $arr_size_original[1]);

        $archivo = Gral::getPathAbs() . self::PATH_PROD_IMG . $carpeta . '/' . self::PATH_PROD_THUMBS . $o->getArchivo();
        switch ($o->getTipo()) {
            case 'JPG': imagejpeg($tmp, $archivo, 90);
                break;
            case 'GIF': imagegif($tmp, $archivo, 90);
                break;
            case 'PNG': imagepng($tmp, $archivo, 9);
                break;
        }

        imagedestroy($img_original);
    }

    /**
     * 
     * @param type $data
     * @param type $o
     * @param type $carpeta
     */
    static function uploadImgFromBase64($data, $o, $carpeta) {

        $arr_data = explode(',', $data);

        $imageData = $arr_data[1];
        $imageName = Gral::getPathAbs() . 'archivos/imagenes/' . $carpeta . '/' . $o->getArchivo();

        $imageData = base64_decode($imageData);
        $source = imagecreatefromstring($imageData);
        $rotate = imagerotate($source, $angle = 0, 0); // if want to rotate the image
        $imageSave = imagejpeg($rotate, $imageName, 100);

        // thumbnail
        $imageName = Gral::getPathAbs() . 'archivos/imagenes/' . $carpeta . '/thumbs/' . $o->getArchivo();
        $imageSave = imagejpeg($rotate, $imageName, 100);

        imagedestroy($source);
    }

    /**
     * 
     * @param type $url
     * @param type $o
     * @param type $carpeta
     */
    static function uploadImgFromURL($url, $o, $carpeta) {

        $imageName = Gral::getPathAbs() . 'archivos/imagenes/' . $carpeta . '/' . $o->getArchivo();
        file_put_contents($imageName, file_get_contents($url));

        $arr['tmp_name'] = $imageName; // se utiliza el array, porque es lo que recibe el metodo destinatario
        self::uploadImg($arr, $o, $carpeta);
    }

}

?>