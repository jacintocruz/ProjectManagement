<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proyecto
 *
 * @ORM\Table(name="proyecto")
 * @ORM\Entity
 */
class Proyecto
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=16777215, nullable=true)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inicio_estimado", type="date", nullable=false)
     */
    private $inicioEstimado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin_estimado", type="date", nullable=true)
     */
    private $finEstimado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inicio_real", type="date", nullable=true)
     */
    private $inicioReal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin_real", type="date", nullable=true)
     */
    private $finReal;

    /**
     * @var integer
     *
     * @ORM\Column(name="pm", type="integer", nullable=true)
     */
    private $pm;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Proyecto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Proyecto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set inicioEstimado
     *
     * @param \DateTime $inicioEstimado
     *
     * @return Proyecto
     */
    public function setInicioEstimado($inicioEstimado)
    {
        $this->inicioEstimado = $inicioEstimado;

        return $this;
    }

    /**
     * Get inicioEstimado
     *
     * @return \DateTime
     */
    public function getInicioEstimado()
    {
        return $this->inicioEstimado;
    }

    /**
     * Set finEstimado
     *
     * @param \DateTime $finEstimado
     *
     * @return Proyecto
     */
    public function setFinEstimado($finEstimado)
    {
        $this->finEstimado = $finEstimado;

        return $this;
    }

    /**
     * Get finEstimado
     *
     * @return \DateTime
     */
    public function getFinEstimado()
    {
        return $this->finEstimado;
    }

    /**
     * Set inicioReal
     *
     * @param \DateTime $inicioReal
     *
     * @return Proyecto
     */
    public function setInicioReal($inicioReal)
    {
        $this->inicioReal = $inicioReal;

        return $this;
    }

    /**
     * Get inicioReal
     *
     * @return \DateTime
     */
    public function getInicioReal()
    {
        return $this->inicioReal;
    }

    /**
     * Set finReal
     *
     * @param \DateTime $finReal
     *
     * @return Proyecto
     */
    public function setFinReal($finReal)
    {
        $this->finReal = $finReal;

        return $this;
    }

    /**
     * Get finReal
     *
     * @return \DateTime
     */
    public function getFinReal()
    {
        return $this->finReal;
    }

    /**
     * Set pm
     *
     * @param integer $pm
     *
     * @return Proyecto
     */
    public function setPm($pm)
    {
        $this->pm = $pm;

        return $this;
    }

    /**
     * Get pm
     *
     * @return integer
     */
    public function getPm()
    {
        return $this->pm;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
