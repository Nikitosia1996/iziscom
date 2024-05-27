
function showTable(idTable) {
    let tables = document.getElementsByTagName('table');
    [...tables].forEach(item => {
        item.style.display = 'none';
    })
    let table = document.getElementById(idTable);
    table.style.display = "block";
    $('table').DataTable().destroy();
    $('#' + idTable).DataTable();
    $('th').css('width', '20%');
}
function showSection(idCard, element) {
    let oldActive = document.getElementsByClassName("activecard1")[0];
    oldActive.classList.remove("activecard1");
    element.classList.add('activecard1');
    let sections = document.getElementsByClassName('connectedSortable');
    [...sections].forEach(item => {
        item.style.display = 'none';
    })
    let section = document.getElementById(idCard);
    section.style.display = "block";
    if (idCard === 'org1') {
        showTable('infoOb1');
    } else if (idCard === 'org2') {
        showTable('infoOb3');
    }
}

function myFunctionOrg(input) {
    let filter, cards, card, i, txtValue;
    filter = input.value.toUpperCase();
    cards = document.getElementsByClassName("card0");

    for (i = 0; i < cards.length; i++) {
        card = cards[i];
        txtValue = card.textContent || card.innerText;

        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            card.style.display = "";
        } else {
            card.style.display = "none";
        }
    }
}

function getFaultsTable() {
    $.ajax({
        url: '/app/ajax/getFaultsTable.php',
        type: 'GET',
        data: { id_oborudovanie: selectedEquipmentId },
        dataType: 'json',
        success: function (data) {
            let tableContent = '<table class="table" style="font-size: 13px;">';
            tableContent += '<thead><tr>';
            let headers = {
                'id_oborudovanie': 'Наименование оборудования',
                'date_fault': 'Дата поломки',
                'date_call_service': 'Дата вызова сервисантов иных технических специалистов',
                'reason_fault': 'Причина поломки',
                'date_procedure_purchase': 'Дата проведения процедуры закупки на поставку з/ч или услуги по ремонту',
                'cost_repair': 'Стоимость ремонта',
                'time_repair': 'Срок ремонта/поставки запасных частей',
                'downtime': 'Время простоя'
            };
            Object.keys(data[0]).forEach(function(key) {
                tableContent += '<th>' + headers[key] + '</th>';
            });
            tableContent += '</tr></thead><tbody>';
            data.forEach(function(row) {
                tableContent += '<tr>';
                tableContent += '<td>' + row.id_oborudovanie + '</td>';
                tableContent += '<td>' + row.date_fault + '</td>';
                tableContent += '<td>' + row.date_call_service + '</td>';
                tableContent += '<td>' + row.reason_fault + '</td>';
                tableContent += '<td>' + row.date_procedure_purchase + '</td>';
                tableContent += '<td>' + row.cost_repair + '</td>';
                tableContent += '<td>' + row.time_repair + '</td>';
                tableContent += '<td>' + row.downtime + '</td>';
                tableContent += '</tr>';
            });
            tableContent += '</tbody></table>';
            $('#faultsModal .modal-body').html(tableContent);
            $('#faultsModal').modal('show');
        }
    });
}

function getEffectTable() {
    $.ajax({
        url: '/app/ajax/getEffectTable.php',
        type: 'GET',
        data: { id_oborudovanie: selectedEquipmentId },
        dataType: 'json',
        success: function (data) {
            let tableContent = '<table class="table" style="font-size: 13px;">';
            tableContent += '<thead><tr>';
            let headers = {
                'id_oborudovanie': 'Наименование оборудования',
                'count_research': 'Количество проведенных исследований',
                'count_patient': 'Количество диагностированных пациентов',
            };
            Object.keys(data[0]).forEach(function(key) {
                tableContent += '<th>' + headers[key] + '</th>';
            });
            tableContent += '</tr></thead><tbody>';
            data.forEach(function(row) {
                tableContent += '<tr>';
                tableContent += '<td>' + row.id_oborudovanie + '</td>';
                tableContent += '<td>' + row.count_research + '</td>';
                tableContent += '<td>' + row.count_patient + '</td>';
                tableContent += '</tr>';
            });
            tableContent += '</tbody></table>';
            $('#effectModal .modal-body').html(tableContent);
            $('#effectModal').modal('show');
        }
    });
}





