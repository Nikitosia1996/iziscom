var currentUrl = window.location.search;

let idActiveSmeta;

let selectZakazchik = $('#zakazchik');
let selectPodryadchik = $('#podryadchik');
let inputDateNachRab = $('#dateNachRab');
let inputDateOkonchRab = $('#dateOkonchRab');
let divSaveSmeta = $('#divSaveSmeta');
let smetaName = $('#smetaName');

function getSmeta(id) {
    idActiveSmeta = id;
    const selectedItem = smetaList.find(item => item.id == id);
    if (selectedItem) {
        selectZakazchik.val(selectedItem.id_zakazchik);
        selectPodryadchik.val(selectedItem.id_podryadchik);
        inputDateNachRab.val(selectedItem.dateNachRab);
        inputDateOkonchRab.val(selectedItem.dateOkonchRab);

    }
    document.getElementById("myDropdown").classList.toggle("show");

    return null;
}

function saveSmeta(){
    let smeta = {
        id: idActiveSmeta,
        id_zakazchik: selectZakazchik.val(),
        id_podryadchik: selectPodryadchik.val(),
        dateNachRab: inputDateNachRab.val(),
        dateOkonchRab: inputDateOkonchRab.val(),
        smetaName: smetaName.val()
    };
    if(idActiveSmeta){
        smetaList.forEach((item, index) => {
            if(item.id === idActiveSmeta){
                smetaList[index] = smeta;
            }
        });
    } else {
        smetaList.push(smeta);

    }
    $.ajax({
        url: '/app/ajax/saveSmeta.php',
        type: 'POST',
        data: smeta,
        success: function(response) {
            console.log(response);
        }
    })
    console.log(smetaList);
    alert('Сохранено!');
}

