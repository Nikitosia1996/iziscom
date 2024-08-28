<?php


class HaractObject
{
    /////////////////////////////////

    private $id;
    private $typeZdanie;

    /**
     * HaractObject constructor.
     * @param $id
     * @param $typeZdanie
     */

    /////////////////////////////////

    public function __construct($id, $typeZdanie)
    {
        $this->id = $id;
        $this->typeZdanie = $typeZdanie;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTypeZdanie()
    {
        return $this->typeZdanie;
    }

    /**
     * @param mixed $typeZdanie
     */
    public function setTypeZdanie($typeZdanie): void
    {
        $this->typeZdanie = $typeZdanie;
    }
/////////////////////////////////
    public function toJson(){
        return [
            'id' => $this->id,
            'typeZdanie' => $this->typeZdanie
            ];
    }
}