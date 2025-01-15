<?php

class CalculationObject
{
    private $id;
    private $calcalcCheck;
    private $selectCalc1;
    private $selectCalc2;
    private $selectCalc3;
    private $selectCalc4;
    private $selectCalc5;
    private $selectCalc6;
    private $selectCalc7;
    private $selectCalc8;
    private $inputCalc1;
    private $inputCalc2;
    private $inputCalc3;
    private $inputCalc4;
    private $inputCalc5;
    private $inputCalc6;
    private $inputCalc7;
    private $inputCalc8;
    private $select2Calc1;
    private $select2Calc2;
    private $select2Calc3;
    private $select2Calc4;
    private $select2Calc5;
    private $select2Calc6;
    private $select2Calc7;
    private $select2Calc8;
    private $input2Calc1;
    private $input2Calc2;
    private $input2Calc3;
    private $input2Calc4;
    private $input2Calc5;
    private $input2Calc6;
    private $input2Calc7;
    private $input2Calc8;
    private $input3Calc1;
    private $input3Calc2;
    private $input3Calc3;
    private $input3Calc4;
    private $input3Calc5;
    private $input3Calc6;
    private $input3Calc7;
    private $input3Calc8;

    /**
     * CalculationObject constructor.
     * @param $id
     * @param $selectCalc1
     * @param $selectCalc2
     * @param $selectCalc3
     * @param $selectCalc4
     * @param $selectCalc5
     * @param $selectCalc6
     * @param $selectCalc7
     * @param $selectCalc8
     * @param $inputCalc1
     * @param $inputCalc2
     * @param $inputCalc3
     * @param $inputCalc4
     * @param $inputCalc5
     * @param $inputCalc6
     * @param $inputCalc7
     * @param $inputCalc8
     * @param $select2Calc1
     * @param $select2Calc2
     * @param $select2Calc3
     * @param $select2Calc4
     * @param $select2Calc5
     * @param $select2Calc6
     * @param $select2Calc7
     * @param $select2Calc8
     * @param $input2Calc1
     * @param $input2Calc2
     * @param $input2Calc3
     * @param $input2Calc4
     * @param $input2Calc5
     * @param $input2Calc6
     * @param $input2Calc7
     * @param $input2Calc8
     * @param $input3Calc1
     * @param $input3Calc2
     * @param $input3Calc3
     * @param $input3Calc4
     * @param $input3Calc5
     * @param $input3Calc6
     * @param $input3Calc7
     * @param $input3Calc8
     */
    public function __construct(
        $id,
        $calcalcCheck,
        $selectCalc1,
        $selectCalc2,
        $selectCalc3,
        $selectCalc4,
        $selectCalc5,
        $selectCalc6,
        $selectCalc7,
        $selectCalc8,
        $inputCalc1,
        $inputCalc2,
        $inputCalc3,
        $inputCalc4,
        $inputCalc5,
        $inputCalc6,
        $inputCalc7,
        $inputCalc8,
        $select2Calc1,
        $select2Calc2,
        $select2Calc3,
        $select2Calc4,
        $select2Calc5,
        $select2Calc6,
        $select2Calc7,
        $select2Calc8,
        $input2Calc1,
        $input2Calc2,
        $input2Calc3,
        $input2Calc4,
        $input2Calc5,
        $input2Calc6,
        $input2Calc7,
        $input2Calc8,
        $input3Calc1,
        $input3Calc2,
        $input3Calc3,
        $input3Calc4,
        $input3Calc5,
        $input3Calc6,
        $input3Calc7,
        $input3Calc8
    ) {
        $this->id = $id;
        $this->calcalcCheck = $calcalcCheck;
        $this->selectCalc1 = $selectCalc1;
        $this->selectCalc2 = $selectCalc2;
        $this->selectCalc3 = $selectCalc3;
        $this->selectCalc4 = $selectCalc4;
        $this->selectCalc5 = $selectCalc5;
        $this->selectCalc6 = $selectCalc6;
        $this->selectCalc7 = $selectCalc7;
        $this->selectCalc8 = $selectCalc8;
        $this->inputCalc1 = $inputCalc1;
        $this->inputCalc2 = $inputCalc2;
        $this->inputCalc3 = $inputCalc3;
        $this->inputCalc4 = $inputCalc4;
        $this->inputCalc5 = $inputCalc5;
        $this->inputCalc6 = $inputCalc6;
        $this->inputCalc7 = $inputCalc7;
        $this->inputCalc8 = $inputCalc8;
        $this->select2Calc1 = $select2Calc1;
        $this->select2Calc2 = $select2Calc2;
        $this->select2Calc3 = $select2Calc3;
        $this->select2Calc4 = $select2Calc4;
        $this->select2Calc5 = $select2Calc5;
        $this->select2Calc6 = $select2Calc6;
        $this->select2Calc7 = $select2Calc7;
        $this->select2Calc8 = $select2Calc8;
        $this->input2Calc1 = $input2Calc1;
        $this->input2Calc2 = $input2Calc2;
        $this->input2Calc3 = $input2Calc3;
        $this->input2Calc4 = $input2Calc4;
        $this->input2Calc5 = $input2Calc5;
        $this->input2Calc6 = $input2Calc6;
        $this->input2Calc7 = $input2Calc7;
        $this->input2Calc8 = $input2Calc8;
        $this->input3Calc1 = $input3Calc1;
        $this->input3Calc2 = $input3Calc2;
        $this->input3Calc3 = $input3Calc3;
        $this->input3Calc4 = $input3Calc4;
        $this->input3Calc5 = $input3Calc5;
        $this->input3Calc6 = $input3Calc6;
        $this->input3Calc7 = $input3Calc7;
        $this->input3Calc8 = $input3Calc8;
    }

    // Геттеры и сеттеры для всех полей

    public function getId() { return $this->id; }
    public function setId($id): void { $this->id = $id; }

    public function getCalcalcCheck() { return $this->calcalcCheck; }
    public function setCalcalcCheck($calcalcCheck): void { $this->calcalcCheck = $calcalcCheck; }

    public function getSelectCalc1() { return $this->selectCalc1; }
    public function setSelectCalc1($selectCalc1): void { $this->selectCalc1 = $selectCalc1; }

    public function getSelectCalc2() { return $this->selectCalc2; }
    public function setSelectCalc2($selectCalc2): void { $this->selectCalc2 = $selectCalc2; }

    public function getSelectCalc3() { return $this->selectCalc3; }
    public function setSelectCalc3($selectCalc3): void { $this->selectCalc3 = $selectCalc3; }

    public function getSelectCalc4() { return $this->selectCalc4; }
    public function setSelectCalc4($selectCalc4): void { $this->selectCalc4 = $selectCalc4; }

    public function getSelectCalc5() { return $this->selectCalc5; }
    public function setSelectCalc5($selectCalc5): void { $this->selectCalc5 = $selectCalc5; }

    public function getSelectCalc6() { return $this->selectCalc6; }
    public function setSelectCalc6($selectCalc6): void { $this->selectCalc6 = $selectCalc6; }

    public function getSelectCalc7() { return $this->selectCalc7; }
    public function setSelectCalc7($selectCalc7): void { $this->selectCalc7 = $selectCalc7; }

    public function getSelectCalc8() { return $this->selectCalc8; }
    public function setSelectCalc8($selectCalc8): void { $this->selectCalc8 = $selectCalc8; }

    public function getInputCalc1() { return $this->inputCalc1; }
    public function setInputCalc1($inputCalc1): void { $this->inputCalc1 = $inputCalc1; }

    public function getInputCalc2() { return $this->inputCalc2; }
    public function setInputCalc2($inputCalc2): void { $this->inputCalc2 = $inputCalc2; }

    public function getInputCalc3() { return $this->inputCalc3; }
    public function setInputCalc3($inputCalc3): void { $this->inputCalc3 = $inputCalc3; }

    public function getInputCalc4() { return $this->inputCalc4; }
    public function setInputCalc4($inputCalc4): void { $this->inputCalc4 = $inputCalc4; }

    public function getInputCalc5() { return $this->inputCalc5; }
    public function setInputCalc5($inputCalc5): void { $this->inputCalc5 = $inputCalc5; }

    public function getInputCalc6() { return $this->inputCalc6; }
    public function setInputCalc6($inputCalc6): void { $this->inputCalc6 = $inputCalc6; }

    public function getInputCalc7() { return $this->inputCalc7; }
    public function setInputCalc7($inputCalc7): void { $this->inputCalc7 = $inputCalc7; }

    public function getInputCalc8() { return $this->inputCalc8; }
    public function setInputCalc8($inputCalc8): void { $this->inputCalc8 = $inputCalc8; }

    public function getSelect2Calc1() { return $this->select2Calc1; }
    public function setSelect2Calc1($select2Calc1): void { $this->select2Calc1 = $select2Calc1; }

    public function getSelect2Calc2() { return $this->select2Calc2; }
    public function setSelect2Calc2($select2Calc2): void { $this->select2Calc2 = $select2Calc2; }

    public function getSelect2Calc3() { return $this->select2Calc3; }
    public function setSelect2Calc3($select2Calc3): void { $this->select2Calc3 = $select2Calc3; }

    public function getSelect2Calc4() { return $this->select2Calc4; }
    public function setSelect2Calc4($select2Calc4): void { $this->select2Calc4 = $select2Calc4; }

    public function getSelect2Calc5() { return $this->select2Calc5; }
    public function setSelect2Calc5($select2Calc5): void { $this->select2Calc5 = $select2Calc5; }

    public function getSelect2Calc6() { return $this->select2Calc6; }
    public function setSelect2Calc6($select2Calc6): void { $this->select2Calc6 = $select2Calc6; }

    public function getSelect2Calc7() { return $this->select2Calc7; }
    public function setSelect2Calc7($select2Calc7): void { $this->select2Calc7 = $select2Calc7; }

    public function getSelect2Calc8() { return $this->select2Calc8; }
    public function setSelect2Calc8($select2Calc8): void { $this->select2Calc8 = $select2Calc8; }

    public function getInput2Calc1() { return $this->input2Calc1; }
    public function setInput2Calc1($input2Calc1): void { $this->input2Calc1 = $input2Calc1; }

    public function getInput2Calc2() { return $this->input2Calc2; }
    public function setInput2Calc2($input2Calc2): void { $this->input2Calc2 = $input2Calc2; }

    public function getInput2Calc3() { return $this->input2Calc3; }
    public function setInput2Calc3($input2Calc3): void { $this->input2Calc3 = $input2Calc3; }

    public function getInput2Calc4() { return $this->input2Calc4; }
    public function setInput2Calc4($input2Calc4): void { $this->input2Calc4 = $input2Calc4; }

    public function getInput2Calc5() { return $this->input2Calc5; }
    public function setInput2Calc5($input2Calc5): void { $this->input2Calc5 = $input2Calc5; }

    public function getInput2Calc6() { return $this->input2Calc6; }
    public function setInput2Calc6($input2Calc6): void { $this->input2Calc6 = $input2Calc6; }

    public function getInput2Calc7() { return $this->input2Calc7; }
    public function setInput2Calc7($input2Calc7): void { $this->input2Calc7 = $input2Calc7; }

    public function getInput2Calc8() { return $this->input2Calc8; }
    public function setInput2Calc8($input2Calc8): void { $this->input2Calc8 = $input2Calc8; }

    public function getInput3Calc1() { return $this->input3Calc1; }
    public function setInput3Calc1($input3Calc1): void { $this->input3Calc1 = $input3Calc1; }

    public function getInput3Calc2() { return $this->input3Calc2; }
    public function setInput3Calc2($input3Calc2): void { $this->input3Calc2 = $input3Calc2; }

    public function getInput3Calc3() { return $this->input3Calc3; }
    public function setInput3Calc3($input3Calc3): void { $this->input3Calc3 = $input3Calc3; }

    public function getInput3Calc4() { return $this->input3Calc4; }
    public function setInput3Calc4($input3Calc4): void { $this->input3Calc4 = $input3Calc4; }

    public function getInput3Calc5() { return $this->input3Calc5; }
    public function setInput3Calc5($input3Calc5): void { $this->input3Calc5 = $input3Calc5; }

    public function getInput3Calc6() { return $this->input3Calc6; }
    public function setInput3Calc6($input3Calc6): void { $this->input3Calc6 = $input3Calc6; }

    public function getInput3Calc7() { return $this->input3Calc7; }
    public function setInput3Calc7($input3Calc7): void { $this->input3Calc7 = $input3Calc7; }

    public function getInput3Calc8() { return $this->input3Calc8; }
    public function setInput3Calc8($input3Calc8): void { $this->input3Calc8 = $input3Calc8; }

    public function toJson()
    {
        return [
            'id' => $this->id,
            'calcalcCheck' => $this->calcalcCheck,
            'selectCalc1' => $this->selectCalc1,
            'selectCalc2' => $this->selectCalc2,
            'selectCalc3' => $this->selectCalc3,
            'selectCalc4' => $this->selectCalc4,
            'selectCalc5' => $this->selectCalc5,
            'selectCalc6' => $this->selectCalc6,
            'selectCalc7' => $this->selectCalc7,
            'selectCalc8' => $this->selectCalc8,
            'inputCalc1' => $this->inputCalc1,
            'inputCalc2' => $this->inputCalc2,
            'inputCalc3' => $this->inputCalc3,
            'inputCalc4' => $this->inputCalc4,
            'inputCalc5' => $this->inputCalc5,
            'inputCalc6' => $this->inputCalc6,
            'inputCalc7' => $this->inputCalc7,
            'inputCalc8' => $this->inputCalc8,
            'select2Calc1' => $this->select2Calc1,
            'select2Calc2' => $this->select2Calc2,
            'select2Calc3' => $this->select2Calc3,
            'select2Calc4' => $this->select2Calc4,
            'select2Calc5' => $this->select2Calc5,
            'select2Calc6' => $this->select2Calc6,
            'select2Calc7' => $this->select2Calc7,
            'select2Calc8' => $this->select2Calc8,
            'input2Calc1' => $this->input2Calc1,
            'input2Calc2' => $this->input2Calc2,
            'input2Calc3' => $this->input2Calc3,
            'input2Calc4' => $this->input2Calc4,
            'input2Calc5' => $this->input2Calc5,
            'input2Calc6' => $this->input2Calc6,
            'input2Calc7' => $this->input2Calc7,
            'input2Calc8' => $this->input2Calc8,
            'input3Calc1' => $this->input3Calc1,
            'input3Calc2' => $this->input3Calc2,
            'input3Calc3' => $this->input3Calc3,
            'input3Calc4' => $this->input3Calc4,
            'input3Calc5' => $this->input3Calc5,
            'input3Calc6' => $this->input3Calc6,
            'input3Calc7' => $this->input3Calc7,
            'input3Calc8' => $this->input3Calc8,
        ];
    }
}