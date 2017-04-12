<?php

namespace GTBundle\Entity;

class Criterio {

    private $id;
    private $nombre;

    public function getId() {
        return $this->id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

}
