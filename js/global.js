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
        url: '/app/ajax/saveSmeta.php',
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

    // Удаляем старые ссылки
    while (dropdown.children.length > 1) { // Оставляем только input
        dropdown.removeChild(dropdown.lastChild);
    }

    // Добавляем новые ссылки
    smetaList.forEach(smeta => {
        const link = document.createElement('a');
        link.id = `smeta-${smeta.id}`; // Устанавливаем новый ID
        link.onclick = () => getSmeta(smeta.id); // Устанавливаем обработчик клика
        link.textContent = smeta.name; // Устанавливаем текст ссылки
        dropdown.appendChild(link); // Добавляем ссылку в dropdown
    });
}










///////////////////////////////////////////////////////////////////////////




