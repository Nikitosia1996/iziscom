var currentUrl = window.location.search;

let idActiveSmeta;

let selectZakazchik = $('#zakazchik');
let selectPodryadchik = $('#podryadchik');
let inputDateNachRab = $('#dateNachRab');
let inputDateOkonchRab = $('#dateOkonchRab');
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


let toggleZd41 = $('#toggleZd41');
let toggleZd42 = $('#toggleZd42');
let toggleZd43 = $('#toggleZd43');
let toggleZd44 = $('#toggleZd44');
let toggleZd45 = $('#toggleZd45');
let toggleZd46 = $('#toggleZd46');
let toggleZd47 = $('#toggleZd47');
let toggleZd48 = $('#toggleZd48');
let toggleZd49 = $('#toggleZd49');
let toggleZd449 = $('#toggleZd449');
let choosCunstruct4 = $('#choosCunstruct4');


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


function getSmeta(id) {
    idActiveSmeta = id;
    const selectedItem = smetaList.find(item => item.id == id);
    if (selectedItem) {
        selectZakazchik.val(selectedItem.id_zakazchik);
        selectPodryadchik.val(selectedItem.id_podryadchik);
        inputDateNachRab.val(selectedItem.dateNachRab);
        inputDateOkonchRab.val(selectedItem.dateOkonchRab);
        smetaName.val(selectedItem.name);

        const haract = selectedItem.haractObject;
        const ishod = selectedItem.ishod;
        const obmer = selectedItem.obmer;
        const obsled = selectedItem.obsled;
        const sosttech = selectedItem.sosttech;



        $('#buildingType').val(haract.zdanie);
        $('#constructionType').val(haract.typeZdanie);
        $('#etazh').val(haract.stage);
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

        choosCunstruct4.prop('checked', obmer.choosCunstruct4 > 0);
        if (obmer.choosCunstruct4 > 0) {
            toggleZd41.prop('disabled', false);
            toggleZd42.prop('disabled', false);
            toggleZd43.prop('disabled', false);
            toggleZd44.prop('disabled', false);
            toggleZd45.prop('disabled', false);
            toggleZd46.prop('disabled', false);
            toggleZd47.prop('disabled', false);
            toggleZd48.prop('disabled', false);
            toggleZd49.prop('disabled', false);
            toggleZd449.prop('disabled', false);
            toggleZd41.prop('checked', obmer.toggleZd41 > 0);
            toggleZd42.prop('checked', obmer.toggleZd42 > 0);
            toggleZd43.prop('checked', obmer.toggleZd43 > 0);
            toggleZd44.prop('checked', obmer.toggleZd44 > 0);
            toggleZd45.prop('checked', obmer.toggleZd45 > 0);
            toggleZd46.prop('checked', obmer.toggleZd46 > 0);
            toggleZd47.prop('checked', obmer.toggleZd47 > 0);
            toggleZd48.prop('checked', obmer.toggleZd48 > 0);
            toggleZd49.prop('checked', obmer.toggleZd49 > 0);
            toggleZd449.prop('checked', obmer.toggleZd449 > 0);
            $('#conval41').val(obmer.conval41);
            $('#conval42').val(obmer.conval42);
            $('#conval43').val(obmer.conval43);
            $('#conval44').val(obmer.conval44);
            $('#conval45').val(obmer.conval45);
            $('#conval46').val(obmer.conval46);
            $('#conval47').val(obmer.conval47);
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
            toggleZd47.prop('disabled', true);
            toggleZd48.prop('disabled', true);
            toggleZd49.prop('disabled', true);
            toggleZd449.prop('disabled', true);



            toggleZd41.prop('checked', false);
            toggleZd42.prop('checked', false);
            toggleZd43.prop('checked', false);
            toggleZd44.prop('checked', false);
            toggleZd45.prop('checked', false);
            toggleZd46.prop('checked', false);
            toggleZd47.prop('checked', false);
            toggleZd48.prop('checked', false);
            toggleZd49.prop('checked', false);
            toggleZd449.prop('checked', false);
            $('#conval41').val('');
            $('#conval42').val('');
            $('#conval43').val('');
            $('#conval44').val('');
            $('#conval45').val('');
            $('#conval46').val('');
            $('#conval47').val('');
            $('#conval48').val('');
            $('#conval49').val('');
            $('#conval449').val('');

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
    }
    document.getElementById("myDropdown").classList.toggle("show");
    calculateK();

    return null;
}

function saveSmeta() {
    let ishod = {
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
        conval9: $('#conval9').val()
    };

    console.log(ishod);

    haractObject = {
        zdanie: buildingType.val(),
        typeZdanie: constructionType.val(),
        stage: $('#etazh').val(),
        height: $('#visotazdani').val(),
        obem: $('#obem').val(),
        height_pol: $('#visotapola').val(),
        temperature: temperatureMode.val(),
        nasishenost: equipmentSaturation.val(),
        aggresive_vozdeistvie: options.val(),
        checkb1: chekb1.prop('checked')? 1 : 0,
        checkb2: chekb2.prop('checked')? 1 : 0,
        checkb3: chekb3.prop('checked')? 1 : 0,
        checkb4: chekb4.prop('checked')? 1 : 0,
        checkb5: chekb5.prop('checked')? 1 : 0,
        checkb6: chekb6.prop('checked')? 1 : 0,
        checkb7: chekb7.prop('checked')? 1 : 0,
        checkb8: chekb8.prop('checked')? 1 : 0,
        checkb9: chekb9.prop('checked')? 1 : 0,
        checkb10: chekb10.prop('checked')? 1 : 0,
        checkb11: chekb11.prop('checked')? 1 : 0,
        checkb12: chekb12.prop('checked')? 1 : 0,
    }
    let smetaForPhp = {
        id: idActiveSmeta?.toString(),
        name: smetaName.val(),
        id_zakazchik: selectZakazchik.val(),
        id_podryadchik: selectPodryadchik.val(),
        dateNachRab: inputDateNachRab.val(),
        dateOkonchRab: inputDateOkonchRab.val(),
        haractObject: JSON.stringify(haractObject),
        ishod: JSON.stringify(ishod),

    };

    let smeta = {
        id: idActiveSmeta?.toString(),
        name: smetaName.val(),
        id_zakazchik: selectZakazchik.val(),
        id_podryadchik: selectPodryadchik.val(),
        dateNachRab: inputDateNachRab.val(),
        dateOkonchRab: inputDateOkonchRab.val(),
        haractObject: haractObject,
        ishod: ishod

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
                if(smetaList == null)
                    smetaList = [];
                smetaList.push(smeta);

            }
            updateSmetaLinks();
        }
    })
    console.log(smetaList);

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
        link.onclick = () => getSmeta(smeta.id);
        link.textContent = smeta.name;
        dropdown.appendChild(link);
    });
}










///////////////////////////////////////////////////////////////////////////




