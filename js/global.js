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
        smetaName.val(selectedItem.name)
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

