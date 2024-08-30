<?php


class Smeta
{
    private $id;
    private $name;
    private $id_zakazchik;
    private $id_podryadchik;
    private $dateNachRab;
    private $dateOkonchRab;
    private $haractObject;
    private $ishodValObject;
    private $obmerObject;


    /**
     * Smeta constructor.
     * @param $id
     * @param $name
     * @param $id_zakazchik
     * @param $id_podryadchik
     * @param $dateNachRab
     * @param $dateOkonchRab
     * @param $haractObject
     * @param $ishodValObject
     * @param $obmerObject
     */
    public function __construct($id, $name, $id_zakazchik, $id_podryadchik, $dateNachRab, $dateOkonchRab, $haractObject, $ishodValObject, $obmerObject)
    {
        $this->id = $id;
        $this->name = $name;
        $this->id_zakazchik = $id_zakazchik;
        $this->id_podryadchik = $id_podryadchik;
        $this->dateNachRab = $dateNachRab;
        $this->dateOkonchRab = $dateOkonchRab;
        $this->haractObject = $haractObject;
        $this->ishodValObject = $ishodValObject;
        $this->obmerObject = $obmerObject;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getIdZakazchik()
    {
        return $this->id_zakazchik;
    }

    /**
     * @param mixed $id_zakazchik
     */
    public function setIdZakazchik($id_zakazchik): void
    {
        $this->id_zakazchik = $id_zakazchik;
    }

    /**
     * @return mixed
     */
    public function getIdPodryadchik()
    {
        return $this->id_podryadchik;
    }

    /**
     * @param mixed $id_podryadchik
     */
    public function setIdPodryadchik($id_podryadchik): void
    {
        $this->id_podryadchik = $id_podryadchik;
    }

    /**
     * @return mixed
     */
    public function getDateNachRab()
    {
        return $this->dateNachRab;
    }

    /**
     * @param mixed $dateNachRab
     */
    public function setDateNachRab($dateNachRab): void
    {
        $this->dateNachRab = $dateNachRab;
    }

    /**
     * @return mixed
     */
    public function getHaractObject()
    {
        return $this->haractObject;
    }

    /**
     * @param mixed $haractObject
     */
    public function setHaractObject($haractObject): void
    {
        $this->haractObject = $haractObject;
    }

    /**
     * @return mixed
     */
    public function getIshodValObject()
    {
        return $this->ishodValObject;
    }

    /**
     * @param mixed $ishodValObject
     */
    public function setIshodValObject($ishodValObject): void
    {
        $this->ishodValObject = $ishodValObject;
    }

    /**
     * @return mixed
     */
    public function getDateOkonchRab()
    {
        return $this->dateOkonchRab;
    }

    /**
     * @param mixed $dateOkonchRab
     */
    public function setDateOkonchRab($dateOkonchRab): void
    {
        $this->dateOkonchRab = $dateOkonchRab;
    }



    public function getObmerObject()
    {
        return $this->obmerObject;
    }

    /**
     * @param mixed $obmerObject
     */
    public function setObmerObject($obmerObject): void
    {
        $this->ishodValObject = $obmerObject;
    }




    public function toJson() {
        return json_encode([
            'id' => $this->id,
            'name' => $this->name,
            'id_zakazchik' => $this->id_zakazchik,
            'id_podryadchik' => $this->id_podryadchik,
            'dateNachRab' => $this->dateNachRab,
            'dateOkonchRab' => $this->dateOkonchRab,
            'haractObject' => $this->haractObject->toJson(),
            'ishod' => $this->ishodValObject->toJson(),
            'obmer' => $this->obmerObject->toJson(),
        ]);
    }

}