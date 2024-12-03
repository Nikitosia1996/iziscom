<?php
include "Dogovor.php";

class DogovorList
{
    public $dogovorList = array();

    /**
     * @param array $dogovorList
     */
    public function __construct()
    {
        $connectionDB = new ConnectionDB();
        $dogovor_query = "SELECT * FROM dogovor";
        $result = mysqli_query($connectionDB->con, $dogovor_query);
        while ($row = mysqli_fetch_assoc($result)) {
            $dogovor = new Dogovor(
                $row['id_dogovor'],
                $row['id_smeta'],
                $row['id_zakazchik'],
                $row['doljn'],
                $row['fio'],
                $row['osn_podpis'],
                $row['rekvizit'],
                $row['istochnik'],
                $row['date_start_work'],
                $row['date_end_work'],
                $row['count_bum'],
                $row['count_el'],
                $row['osn_obsled'],
                $row['nomer_dogovora'],
                $row['date_zakl_dogovora'],
                $row['who_podpis_dog'],
                $row['srok_vid'],
                $row['count_days'],
                $row['prilagaetsa'],
                $row['date_akt'],
                $row['who_podpis_akt'],
                $row['nalich_avans'],
                $row['kompl_chert'],
                $row['count_toms'],
                $row['tek_smeta'],
                $row['calculacia'],
                $row['who_podpis_titul'],
                $row['count_str'],
                $row['name_work'],
                $row['target_work'],
                $row['sum_avans'],
                $row['cost_work'],
            );
            array_push($this->dogovorList, $dogovor);
        };

    }
    public function getDogovorList() {
        return $this->dogovorList;
    }

    public function getDogovorById($id) {
        foreach ($this->dogovorList as $dogovor) {
            if ($dogovor->id_dogovor == $id) {
                return $dogovor;
            }
        }
        return null;
    }

    public function getListDogovors()
    {
        $smetaList = [];
        foreach ($this->dogovorList as $dogovor) {
            $dogovorsData[] = json_decode($dogovor->toJson(), true);
        }

        return json_encode($dogovorsData);
    }
}
$dogovorList = new DogovorList();
$jsonDogovorList = json_encode($dogovorList->getDogovorList());
?>