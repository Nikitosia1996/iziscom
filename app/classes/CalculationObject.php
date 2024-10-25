<?php


class CalculationObject
{
    private $id;
    private $name_rab;
    private $name_trud;
    private $doljnost_ksd;
    private $tarif;
    private $kol_isp;
    private $sredRazryad;
    private $tarifKoef;

    /**
     * CalculationObject constructor.
     * @param $id
     * @param $name_rab
     * @param $name_trud
     * @param $doljnost_ksd
     * @param $tarif
     * @param $kol_isp
     * @param $sredRazryad
     * @param $tarifKoef
     */
    public function __construct($id, $name_rab, $name_trud, $doljnost_ksd, $tarif, $kol_isp, $sredRazryad, $tarifKoef)
    {
        $this->id = $id;
        $this->name_rab = $name_rab;
        $this->name_trud = $name_trud;
        $this->doljnost_ksd = $doljnost_ksd;
        $this->tarif = $tarif;
        $this->kol_isp = $kol_isp;
        $this->sredRazryad = $sredRazryad;
        $this->tarifKoef = $tarifKoef;
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
    public function getNameRab()
    {
        return $this->name_rab;
    }

    /**
     * @param mixed $name_rab
     */
    public function setNameRab($name_rab): void
    {
        $this->name_rab = $name_rab;
    }

    /**
     * @return mixed
     */
    public function getNameTrud()
    {
        return $this->name_trud;
    }

    /**
     * @param mixed $name_trud
     */
    public function setNameTrud($name_trud): void
    {
        $this->name_trud = $name_trud;
    }

    /**
     * @return mixed
     */
    public function getDoljnostKsd()
    {
        return $this->doljnost_ksd;
    }

    /**
     * @param mixed $doljnost_ksd
     */
    public function setDoljnostKsd($doljnost_ksd): void
    {
        $this->doljnost_ksd = $doljnost_ksd;
    }

    /**
     * @return mixed
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * @param mixed $tarif
     */
    public function setTarif($tarif): void
    {
        $this->tarif = $tarif;
    }

    /**
     * @return mixed
     */
    public function getKolIsp()
    {
        return $this->kol_isp;
    }

    /**
     * @param mixed $kol_isp
     */
    public function setKolIsp($kol_isp): void
    {
        $this->kol_isp = $kol_isp;
    }

    /**
     * @return mixed
     */
    public function getSredRazryad()
    {
        return $this->sredRazryad;
    }

    /**
     * @param mixed $sredRazryad
     */
    public function setSredRazryad($sredRazryad): void
    {
        $this->sredRazryad = $sredRazryad;
    }

    /**
     * @return mixed
     */
    public function getTarifKoef()
    {
        return $this->tarifKoef;
    }

    /**
     * @param mixed $tarifKoef
     */
    public function setTarifKoef($tarifKoef): void
    {
        $this->tarifKoef = $tarifKoef;
    }
    /////////////////////////////////

    public function toJson(){
        return [
            'id' => $this->id,
            'name_rab' => $this->name_rab,
            'name_trud' => $this->name_trud,
            'doljnost_ksd' => $this->doljnost_ksd,
            'tarif' => $this->tarif,
            'kol_isp' => $this->kol_isp,
            'sredRazryad' => $this->sredRazryad,
            'tarifKoef' => $this->tarifKoef,
            ];
    }
}