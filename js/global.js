var currentUrl = window.location.search;

let etazh = 1;
let visotapola = 1;


let sborCheck = $('#sborCheck');
let obmerCheck = $('#obmerCheck');
let obsledCheck = $('#obsledCheck');
let sostTechOtchetCheck = $('#sostTechOtchetCheck');
let redaktorIspConstrCheck = $('#redaktorIspConstr');
let obsledotdelCheck = $('#obsledotdelCheck');
let calcalcCheck = $('#calcalc');

let chekb1Val;
let chekb2Val;
let chekb3Val;
let chekb4Val;
let chekb5Val;
let chekb6Val;
let chekb7Val;
let chekb8Val;
let chekb9Val;
let chekb10Val;
let chekb11Val;
let chekb12Val;


let arrHaractCheckb;

let calculacia = 0;

let koefObmerWork1 = 1;
let koefObmerWork2 = 1;
let koefObsled1 = 1;
let koefObsled2 = 1;
let koefSosttech1 = 1;
let koefSosttech2 = 1;


let idActiveSmeta;
let idActiveDogovor;

let selectZakazchik = $('#zakazchik');
let selectPodryadchik = $('#podryadchik');
let inputDateNachRab = $('#dateNachRab');
let inputDateOkonchRab = $('#dateOkonchRab');
let textAreaNaimRabot = $('#textAreaNaimRabot');
let textAreaCel = $('#textAreaCel');
let textAreaMestoObj = $('#textAreaMestoObj');
let divSaveSmeta = $('#divSaveSmeta');
let smetaName = $('#smetaName');
let buildingType = $('#buildingType');
let constructionType = $('#constructionType');
let temperatureMode = $('#temperatureMode');
let equipmentSaturation = $('#equipmentSaturation');
let options = $('#options');
let chekb1 = $('#chekb1');
let chekb2 = $('#chekb2');
let chekb3 = $('#chekb3');
let chekb4 = $('#chekb4');
let chekb5 = $('#chekb5');
let chekb6 = $('#chekb6');
let chekb7 = $('#chekb7');
let chekb8 = $('#chekb8');
let chekb9 = $('#chekb9');
let chekb10 = $('#chekb10');
let chekb11 = $('#chekb11');
let chekb12 = $('#chekb12');


let toggleZd1 = $('#toggleZd1');
let toggleZd2 = $('#toggleZd2');
let toggleZd3 = $('#toggleZd3');
let toggleZd4 = $('#toggleZd4');
let toggleZd5 = $('#toggleZd5');
let toggleZd6 = $('#toggleZd6');
let toggleZd7 = $('#toggleZd7');
let toggleZd8 = $('#toggleZd8');
let toggleZd9 = $('#toggleZd9');
let choosCunstruct = $('#choosCunstruct');


let kat_sl_rab = $('.kat_sl_rab');
let toggleZd41 = $('#toggleZd41');
let toggleZd42 = $('#toggleZd42');
let toggleZd43 = $('#toggleZd43');
let toggleZd44 = $('#toggleZd44');
let toggleZd45 = $('#toggleZd45');
let toggleZd46 = $('#toggleZd46');
let toggleZd48 = $('#toggleZd48');
let toggleZd49 = $('#toggleZd49');
let toggleZd449 = $('#toggleZd449');
let choosCunstruct4 = $('#choosCunstruct4');

let kat_sl_rab_obsled = $('.kat_sl_rab_obsled');
let toggleZd51 = $('#toggleZd51');
let toggleZd52 = $('#toggleZd52');
let toggleZd53 = $('#toggleZd53');
let toggleZd54 = $('#toggleZd54');
let toggleZd55 = $('#toggleZd55');
let toggleZd56 = $('#toggleZd56');
let toggleZd57 = $('#toggleZd57');
let toggleZd58 = $('#toggleZd58');
let toggleZd59 = $('#toggleZd59');
let choosCunstruct5 = $('#choosCunstruct5');
let toggleSelect1 = $('#toggleSelect1');
let toggleSelect2 = $('#toggleSelect2');
let povkef = $('#povkef');
let sooruzhzd = $('#sooruzhzd');


let toggleZd61 = $('#toggleZd61');
let toggleZd62 = $('#toggleZd62');
let toggleZd63 = $('#toggleZd63');
let toggleZd64 = $('#toggleZd64');
let toggleZd65 = $('#toggleZd65');
let toggleZd66 = $('#toggleZd66');
let toggleZd67 = $('#toggleZd67');
let toggleZd68 = $('#toggleZd68');
let toggleZd69 = $('#toggleZd69');
let choosCunstruct6 = $('#choosCunstruct6');
let toggleZdDopUslseism = $('#toggleZdDopUslseism');
let toggleZdDopUslrazrab = $('#toggleZdDopUslrazrab');
let toggleZdDopUslrazrabrek = $('#toggleZdDopUslrazrabrek');


let toggleZd71 = $('#toggleZd71');
let toggleZd72 = $('#toggleZd72');
let toggleZd73 = $('#toggleZd73');
let toggleZd74 = $('#toggleZd74');
let conval71 = $('#conval71');
let conval72 = $('#conval72');
let conval73 = $('#conval73');
let conval74 = $('#conval74');


let toggleZd81 = $('#toggleZd81');
let toggleZd82 = $('#toggleZd82');
let toggleZd83 = $('#toggleZd83');
let toggleZd84 = $('#toggleZd84');
let toggleZd85 = $('#toggleZd85');
let toggleZd86 = $('#toggleZd86');
let toggleZd87 = $('#toggleZd87');
let toggleZd88 = $('#toggleZd88');
let toggleZd89 = $('#toggleZd89');
let toggleZd081 = $('#toggleZd081');
let toggleZd082 = $('#toggleZd082');
let toggleZd083 = $('#toggleZd083');
let toggleZd084 = $('#toggleZd084');
let toggleZd085 = $('#toggleZd085');
let toggleZd086 = $('#toggleZd086');
let toggleZd087 = $('#toggleZd087');
let toggleZd088 = $('#toggleZd088');
let toggleZd089 = $('#toggleZd089');
let toggleZd0081 = $('#toggleZd0081');
let toggleZd0082 = $('#toggleZd0082');
let toggleZd0083 = $('#toggleZd0083');
let conval81 = $('#conval81');
let conval811 = $('#conval811');
let conval82 = $('#conval82');
let conval822 = $('#conval822');
let conval83 = $('#conval83');
let conval833 = $('#conval833');
let conval84 = $('#conval84');
let conval844 = $('#conval844');
let conval85 = $('#conval85');
let conval855 = $('#conval855');
let conval86 = $('#conval86');
let conval866 = $('#conval866');
let conval87 = $('#conval87');
let conval877 = $('#conval877');
let conval88 = $('#conval88');
let conval888 = $('#conval888');
let conval89 = $('#conval89');
let conval899 = $('#conval899');
let conval081 = $('#conval081');
let conval0811 = $('#conval0811');
let conval082 = $('#conval082');
let conval0822 = $('#conval0822');
let conval083 = $('#conval083');
let conval0833 = $('#conval0833');
let conval084 = $('#conval084');
let conval0844 = $('#conval0844');
let conval085 = $('#conval085');
let conval0855 = $('#conval0855');
let conval086 = $('#conval086');
let conval0866 = $('#conval0866');
let conval087 = $('#conval087');
let conval0877 = $('#conval0877');
let conval088 = $('#conval088');
let conval0888 = $('#conval0888');
let conval089 = $('#conval089');
let conval0899 = $('#conval0899');
let conval00811 = $('#conval00811');
let conval0082 = $('#conval0082');
let conval00822 = $('#conval00822');
let conval0083 = $('#conval0083');
let conval00833 = $('#conval00833');
let monolit1 = $('#monolit1');
let monolit2 = $('#monolit2');
let monolit3 = $('#monolit3');
let monolit4 = $('#monolit4');
let monolit5 = $('#monolit5');
let monolit6 = $('#monolit6');
let monolit7 = $('#monolit7');
let monolit8 = $('#monolit8');
let monolit9 = $('#monolit9');
let monolit10 = $('#monolit10');
let monolit11 = $('#monolit11');
let monolit12 = $('#monolit12');
let monolit13 = $('#monolit13');
let monolit14 = $('#monolit14');
let monolit15 = $('#monolit15');
let monolit16 = $('#monolit16');
let monolit17 = $('#monolit17');
let monolit18 = $('#monolit18');
let monolit19 = $('#monolit19');
let monolit20 = $('#monolit20');
let monolit21 = $('#monolit21');


let selectCalc1 = $('#selectCalc1');
let selectCalc2 = $('#selectCalc2');
let selectCalc3 = $('#selectCalc3');
let selectCalc4 = $('#selectCalc4');
let selectCalc5 = $('#selectCalc5');
let selectCalc6 = $('#selectCalc6');
let selectCalc7 = $('#selectCalc7');
let selectCalc8 = $('#selectCalc8');


let select2Calc1 = $('#select2Calc1');
let select2Calc2 = $('#select2Calc2');
let select2Calc3 = $('#select2Calc3');
let select2Calc4 = $('#select2Calc4');
let select2Calc5 = $('#select2Calc5');
let select2Calc6 = $('#select2Calc6');
let select2Calc7 = $('#select2Calc7');
let select2Calc8 = $('#select2Calc8');

let inputCalc1 = $('#inputCalc1');
let inputCalc2 = $('#inputCalc2');
let inputCalc3 = $('#inputCalc3');
let inputCalc4 = $('#inputCalc4');
let inputCalc5 = $('#inputCalc5');
let inputCalc6 = $('#inputCalc6');
let inputCalc7 = $('#inputCalc7');
let inputCalc8 = $('#inputCalc8');

let input2Calc1 = $('#input2Calc1');
let input2Calc2 = $('#input2Calc2');
let input2Calc3 = $('#input2Calc3');
let input2Calc4 = $('#input2Calc4');
let input2Calc5 = $('#input2Calc5');
let input2Calc6 = $('#input2Calc6');
let input2Calc7 = $('#input2Calc7');
let input2Calc8 = $('#input2Calc8');

let input3Calc1 = $('#input3Calc1');
let input3Calc2 = $('#input3Calc2');
let input3Calc3 = $('#input3Calc3');
let input3Calc4 = $('#input3Calc4');
let input3Calc5 = $('#input3Calc5');
let input3Calc6 = $('#input3Calc6');
let input3Calc7 = $('#input3Calc7');
let input3Calc8 = $('#input3Calc8');


async function getSmeta(id) {
    idActiveSmeta = id;
    const selectedItem = smetaList.find(item => item.id == id);
    if (selectedItem) {
        selectZakazchik.val(selectedItem.id_zakazchik);
        selectPodryadchik.val(selectedItem.id_podryadchik);
        inputDateNachRab.val(selectedItem.dateNachRab);
        inputDateOkonchRab.val(selectedItem.dateOkonchRab);
        textAreaNaimRabot.val(selectedItem.textAreaNaimRabot);
        textAreaCel.val(selectedItem.textAreaCel);
        textAreaMestoObj.val(selectedItem.textAreaMestoObj);
        smetaName.val(selectedItem.name);

        const haract = selectedItem.haractObject;
        const ishod = selectedItem.ishod;
        const obmer = selectedItem.obmer;
        const obsled = selectedItem.obsled;
        const sosttech = selectedItem.sosttech;
        const calculator = selectedItem.calculator;
        const redaktor = selectedItem.redaktor;
        const obsledotdel = selectedItem.obsledotdel;


        $('#buildingType').val(haract.zdanie);
        $('#constructionType').val(haract.typeZdanie);
        $('#etazh').val(haract.stage);
        const allRadioZdvis = $('input[name="zdvis"]');
        allRadioZdvis.each(function () {
            $(this).val() === haract.radio_zdanie ? $(this).prop('checked', true) : $(this).prop('checked', false);
        });
        $('#visotazdani').val(haract.height);
        $('#obem').val(haract.obem);
        $('#visotapola').val(haract.height_pol);
        $('#temperatureMode').val(haract.temperature);
        $('#equipmentSaturation').val(haract.nasishenost);
        $('#options').val(haract.aggresive_vozdeistvie);
        chekb1.prop('checked', haract.checkb1 > 0);
        chekb2.prop('checked', haract.checkb2 > 0);
        chekb3.prop('checked', haract.checkb3 > 0);
        chekb4.prop('checked', haract.checkb4 > 0);
        chekb5.prop('checked', haract.checkb5 > 0);
        chekb6.prop('checked', haract.checkb6 > 0);
        chekb7.prop('checked', haract.checkb7 > 0);
        chekb8.prop('checked', haract.checkb8 > 0);
        chekb9.prop('checked', haract.checkb9 > 0);
        chekb10.prop('checked', haract.checkb10 > 0);
        chekb11.prop('checked', haract.checkb11 > 0);
        chekb12.prop('checked', haract.checkb12 > 0);


        choosCunstruct.prop('checked', ishod.choosCunstruct > 0);
        const pasportValue = ishod.pasport_na_zdanie;


        if (pasportValue == 1) {
            $('#pasportNaZdanie[value="1"]').prop('checked', true);
        } else if (pasportValue == 2) {
            $('#pasportNaZdanie[value="2"]').prop('checked', true);
        } else {
            $('input[name="pasportNaZdanie"]').prop('checked', false);
        }
        const pasportNaZdanie = $("#pasportNaZdanie" + ishod.pasport_na_zdanie);
        if (pasportNaZdanie.length) {
            pasportNaZdanie.prop('checked', true);
        } else {

        }
        if (ishod.choosCunstruct > 0) {
            toggleZd1.prop('disabled', false);
            toggleZd2.prop('disabled', false);
            toggleZd3.prop('disabled', false);
            toggleZd4.prop('disabled', false);
            toggleZd5.prop('disabled', false);
            toggleZd6.prop('disabled', false);
            toggleZd7.prop('disabled', false);
            toggleZd8.prop('disabled', false);
            toggleZd9.prop('disabled', false);
            toggleZd1.prop('checked', ishod.toggleZd1 > 0);
            toggleZd2.prop('checked', ishod.toggleZd2 > 0);
            toggleZd3.prop('checked', ishod.toggleZd3 > 0);
            toggleZd4.prop('checked', ishod.toggleZd4 > 0);
            toggleZd5.prop('checked', ishod.toggleZd5 > 0);
            toggleZd6.prop('checked', ishod.toggleZd6 > 0);
            toggleZd7.prop('checked', ishod.toggleZd7 > 0);
            toggleZd8.prop('checked', ishod.toggleZd8 > 0);
            toggleZd9.prop('checked', ishod.toggleZd9 > 0);
            $('#conval1').val(ishod.conval1);
            $('#conval2').val(ishod.conval2);
            $('#conval3').val(ishod.conval3);
            $('#conval4').val(ishod.conval4);
            $('#conval5').val(ishod.conval5);
            $('#conval6').val(ishod.conval6);
            $('#conval7').val(ishod.conval7);
            $('#conval8').val(ishod.conval8);
            $('#conval9').val(ishod.conval9);
        } else {
            toggleZd1.prop('disabled', true);
            toggleZd2.prop('disabled', true);
            toggleZd3.prop('disabled', true);
            toggleZd4.prop('disabled', true);
            toggleZd5.prop('disabled', true);
            toggleZd6.prop('disabled', true);
            toggleZd7.prop('disabled', true);
            toggleZd8.prop('disabled', true);
            toggleZd9.prop('disabled', true);


            toggleZd1.prop('checked', false);
            toggleZd2.prop('checked', false);
            toggleZd3.prop('checked', false);
            toggleZd4.prop('checked', false);
            toggleZd5.prop('checked', false);
            toggleZd6.prop('checked', false);
            toggleZd7.prop('checked', false);
            toggleZd8.prop('checked', false);
            toggleZd9.prop('checked', false);
            $('#conval1').val('');
            $('#conval2').val('');
            $('#conval3').val('');
            $('#conval4').val('');
            $('#conval5').val('');
            $('#conval6').val('');
            $('#conval7').val('');
            $('#conval8').val('');
            $('#conval9').val('');

        }
        const obmerElement = $("#obmerobs" + obmer.obmerobs);
        if (obmerElement.length) {
            obmerElement.prop('checked', true);
        } else {

        }
        choosCunstruct4.prop('checked', obmer.choosCunstruct4 > 0);
        if (obmer.choosCunstruct4 > 0) {
            toggleZd41.prop('disabled', false);
            toggleZd42.prop('disabled', false);
            toggleZd43.prop('disabled', false);
            toggleZd44.prop('disabled', false);
            toggleZd45.prop('disabled', false);
            toggleZd46.prop('disabled', false);
            toggleZd48.prop('disabled', false);
            toggleZd49.prop('disabled', false);
            toggleZd449.prop('disabled', false);
            toggleZd41.prop('checked', obmer.toggleZd41 > 0);
            toggleZd42.prop('checked', obmer.toggleZd42 > 0);
            toggleZd43.prop('checked', obmer.toggleZd43 > 0);
            toggleZd44.prop('checked', obmer.toggleZd44 > 0);
            toggleZd45.prop('checked', obmer.toggleZd45 > 0);
            toggleZd46.prop('checked', obmer.toggleZd46 > 0);
            toggleZd48.prop('checked', obmer.toggleZd48 > 0);
            toggleZd49.prop('checked', obmer.toggleZd49 > 0);
            toggleZd449.prop('checked', obmer.toggleZd449 > 0);
            $('#conval41').val(obmer.conval41);
            $('#conval42').val(obmer.conval42);
            $('#conval43').val(obmer.conval43);
            $('#conval44').val(obmer.conval44);
            $('#conval45').val(obmer.conval45);
            $('#conval46').val(obmer.conval46);
            $('#conval48').val(obmer.conval48);
            $('#conval49').val(obmer.conval49);
            $('#conval449').val(obmer.conval449);
        } else {
            toggleZd41.prop('disabled', true);
            toggleZd42.prop('disabled', true);
            toggleZd43.prop('disabled', true);
            toggleZd44.prop('disabled', true);
            toggleZd45.prop('disabled', true);
            toggleZd46.prop('disabled', true);
            toggleZd48.prop('disabled', true);
            toggleZd49.prop('disabled', true);
            toggleZd449.prop('disabled', true);


            toggleZd41.prop('checked', false);
            toggleZd42.prop('checked', false);
            toggleZd43.prop('checked', false);
            toggleZd44.prop('checked', false);
            toggleZd45.prop('checked', false);
            toggleZd46.prop('checked', false);
            toggleZd48.prop('checked', false);
            toggleZd49.prop('checked', false);
            toggleZd449.prop('checked', false);
            $('#conval41').val('');
            $('#conval42').val('');
            $('#conval43').val('');
            $('#conval44').val('');
            $('#conval45').val('');
            $('#conval46').val('');
            $('#conval48').val('');
            $('#conval49').val('');
            $('#conval449').val('');

        }

        const obsledElement = $("#obsledObs" + obsled.predvOsmotr);
        if (obsledElement.length) {
            obsledElement.prop('checked', true);
        } else {

        }
        choosCunstruct5.prop('checked', obsled.choosCunstruct5 > 0);
        if (obsled.choosCunstruct5 > 0) {
            toggleZd51.prop('disabled', false);
            toggleZd52.prop('disabled', false);
            toggleZd53.prop('disabled', false);
            toggleZd54.prop('disabled', false);
            toggleZd55.prop('disabled', false);
            toggleZd56.prop('disabled', false);
            toggleZd57.prop('disabled', false);
            toggleZd58.prop('disabled', false);
            toggleZd59.prop('disabled', false);
            toggleZd51.prop('checked', obsled.toggleZd51 > 0);
            toggleZd52.prop('checked', obsled.toggleZd52 > 0);
            toggleZd53.prop('checked', obsled.toggleZd53 > 0);
            toggleZd54.prop('checked', obsled.toggleZd54 > 0);
            toggleZd55.prop('checked', obsled.toggleZd55 > 0);
            toggleZd56.prop('checked', obsled.toggleZd56 > 0);
            toggleZd57.prop('checked', obsled.toggleZd57 > 0);
            toggleZd58.prop('checked', obsled.toggleZd58 > 0);
            toggleZd59.prop('checked', obsled.toggleZd59 > 0);
            $('#conval51').val(obsled.conval51);
            $('#conval52').val(obsled.conval52);
            $('#conval53').val(obsled.conval53);
            $('#conval54').val(obsled.conval54);
            $('#conval55').val(obsled.conval55);
            $('#conval56').val(obsled.conval56);
            $('#conval57').val(obsled.conval57);
            $('#conval58').val(obsled.conval58);
            $('#conval59').val(obsled.conval59);
        } else {
            toggleZd51.prop('disabled', true);
            toggleZd52.prop('disabled', true);
            toggleZd53.prop('disabled', true);
            toggleZd54.prop('disabled', true);
            toggleZd55.prop('disabled', true);
            toggleZd56.prop('disabled', true);
            toggleZd57.prop('disabled', true);
            toggleZd58.prop('disabled', true);
            toggleZd59.prop('disabled', true);

            toggleZd51.prop('checked', false);
            toggleZd52.prop('checked', false);
            toggleZd53.prop('checked', false);
            toggleZd54.prop('checked', false);
            toggleZd55.prop('checked', false);
            toggleZd56.prop('checked', false);
            toggleZd57.prop('checked', false);
            toggleZd58.prop('checked', false);
            toggleZd59.prop('checked', false);
            $('#conval51').val('');
            $('#conval52').val('');
            $('#conval53').val('');
            $('#conval54').val('');
            $('#conval55').val('');
            $('#conval56').val('');
            $('#conval57').val('');
            $('#conval58').val('');
            $('#conval59').val('');


        }

        const kat_sl_rab_sosttech = $("#sosttech" + sosttech.zaklSostStr);
        if (kat_sl_rab_sosttech.length) {
            kat_sl_rab_sosttech.prop('checked', true);
        } else {

        }
        choosCunstruct6.prop('checked', sosttech.choosCunstruct6 > 0);
        if (sosttech.choosCunstruct6 > 0) {
            toggleZd61.prop('disabled', false);
            toggleZd62.prop('disabled', false);
            toggleZd63.prop('disabled', false);
            toggleZd64.prop('disabled', false);
            toggleZd65.prop('disabled', false);
            toggleZd66.prop('disabled', false);
            toggleZd67.prop('disabled', false);
            toggleZd68.prop('disabled', false);
            toggleZd69.prop('disabled', false);
            toggleZd61.prop('checked', sosttech.toggleZd61 > 0);
            toggleZd62.prop('checked', sosttech.toggleZd62 > 0);
            toggleZd63.prop('checked', sosttech.toggleZd63 > 0);
            toggleZd64.prop('checked', sosttech.toggleZd64 > 0);
            toggleZd65.prop('checked', sosttech.toggleZd65 > 0);
            toggleZd66.prop('checked', sosttech.toggleZd66 > 0);
            toggleZd67.prop('checked', sosttech.toggleZd67 > 0);
            toggleZd68.prop('checked', sosttech.toggleZd68 > 0);
            toggleZd69.prop('checked', sosttech.toggleZd69 > 0);
            $('#conval61').val(sosttech.conval61);
            $('#conval62').val(sosttech.conval62);
            $('#conval63').val(sosttech.conval63);
            $('#conval64').val(sosttech.conval64);
            $('#conval65').val(sosttech.conval65);
            $('#conval66').val(sosttech.conval66);
            $('#conval67').val(sosttech.conval67);
            $('#conval68').val(sosttech.conval68);
            $('#conval69').val(sosttech.conval69);
        } else {
            toggleZd61.prop('disabled', true);
            toggleZd62.prop('disabled', true);
            toggleZd63.prop('disabled', true);
            toggleZd64.prop('disabled', true);
            toggleZd65.prop('disabled', true);
            toggleZd66.prop('disabled', true);
            toggleZd67.prop('disabled', true);
            toggleZd68.prop('disabled', true);
            toggleZd69.prop('disabled', true);

            toggleZd61.prop('checked', false);
            toggleZd62.prop('checked', false);
            toggleZd63.prop('checked', false);
            toggleZd64.prop('checked', false);
            toggleZd65.prop('checked', false);
            toggleZd66.prop('checked', false);
            toggleZd67.prop('checked', false);
            toggleZd68.prop('checked', false);
            toggleZd69.prop('checked', false);
            $('#conval61').val('');
            $('#conval62').val('');
            $('#conval63').val('');
            $('#conval64').val('');
            $('#conval65').val('');
            $('#conval66').val('');
            $('#conval67').val('');
            $('#conval68').val('');
            $('#conval69').val('');

        }

        toggleZd71.prop('disabled', false);
        toggleZd72.prop('disabled', false);
        toggleZd73.prop('disabled', false);
        toggleZd74.prop('disabled', false);
        toggleZd71.prop('checked', redaktor.toggleZd71 > 0);
        toggleZd72.prop('checked', redaktor.toggleZd72 > 0);
        toggleZd73.prop('checked', redaktor.toggleZd73 > 0);
        toggleZd74.prop('checked', redaktor.toggleZd74 > 0);
        $('#conval71').val(redaktor.conval71);
        $('#conval72').val(redaktor.conval72);
        $('#conval73').val(redaktor.conval73);
        $('#conval74').val(redaktor.conval74);


        toggleZd81.prop('disabled', false);
        toggleZd82.prop('disabled', false);
        toggleZd83.prop('disabled', false);
        toggleZd84.prop('disabled', false);
        toggleZd85.prop('disabled', false);
        toggleZd86.prop('disabled', false);
        toggleZd87.prop('disabled', false);
        toggleZd88.prop('disabled', false);
        toggleZd89.prop('disabled', false);
        toggleZd081.prop('disabled', false);
        toggleZd082.prop('disabled', false);
        toggleZd083.prop('disabled', false);
        toggleZd084.prop('disabled', false);
        toggleZd085.prop('disabled', false);
        toggleZd086.prop('disabled', false);
        toggleZd087.prop('disabled', false);
        toggleZd088.prop('disabled', false);
        toggleZd089.prop('disabled', false);
        toggleZd0081.prop('disabled', false);
        toggleZd0082.prop('disabled', false);
        toggleZd0083.prop('disabled', false);

        toggleZd81.prop('checked', obsledotdel.toggleZd81 > 0);
        toggleZd82.prop('checked', obsledotdel.toggleZd82 > 0);
        toggleZd83.prop('checked', obsledotdel.toggleZd83 > 0);
        toggleZd84.prop('checked', obsledotdel.toggleZd84 > 0);
        toggleZd85.prop('checked', obsledotdel.toggleZd85 > 0);
        toggleZd86.prop('checked', obsledotdel.toggleZd86 > 0);
        toggleZd87.prop('checked', obsledotdel.toggleZd87 > 0);
        toggleZd88.prop('checked', obsledotdel.toggleZd88 > 0);
        toggleZd89.prop('checked', obsledotdel.toggleZd89 > 0);
        toggleZd081.prop('checked', obsledotdel.toggleZd081 > 0);
        toggleZd082.prop('checked', obsledotdel.toggleZd082 > 0);
        toggleZd083.prop('checked', obsledotdel.toggleZd083 > 0);
        toggleZd084.prop('checked', obsledotdel.toggleZd084 > 0);
        toggleZd085.prop('checked', obsledotdel.toggleZd085 > 0);
        toggleZd086.prop('checked', obsledotdel.toggleZd086 > 0);
        toggleZd087.prop('checked', obsledotdel.toggleZd087 > 0);
        toggleZd088.prop('checked', obsledotdel.toggleZd088 > 0);
        toggleZd089.prop('checked', obsledotdel.toggleZd089 > 0);
        toggleZd0081.prop('checked', obsledotdel.toggleZd0081 > 0);
        toggleZd0082.prop('checked', obsledotdel.toggleZd0082 > 0);
        toggleZd0083.prop('checked', obsledotdel.toggleZd0083 > 0);

        $('#conval81').val(obsledotdel.conval81);
        $('#conval82').val(obsledotdel.conval82);
        $('#conval83').val(obsledotdel.conval83);
        $('#conval84').val(obsledotdel.conval84);
        $('#conval85').val(obsledotdel.conval85);
        $('#conval86').val(obsledotdel.conval86);
        $('#conval87').val(obsledotdel.conval87);
        $('#conval88').val(obsledotdel.conval88);
        $('#conval89').val(obsledotdel.conval89);
        $('#conval081').val(obsledotdel.conval081);
        $('#conval082').val(obsledotdel.conval082);
        $('#conval083').val(obsledotdel.conval083);
        $('#conval084').val(obsledotdel.conval084);
        $('#conval085').val(obsledotdel.conval085);
        $('#conval086').val(obsledotdel.conval086);
        $('#conval087').val(obsledotdel.conval087);
        $('#conval088').val(obsledotdel.conval088);
        $('#conval089').val(obsledotdel.conval089);
        $('#conval0081').val(obsledotdel.conval0081);
        $('#conval0082').val(obsledotdel.conval0082);
        $('#conval0083').val(obsledotdel.conval0083);

        $('#conval811').val(obsledotdel.conval811);
        $('#conval822').val(obsledotdel.conval822);
        $('#conval833').val(obsledotdel.conval833);
        $('#conval844').val(obsledotdel.conval844);
        $('#conval855').val(obsledotdel.conval855);
        $('#conval866').val(obsledotdel.conval866);
        $('#conval877').val(obsledotdel.conval877);
        $('#conval888').val(obsledotdel.conval888);
        $('#conval899').val(obsledotdel.conval899);
        $('#conval0811').val(obsledotdel.conval0811);
        $('#conval0822').val(obsledotdel.conval0822);
        $('#conval0833').val(obsledotdel.conval0833);
        $('#conval0844').val(obsledotdel.conval0844);
        $('#conval0855').val(obsledotdel.conval0855);
        $('#conval0866').val(obsledotdel.conval0866);
        $('#conval0877').val(obsledotdel.conval0877);
        $('#conval0888').val(obsledotdel.conval0888);
        $('#conval0899').val(obsledotdel.conval0899);
        $('#conval00811').val(obsledotdel.conval00811);
        $('#conval00822').val(obsledotdel.conval00822);
        $('#conval00833').val(obsledotdel.conval00833);


        monolit1.prop('checked', obsledotdel.monolit1 > 0);
        monolit2.prop('checked', obsledotdel.monolit2 > 0);
        monolit3.prop('checked', obsledotdel.monolit3 > 0);
        monolit4.prop('checked', obsledotdel.monolit4 > 0);
        monolit5.prop('checked', obsledotdel.monolit5 > 0);
        monolit6.prop('checked', obsledotdel.monolit6 > 0);
        monolit7.prop('checked', obsledotdel.monolit7 > 0);
        monolit8.prop('checked', obsledotdel.monolit8 > 0);
        monolit9.prop('checked', obsledotdel.monolit9 > 0);
        monolit10.prop('checked', obsledotdel.monolit10 > 0);
        monolit11.prop('checked', obsledotdel.monolit11 > 0);
        monolit12.prop('checked', obsledotdel.monolit12 > 0);
        monolit13.prop('checked', obsledotdel.monolit13 > 0);
        monolit14.prop('checked', obsledotdel.monolit14 > 0);
        monolit15.prop('checked', obsledotdel.monolit15 > 0);
        monolit16.prop('checked', obsledotdel.monolit16 > 0);
        monolit17.prop('checked', obsledotdel.monolit17 > 0);
        monolit18.prop('checked', obsledotdel.monolit18 > 0);
        monolit19.prop('checked', obsledotdel.monolit19 > 0);
        monolit20.prop('checked', obsledotdel.monolit20 > 0);
        monolit21.prop('checked', obsledotdel.monolit21 > 0);


        selectCalc1.find(`option[value="${calculator.selectCalc1}"]`).attr('selected', true);
        selectCalc2.find(`option[value="${calculator.selectCalc2}"]`).attr('selected', true);
        selectCalc3.val(calculator.selectCalc3);
        selectCalc4.val(calculator.selectCalc4);
        selectCalc5.val(calculator.selectCalc5);
        selectCalc6.val(calculator.selectCalc6);
        selectCalc7.val(calculator.selectCalc7);
        selectCalc8.val(calculator.selectCalc8);


        select2Calc1.find(`option[value="${calculator.select2Calc1}"]`).attr('selected', true);
        select2Calc2.val(calculator.select2Calc2);
        select2Calc3.val(calculator.select2Calc3);
        select2Calc4.val(calculator.select2Calc4);
        select2Calc5.val(calculator.select2Calc5);
        select2Calc6.val(calculator.select2Calc6);
        select2Calc7.val(calculator.select2Calc7);
        select2Calc8.val(calculator.select2Calc8);

        inputCalc1.val(calculator.inputCalc1);
        inputCalc2.val(calculator.inputCalc2);
        inputCalc3.val(calculator.inputCalc3);
        inputCalc4.val(calculator.inputCalc4);
        inputCalc5.val(calculator.inputCalc5);
        inputCalc6.val(calculator.inputCalc6);
        inputCalc7.val(calculator.inputCalc7);
        inputCalc8.val(calculator.inputCalc8);

        input2Calc1.val(calculator.input2Calc1);
        input2Calc2.val(calculator.input2Calc2);
        input2Calc3.val(calculator.input2Calc3);
        input2Calc4.val(calculator.input2Calc4);
        input2Calc5.val(calculator.input2Calc5);
        input2Calc6.val(calculator.input2Calc6);
        input2Calc7.val(calculator.input2Calc7);
        input2Calc8.val(calculator.input2Calc8);

        input3Calc1.val(calculator.input3Calc1);
        input3Calc2.val(calculator.input3Calc2);
        input3Calc3.val(calculator.input3Calc3);
        input3Calc4.val(calculator.input3Calc4);
        input3Calc5.val(calculator.input3Calc5);
        input3Calc6.val(calculator.input3Calc6);
        input3Calc7.val(calculator.input3Calc7);
        input3Calc8.val(calculator.input3Calc8);




        sborCheck.prop('checked', ishod.sborCheck > 0);
        obmerCheck.prop('checked', obmer.obmerCheck > 0);
        obsledCheck.prop('checked', obsled.obsledCheck > 0);
        sostTechOtchetCheck.prop('checked', sosttech.sostTechOtchetCheck > 0);
        redaktorIspConstrCheck.prop('checked', redaktor.redaktorIspConstrCheck > 0);
        obsledotdelCheck.prop('checked', obsledotdel.obsledotdelCheck > 0);
        calcalcCheck.prop('checked', calculator.calcalcCheck > 0);

    }


    document.getElementById("smetaDropdown").classList.toggle("show");
    executeFunctions();
}

async function executeFunctions() {

    updateCalendarDaysFromEnd();
    await updateBuildingInfo();
    await toggleCheckboxesDop();
    await toggleCheckboxesDop4();
    await toggleCheckboxesDop5();
    await toggleCheckboxesDop6();
    await toggleCheckboxesDop7();
    await calculateHaracterCoefficient();

    await calculateK();


    let allLolSpace = document.querySelectorAll(".lolspace1");
    [...allLolSpace].forEach(item => {
        if (item.children[0].checked) {
            toggleCheckboxesDop8(item.children[0]);
        }
    });
    let formselectcalc = document.querySelectorAll(".naim_rab");
    [...formselectcalc].forEach((item, index) => {
        if (item) {
            if (item.options[item.selectedIndex].value !== 0) {
                index = index + 1;
                selectCalculation(index);
            }

        }
    });

    let doljnosti_KSD_class = document.querySelectorAll(".doljnosti_KSD");
    doljnosti_KSD_class.forEach((item) => {
        if (item) {

            if (item.options[item.selectedIndex].value !== 0) {
                let thisTarget = item;
                let doljnostKoef = thisTarget.options[thisTarget.options.selectedIndex].getAttribute('data-koef');
                let nextInput = thisTarget.nextElementSibling;
                let nextnextInput = nextInput.nextElementSibling;
                if (nextnextInput.value.length === 0)
                    nextnextInput.value = 1;
                nextInput.value = doljnostKoef;
                console.log (doljnostKoef , "doljnostKoef");
                 calculateK();
            }
        }
    });


}

function saveSmeta() {
    let selectedObmerKatSl;
    let selectedButrad;
    let selectedObsled;
    let selectedSosttech;

    $(".kat_sl_rab_sosttech").each(function () {
        if ($(this).prop('checked')) {
            selectedSosttech = $(this).val();
        }
    });
    $("input[name='pasportNaZdanie']").each((item) => {
        if ($(item).prop('checked')) {
            selectedButrad = $(item).val();
        }
    });
    let ishod = {
        sborCheck: sborCheck.prop('checked') ? 1 : 0,
        toggleZd1: toggleZd1.prop('checked') ? 1 : 0,
        toggleZd2: toggleZd2.prop('checked') ? 1 : 0,
        toggleZd3: toggleZd3.prop('checked') ? 1 : 0,
        toggleZd4: toggleZd4.prop('checked') ? 1 : 0,
        toggleZd5: toggleZd5.prop('checked') ? 1 : 0,
        toggleZd6: toggleZd6.prop('checked') ? 1 : 0,
        toggleZd7: toggleZd7.prop('checked') ? 1 : 0,
        toggleZd8: toggleZd8.prop('checked') ? 1 : 0,
        toggleZd9: toggleZd9.prop('checked') ? 1 : 0,
        choosCunstruct: choosCunstruct.prop('checked') ? 1 : 0,
        conval1: $('#conval1').val(),
        conval2: $('#conval2').val(),
        conval3: $('#conval3').val(),
        conval4: $('#conval4').val(),
        conval5: $('#conval5').val(),
        conval6: $('#conval6').val(),
        conval7: $('#conval7').val(),
        conval8: $('#conval8').val(),
        conval9: $('#conval9').val(),
        selectedButrad: selectedButrad
    };

    haractObject = {
        zdanie: buildingType.val(),
        typeZdanie: constructionType.val(),
        hardZdanie: hardZdanie,
        stage: $('#etazh').val(),
        height: $('#visotazdani').val(),
        obem: $('#obem').val(),
        height_pol: $('#visotapola').val(),
        temperature: temperatureMode.val(),
        nasishenost: equipmentSaturation.val(),
        aggresive_vozdeistvie: options.val(),
        checkb1: chekb1.prop('checked') ? 1 : 0,
        checkb2: chekb2.prop('checked') ? 1 : 0,
        checkb3: chekb3.prop('checked') ? 1 : 0,
        checkb4: chekb4.prop('checked') ? 1 : 0,
        checkb5: chekb5.prop('checked') ? 1 : 0,
        checkb6: chekb6.prop('checked') ? 1 : 0,
        checkb7: chekb7.prop('checked') ? 1 : 0,
        checkb8: chekb8.prop('checked') ? 1 : 0,
        checkb9: chekb9.prop('checked') ? 1 : 0,
        checkb10: chekb10.prop('checked') ? 1 : 0,
        checkb11: chekb11.prop('checked') ? 1 : 0,
        checkb12: chekb12.prop('checked') ? 1 : 0,
    }
    kat_sl_rab.each(function () {
        if ($(this).prop('checked')) {
            selectedObmerKatSl = $(this).val();
        }
    });
    obmerObject = {
        obmerCheck: obmerCheck.prop('checked') ? 1 : 0,
        obmerobs: selectedObmerKatSl,
        choosCunstruct4: choosCunstruct4.prop('checked') ? 1 : 0,
        toggleZd41: toggleZd41.prop('checked') ? 1 : 0,
        toggleZd42: toggleZd42.prop('checked') ? 1 : 0,
        toggleZd43: toggleZd43.prop('checked') ? 1 : 0,
        toggleZd44: toggleZd44.prop('checked') ? 1 : 0,
        toggleZd45: toggleZd45.prop('checked') ? 1 : 0,
        toggleZd46: toggleZd46.prop('checked') ? 1 : 0,
        toggleZd48: toggleZd48.prop('checked') ? 1 : 0,
        toggleZd49: toggleZd49.prop('checked') ? 1 : 0,
        toggleZd449: toggleZd449.prop('checked') ? 1 : 0,
        conval41: $('#conval41').val(),
        conval42: $('#conval42').val(),
        conval43: $('#conval43').val(),
        conval44: $('#conval44').val(),
        conval45: $('#conval45').val(),
        conval46: $('#conval46').val(),
        conval48: $('#conval48').val(),
        conval49: $('#conval49').val(),
        conval449: $('#conval449').val()

    }
    kat_sl_rab_obsled.each(function () {
        if ($(this).prop('checked')) {
            selectedObsled = $(this).val();
        }
    });


    let obsledObject = {
        obsledCheck: obsledCheck.prop('checked') ? 1 : 0,
        obsledobs: selectedObsled,
        choosCunstruct5: choosCunstruct5.prop('checked') ? 1 : 0,
        toggleZd51: toggleZd51.prop('checked') ? 1 : 0,
        toggleZd52: toggleZd52.prop('checked') ? 1 : 0,
        toggleZd53: toggleZd53.prop('checked') ? 1 : 0,
        toggleZd54: toggleZd54.prop('checked') ? 1 : 0,
        toggleZd55: toggleZd55.prop('checked') ? 1 : 0,
        toggleZd56: toggleZd56.prop('checked') ? 1 : 0,
        toggleZd57: toggleZd57.prop('checked') ? 1 : 0,
        toggleZd58: toggleZd58.prop('checked') ? 1 : 0,
        toggleZd59: toggleZd59.prop('checked') ? 1 : 0,
        conval51: $('#conval51').val(),
        conval52: $('#conval52').val(),
        conval53: $('#conval53').val(),
        conval54: $('#conval54').val(),
        conval55: $('#conval55').val(),
        conval56: $('#conval56').val(),
        conval57: $('#conval57').val(),
        conval58: $('#conval58').val(),
        conval59: $('#conval59').val()
    }

    let sostTechObject = {
        sostTechOtchetCheck: sostTechOtchetCheck.prop('checked') ? 1 : 0,
        selectedSosttech: selectedSosttech,
        choosCunstruct6: choosCunstruct6.prop('checked') ? 1 : 0,
        toggleZd61: toggleZd61.prop('checked') ? 1 : 0,
        toggleZd62: toggleZd62.prop('checked') ? 1 : 0,
        toggleZd63: toggleZd63.prop('checked') ? 1 : 0,
        toggleZd64: toggleZd64.prop('checked') ? 1 : 0,
        toggleZd65: toggleZd65.prop('checked') ? 1 : 0,
        toggleZd66: toggleZd66.prop('checked') ? 1 : 0,
        toggleZd67: toggleZd67.prop('checked') ? 1 : 0,
        toggleZd68: toggleZd68.prop('checked') ? 1 : 0,
        toggleZd69: toggleZd69.prop('checked') ? 1 : 0,
        conval61: $('#conval61').val(),
        conval62: $('#conval62').val(),
        conval63: $('#conval63').val(),
        conval64: $('#conval64').val(),
        conval65: $('#conval65').val(),
        conval66: $('#conval66').val(),
        conval67: $('#conval67').val(),
        conval68: $('#conval68').val(),
        conval69: $('#conval69').val()
    }

    let redactorIspObject = {
        redaktorIspConstrCheck: redaktorIspConstrCheck.prop('checked') ? 1 : 0,
        toggleZd71: toggleZd71.prop('checked') ? 1 : 0,
        toggleZd72: toggleZd72.prop('checked') ? 1 : 0,
        toggleZd73: toggleZd73.prop('checked') ? 1 : 0,
        toggleZd74: toggleZd74.prop('checked') ? 1 : 0,
        conval71: $('#conval71').val(),
        conval72: $('#conval72').val(),
        conval73: $('#conval73').val(),
        conval74: $('#conval74').val()
    }

    let obsledOtdKonstrObject = {
        obsledotdelCheck: obsledotdelCheck.prop('checked') ? 1 : 0,
        toggleZd81: toggleZd81.prop('checked') ? 1 : 0,
        toggleZd82: toggleZd82.prop('checked') ? 1 : 0,
        toggleZd83: toggleZd83.prop('checked') ? 1 : 0,
        toggleZd84: toggleZd84.prop('checked') ? 1 : 0,
        toggleZd85: toggleZd85.prop('checked') ? 1 : 0,
        toggleZd86: toggleZd86.prop('checked') ? 1 : 0,
        toggleZd87: toggleZd87.prop('checked') ? 1 : 0,
        toggleZd88: toggleZd88.prop('checked') ? 1 : 0,
        toggleZd89: toggleZd89.prop('checked') ? 1 : 0,
        toggleZd081: toggleZd081.prop('checked') ? 1 : 0,
        toggleZd082: toggleZd082.prop('checked') ? 1 : 0,
        toggleZd083: toggleZd083.prop('checked') ? 1 : 0,
        toggleZd084: toggleZd084.prop('checked') ? 1 : 0,
        toggleZd085: toggleZd085.prop('checked') ? 1 : 0,
        toggleZd086: toggleZd086.prop('checked') ? 1 : 0,
        toggleZd087: toggleZd087.prop('checked') ? 1 : 0,
        toggleZd088: toggleZd088.prop('checked') ? 1 : 0,
        toggleZd089: toggleZd089.prop('checked') ? 1 : 0,
        toggleZd0081: toggleZd0081.prop('checked') ? 1 : 0,
        toggleZd0082: toggleZd0082.prop('checked') ? 1 : 0,
        toggleZd0083: toggleZd0083.prop('checked') ? 1 : 0,
        conval81: $('#conval81').val(),
        conval811: $('#conval811').val(),
        conval82: $('#conval82').val(),
        conval822: $('#conval822').val(),
        conval83: $('#conval83').val(),
        conval833: $('#conval833').val(),
        conval84: $('#conval84').val(),
        conval844: $('#conval844').val(),
        conval85: $('#conval85').val(),
        conval855: $('#conval855').val(),
        conval86: $('#conval86').val(),
        conval866: $('#conval866').val(),
        conval87: $('#conval87').val(),
        conval877: $('#conval877').val(),
        conval88: $('#conval88').val(),
        conval888: $('#conval888').val(),
        conval89: $('#conval89').val(),
        conval899: $('#conval899').val(),
        conval081: $('#conval081').val(),
        conval0811: $('#conval0811').val(),
        conval082: $('#conval082').val(),
        conval0822: $('#conval0822').val(),
        conval083: $('#conval083').val(),
        conval0833: $('#conval0833').val(),
        conval084: $('#conval084').val(),
        conval0844: $('#conval0844').val(),
        conval085: $('#conval085').val(),
        conval0855: $('#conval0855').val(),
        conval086: $('#conval086').val(),
        conval0866: $('#conval0866').val(),
        conval087: $('#conval087').val(),
        conval0877: $('#conval0877').val(),
        conval088: $('#conval088').val(),
        conval0888: $('#conval0888').val(),
        conval089: $('#conval089').val(),
        conval0899: $('#conval0899').val(),
        conval0081: $('#conval0081').val(),
        conval00811: $('#conval00811').val(),
        conval0082: $('#conval0082').val(),
        conval00822: $('#conval00822').val(),
        conval0083: $('#conval0083').val(),
        conval00833: $('#conval00833').val(),
        monolit1: monolit1.prop('checked') ? 1 : 0,
        monolit2: monolit2.prop('checked') ? 1 : 0,
        monolit3: monolit3.prop('checked') ? 1 : 0,
        monolit4: monolit4.prop('checked') ? 1 : 0,
        monolit5: monolit5.prop('checked') ? 1 : 0,
        monolit6: monolit6.prop('checked') ? 1 : 0,
        monolit7: monolit7.prop('checked') ? 1 : 0,
        monolit8: monolit8.prop('checked') ? 1 : 0,
        monolit9: monolit9.prop('checked') ? 1 : 0,
        monolit10: monolit10.prop('checked') ? 1 : 0,
        monolit11: monolit11.prop('checked') ? 1 : 0,
        monolit12: monolit12.prop('checked') ? 1 : 0,
        monolit13: monolit13.prop('checked') ? 1 : 0,
        monolit14: monolit14.prop('checked') ? 1 : 0,
        monolit15: monolit15.prop('checked') ? 1 : 0,
        monolit16: monolit16.prop('checked') ? 1 : 0,
        monolit17: monolit17.prop('checked') ? 1 : 0,
        monolit18: monolit18.prop('checked') ? 1 : 0,
        monolit19: monolit19.prop('checked') ? 1 : 0,
        monolit20: monolit20.prop('checked') ? 1 : 0,
        monolit21: monolit21.prop('checked') ? 1 : 0

    }

    let calculObject = {
        calcalcCheck: calcalcCheck.prop('checked') ? 1 : 0,
        selectCalc1: $('#selectCalc1').val(),
        selectCalc2: $('#selectCalc2').val(),
        selectCalc3: $('#selectCalc3').val(),
        selectCalc4: $('#selectCalc4').val(),
        selectCalc5: $('#selectCalc5').val(),
        selectCalc6: $('#selectCalc6').val(),
        selectCalc7: $('#selectCalc7').val(),
        selectCalc8: $('#selectCalc8').val(),

        inputCalc1: $('#inputCalc1').val(),
        inputCalc2: $('#inputCalc2').val(),
        inputCalc3: $('#inputCalc3').val(),
        inputCalc4: $('#inputCalc4').val(),
        inputCalc5: $('#inputCalc5').val(),
        inputCalc6: $('#inputCalc6').val(),
        inputCalc7: $('#inputCalc7').val(),
        inputCalc8: $('#inputCalc8').val(),

        select2Calc1: $('#select2Calc1').val(),
        select2Calc2: $('#select2Calc2').val(),
        select2Calc3: $('#select2Calc3').val(),
        select2Calc4: $('#select2Calc4').val(),
        select2Calc5: $('#select2Calc5').val(),
        select2Calc6: $('#select2Calc6').val(),
        select2Calc7: $('#select2Calc7').val(),
        select2Calc8: $('#select2Calc8').val(),

        input2Calc1: $('#input2Calc1').val(),
        input2Calc2: $('#input2Calc2').val(),
        input2Calc3: $('#input2Calc3').val(),
        input2Calc4: $('#input2Calc4').val(),
        input2Calc5: $('#input2Calc5').val(),
        input2Calc6: $('#input2Calc6').val(),
        input2Calc7: $('#input2Calc7').val(),
        input2Calc8: $('#input2Calc8').val(),

        input3Calc1: $('#input3Calc1').val(),
        input3Calc2: $('#input3Calc2').val(),
        input3Calc3: $('#input3Calc3').val(),
        input3Calc4: $('#input3Calc4').val(),
        input3Calc5: $('#input3Calc5').val(),
        input3Calc6: $('#input3Calc6').val(),
        input3Calc7: $('#input3Calc7').val(),
        input3Calc8: $('#input3Calc8').val(),

    }

    let smetaForPhp = {
        id: idActiveSmeta?.toString(),
        name: smetaName.val(),
        id_zakazchik: selectZakazchik.val(),
        id_podryadchik: selectPodryadchik.val(),
        dateNachRab: inputDateNachRab.val(),
        dateOkonchRab: inputDateOkonchRab.val(),
        textAreaNaimRabot: textAreaNaimRabot.val(),
        textAreaCel: textAreaCel.val(),
        textAreaMestoObj: textAreaMestoObj.val(),
        haractObject: JSON.stringify(haractObject),
        ishod: JSON.stringify(ishod),
        obmerObject: JSON.stringify(obmerObject),
        obsledObject: JSON.stringify(obsledObject),
        sostTechObject: JSON.stringify(sostTechObject),
        redactorIspObject: JSON.stringify(redactorIspObject),
        obsledOtdKonstrObject: JSON.stringify(obsledOtdKonstrObject),
        calculObject: JSON.stringify(calculObject),

    };

    let smeta = {
        id: idActiveSmeta?.toString(),
        name: smetaName.val(),
        id_zakazchik: selectZakazchik.val(),
        id_podryadchik: selectPodryadchik.val(),
        dateNachRab: inputDateNachRab.val(),
        dateOkonchRab: inputDateOkonchRab.val(),
        textAreaNaimRabot: textAreaNaimRabot.val(),
        textAreaCel: textAreaCel.val(),
        textAreaMestoObj: textAreaMestoObj.val(),
        haractObject: haractObject,
        ishod: ishod,
        obmerObject: obmerObject,
        obsledObject: obsledObject,
        sostTechObject: sostTechObject,
        redactorIspObject: redactorIspObject,
        obsledOtdKonstrObject: obsledOtdKonstrObject,
        calculObject: calculObject,

    };

    $.ajax({
        url: 'app/ajax/saveSmeta.php',
        type: 'POST',
        data: smetaForPhp,
        success: function (response) {
            if (idActiveSmeta) {
                smetaList.forEach((item, index) => {
                    if (item.id == idActiveSmeta) {
                        smetaList[index] = smeta;
                    }
                });

            } else {
                smeta.id = response.trim();
                if (smetaList == null)
                    smetaList = [];
                smetaList.push(smeta);

            }
            updateSmetaLinks();
        }
    })


    alert('Сохранено!');
}

function updateSmetaLinks() {
    const dropdown = document.getElementById('myDropdown');

    while (dropdown.children.length > 1) {
        dropdown.removeChild(dropdown.lastChild);
    }

    smetaList.forEach(smeta => {
        const link = document.createElement('a');
        link.id = `smeta-${smeta.id}`;
        link.onclick = async () => await getSmeta(smeta.id);
        link.textContent = smeta.name;
        dropdown.appendChild(link);
    });


}


async function calcObmerWorksPart1() {

    etazh = parseFloat(document.getElementById('etazh').value) || 0;
    let kat_sl_zd = hardZdanie;
    const kat_sl_rabs = document.querySelector('input[name="kat_sl_rab"]:checked');
    let kat_sl_rab;
    if (kat_sl_rabs)
        kat_sl_rab = kat_sl_rabs.getAttribute('value');
    let vysota;
    if (etazh < 2) {
        if (mainvisotazdani < 1) {
            vysota = 0; // Если значение меньше 1, можно задать значение по умолчанию
        } else {
            const thresholds = [0, 6, 9, 12, 15, 18, 21];
            vysota = thresholds.findIndex(threshold => mainvisotazdani < threshold);
            if (vysota === -1) {
                vysota = 7; // Если значение больше 50
            }
        }
    } else {

        const thresholds = [0, 2, 3, 4, 6];
        vysota = thresholds.findIndex(threshold => etazh < threshold);
        if (vysota === -1) {
            vysota = 5; // Если значение больше 50
        }

    }
    if (kat_sl_rab == 1) {
        P222 = 10
    } else if (kat_sl_rab == 2) {
        P222 = 14
    }

    return new Promise((resolve, reject) => {
        $.ajax({
            url: "app/ajax/getKoefObmerWork1.php",
            method: "POST",
            data: {
                etazh: etazh,
                kat_sl_zd: kat_sl_zd,
                kat_sl_rab: kat_sl_rab,
                vysota: vysota,
                P222: P222
            },

        }).then(response => {
            if (response.trim().length > 0) {
                let unparseRepsonse = JSON.parse(response);
                ki222 = parseFloat(unparseRepsonse[1].trim());
                koefObmerWork1 = parseFloat(unparseRepsonse[0].trim());
                if (koefObmerWork1 == 1 && koefObmerWork2 == 1) {
                    sumObmer = 0;
                } else {
                    sumObmer = koefObmerWork1 * koefObmerWork2 * b14Value * k18ob * obmerDop1 * obmerDop2 * Vdiv100 * k18101 * ki222 * koefHarackCheckb * agressive * temperaturMode * equipmentSaturat * kefVisota;
                }


            } else {

            }
            $('#obmerRaboty').html(sumObmer.toFixed(3));
            calculateK();
            resolve();
        })
    })
}


async function calcObmerWorksPart2() {

    etazh = parseFloat(document.getElementById('etazh').value) || 0;
    let typeW;
    let koefObmerRab = 0;
    if ($("#choosCunstruct4").prop("checked")) {
        typeW = $("#buildingType").val();
        switch (typeW) {
            case 6:
                typeW = 4;
                break;
            case 5:
                typeW = 3;
                break;
            case 7:
                typeW = 2;
                break;
            default:
                typeW = etazh > 1 ? 2 : 1;
        }


        let koef1 = $("#toggleZd41").prop("checked") ? $("#conval41").val() / 100 : 0;
        let koef2 = $("#toggleZd42").prop("checked") ? $("#conval42").val() / 100 : 0;
        let koef3 = $("#toggleZd43").prop("checked") ? $("#conval43").val() / 100 : 0;
        let koef4 = $("#toggleZd44").prop("checked") ? $("#conval44").val() / 100 : 0;
        let koef5 = $("#toggleZd45").prop("checked") ? $("#conval45").val() / 100 : 0;
        let koef6 = $("#toggleZd46").prop("checked") ? $("#conval46").val() / 100 : 0;
        let koef7 = $("#toggleZd48").prop("checked") ? $("#conval48").val() / 100 : 0;
        let koef8 = $("#toggleZd49").prop("checked") ? $("#conval49").val() / 100 : 0;
        let koef9 = $("#toggleZd449").prop("checked") ? $("#conval449").val() / 100 : 0;

        let arKoef = [koef1, koef2, koef3, koef4, koef5, koef6, koef7, koef8, koef9];

        let myAr = [
            koef1 == 0 ? 0 : 1,
            koef2 == 0 ? 0 : 2,
            koef3 == 0 ? 0 : 3,
            koef4 == 0 ? 0 : 4,
            koef5 == 0 ? 0 : 9,
            koef6 == 0 ? 0 : 5,
            koef7 == 0 ? 0 : 6,
            koef8 == 0 ? 0 : 7,
            koef9 == 0 ? 0 : 8
        ];

        let count0 = 0;
        myAr.map(item => {
            item == 0 ? count0++ : count0
        });

        if (myAr.length == count0) {
            koefObmerWork2 = 1;

        }

        let newAr = myAr.filter(item => item != 0);


        return new Promise(function (resolve, reject) {
            let budval = $("#buildingType").val();
            if (budval == 5) {
                typeW = 3;
            } else if (budval == 6) {
                typeW = 4;
            }
            $.ajax({
                url: "app/ajax/getKoefObmerWork2.php",
                method: "POST",
                data: {
                    typeW: typeW,
                    myAr: JSON.stringify(newAr)
                },
            }).then(function (response) {
                if (response.trim() == 1) {
                    koefObmerWork2 = 1;
                } else {
                    let gettedAr = JSON.parse(response);
                    let sum = 0;
                    let index = 0;
                    arKoef.map(item => {
                        if (item != 0) {
                            sum += gettedAr[index] * item;
                            index++;
                        }
                    })
                    koefObmerWork2 = sum;
                }

                if (koefObmerWork1 == 1 && koefObmerWork2 == 1) {
                    sumObmer = 0;
                } else {
                    sumObmer = koefObmerWork1 * koefObmerWork2 * b14Value * k18ob * obmerDop1 * obmerDop2 * Vdiv100 * k18101 * ki222 * koefHarackCheckb * agressive * temperaturMode * equipmentSaturat * kefVisota;
                }

                $('#obmerRaboty').html(sumObmer.toFixed(3));
                calculateK();
                resolve();
            }).catch(function (error) {
                reject(error);
            });
        });
    } else {
        koefObmerWork2 = 1;
    }
    await calculateK();

}


$("#choosCunstruct4").on("change", async function (event) {
    if (event.target.checked) {
        await calcObmerWorksPart1();
        await calcObmerWorksPart2();
    } else {
        koefObmerWork2 = 1;
    }
    if (koefObmerWork1 == 1 && koefObmerWork2 == 1) {
        sumObmer = 0;
    } else {
        sumObmer = koefObmerWork1 * koefObmerWork2 * b14Value * k18ob * obmerDop1 * obmerDop2 * Vdiv100 * k18101 * ki222 * koefHarackCheckb * agressive * temperaturMode * equipmentSaturat * kefVisota;
    }
    $('#obmerRaboty').html(sumObmer.toFixed(3));
    await calculateK();
});


$(".obmer2check").on("change", async () => {
    await calcObmerWorksPart2()
})

//------------------------------------------------------------------------------


async function calcObsled1() {

    etazh = parseFloat(document.getElementById('etazh').value) || 0;
    let kat_sl_zd = hardZdanie;
    const kat_sl_rabs = document.querySelector('input[name="kat_sl_rab_obsled"]:checked');
    let kat_sl_rab;
    if (kat_sl_rabs)
        kat_sl_rab = kat_sl_rabs.getAttribute('value');
    let vysota;
    if (etazh < 2) {
        if (mainvisotazdani < 1) {
            vysota = 0; // Если значение меньше 1, можно задать значение по умолчанию
        } else {
            const thresholds = [0, 6, 7, 8, 9, 10, 12, 14, 16, 18, 20, 23, 26, 30, 35, 40, 45, 50];
            vysota = thresholds.findIndex(threshold => mainvisotazdani < threshold);
            if (vysota === -1) {
                vysota = 18; // Если значение больше 50
            }
        }
    } else {

        const thresholds = [0, 8, 9, 10, 12, 14, 16, 18, 20, 23, 26, 30, 35, 40, 45, 50];
        vysota = thresholds.findIndex(threshold => etazh < threshold);
        if (vysota === -1) {
            vysota = 16; // Если значение больше 50
        }

    }
    if (kat_sl_rab == 1) {
        P223 = 12.5;
    } else if (kat_sl_rab == 2) {
        P223 = 14;
    } else if (kat_sl_rab == 3) {
        P223 = 15.5;
    }
    return new Promise((resolve, reject) => {
        $.ajax({
            url: "app/ajax/getKoefObsled1.php",
            method: "POST",
            data: {
                etazh: etazh,
                kat_sl_zd: kat_sl_zd,
                kat_sl_rab: kat_sl_rab,
                vysota: vysota,
                P223: P223
            },

        }).then(response => {
            if (response.trim().length > 0) {
                let unparseRepsonse = JSON.parse(response);
                koefObsled1 = parseFloat(unparseRepsonse[0].trim());
                ki223 = parseFloat(unparseRepsonse[1].trim());
                if (koefObsled1 == 1 && koefObsled2 == 1) {
                    sumObsled = 0;
                } else {
                    sumObsled = koefObsled1 * koefObsled2 * b14Value * k18ob * obsledDop1 * obsledDop2 * Vdiv100 * k18101 * ki223 * koefHarackCheckb * agressive * temperaturMode * equipmentSaturat * kefVisota;
                }

            } else {
            }
            $('#obsledRab').html(sumObsled.toFixed(3));
            calculateK();
            resolve();
        })
    })
}


async function calcObsled2() {

    etazh = parseFloat(document.getElementById('etazh').value) || 0;
    let typeW;
    if ($("#choosCunstruct5").prop("checked")) {
        typeW = $("#buildingType").val();
        switch (typeW) {
            case 6:
                typeW = 4;
                break;
            case 5:
                typeW = 3;
                break;
            case 7:
                typeW = 2;
                break;
            default:
                typeW = etazh > 1 ? 2 : 1;
        }


        let koef1 = $("#toggleZd51").prop("checked") ? $("#conval51").val() / 100 : 0;
        let koef2 = $("#toggleZd52").prop("checked") ? $("#conval52").val() / 100 : 0;
        let koef3 = $("#toggleZd53").prop("checked") ? $("#conval53").val() / 100 : 0;
        let koef4 = $("#toggleZd54").prop("checked") ? $("#conval54").val() / 100 : 0;
        let koef5 = $("#toggleZd55").prop("checked") ? $("#conval55").val() / 100 : 0;
        let koef6 = $("#toggleZd56").prop("checked") ? $("#conval56").val() / 100 : 0;
        let koef7 = $("#toggleZd57").prop("checked") ? $("#conval57").val() / 100 : 0;
        let koef8 = $("#toggleZd58").prop("checked") ? $("#conval58").val() / 100 : 0;
        let koef9 = $("#toggleZd59").prop("checked") ? $("#conval59").val() / 100 : 0;

        let arKoef = [koef1, koef2, koef3, koef4, koef5, koef6, koef7, koef8, koef9];

        let myAr = [
            koef1 == 0 ? 0 : 1,
            koef2 == 0 ? 0 : 2,
            koef3 == 0 ? 0 : 3,
            koef4 == 0 ? 0 : 4,
            koef5 == 0 ? 0 : 9,
            koef6 == 0 ? 0 : 5,
            koef7 == 0 ? 0 : 6,
            koef8 == 0 ? 0 : 7,
            koef9 == 0 ? 0 : 8
        ];

        let count0 = 0;
        myAr.map(item => {
            item == 0 ? count0++ : count0
        });
        if (myAr.length == count0) {
            koefObsled2 = 1;

        }

        let newAr = myAr.filter(item => item != 0);


        return new Promise(function (resolve, reject) {
            let budval = $("#buildingType").val();
            if (budval == 5) {
                typeW = 3;
            } else if (budval == 6) {
                typeW = 4;
            }
            $.ajax({
                url: "app/ajax/getKoefObsled2.php",
                method: "POST",
                data: {
                    typeW: typeW,
                    myAr: JSON.stringify(newAr)
                },
            }).then(function (response) {
                if (response.trim() == 1) {
                    koefObsled2 = 1;
                } else {
                    let gettedAr = JSON.parse(response);
                    let sum = 0;
                    let index = 0;
                    arKoef.map(item => {
                        if (item != 0) {
                            sum += gettedAr[index] * item;
                            index++;
                        }
                    })
                    koefObsled2 = sum;
                }
                if (koefObsled1 == 1 && koefObsled2 == 1) {
                    sumObsled = 0;
                } else {
                    sumObsled = koefObsled1 * koefObsled2 * b14Value * k18ob * obsledDop1 * obsledDop2 * Vdiv100 * k18101 * ki223 * koefHarackCheckb * agressive * temperaturMode * equipmentSaturat * kefVisota;
                }
                $('#obsledRab').html(sumObsled.toFixed(3));
                calculateK();
                resolve();
            }).catch(function (error) {
                reject(error);
            });
        });
    } else {
        koefObsled1 = 1;
    }
    await calculateK();

}


$("#choosCunstruct5").on("change", async function (event) {
    if (event.target.checked) {
        await calcObsled1();
        await calcObsled2();
    } else {
        koefObsled2 = 1;
    }
    if (koefObsled1 == 1 && koefObsled2 == 1) {
        sumObsled = 0;
    } else {
        sumObsled = koefObsled1 * koefObsled2 * b14Value * k18ob * obsledDop1 * obsledDop2 * Vdiv100 * k18101 * ki223 * koefHarackCheckb * agressive * temperaturMode * equipmentSaturat * kefVisota;
    }
    $('#obsledRab').html(sumObsled.toFixed(3));
    await calculateK();
})

$(".obmer2check").on("change", async () => {
    await calcObmerWorksPart2()
})


///////////////////////////////////////////////////////////////////////////


//------------------------------------------------------------------------------


async function calcSosttech1() {

    etazh = parseFloat(document.getElementById('etazh').value) || 0;
    let kat_sl_zd = hardZdanie;
    const kat_sl_rabs = document.querySelector('input[name="kat_sl_rab_sosttech"]:checked');
    let kat_sl_rab;
    if (kat_sl_rabs)
        kat_sl_rab = kat_sl_rabs.getAttribute('value');
    let vysota;
    if (etazh < 2) {
        if (mainvisotazdani < 1) {
            vysota = 0; // Если значение меньше 1, можно задать значение по умолчанию
        } else {
            const thresholds = [0, 6, 7, 8, 9, 10, 12, 14, 16, 18, 20, 23, 26, 30, 35, 40, 45, 50];
            vysota = thresholds.findIndex(threshold => mainvisotazdani < threshold);
            if (vysota === -1) {
                vysota = 18; // Если значение больше 50
            }
        }
    } else {

        const thresholds = [0, 8, 9, 10, 12, 14, 16, 18, 20, 23, 26, 30, 35, 40, 45, 50];
        vysota = thresholds.findIndex(threshold => etazh < threshold);
        if (vysota === -1) {
            vysota = 16; // Если значение больше 50
        }

    }
    if (kat_sl_rab == 1) {
        P242 = 12.5;
    } else if (kat_sl_rab == 2) {
        P242 = 14;
    } else if (kat_sl_rab == 3) {
        P242 = 15.5;
    }
    return new Promise((resolve, reject) => {
        $.ajax({
            url: "app/ajax/getKoefSosttech1.php",
            method: "POST",
            data: {
                etazh: etazh,
                kat_sl_zd: kat_sl_zd,
                kat_sl_rab: kat_sl_rab,
                vysota: vysota,
                P242: P242
            },

        }).then(response => {
            if (response.trim().length > 0) {
                let unparseRepsonse = JSON.parse(response);
                koefSosttech1 = parseFloat(unparseRepsonse[0].trim());
                ki242 = parseFloat(unparseRepsonse[1].trim());
                if (koefSosttech1 == 1 && koefSosttech2 == 1) {
                    sumSosttech = 0;
                } else {
                    sumSosttech = koefSosttech1 * koefSosttech2 * b14Value * k18ob * Vdiv100 * k18101 * ki242 * koefHarackCheckb * agressive * temperaturMode * equipmentSaturat * kefVisota;
                }


            }
            $('#sostTech').html(sumSosttech.toFixed(3));
            calculateK();
            resolve();
        })
    })
}


async function calcSosttech2() {

    etazh = parseFloat(document.getElementById('etazh').value) || 0;
    let typeW;
    if ($("#choosCunstruct6").prop("checked")) {
        typeW = $("#buildingType").val();
        switch (typeW) {
            case 6:
                typeW = 4;
                break;
            case 5:
                typeW = 3;
                break;
            case 7:
                typeW = 2;
                break;
            default:
                typeW = etazh > 1 ? 2 : 1;
        }


        let koef1 = $("#toggleZd61").prop("checked") ? $("#conval61").val() / 100 : 0;
        let koef2 = $("#toggleZd62").prop("checked") ? $("#conval62").val() / 100 : 0;
        let koef3 = $("#toggleZd63").prop("checked") ? $("#conval63").val() / 100 : 0;
        let koef4 = $("#toggleZd64").prop("checked") ? $("#conval64").val() / 100 : 0;
        let koef5 = $("#toggleZd65").prop("checked") ? $("#conval65").val() / 100 : 0;
        let koef6 = $("#toggleZd66").prop("checked") ? $("#conval66").val() / 100 : 0;
        let koef7 = $("#toggleZd67").prop("checked") ? $("#conval67").val() / 100 : 0;
        let koef8 = $("#toggleZd68").prop("checked") ? $("#conval68").val() / 100 : 0;
        let koef9 = $("#toggleZd69").prop("checked") ? $("#conval69").val() / 100 : 0;

        let arKoef = [koef1, koef2, koef3, koef4, koef5, koef6, koef7, koef8, koef9];

        let myAr = [
            koef1 == 0 ? 0 : 1,
            koef2 == 0 ? 0 : 2,
            koef3 == 0 ? 0 : 3,
            koef4 == 0 ? 0 : 4,
            koef5 == 0 ? 0 : 9,
            koef6 == 0 ? 0 : 5,
            koef7 == 0 ? 0 : 6,
            koef8 == 0 ? 0 : 7,
            koef9 == 0 ? 0 : 8
        ];

        let count0 = 0;
        myAr.map(item => {
            item == 0 ? count0++ : count0
        });
        if (myAr.length == count0) {
            koefSosttech2 = 1;
        }

        let newAr = myAr.filter(item => item != 0);


        return new Promise(function (resolve, reject) {
            let budval = $("#buildingType").val();
            if (budval == 5) {
                typeW = 3;
            } else if (budval == 6) {
                typeW = 4;
            }
            $.ajax({
                url: "app/ajax/getKoefSosttech2.php",
                method: "POST",
                data: {
                    typeW: typeW,
                    myAr: JSON.stringify(newAr)
                },
            }).then(function (response) {
                if (response.trim() == 1) {
                    koefSosttech2 = 1;
                } else {
                    let gettedAr = JSON.parse(response);
                    let sum = 0;
                    let index = 0;
                    arKoef.map(item => {
                        if (item != 0) {
                            sum += gettedAr[index] * item;
                            index++;
                        }
                    })
                    koefSosttech2 = sum;
                }
                if (koefSosttech1 == 1 && koefSosttech2 == 1) {
                    sumSosttech = 0;
                } else {
                    sumSosttech = koefSosttech1 * koefSosttech2 * b14Value * k18ob * Vdiv100 * k18101 * ki242 * koefHarackCheckb * agressive * temperaturMode * equipmentSaturat * kefVisota;
                }
                $('#sostTech').html(sumSosttech.toFixed(3));
                calculateK();
                resolve();
            }).catch(function (error) {
                reject(error);
            });
        });
    } else {
        koefSosttech1 = 1;
    }
    await calculateK();

}


$("#choosCunstruct6").on("change", async function (event) {
    if (event.target.checked) {
        await calcSosttech1();
        await calcSosttech2();
    } else {
        koefSosttech2 = 1;
    }
    if (koefSosttech1 == 1 && koefSosttech2 == 1) {
        sumSosttech = 0;
    } else {
        sumSosttech = koefSosttech1 * koefSosttech2 * b14Value * k18ob * Vdiv100 * k18101 * ki242 * koefHarackCheckb * agressive * temperaturMode * equipmentSaturat * kefVisota;
    }
    $('#sostTech').html(sumSosttech.toFixed(3));
    await calculateK();
})

async function call_doljnosti_KSD(event) {
    let thisTarget = event.target;
    let doljnostKoef = thisTarget.options[thisTarget.options.selectedIndex].getAttribute('data-koef');
    let nextInput = thisTarget.nextElementSibling;
    let nextnextInput = nextInput.nextElementSibling;
    if (nextnextInput.value.length === 0)
        nextnextInput.value = 1;
    nextInput.value = doljnostKoef;
    await calculateK();
}

document.querySelectorAll(".doljnosti_KSD").forEach(element => {
    element.addEventListener('change', call_doljnosti_KSD);
});

$(".kol_isp").on('change', async (event) => {

    await calculateK();
})


async function calcCalkulation() {
    calculacia = 0;
    let truds = $(".trud:not([disabled])");
    let tarifs = $(".tarif");
    let kol_isps = $(".kol_isp:not([disabled])");
    let size = 1;
    let result = await new Promise((resolve, reject) => {

        let trudsFiltered = truds.filter((index, item) => item.value.trim() !== "");
        let tarifsFiltered = tarifs.filter((index, item) => item.value.trim() !== "");
        let kol_ispsFiltered = kol_isps.filter((index, item) => item.value.trim() !== "");
        size = Math.min(trudsFiltered.length, tarifsFiltered.length);
        let chilsitel = 0;
        let znamenatel = 0;
        for (let i = 0; i < size; i++) {
            let trud = parseFloat(trudsFiltered[i].value);
            let tarif = parseFloat(tarifsFiltered[i].value);
            chilsitel += trud * tarif;
            znamenatel += trud;
        }
        let resultElement = chilsitel / znamenatel;
        let result = resultElement.toFixed(1);

        $('#sredRazryad').val(result);
        resolve(result);
    })
    let response = await $.ajax({
        url: 'app/ajax/getTarifKef.php',
        type: 'POST',
        data: {
            inputValue: result
        },

    });

    isCalc = document.getElementById('calcalc').checked;


    $('#tarifKoef').val(response.trim());
    calculacia = (parseFloat(response.trim()) * b14Value).toFixed(2);
    let newCalcul = 0;

    let sizeTruds = truds.length < 1 ? 1 : truds.length;

    if (truds.length > 1) {
        let calc1 = parseFloat(calculacia);
        let sum = 0;
        for (let i = 0; i < sizeTruds; i++) {
            let trudValue = parseFloat(truds.eq(i).val()); // Получаем значение текущего элемента
            let kolIspValue = parseFloat(kol_isps.eq(i).val()); // Получаем значение текущего элемента kol_isp

            if (trudValue !== 0) {
                sum += calc1 * trudValue * kolIspValue;

            }
        }
        calculacia = sum.toFixed(2);
    } else {
        truds.each(function () {
            calculacia *= $(this).val() !== "0" ? parseFloat($(this).val()) : 1;
        });

        kol_isps.each(function () {
            calculacia *= $(this).val() !== "0" ? parseFloat($(this).val()) : 1;
        });
    }
    calculacia = isNaN(calculacia) ? "0" : calculacia;
    document.getElementById('harakteristikaObjectCalc').innerText = calculacia;
    document.getElementById('calcalcres').innerText = calculacia;
}

$(".trud").on('change', () => {
    calculateK();
})

$(".tarif").on('change', () => {
    calculateK();
})

function printExcel() {

    new Promise((resolve, reject) => {
        document.cookie = "V=" + V + ";";
        document.cookie = "n=" + etazh + ";";
        document.cookie = "h=" + mainvisotazdani + ";";
        document.cookie = "textAreaNaimRabot=" + textAreaNaimRabot.val() + ";";
        document.cookie = " het=" + visotapola + ";";
        document.cookie = " k18101=" + k18101 + ";";
        document.cookie = " k18ob=" + k18ob.toFixed(2) + ";";
        document.cookie = " zakazchik=" + selectZakazchik.find('option:selected').text() + ";";
        document.cookie = " podradchik=" + selectPodryadchik.find('option:selected').text() + ";";
        document.cookie = " chacked1=" + isSborIshodnihDannihChecked + ";";
        document.cookie = " chacked2=" + isObmerRabotyChecked + ";";
        document.cookie = " chacked3=" + isObsledRabChecked + ";";
        document.cookie = " chacked4=" + isSostTechOtchetCheck + ";";
        document.cookie = " chacked5=" + isRedaktorIspConstr + ";";
        document.cookie = " chacked6=" + isObsledOtdel + ";";

        document.cookie = " h3tp_212=" + koefIshod + ";";
        document.cookie = " ph3_212=" + koefIshod2 + ";";
        document.cookie = " ki212=" + ki212 + ";";
        document.cookie = " p212=" + P212 + ";";
        let formula1 = "V/100 * PH3 * K * БС * Ki";
        let formula2 = formula1;
        let formula3 = formula1;
        let formula6 = "ОК * Ki * (K18.229=1) * БС";
        document.cookie = "formula6=" + formula6 + ";";

        if ($("#constructionType").val() === "2") {
            formula1 += " * " + "K18102";
            document.cookie = " K18102=" + 0.8 + ";";
        } else {
            document.cookie = " K18102=" + 1 + ";";
        }
        $(".harObj").each(function () {
            if ($(this).prop('checked')) {
                formula1 += " * " + $(this).attr('data-nameK');
                formula2 += " * " + $(this).attr('data-nameK');
                formula3 += " * " + $(this).attr('data-nameK');
                document.cookie = " " + $(this).attr('data-nameK').replace(".", "") + "=" + $(this).attr('data-id') + ";";
            } else {
                document.cookie = " " + $(this).attr('data-nameK').replace(".", "") + "=" + 1 + ";";
            }
        })

        $("#temperatureMode").children().each(function () {
            if ($(this).prop('selected')) {
                document.cookie = " K18205=" + $(this).attr('data-id') + ";";
            }
        })

        $("#equipmentSaturation").children().each(function () {
            if ($(this).prop('selected')) {
                document.cookie = " K18206=" + $(this).attr('data-id') + ";";
            }
        })

        $("#options").children().each(function () {
            if ($(this).prop('selected')) {
                document.cookie = " K18207=" + $(this).attr('data-id') + ";";
            }
        })

        document.cookie = " formula1=" + formula1 + ";";
        //
        document.cookie = " h3tp_222=" + koefObmerWork1 + ";";
        document.cookie = " ph3_222=" + koefObmerWork2 + ";";
        document.cookie = " ki222=" + ki222 + ";";
        document.cookie = " p222=" + P222 + ";";
        document.cookie = " formula2=" + formula1 + ";";

        //
        if ($("#toggleSelect1").prop("checked")) {
            formula2 += " * K18221";
        }
        if ($("#toggleSelect2").prop("checked")) {
            formula2 += " * K18222";
        }
        if ($("#povkef").prop("checked")) {
            formula2 += " * K18223";
        }
        if ($("#sooruzhzd").prop("checked")) {
            formula2 += " * K18224";
        }
        document.cookie = " h3tp_223=" + koefObsled1 + ";";
        document.cookie = " ph3_223=" + koefObsled2 + ";";
        document.cookie = " ki223=" + ki223 + ";";
        document.cookie = " p223=" + P223 + ";";
        document.cookie = " formula3=" + formula2 + ";";
        //

        if ($("#toggleZdDopUslseism").prop("checked")) {
            formula3 += " * K18225";
        }
        if ($("#toggleZdDopUslrazrab").prop("checked")) {
            formula3 += " * K18226";
        }
        if ($("#toggleZdDopUslrazrabrek").prop("checked")) {
            formula3 += " * K18227";
        }
        document.cookie = " h3tp_242=" + koefSosttech1 + ";";
        document.cookie = " ph3_242=" + koefSosttech2 + ";";
        document.cookie = " ki242=" + ki242 + ";";
        document.cookie = " p242=" + P242 + ";";
        document.cookie = " formula4=" + formula3 + ";";

        //

        document.cookie = " toggleZd71=" + toggleZd71.is(':checked') + ";";
        document.cookie = " toggleZd72=" + toggleZd72.is(':checked') + ";";
        document.cookie = " toggleZd73=" + toggleZd73.is(':checked') + ";";
        document.cookie = " toggleZd74=" + toggleZd74.is(':checked') + ";";

        document.cookie = " conval71=" + conval71 + ";";
        document.cookie = " conval72=" + conval72 + ";";
        document.cookie = " conval73=" + conval73 + ";";
        document.cookie = " conval74=" + conval74 + ";";

        document.cookie = " koefRedaktor1=" + koefRedaktor1 + ";";
        document.cookie = " koefRedaktor2=" + koefRedaktor2 + ";";
        document.cookie = " koefRedaktor3=" + koefRedaktor3 + ";";
        document.cookie = " koefRedaktor4=" + koefRedaktor4 + ";";

        document.cookie = " sumIshod=" + sumIshod + ";";
        document.cookie = " sumObmer=" + sumObmer + ";";
        document.cookie = " sumObsled=" + sumObsled + ";";
        document.cookie = " sumSosttech=" + sumSosttech + ";";
        document.cookie = " sumRedaktor=" + sumRedaktor + ";";

        document.cookie = " fullSumma=" + fullSumma + ";";


        document.cookie = " whoVistupaet=" + $("#whoVistupaet option:selected").text() + ";";

        let arrSbor = [];

        $(".ishod2check:checked").each(function() {
            var nextText = $(this).next();
            arrSbor.push(nextText.text().replace(/\s+/g, ' ').trim());
        })
        const arrSborString = JSON.stringify(arrSbor);
        document.cookie = `arrSbor=${encodeURIComponent(arrSborString)}; path=/; max-age=3600`;

        let arrObmer = [];

        $(".obmer2check:checked").each(function() {
            var nextText = $(this).next();
            arrObmer.push(nextText.text().replace(/\s+/g, ' ').trim());
        })
        const arrObmerString = JSON.stringify(arrObmer);
        document.cookie = `arrObmer=${encodeURIComponent(arrObmerString)}; path=/; max-age=3600`;

        let arrObsled = [];

        $(".obsled2check:checked").each(function() {
            var nextText = $(this).next();
            arrObsled.push(nextText.text().replace(/\s+/g, ' ').trim());
        })
        const arrObsledString = JSON.stringify(arrObsled);
        document.cookie = `arrObsled=${encodeURIComponent(arrObsledString)}; path=/; max-age=3600`;

        let arrSostTech = [];

        $(".sostTech2check:checked").each(function() {
            var nextText = $(this).next();
            arrSostTech.push(nextText.text().replace(/\s+/g, ' ').trim());
        })
        const arrSostTechString = JSON.stringify(arrSostTech);
        document.cookie = `arrSostTech=${encodeURIComponent(arrSostTechString)}; path=/; max-age=3600`;


        const objString = JSON.stringify(arrObsledOtdel);
        document.cookie = `myObject=${encodeURIComponent(objString)}; path=/; max-age=3600`;
        resolve();
    }).then(() => {
        location.href = "excel.php";
    })

}

function printCalculExcel() {
    let hasTrudData = false;
    let hasTarifData = false;

    $('.trud').each((index, item) => {

        if (!$(item).is(':disabled') && $(item).val() !== "") {
            hasTrudData = true;
        }
    });

    $('.tarif').each((index, item) => {

        if ($(item).val() !== "") {
            hasTarifData = true;
        }
    });

    if (!hasTrudData || !hasTarifData) {
        alert("Пожалуйста, заполните хотя бы одно поле трудоемкости и одно поле тарифов.");
        return;
    }

    new Promise((resolve, reject) => {
        document.cookie = "costwork14=" + costwork14 + ";";
        document.cookie = "p_avg=" + $('#sredRazryad').val() + ";";
        document.cookie = "t_k=" + $('#tarifKoef').val() + ";";
        document.cookie = "zakazchik=" + selectZakazchik.find('option:selected').text() + ";";
        document.cookie = "podradchik=" + selectPodryadchik.find('option:selected').text() + ";";
        let count = 0;

        $('.trud').each((index, item) => {
            if ($(item).val().length > 0) {
                let sel = $(item).prev('select');
                let selectedText;


                let customWorkInput = $('#customWork' + (index + 1));
                if (sel.val() === "8") {
                    selectedText = customWorkInput.val();
                } else {
                    selectedText = sel.find('option:selected').text();
                }


                if (selectedText && selectedText.trim() !== "") {
                    document.cookie = "name_rab" + (index + 1) + "=" + selectedText + ";";
                    document.cookie = "trud" + (index + 1) + "=" + $(item).val() + ";";
                    count++;
                }
            }
        });

        $('.tarif').each((index, item) => {
            if ($(item).val().length > 0) {
                let sel = $(item).prev('select').find('option:selected').text();
                let inp = $(item).next('input').val();
                document.cookie = "doljnost" + (index + 1) + "=" + sel + ";";
                document.cookie = "tarif" + (index + 1) + "=" + $(item).val() + ";";
                document.cookie = "kol_isp" + (index + 1) + "=" + inp + ";";
            }
        });

        document.cookie = "countCalc=" + count + ";";
        document.cookie = "calculacia=" + calculacia + ";";
        document.cookie = "fullSumma=" + fullSumma + ";";
        resolve();
    }).then(() => {
        location.href = "calculExcel.php";
    });
}

function printDogovor() {
    $.ajax({
        url: 'printDogovor.php',
        type: 'POST',
        data: {},
        success: function (response) {
            var WinPrint = window.open('', '', 'left=50,top=50,width=1200,height=860,toolbar=0,scrollbars=1,status=0');
            WinPrint.document.write('<style>@page {\n' +
                'margin: 1rem;\n' +
                '}</style>');
            WinPrint.document.write('<br/>');
            WinPrint.document.write(response);
            WinPrint.document.close();
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();

            resolve();
        }

    })
}


function printAkt() {
    $.ajax({
        url: 'printAkt.php',
        type: 'POST',
        data: {},
        success: function (response) {
            var WinPrint = window.open('', '', 'left=50,top=50,width=1200,height=860,toolbar=0,scrollbars=1,status=0');
            WinPrint.document.write('<style>@page {\n' +
                'margin: 1rem;\n' +
                '}</style>');
            WinPrint.document.write('<br/>');
            WinPrint.document.write(response);
            WinPrint.document.close();
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();

            resolve();
        }

    })
}


function toggleDropdownDogovor() {
    document.getElementById("dogovorDropdown").classList.toggle("show");
}

function filterDogovor() {
    var input, filter, dropdown, a, i;
    input = document.getElementById("dogovorSearch");
    filter = input.value.toUpperCase();
    dropdown = document.getElementById("dogovorDropdown");
    a = dropdown.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}

function getDogovor(id) {
    if (id) {
        const selectedItemDogovor = dogovorList.find(item => item.id_dogovor == id);
        if (selectedItemDogovor) {
            console.log(selectedItemDogovor);
            document.getElementById("id_zakazchik").value = selectedItemDogovor.id_zakazchik;
            document.getElementById("doljn").value = selectedItemDogovor.doljn;
            document.getElementById("fio").value = selectedItemDogovor.fio;
            document.getElementById("osn_podpis").value = selectedItemDogovor.osn_podpis;
            document.getElementById("rekvizit").value = selectedItemDogovor.rekvizit;
            document.getElementById("istochnik").value = selectedItemDogovor.istochnik;
            document.getElementById("date_start_work").value = selectedItemDogovor.date_start_work;
            document.getElementById("date_end_work").value = selectedItemDogovor.date_end_work;
            document.getElementById("count_bum").value = selectedItemDogovor.count_bum;
            document.getElementById("count_el").value = selectedItemDogovor.count_el;
            document.getElementById("osn_obsled").value = selectedItemDogovor.osn_obsled;
            document.getElementById("name_work").value = selectedItemDogovor.name_work;
            document.getElementById("target_work").value = selectedItemDogovor.target_work;
            document.getElementById("nomer_dogovora").value = selectedItemDogovor.nomer_dogovora;
            document.getElementById("who_podpis_dog").value = selectedItemDogovor.who_podpis_dog;
            document.getElementById("srok_vid").value = selectedItemDogovor.srok_vid;
            document.getElementById("count_days").value = selectedItemDogovor.count_days;
            document.getElementById("date_akt").value = selectedItemDogovor.date_akt;
            document.getElementById("who_podpis_akt").value = selectedItemDogovor.who_podpis_akt;
            document.getElementById("date_zakl_dogovora").value = selectedItemDogovor.date_zakl_dogovora;
            document.getElementById("count_toms").value = selectedItemDogovor.count_toms;
            document.getElementById("who_podpis_titul").value = selectedItemDogovor.who_podpis_titul;
            document.getElementById("sum_avans").value = selectedItemDogovor.sum_avans.replace("." , ",");
            document.getElementById("cost_work").value = selectedItemDogovor.cost_work.replace("." , ",");
            document.getElementById("count_str").value = selectedItemDogovor.count_str;


//-----------------------------------------------------------------------------------------------------------------
            const checkboxes = document.querySelectorAll('.form-check-input');
            checkboxes.forEach(checkbox => {
                checkbox.checked = false;
            });
            const checkboxDRall = ['nalich_avans', 'kompl_chert', 'tek_smeta', 'calculacia'];
            checkboxDRall.forEach(id => {
                const checkboxDR = document.getElementById(id);
                if (checkboxDR) {
                    console.log (selectedItemDogovor[id]);
                    checkboxDR.checked = selectedItemDogovor[id] > 0;
                }
            });

            const checkboxprilagaetsa = selectedItemDogovor.prilagaetsa;
            if (checkboxprilagaetsa) {
                const idcheckboxprilagaetsa = checkboxprilagaetsa.split(';');
                idcheckboxprilagaetsa.forEach(id => {
                    const checkbox = document.getElementById(`checkbox_${id}`);
                    if (checkbox) {
                        checkbox.checked = true;
                    }
                });
            }
        } else {
            console.error("Договор не найден");
        }

        document.getElementById("dogovorDropdown").classList.toggle("show");
    }
}
function saveDogovor(){

}
///////////////////////////////////////////////////////////////////////////


// function calculateHaracterCheckb(thisEl){
//     let data_id = thisEl.getAttribute('data-id');
//     if(thisEl.checked){
//         fullSumma *= data_id;
//     }else{
//         fullSumma /= data_id;
//     }
//     totalSum = fullSumma + calculacia;
//     $("#harakteristikaObjectSmeta").text(fullSumma.toFixed(2));
//     $("#harakteristikaObjectObsh").text(totalSum.toFixed(2));
//     console.log('fullSumma', fullSumma);
// }