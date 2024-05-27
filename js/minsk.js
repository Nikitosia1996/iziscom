
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
function showSection(idOborudovanie, element) {
    let oldActive = document.getElementsByClassName("activecard1")[0];
    if(oldActive)
    oldActive.classList.remove("activecard1");
    element.classList.add('activecard1');
    let sections = document.getElementsByClassName('connectedSortable');
    [...sections].forEach(item => {
        item.style.display = 'none';
    })
    let section = document.getElementById("org" + idOborudovanie);
    section.style.display = "block";
    showTable('infoOb' + idOborudovanie);

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
            if (!data.hasOwnProperty('empty')) {
            tableContent += '<thead><tr>';
            let headers = {
                'id_oborudovanie': 'Наименование оборудования',
                'date_fault': 'Дата поломки',
                'date_call_service': 'Дата вызова сервисантов иных технических специалистов',
                'reason_fault': 'Причина поломки',
                'date_procedure_purchase': 'Дата проведения процедуры закупки на поставку з/ч или услуги по ремонту',
                'cost_repair': 'Стоимость ремонта',
                'time_repair': 'Срок ремонта/поставки запасных частей',
                'downtime': 'Время простоя',
                'id_fault': 'Действия'
            };
            Object.keys(headers).forEach(function(key) {
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
                tableContent += '<td><a href="#" onclick="confirmDeleteFault(' + row.id_fault + '); return false;">&#10060;</a><a href="#" onclick="editFault(' + row.id_fault + ');">✏️</a></td>';
                tableContent += '</tr>';
            });
            } else {
                tableContent += '<thead><tr>';
                tableContent += '<th></th>';
                tableContent += '</tr></thead><tbody>';
                tableContent += '<tr><td colspan="8" style="text-align:center;">Нет данных</td></tr>';
            }
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
            if (!data.hasOwnProperty('empty')) {
                tableContent += '<thead><tr>';
                let headers = {
                    'id_oborudovanie': 'Наименование оборудования',
                    'count_research': 'Количество проведенных исследований',
                    'count_patient': 'Количество диагностированных пациентов',
                };
                Object.keys(headers).forEach(function (key) {
                    tableContent += '<th>' + headers[key] + '</th>';
                });
                tableContent += '</tr></thead><tbody>';

                data.forEach(function (row) {
                    tableContent += '<tr>';
                    tableContent += '<td>' + row.id_oborudovanie + '</td>';
                    tableContent += '<td>' + row.count_research + '</td>';
                    tableContent += '<td>' + row.count_patient + '</td>';
                    tableContent += '</tr>';
                });
            }
            else {
                    tableContent += '<thead><tr>';
                    tableContent += '<th></th>';
                    tableContent += '</tr></thead><tbody>';
                    tableContent += '<tr><td colspan="8" style="text-align:center;">Нет данных</td></tr>';
                }
            tableContent += '</tbody></table>';
            $('#effectModal .modal-body').html(tableContent);
            $('#effectModal').modal('show');
        }
    });
}



function confirmDeleteFault(id_fault) {
    if (confirm('Вы точно хотите удалить эту запись?')) {
        $.ajax({
            url: '/app/ajax/deleteFault.php',
            type: 'POST',
            data: { id_fault: id_fault },
            success: function(response) {
                if (response === "Запись успешно удалена.") {
                    $('#deleteModal').modal('show');
                    $('#deleteModal').on('hidden.bs.modal', function (e) {
                        $('#deleteModal').modal('hide');
                        getFaultsTable();
                    });
                } else {
                    getFaultsTable();
                }
            }
        });
    }
}



    $('#addFaultForm').on('submit', function(e) {
        e.preventDefault();

        let date_fault = $('#date_fault').val();
        let date_call_service = $('#date_call_service').val();
        let reason_fault = $('#reason_fault').val();
        let date_procedure_purchase = $('#date_procedure_purchase').val();
        let cost_repair = $('#cost_repair').val();
        let time_repair = $('#time_repair').val();
        let downtime = $('#downtime').val();


        let data = {
            date_fault: date_fault,
            date_call_service: date_call_service,
            reason_fault: reason_fault,
            date_procedure_purchase: date_procedure_purchase,
            cost_repair: cost_repair,
            time_repair: time_repair,
            downtime: downtime,
            id_oborudovanie: selectedEquipmentId
        };
        $.ajax({
            url: '/app/ajax/insertFault.php',
            type: 'POST',
            data: data,
            success: function(response) {

                if (response === "Запись добавлена.") {

                    $('#addFaultModal').modal('hide');
                    getFaultsTable();
                } else {
                    getFaultsTable();
                    alert(response);
                }
            },
            error: function(xhr, status, error) {
                alert('Произошла ошибка: ' + error);
            }
        });
    });



function editFault(id_fault) {
    $.ajax({
        url: '/app/ajax/getSingleFault.php',
        type: 'GET',
        data: { id_fault: id_fault },
        dataType: 'json',
        success: function (data) {
            $('#editFaultModal').modal('show');
            document.getElementById('edit_date_fault').value = data.date_fault;
            document.getElementById('edit_date_call_service').value = data.date_call_service;
            document.getElementById('edit_reason_fault').value = data.reason_fault;
            document.getElementById('edit_date_procedure_purchase').value = data.date_procedure_purchase;
            document.getElementById('edit_cost_repair').value = data.cost_repair;
            document.getElementById('edit_time_repair').value = data.time_repair;
            document.getElementById('edit_downtime').value = data.downtime;
            document.getElementById('edit_id_fault').value = data.id_fault;

        }
    });
}


function submitEditFault() {
    let formData = $('#editFaultForm').serialize();
    $.ajax({
        url: '/app/ajax/updateFault.php',
        type: 'POST',
        data: formData,
        success: function(response) {

            if (response === "Запись обновлена.") {
                $('#editFaultModal').modal('hide');
                getFaultsTable();
            } else {
                alert(response);
            }
        },
        error: function(xhr, status, error) {
            alert('Произошла ошибка: ' + error);
        }
    });
}

let editedOborudovanie;
function editOborudovanie(idOborudovanie) {
    editedOborudovanie = idOborudovanie;
    $.ajax({
        url: '/app/ajax/getSingleOborudovanie.php',
        type: 'GET',
        data: { id_oborudovanie: idOborudovanie },
        dataType: 'json',
        success: function (data) {
            $('#editOborudovanieModal').modal('show');
            let select_type_oborudovanie = document.getElementById("select_type_oborudovanie");
            select_type_oborudovanie.options.forEach(option => {
                if (option.value === data.id_type_oborudovanie) {
                    option.selected = true;
                }
            });
            document.getElementById('edit_cost').value = data.cost;
            document.getElementById('edit_date_create').value = data.date_create;
            document.getElementById('edit_date_release').value = data.date_release;
            document.getElementById('edit_service_organization').value = data.service_organization;
            document.getElementById('edit_date_last_TO').value = data.date_last_TO;


            let select_status = document.getElementById("select_status");
            select_status.options.forEach(option => {
                if (option.value === data['status']) {
                    option.selected = true;
                }
            });
        }
    });
}

function saveEditedOborudovanie(){
    let select_type_oborudovanie = document.getElementById("select_type_oborudovanie");
    let select_status = document.getElementById("select_status");
    $.ajax({
        url: '/app/ajax/updateOborudovanie.php',
        type: 'POST',
        data: {id_oborudovanie: editedOborudovanie,
            id_type_oborudovanie: select_type_oborudovanie.options[select_type_oborudovanie.selectedIndex].value,
            cost: document.getElementById('edit_cost').value,
            date_create: document.getElementById('edit_date_create').value,
            date_release: document.getElementById('edit_date_release').value,
            service_organization: document.getElementById('edit_service_organization').value,
            date_last_TO: document.getElementById('edit_date_last_TO').value,
            status: select_status.options[select_status.selectedIndex].value
        },
        success: function (data) {
            if(data == "1") {
                alert("Запись изменена");
                location.reload();
            }else{
                alert("Ошибка в заполнении");
            }

        }
    });
}