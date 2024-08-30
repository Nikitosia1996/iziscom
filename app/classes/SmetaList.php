<?php
include 'Smeta.php';
include 'HaractObject.php';
include 'IshodValObject.php';
include 'ObmerObject.php';

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

    public function pushSmeta($name, $id_zakazchik, $id_podryadchik,$dateNachRab,$dateOkonchRab){
        $sql = "INSERT INTO smets (`name`, `id_zakazchik`, `id_podryadchik`, `date_nach_rab`, `date_okonch_rab`) VALUES ('$name', '$id_zakazchik', '$id_podryadchik', '$dateNachRab', '$dateOkonchRab')";
        if (mysqli_query($connectionDB->con, $sql)) {
            $insertedId = mysqli_insert_id($connectionDB->con);
        }
        return $insertedId;
    }

    public function updateSmetaInDB($con, $id, $id_zakazchik, $id_podryadchik,$dateNachRab,$dateOkonchRab)
    {
        $sql = "update smets set `id_zakazchik`='$id_zakazchik', `id_podryadchik`='$id_podryadchik', `date_nach_rab`='$dateNachRab', `date_okonch_rab`='$dateOkonchRab'
            where id_smeta = '$id'";
        mysqli_query($connectionDB->con, $sql);
        return $id;
    }

    public function getListSmetaFromDB($con)
    {
        $sql = "SELECT s.*, ho.*, siv.*, orw.*, s.id_smeta as id_sm FROM smets s
                left join haract_object ho on ho.id_smeta = s.id_smeta
                left join sbor_ishod_value siv on siv.id_smeta = s.id_smeta
                left join obmernie_raboty orw on orw.id_smeta = s.id_smeta
";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $smeta = new Smeta($row['id_sm'], $row['name'], $row['id_zakazchik'], $row['id_podryadchik'], $row['date_nach_rab'],$row['date_okonch_rab'],
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
                    $row['obmerobs'],
                    $row['choosCunstruct4'],
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
                )
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
