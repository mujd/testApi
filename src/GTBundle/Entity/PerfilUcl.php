<?php

namespace GTBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class PerfilUcl {

    private $id;
    private $nombre;
    private $nivel;
    

    public function getId() {
        return $this->id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNivel($nivel) {
        $this->nivel = $nivel;
    }

    public function getNivel() {
        return $this->nivel;
    }
    public function __toString() {
        return $this->getNombre();
    }
    
    
}
