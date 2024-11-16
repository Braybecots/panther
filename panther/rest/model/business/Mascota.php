<?php
class mascota{

    /**
     * Identificador de la clase
     *
     * @var float Id
     */
    public $id;
    /**
     * Nombre de la mascota
     *
     * @var string name
     */
    public $name;

    /**
     * Nombre del dueno de la mascota
     *
     * @var string dueño
     */
    public $dueño;

    /**
     * raza de mascota
     *
     * @var string raza
     */
    public $raza;

    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }
/**
     * @param number $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
     /**
     * @param string $name
     */
    public function setname($name)
    {
        $this->name = $name;
    }
     /**
     * @param string $dueño
     */
    public function setdueño($dueño)
    {
        $this->dueño = $dueño;
    }
    public function setraza($raza)
    {
        $this->raza = $raza;
        
    }
}
?>