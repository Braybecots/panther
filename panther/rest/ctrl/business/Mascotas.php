<?php
class Mascotas extends Request {

    /**
     * Datos de la tabla "person"
     *
     * @var string
     */
    const NAME_TABLE = "mascota";
    public static function init()
    {
        parent::$nameTable = self::NAME_TABLE;
        parent::$queryInsert = INTSERT_MASCOTA;
        parent::$queryUpdate = UPDATE_MASCOTA;
    }

    public static function updateParameter($object, $statement, $id)
    {
        $statement->bindParam(1, $object->name);
        $statement->bindParam(2, $object->dueño);
        $statement->bindParam(3, $object->raza);
        $statement->bindParam(5, $id);
    }

    public static function insertParameter($object, $statement)
    {
        $statement->bindParam(1, $object->name);
        $statement->bindParam(2, $object->dueño);
        $statement->bindParam(3, $object->raza);

    }


}
?>