<?php


class RedaktorObject
{
    /////////////////////////////////

    private $id;
    private $toggleZd71;
    private $toggleZd72;
    private $toggleZd73;
    private $toggleZd74;
    private $conval71;
    private $conval72;
    private $conval73;
    private $conval74;






/////////////////////////////////

    /**
     * RedaktorObject constructor.
     * @param $id
     * @param $toggleZd71
     * @param $toggleZd72
     * @param $toggleZd73
     * @param $toggleZd74
     * @param $conval71
     * @param $conval72
     * @param $conval73
     * @param $conval74
     */
    public function __construct($id, $toggleZd71, $toggleZd72, $toggleZd73, $toggleZd74, $conval71, $conval72, $conval73, $conval74)
    {
        $this->id = $id;
        $this->toggleZd71 = $toggleZd71;
        $this->toggleZd72 = $toggleZd72;
        $this->toggleZd73 = $toggleZd73;
        $this->toggleZd74 = $toggleZd74;
        $this->conval71 = $conval71;
        $this->conval72 = $conval72;
        $this->conval73 = $conval73;
        $this->conval74 = $conval74;
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
    public function getToggleZd71()
    {
        return $this->toggleZd71;
    }

    /**
     * @param mixed $toggleZd71
     */
    public function setToggleZd71($toggleZd71): void
    {
        $this->toggleZd71 = $toggleZd71;
    }

    /**
     * @return mixed
     */
    public function getToggleZd72()
    {
        return $this->toggleZd72;
    }

    /**
     * @param mixed $toggleZd72
     */
    public function setToggleZd72($toggleZd72): void
    {
        $this->toggleZd72 = $toggleZd72;
    }

    /**
     * @return mixed
     */
    public function getToggleZd73()
    {
        return $this->toggleZd73;
    }

    /**
     * @param mixed $toggleZd73
     */
    public function setToggleZd73($toggleZd73): void
    {
        $this->toggleZd73 = $toggleZd73;
    }

    /**
     * @return mixed
     */
    public function getToggleZd74()
    {
        return $this->toggleZd74;
    }

    /**
     * @param mixed $toggleZd74
     */
    public function setToggleZd74($toggleZd74): void
    {
        $this->toggleZd74 = $toggleZd74;
    }

    /**
     * @return mixed
     */
    public function getConval71()
    {
        return $this->conval71;
    }

    /**
     * @param mixed $conval71
     */
    public function setConval71($conval71): void
    {
        $this->conval71 = $conval71;
    }

    /**
     * @return mixed
     */
    public function getConval72()
    {
        return $this->conval72;
    }

    /**
     * @param mixed $conval72
     */
    public function setConval72($conval72): void
    {
        $this->conval72 = $conval72;
    }

    /**
     * @return mixed
     */
    public function getConval73()
    {
        return $this->conval73;
    }

    /**
     * @param mixed $conval73
     */
    public function setConval73($conval73): void
    {
        $this->conval73 = $conval73;
    }

    /**
     * @return mixed
     */
    public function getConval74()
    {
        return $this->conval74;
    }

    /**
     * @param mixed $conval74
     */
    public function setConval74($conval74): void
    {
        $this->conval74 = $conval74;
    }






    public function toJson(){
        return [
            'id' => $this->id,
            'toggleZd71' => $this->toggleZd71,
            'toggleZd72' => $this->toggleZd72,
            'toggleZd73' => $this->toggleZd73,
            'toggleZd74' => $this->toggleZd74,
            'conval71' => $this->conval71,
            'conval72' => $this->conval72,
            'conval73' => $this->conval73,
            'conval74' => $this->conval74,
            ];
    }
}