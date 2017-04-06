<?php

namespace GTBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modulo
 *
 * @ORM\Table(name="modulo")
 * @ORM\Entity(repositoryClass="GTBundle\Repository\ModuloRepository")
 */
class Modulo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="moduloCodigo", type="string", length=10)
     */
    private $moduloCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="moduloNombre", type="string", length=255)
     */
    private $moduloNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="moduloObjetivo", type="text")
     */
    private $moduloObjetivo;

    /**
     * @var int
     *
     * @ORM\Column(name="moduloHoras", type="integer")
     */
    private $moduloHoras;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set moduloCodigo
     *
     * @param string $moduloCodigo
     *
     * @return Modulo
     */
    public function setModuloCodigo($moduloCodigo)
    {
        $this->moduloCodigo = $moduloCodigo;

        return $this;
    }

    /**
     * Get moduloCodigo
     *
     * @return string
     */
    public function getModuloCodigo()
    {
        return $this->moduloCodigo;
    }

    /**
     * Set moduloNombre
     *
     * @param string $moduloNombre
     *
     * @return Modulo
     */
    public function setModuloNombre($moduloNombre)
    {
        $this->moduloNombre = $moduloNombre;

        return $this;
    }

    /**
     * Get moduloNombre
     *
     * @return string
     */
    public function getModuloNombre()
    {
        return $this->moduloNombre;
    }

    /**
     * Set moduloObjetivo
     *
     * @param string $moduloObjetivo
     *
     * @return Modulo
     */
    public function setModuloObjetivo($moduloObjetivo)
    {
        $this->moduloObjetivo = $moduloObjetivo;

        return $this;
    }

    /**
     * Get moduloObjetivo
     *
     * @return string
     */
    public function getModuloObjetivo()
    {
        return $this->moduloObjetivo;
    }

    /**
     * Set moduloHoras
     *
     * @param integer $moduloHoras
     *
     * @return Modulo
     */
    public function setModuloHoras($moduloHoras)
    {
        $this->moduloHoras = $moduloHoras;

        return $this;
    }

    /**
     * Get moduloHoras
     *
     * @return int
     */
    public function getModuloHoras()
    {
        return $this->moduloHoras;
    }
}
