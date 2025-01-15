<?php


class Smeta
{
    private $id;
    private $name;
    private $id_zakazchik;
    private $id_podryadchik;
    private $dateNachRab;
    private $dateOkonchRab;
    private $textAreaNaimRabot;
    private $textAreaCel;
    private $textAreaMestoObj;
    private $selectedZakazchik;
    private $selectedPodryadchik;
    private $selectedIziskom;
    private $selectedVskrytie;
    private $selectedKonkursnoe;
    private $summa;
    private $haractObject;
    private $ishodValObject;
    private $obmerObject;
    private $obsledObject;
    private $sostTechObject;
    private $calculationObject;
    private $redaktorObject;
    private $obsledOtdelObject;



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
     * @param $obsledObject
     * @param $sostTechObject
     */
    public function __construct($id, $name, $id_zakazchik, $id_podryadchik, $dateNachRab, $dateOkonchRab,$textAreaNaimRabot,$textAreaCel,$textAreaMestoObj, $selectedZakazchik,$selectedPodryadchik,$selectedIziskom,$selectedVskrytie,$selectedKonkursnoe,  $summa,  $haractObject, $ishodValObject, $obmerObject, $obsledObject, $sostTechObject, $calculationObject, $redaktorObject, $obsledOtdelObject)
    {
        $this->id = $id;
        $this->name = $name;
        $this->id_zakazchik = $id_zakazchik;
        $this->id_podryadchik = $id_podryadchik;
        $this->dateNachRab = $dateNachRab;
        $this->dateOkonchRab = $dateOkonchRab;
        $this->textAreaNaimRabot = $textAreaNaimRabot;
        $this->textAreaCel = $textAreaCel;
        $this->textAreaMestoObj = $textAreaMestoObj;
        $this->selectedZakazchik = $selectedZakazchik;
        $this->selectedPodryadchik = $selectedPodryadchik;
        $this->selectedIziskom = $selectedIziskom;
        $this->selectedVskrytie = $selectedVskrytie;
        $this->selectedKonkursnoe = $selectedKonkursnoe;
        $this->summa = $summa;
        $this->haractObject = $haractObject;
        $this->ishodValObject = $ishodValObject;
        $this->obmerObject = $obmerObject;
        $this->obsledObject = $obsledObject;
        $this->sostTechObject = $sostTechObject;
        $this->calculationObject = $calculationObject;
        $this->redaktorObject = $redaktorObject;
        $this->obsledOtdelObject = $obsledOtdelObject;

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




    public function getTextAreaNaimRabot()
    {
        return $this->textAreaNaimRabot;
    }

    public function setTextAreaNaimRabot($textAreaNaimRabot): void
    {
        $this->textAreaNaimRabot = $textAreaNaimRabot;
    }


    public function getTextAreaCel()
    {
        return $this->textAreaCel;
    }

    public function setTextAreaCel($textAreaCel): void
    {
        $this->textAreaCel = $textAreaCel;
    }




    public function getTextAreaMestoObj()
    {
        return $this->textAreaMestoObj;
    }

    public function setTextAreaMestoObj($textAreaMestoObj): void
    {
        $this->textAreaMestoObj = $textAreaMestoObj;
    }


    //---------------



    public function getSelectedZakazchik()
    {
        return $this->selectedZakazchik;
    }

    public function setSelectedZakazchik($selectedZakazchik): void
    {
        $this->selectedZakazchik = $selectedZakazchik;
    }

    public function getSelectedPodryadchik()
{
    return $this->selectedPodryadchik;
}

    public function setSelectedPodryadchik($selectedPodryadchik): void
    {
        $this->selectedPodryadchik = $selectedPodryadchik;
    }

    public function getSelectedIziskom()
{
    return $this->selectedIziskom;
}

    public function setSelectedIziskom($selectedIziskom): void
    {
        $this->selectedIziskom = $selectedIziskom;
    }

    public function getSelectedVskrytie()
{
    return $this->selectedVskrytie;
}

    public function setSelectedVskrytie($selectedVskrytie): void
    {
        $this->selectedVskrytie = $selectedVskrytie;
    }

    public function getSelectedKonkursnoe()
{
    return $this->selectedKonkursnoe;
}

    public function setSelectedKonkursnoe($selectedKonkursnoe): void
    {
        $this->selectedKonkursnoe = $selectedKonkursnoe;
    }


    //---------------

    public function getSumma()
    {
        return $this->summa;
    }

    public function setSumma($summa): void
    {
        $this->summa = $summa;
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
        $this->obmerObject = $obmerObject;
    }


    public function getObsledObject()
    {
        return $this->obsledObject;
    }

    /**
     * @param mixed $obsledObject
     */
    public function setObsledObject($obsledObject): void
    {
        $this->obsledObject = $obsledObject;
    }


    public function getSostTechObject()
    {
        return $this->sostTechObject;
    }

    /**
     * @param mixed $sostTechObject
     */
    public function setSostTechObject($sostTechObject): void
    {
        $this->sostTechObject = $sostTechObject;
    }


    public function getCalculationObject()
    {
        return $this->calculationObject;
    }

    /**
     * @param mixed $calculationObject
     */
    public function setCalculationObject($calculationObject): void
    {
        $this->calculationObject = $calculationObject;
    }

    public function getRedaktorObject()
    {
        return $this->redaktorObject;
    }

    /**
     * @param mixed $RedaktorObject
     */
    public function setRedaktorObject($redaktorObject): void
    {
        $this->redaktorObject = $redaktorObject;
    }

    public function getObsledOtdelObject()
    {
        return $this->obsledOtdelObject;
    }

    /**
     * @param mixed $ObsledOtdelObject
     */
    public function setObsledOtdelObject($obsledOtdelObject): void
    {
        $this->obsledOtdelObject = $obsledOtdelObject;
    }





    public function toJson() {
        return json_encode([
            'id' => $this->id,
            'name' => $this->name,
            'id_zakazchik' => $this->id_zakazchik,
            'id_podryadchik' => $this->id_podryadchik,
            'dateNachRab' => $this->dateNachRab,
            'dateOkonchRab' => $this->dateOkonchRab,
            'textAreaNaimRabot' => $this->textAreaNaimRabot,
            'textAreaCel' => $this->textAreaCel,
            'textAreaMestoObj' => $this->textAreaMestoObj,
            'selectedZakazchik' => $this->selectedZakazchik,
            'selectedPodryadchik' => $this->selectedPodryadchik,
            'selectedIziskom' => $this->selectedIziskom,
            'selectedVskrytie' => $this->selectedVskrytie,
            'selectedKonkursnoe' => $this->selectedKonkursnoe,
            'summa' => $this->summa,
            'haractObject' => $this->haractObject->toJson(),
            'ishod' => $this->ishodValObject->toJson(),
            'obmer' => $this->obmerObject->toJson(),
            'obsled' => $this->obsledObject->toJson(),
            'sosttech' => $this->sostTechObject->toJson(),
            'calculator' => $this->calculationObject->toJson(),
            'redaktor' => $this->redaktorObject->toJson(),
            'obsledotdel' => $this->obsledOtdelObject->toJson(),
        ]);
    }

}