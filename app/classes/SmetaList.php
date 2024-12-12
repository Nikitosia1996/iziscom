<?php
include 'Smeta.php';
include 'HaractObject.php';
include 'IshodValObject.php';
include 'ObmerObject.php';
include 'ObsledObject.php';
include 'SostTechObject.php';
include 'CalculationObject.php';
include 'RedaktorObject.php';
include 'ObsledOtdelObject.php';

class SmetaList
{
    private $smetaList;

    /**
     * UsersList constructor.
     * @param $smetaList
     */
    public function __construct()
    {
        $this->smetaList = array();
    }

    /**
     * @return mixed
     */
    public function getSmetaArray()
    {
        return $this->smetaList;
    }

    /**
     * @param mixed $smetaList
     */
    public function setSmetaList($smetaList): void
    {
        $this->smetaList = $smetaList;
    }

    public function putSmeta($smeta)
    {
        array_push($this->smetaList, $smeta);
    }


    public function getSmetaById($id)
    {
        foreach ($this->smetaList as $smeta) {
            if ($smeta->getId() == $id) {
                return $smeta;
            }
        }
        return null;
    }

    public function pushSmeta($name, $id_zakazchik, $id_podryadchik,$dateNachRab,$dateOkonchRab, $textAreaNaimRabot, $textAreaCel, $textAreaMestoObj){
        $sql = "INSERT INTO smets (`name`, `id_zakazchik`, `id_podryadchik`, `date_nach_rab`, `date_okonch_rab`, textAreaNaimRabot , textAreaCel, textAreaMestoObj) VALUES ('$name', '$id_zakazchik', '$id_podryadchik', '$dateNachRab', '$dateOkonchRab', '$textAreaNaimRabot', '$textAreaCel', '$textAreaMestoObj')";
        if (mysqli_query($connectionDB->con, $sql)) {
            $insertedId = mysqli_insert_id($connectionDB->con);
        }
        return $insertedId;
    }

    public function updateSmetaInDB($con, $id, $id_zakazchik, $id_podryadchik,$dateNachRab,$dateOkonchRab, $textAreaNaimRabot, $textAreaCel, $textAreaMestoObj)
    {
        $sql = "update smets set `id_zakazchik`='$id_zakazchik', `id_podryadchik`='$id_podryadchik', `date_nach_rab`='$dateNachRab', `date_okonch_rab`='$dateOkonchRab' , textAreaNaimRabot = '$textAreaNaimRabot', textAreaCel = '$textAreaCel', textAreaMestoObj = '$textAreaMestoObj'
            where id_smeta = '$id'";
        mysqli_query($connectionDB->con, $sql);
        return $id;
    }

    public function getListSmetaFromDB($con)
    {



        $sql = "SELECT s.*, ho.*, siv.*, orw.*, obsr.*, sost.*,calc.*, redakt.*, obsotd.*, s.id_smeta as id_sm FROM smets s
                left join haract_object ho on ho.id_smeta = s.id_smeta
                left join sbor_ishod_value siv on siv.id_smeta = s.id_smeta
                left join obmernie_raboty orw on orw.id_smeta = s.id_smeta
                left join obsled_raboty obsr on obsr.id_smeta = s.id_smeta
                left join sost_tech_otchet sost on sost.id_smeta = s.id_smeta
                left join calculation calc on calc.id_smeta = s.id_smeta
                left join redaktor redakt on redakt.id_smeta = s.id_smeta
                left join obsled_otdel_constr obsotd on obsotd.id_smeta = s.id_smeta
";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $smeta = new Smeta($row['id_sm'], $row['name'], $row['id_zakazchik'], $row['id_podryadchik'], $row['date_nach_rab'],$row['date_okonch_rab'], $row['textAreaNaimRabot'], $row['textAreaCel'], $row['textAreaMestoObj'],
                new HaractObject($row['id_haract_object'],
                    $row['zdanie'],
                    $row['type_zdanie'],
                    $row['stage'],
                    $row['height'],
                    $row['obem'],
                    $row['height_pol'],
                    $row['radio_zdanie'],
                    $row['temperature'],
                    $row['nasishenost'],
                    $row['aggresive_vozdeistvie'],
                    $row['checkb1'],
                    $row['checkb2'],
                    $row['checkb3'],
                    $row['checkb4'],
                    $row['checkb5'],
                    $row['checkb6'],
                    $row['checkb7'],
                    $row['checkb8'],
                    $row['checkb9'],
                    $row['checkb10'],
                    $row['checkb11'],
                    $row['checkb12'],
                ),
                new IshodValObject($row['id_sbor_ishod_value'],
                    $row['pasport_na_zdanie'],
                    $row['sborCheck'] ?? null,
                    $row['toggleZd1'],
                    $row['conval1'],
                    $row['toggleZd2'],
                    $row['conval2'],
                    $row['toggleZd3'],
                    $row['conval3'],
                    $row['toggleZd4'],
                    $row['conval4'],
                    $row['toggleZd5'],
                    $row['conval5'],
                    $row['toggleZd6'],
                    $row['conval6'],
                    $row['toggleZd7'],
                    $row['conval7'],
                    $row['toggleZd8'],
                    $row['conval8'],
                    $row['toggleZd9'],
                    $row['conval9'],
                    $row['choosCunstruct'],
                ), new ObmerObject($row['id_obmernie_raboty'],
                    $row['obmerCheck'] ?? null,
                    $row['obmerobs'],
                    $row['choosCunstruct4'] ?? null,
                    $row['toggleZd41'],
                    $row['toggleZd42'],
                    $row['toggleZd43'],
                    $row['toggleZd44'],
                    $row['toggleZd45'],
                    $row['toggleZd46'],
                    $row['toggleZd47'],
                    $row['toggleZd48'],
                    $row['toggleZd49'],
                    $row['toggleZd449'],
                    $row['conval41'],
                    $row['conval42'],
                    $row['conval43'],
                    $row['conval44'],
                    $row['conval45'],
                    $row['conval46'],
                    $row['conval47'],
                    $row['conval48'],
                    $row['conval49'],
                    $row['conval449'],
                    $row['toggleZdDopUsl'],
                    $row['toggleZdDopUsl1'],
                ),
                new ObsledObject($row['id_obsled_raboty'],
                    $row['obsledCheck'] ?? null,
                    $row['predvOsmotr'],
                    $row['choosCunstruct5'],
                    $row['toggleZd51'],
                    $row['toggleZd52'],
                    $row['toggleZd53'],
                    $row['toggleZd54'],
                    $row['toggleZd55'],
                    $row['toggleZd56'],
                    $row['toggleZd57'],
                    $row['toggleZd58'],
                    $row['toggleZd59'],
                    $row['conval51'],
                    $row['conval52'],
                    $row['conval53'],
                    $row['conval54'],
                    $row['conval55'],
                    $row['conval56'],
                    $row['conval57'],
                    $row['conval58'],
                    $row['conval59'],
                    $row['toggleSelect1'],
                    $row['toggleSelect2'],
                    $row['povkef'],
                    $row['sooruzhzd'],
                ),
                new SostTechObject($row['id_sost_tech_otchet'],
                    $row['sostTechOtchetCheck'] ?? null,
                    $row['zaklSostStr'],
                    $row['toggleZd61'],
                    $row['toggleZd62'],
                    $row['toggleZd63'],
                    $row['toggleZd64'],
                    $row['toggleZd65'],
                    $row['toggleZd66'],
                    $row['toggleZd67'],
                    $row['toggleZd68'],
                    $row['toggleZd69'],
                    $row['conval61'],
                    $row['conval62'],
                    $row['conval63'],
                    $row['conval64'],
                    $row['conval65'],
                    $row['conval66'],
                    $row['conval67'],
                    $row['conval68'],
                    $row['conval69'],
                    $row['toggleZdDopUslseism'],
                    $row['toggleZdDopUslrazrab'],
                    $row['toggleZdDopUslrazrabrek'],
                    $row['choosCunstruct6'],
                ),
                new CalculationObject($row['id_calculation'],
                    $row['calcalcCheck'] ?? null,
                    $row['selectCalc1'],
                    $row['selectCalc2'],
                    $row['selectCalc3'],
                    $row['selectCalc4'],
                    $row['selectCalc5'],
                    $row['selectCalc6'],
                    $row['selectCalc7'],
                    $row['selectCalc8'],
                    $row['inputCalc1'],
                    $row['inputCalc2'],
                    $row['inputCalc3'],
                    $row['inputCalc4'],
                    $row['inputCalc5'],
                    $row['inputCalc6'],
                    $row['inputCalc7'],
                    $row['inputCalc8'],
                    $row['select2Calc1'],
                    $row['select2Calc2'],
                    $row['select2Calc3'],
                    $row['select2Calc4'],
                    $row['select2Calc5'],
                    $row['select2Calc6'],
                    $row['select2Calc7'],
                    $row['select2Calc8'],
                    $row['input2Calc1'],
                    $row['input2Calc2'],
                    $row['input2Calc3'],
                    $row['input2Calc4'],
                    $row['input2Calc5'],
                    $row['input2Calc6'],
                    $row['input2Calc7'],
                    $row['input2Calc8'],
                    $row['input3Calc1'],
                    $row['input3Calc2'],
                    $row['input3Calc3'],
                    $row['input3Calc4'],
                    $row['input3Calc5'],
                    $row['input3Calc6'],
                    $row['input3Calc7'],
                    $row['input3Calc8'],
                ),
                new RedaktorObject($row['id_redaktor'],
                    $row['redaktorIspConstrCheck'] ?? null,
                    $row['toggleZd71'],
                    $row['toggleZd72'],
                    $row['toggleZd73'],
                    $row['toggleZd74'],
                    $row['conval71'],
                    $row['conval72'],
                    $row['conval73'],
                    $row['conval74'],
                ),
                new ObsledOtdelObject($row['id_obsled_otdel_constr'],
                    $row['obsledotdelCheck'] ?? null,
                    $row['toggleZd81'],
                    $row['toggleZd82'],
                    $row['toggleZd83'],
                    $row['toggleZd84'],
                    $row['toggleZd85'],
                    $row['toggleZd86'],
                    $row['toggleZd87'],
                    $row['toggleZd88'],
                    $row['toggleZd89'],
                    $row['toggleZd081'],
                    $row['toggleZd082'],
                    $row['toggleZd083'],
                    $row['toggleZd084'],
                    $row['toggleZd085'],
                    $row['toggleZd086'],
                    $row['toggleZd087'],
                    $row['toggleZd088'],
                    $row['toggleZd089'],
                    $row['toggleZd0081'],
                    $row['toggleZd0082'],
                    $row['toggleZd0083'],
                    $row['conval81'],
                    $row['conval82'],
                    $row['conval83'],
                    $row['conval84'],
                    $row['conval85'],
                    $row['conval86'],
                    $row['conval87'],
                    $row['conval88'],
                    $row['conval89'],
                    $row['conval081'],
                    $row['conval082'],
                    $row['conval083'],
                    $row['conval084'],
                    $row['conval085'],
                    $row['conval086'],
                    $row['conval087'],
                    $row['conval088'],
                    $row['conval089'],
                    $row['conval0081'],
                    $row['conval0082'],
                    $row['conval0083'],
                    $row['conval811'],
                    $row['conval822'],
                    $row['conval833'],
                    $row['conval844'],
                    $row['conval855'],
                    $row['conval866'],
                    $row['conval877'],
                    $row['conval888'],
                    $row['conval899'],
                    $row['conval0811'],
                    $row['conval0822'],
                    $row['conval0833'],
                    $row['conval0844'],
                    $row['conval0855'],
                    $row['conval0866'],
                    $row['conval0877'],
                    $row['conval0888'],
                    $row['conval0899'],
                    $row['conval00811'],
                    $row['conval00822'],
                    $row['conval00833'],
                    $row['monolit1'],
                    $row['monolit2'],
                    $row['monolit3'],
                    $row['monolit4'],
                    $row['monolit5'],
                    $row['monolit6'],
                    $row['monolit7'],
                    $row['monolit8'],
                    $row['monolit9'],
                    $row['monolit10'],
                    $row['monolit11'],
                    $row['monolit12'],
                    $row['monolit13'],
                    $row['monolit14'],
                    $row['monolit15'],
                    $row['monolit16'],
                    $row['monolit17'],
                    $row['monolit18'],
                    $row['monolit19'],
                    $row['monolit20'],
                    $row['monolit21'],
                ),
            );

            $this->putSmeta($smeta);
        }
    }


    public function getListSmets()
    {
        $smetaList = [];
        foreach ($this->smetaList as $smeta) {
            $smetsData[] = json_decode($smeta->toJson(), true);
        }

        return json_encode($smetsData);
    }
}

$smetaList = new SmetaList();
$smetaList->getListSmetaFromDB($connectionDB->con);
