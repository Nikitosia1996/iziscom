<?php


class HaractObject
{
    /////////////////////////////////

    private $id;
    private $zdanie;
    private $typeZdanie;
    private $stage;
    private $height;
    private $obem;
    private $height_pol;
    private $radio_zdanie;
    private $temperature;
    private $nasishenost;
    private $aggresive_vozdeistvie;
    private $checkb1;
    private $checkb2;
    private $checkb3;
    private $checkb4;
    private $checkb5;
    private $checkb6;
    private $checkb7;
    private $checkb8;
    private $checkb9;
    private $checkb10;
    private $checkb11;
    private $checkb12;

    /**
     * HaractObject constructor.
     * @param $id
     * @param $zdanie
     * @param $typeZdanie
     * @param $stage
     * @param $height
     * @param $obem
     * @param $height_pol
     * @param $radio_zdanie
     * @param $temperature
     * @param $nasishenost
     * @param $aggresive_vozdeistvie
     * @param $checkb1
     * @param $checkb2
     * @param $checkb3
     * @param $checkb4
     * @param $checkb5
     * @param $checkb6
     * @param $checkb7
     * @param $checkb8
     * @param $checkb9
     * @param $checkb10
     * @param $checkb11
     * @param $checkb12
     */
    public function __construct($id, $zdanie, $typeZdanie, $stage, $height, $obem, $height_pol, $radio_zdanie, $temperature, $nasishenost, $aggresive_vozdeistvie, $checkb1, $checkb2, $checkb3, $checkb4, $checkb5, $checkb6, $checkb7, $checkb8, $checkb9, $checkb10, $checkb11, $checkb12)
    {
        $this->id = $id;
        $this->zdanie = $zdanie;
        $this->typeZdanie = $typeZdanie;
        $this->stage = $stage;
        $this->height = $height;
        $this->obem = $obem;
        $this->height_pol = $height_pol;
        $this->radio_zdanie = $radio_zdanie;
        $this->temperature = $temperature;
        $this->nasishenost = $nasishenost;
        $this->aggresive_vozdeistvie = $aggresive_vozdeistvie;
        $this->checkb1 = $checkb1;
        $this->checkb2 = $checkb2;
        $this->checkb3 = $checkb3;
        $this->checkb4 = $checkb4;
        $this->checkb5 = $checkb5;
        $this->checkb6 = $checkb6;
        $this->checkb7 = $checkb7;
        $this->checkb8 = $checkb8;
        $this->checkb9 = $checkb9;
        $this->checkb10 = $checkb10;
        $this->checkb11 = $checkb11;
        $this->checkb12 = $checkb12;
    }


    /**
     * @return mixed
     */
    public function getZdanie()
    {
        return $this->zdanie;
    }

    /**
     * @param mixed $zdanie
     */
    public function setZdanie($zdanie): void
    {
        $this->zdanie = $zdanie;
    }

    /**
     * @return mixed
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * @param mixed $stage
     */
    public function setStage($stage): void
    {
        $this->stage = $stage;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height): void
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getObem()
    {
        return $this->obem;
    }

    /**
     * @param mixed $obem
     */
    public function setObem($obem): void
    {
        $this->obem = $obem;
    }

    /**
     * @return mixed
     */
    public function getHeightPol()
    {
        return $this->height_pol;
    }

    /**
     * @param mixed $height_pol
     */
    public function setHeightPol($height_pol): void
    {
        $this->height_pol = $height_pol;
    }

    /**
     * @return mixed
     */
    public function getRadioZdanie()
    {
        return $this->radio_zdanie;
    }

    /**
     * @param mixed $radio_zdanie
     */
    public function setRadioZdanie($radio_zdanie): void
    {
        $this->radio_zdanie = $radio_zdanie;
    }

    /**
     * @return mixed
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @param mixed $temperature
     */
    public function setTemperature($temperature): void
    {
        $this->temperature = $temperature;
    }

    /**
     * @return mixed
     */
    public function getNasishenost()
    {
        return $this->nasishenost;
    }

    /**
     * @param mixed $nasishenost
     */
    public function setNasishenost($nasishenost): void
    {
        $this->nasishenost = $nasishenost;
    }

    /**
     * @return mixed
     */
    public function getAggresiveVozdeistvie()
    {
        return $this->aggresive_vozdeistvie;
    }

    /**
     * @param mixed $aggresive_vozdeistvie
     */
    public function setAggresiveVozdeistvie($aggresive_vozdeistvie): void
    {
        $this->aggresive_vozdeistvie = $aggresive_vozdeistvie;
    }

    /**
     * @return mixed
     */
    public function getCheckb1()
    {
        return $this->checkb1;
    }

    /**
     * @param mixed $checkb1
     */
    public function setCheckb1($checkb1): void
    {
        $this->checkb1 = $checkb1;
    }

    /**
     * @return mixed
     */
    public function getCheckb2()
    {
        return $this->checkb2;
    }

    /**
     * @param mixed $checkb2
     */
    public function setCheckb2($checkb2): void
    {
        $this->checkb2 = $checkb2;
    }

    /**
     * @return mixed
     */
    public function getCheckb3()
    {
        return $this->checkb3;
    }

    /**
     * @param mixed $checkb3
     */
    public function setCheckb3($checkb3): void
    {
        $this->checkb3 = $checkb3;
    }

    /**
     * @return mixed
     */
    public function getCheckb4()
    {
        return $this->checkb4;
    }

    /**
     * @param mixed $checkb4
     */
    public function setCheckb4($checkb4): void
    {
        $this->checkb4 = $checkb4;
    }

    /**
     * @return mixed
     */
    public function getCheckb5()
    {
        return $this->checkb5;
    }

    /**
     * @param mixed $checkb5
     */
    public function setCheckb5($checkb5): void
    {
        $this->checkb5 = $checkb5;
    }

    /**
     * @return mixed
     */
    public function getCheckb6()
    {
        return $this->checkb6;
    }

    /**
     * @param mixed $checkb6
     */
    public function setCheckb6($checkb6): void
    {
        $this->checkb6 = $checkb6;
    }

    /**
     * @return mixed
     */
    public function getCheckb7()
    {
        return $this->checkb7;
    }

    /**
     * @param mixed $checkb7
     */
    public function setCheckb7($checkb7): void
    {
        $this->checkb7 = $checkb7;
    }

    /**
     * @return mixed
     */
    public function getCheckb8()
    {
        return $this->checkb8;
    }

    /**
     * @param mixed $checkb8
     */
    public function setCheckb8($checkb8): void
    {
        $this->checkb8 = $checkb8;
    }

    /**
     * @return mixed
     */
    public function getCheckb9()
    {
        return $this->checkb9;
    }

    /**
     * @param mixed $checkb9
     */
    public function setCheckb9($checkb9): void
    {
        $this->checkb9 = $checkb9;
    }

    /**
     * @return mixed
     */
    public function getCheckb10()
    {
        return $this->checkb10;
    }

    /**
     * @param mixed $checkb10
     */
    public function setCheckb10($checkb10): void
    {
        $this->checkb10 = $checkb10;
    }

    /**
     * @return mixed
     */
    public function getCheckb11()
    {
        return $this->checkb11;
    }

    /**
     * @param mixed $checkb11
     */
    public function setCheckb11($checkb11): void
    {
        $this->checkb11 = $checkb11;
    }

    /**
     * @return mixed
     */
    public function getCheckb12()
    {
        return $this->checkb12;
    }

    /**
     * @param mixed $checkb12
     */
    public function setCheckb12($checkb12): void
    {
        $this->checkb12 = $checkb12;
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
            'zdanie' => $this->zdanie,
            'typeZdanie' => $this->typeZdanie,
            'stage' => $this->stage,
            'height' => $this->height,
            'obem' => $this->obem,
            'height_pol' => $this->height_pol,
            'radio_zdanie' => $this->radio_zdanie,
            'temperature' => $this->temperature,
            'nasishenost' => $this->nasishenost,
            'aggresive_vozdeistvie' => $this->aggresive_vozdeistvie,
            'checkb1' => $this->checkb1,
            'checkb2' => $this->checkb2,
            'checkb3' => $this->checkb3,
            'checkb4' => $this->checkb4,
            'checkb5' => $this->checkb5,
            'checkb6' => $this->checkb6,
            'checkb7' => $this->checkb7,
            'checkb8' => $this->checkb8,
            'checkb9' => $this->checkb9,
            'checkb10' => $this->checkb10,
            'checkb11' => $this->checkb11,
            'checkb12' => $this->checkb12,
            ];
    }
}