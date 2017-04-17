<?php

namespace GTBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Perfil {

    private $id;
    private $nombre;
    private $objetivo;
    private $reporta;
    private $tareas;
    private $ucl;
    private $conducta;
    
    public function __construct() {
        $this->ucl = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function setId($id) {
        $this->id = $id;
    }
    
    public function getId() {
        return $this->id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setObjetivo($objetivo) {
        $this->objetivo = $objetivo;
    }

    public function getObjetivo() {
        return $this->objetivo;
    }

    public function setReporta($reporta) {
        $this->reporta = $reporta;
    }

    public function getReporta() {
        return $this->reporta;
    }

    public function setTareas($tareas) {
        $this->tareas = $tareas;
    }

    public function getTareas() {
        return $this->tareas;
    }
    public function setUcl($ucl) {
        $this->ucl = $ucl;
    }

    public function getUcl() {
        return $this->ucl;
    }
    public function setConducta($conducta) {
        $this->conducta = $conducta;
    }

    public function getConducta() {
        return $this->conducta;
    }
    public function __toString()
    {
        return $this->getCompetenciaNombre();
    }
    
}
