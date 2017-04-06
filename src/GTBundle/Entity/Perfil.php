<?php

namespace GTBundle\Entity;

class Perfil {

    //private $id;
    private $nombre;
    private $objetivo;
    private $reporta;
    private $tareas;

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

}
