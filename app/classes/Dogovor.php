<?php

class Dogovor
{
    public $id_dogovor, $id_smeta, $id_zakazchik, $doljn, $fio, $osn_podpis, $rekvizit, $istochnik, $count_bum, $count_el, $osn_obsled,
    $nomer_dogovora, $date_zakl_dogovora, $who_podpis_dog, $srok_vid, $count_days, $prilagaetsa, $date_akt, $who_podpis_akt, $nalich_avans,
    $count_toms, $tek_smeta, $calculacia, $who_podpis_titul, $count_str;

    /**
     * @param $id_dogovor
     * @param $id_smeta
     * @param $id_zakazchik
     * @param $doljn
     * @param $fio
     * @param $osn_podpis
     * @param $rekvizit
     * @param $istochnik
     * @param $count_bum
     * @param $count_el
     * @param $osn_obsled
     * @param $nomer_dogovora
     * @param $date_zakl_dogovora
     * @param $who_podpis_dog
     * @param $srok_vid
     * @param $count_days
     * @param $prilagaeta
     * @param $date_akt
     * @param $who_podpis_akt
     * @param $nalich_avans
     * @param $count_toms
     * @param $tek_smeta
     * @param $calculacia
     * @param $who_podpis_titul
     * @param $count_str
     */
    public function __construct($id_dogovor, $id_smeta, $id_zakazchik, $doljn, $fio, $osn_podpis, $rekvizit, $istochnik, $count_bum, $count_el, $osn_obsled, $nomer_dogovora, $date_zakl_dogovora, $who_podpis_dog, $srok_vid, $count_days, $prilagaetsa, $date_akt, $who_podpis_akt, $nalich_avans, $count_toms, $tek_smeta, $calculacia, $who_podpis_titul, $count_str)
    {
        $this->id_dogovor = $id_dogovor;
        $this->id_smeta = $id_smeta;
        $this->id_zakazchik = $id_zakazchik;
        $this->doljn = $doljn;
        $this->fio = $fio;
        $this->osn_podpis = $osn_podpis;
        $this->rekvizit = $rekvizit;
        $this->istochnik = $istochnik;
        $this->count_bum = $count_bum;
        $this->count_el = $count_el;
        $this->osn_obsled = $osn_obsled;
        $this->nomer_dogovora = $nomer_dogovora;
        $this->date_zakl_dogovora = $date_zakl_dogovora;
        $this->who_podpis_dog = $who_podpis_dog;
        $this->srok_vid = $srok_vid;
        $this->count_days = $count_days;
        $this->prilagaetsa = $prilagaetsa;
        $this->date_akt = $date_akt;
        $this->who_podpis_akt = $who_podpis_akt;
        $this->nalich_avans = $nalich_avans;
        $this->count_toms = $count_toms;
        $this->tek_smeta = $tek_smeta;
        $this->calculacia = $calculacia;
        $this->who_podpis_titul = $who_podpis_titul;
        $this->count_str = $count_str;
    }


    public function toJson() {
        return json_encode([
            'id_dogovor' => $this->id_dogovor,
            'id_smeta' => $this->id_smeta,
            'id_zakazchik' => $this->id_zakazchik,
            'doljn' => $this->doljn,
            'fio' => $this->fio,
            'osn_podpis' => $this->osn_podpis,
            'rekvizit' => $this->rekvizit,
            'istochnik' => $this->istochnik,
            'count_bum' => $this->count_bum,
            'count_el' => $this->count_el,
            'osn_obsled' => $this->osn_obsled,
            'nomer_dogovora' => $this->nomer_dogovora,
            'date_zakl_dogovora' => $this->date_zakl_dogovora,
            'who_podpis_dog' => $this->who_podpis_dog,
            'srok_vid' => $this->srok_vid,
            'count_days' => $this->count_days,
            'prilagaetsa' => $this->prilagaetsa,
            'date_akt' => $this->date_akt,
            'who_podpis_akt' => $this->who_podpis_akt,
            'nalich_avans' => $this->nalich_avans,
            'count_toms' => $this->count_toms,
            'tek_smeta' => $this->tek_smeta,
            'calculacia' => $this->calculacia,
            'who_podpis_titul' => $this->who_podpis_titul,
            'count_str' => $this->count_str,
        ]);
    }

}