<?php

// src/Entity/Contacto.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactoRepository")
 */
class Contacto
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(name="nombre", type="string", length=250, nullable=true)
     */
    protected $nombre;

    /**
     * @ORM\Column(name="telefono", type="string", length=250, nullable=true)
     */
    protected $telefono;

    /**
     * @ORM\Column(name="correo", type="string", length=250, nullable=true)
     */
    protected $correo;

    /**
     * @ORM\Column(name="mensaje", type="string", length=250, nullable=true)
     */
    protected $mensaje;

    /**
     * @return mixed
     */
    public function getId ()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId ($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNombre ()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre ($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getTelefono ()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono ($telefono): void
    {
        $this->telefono = $telefono;
    }

    /**
     * @return mixed
     */
    public function getCorreo ()
    {
        return $this->correo;
    }

    /**
     * @param mixed $correo
     */
    public function setCorreo ($correo): void
    {
        $this->correo = $correo;
    }

    /**
     * @return mixed
     */
    public function getMensaje ()
    {
        return $this->mensaje;
    }

    /**
     * @param mixed $mensaje
     */
    public function setMensaje ($mensaje): void
    {
        $this->mensaje = $mensaje;
    }

}
