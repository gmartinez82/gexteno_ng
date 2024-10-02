<?php

require_once "base/BXmlLenguajeTraduccion.php";

class XmlLenguajeTraduccion extends BXmlLenguajeTraduccion {
    /* Control de XmlLenguaje */

    public function control() {
        $error = new DbError();
        if (Ctrl::esNull($this->getGralLenguajeId())) {
            $error->addError(100, 'Lenguaje');
        }
        if (Ctrl::esNull($this->getXmlLenguajeCodigoId())) {
            $error->addError(100, 'Lenguaje Codigo');
        }
        if (Ctrl::esVacio($this->getTraduccion())){
            $error->addError(100, 'Traduccion');
        }

        return $error;
    }

    static function setArchivoXML() {
        $gral_lenguaje = new GralLenguaje();
        foreach ($gral_lenguaje->getGralLenguajes() as $lenguaje) {
            $c = new Criterio();
            $c->add('estado', 1, Criterio::IGUAL);
            //$c->add('gral_lenguaje_id', $lenguaje->getId(), Criterio::IGUAL);
            $c->addTabla('xml_lenguaje_traduccion');
            $c->setCriterios();
            //$xml_lenguajes = XmlLenguaje::getXmlLenguajes(null, $c);
            $xml_lenguajes_traduccions = $lenguaje->getXmlLenguajeTraduccions(null, $c);

            $texto = '';
            foreach ($xml_lenguajes_traduccions as $xml_lenguajes_traduccion) {
                $texto.= "
	<label>
		<lab>" . $xml_lenguajes_traduccion->getXmlLenguajeCodigo()->getDescripcion() . "</lab>
		<value>" . $xml_lenguajes_traduccion->getTraduccion() . "</value>
	</label>					
				";
            }

            Gral::wrArchivoXML($lenguaje->getCodigo(), $texto);
        }
    }

}

?>