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
let etazh = $('#etazh').val;
let visotazdani = $('#visotazdani').val;
let obem = $('#obem').val;
let visotapola = $('#visotapola').val;
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
        $('#buildingType').val(haract.zdanie);
        $('#constructionType').val(haract.typeZdanie);
        $('#etazh').val(haract.stage);
        $('#visotazdani').val(haract.height);
        $('#obem').val(haract.obem);
        $('#visotapola').val(haract.height_pol);
        $('#temperatureMode').val(haract.temperature);
        $('#equipmentSaturation').val(haract.nasishenost);
        $('#options').val(haract.aggresive_vozdeistvie);

        $('#checkb1').prop('checked', haract.checkb1 > 0);
        $('#checkb2').prop('checked', haract.checkb2 > 0);
        $('#checkb3').prop('checked', haract.checkb3 > 0);
        $('#checkb4').prop('checked', haract.checkb4 > 0);
        $('#checkb5').prop('checked', haract.checkb5 > 0);
        $('#checkb6').prop('checked', haract.checkb6 > 0);
        $('#checkb7').prop('checked', haract.checkb7 > 0);
        $('#checkb8').prop('checked', haract.checkb8 > 0);
        $('#checkb9').prop('checked', haract.checkb9 > 0);
        $('#checkb10').prop('checked', haract.checkb10 > 0);
        $('#checkb11').prop('checked', haract.checkb11 > 0);
        $('#checkb12').prop('checked', haract.checkb12 > 0);
        console.log(haract.checkb12);
    }
    document.getElementById("myDropdown").classList.toggle("show");

    return null;
}

function saveSmeta() {
    let smeta = {
        id: idActiveSmeta?.toString(),
        name: smetaName.val(),
        id_zakazchik: selectZakazchik.val(),
        id_podryadchik: selectPodryadchik.val(),
        dateNachRab: inputDateNachRab.val(),
        dateOkonchRab: inputDateOkonchRab.val(),

    };

    $.ajax({
        url: '/app/ajax/saveSmeta.php',
        type: 'POST',
        data: smeta,
        success: function (response) {
            if (idActiveSmeta) {
                smetaList.forEach((item, index) => {
                    if (item.id == idActiveSmeta) {
                        smetaList[index] = smeta;
                    }
                });

            } else {
                smeta.id = response.trim();
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

