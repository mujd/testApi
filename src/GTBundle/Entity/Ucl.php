<?php

namespace GTBundle\Entity;

class Ucl {

    private $id;
    private $nombre;
    private $definicion;

    public function getId() {
        return $this->id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setDefinicion($definicion) {
        $this->definicion = $definicion;
    }

    public function getDefinicion() {
        return $this->definicion;
    }

    public function __toString() {
        return $this->getNombre();
    }

}
