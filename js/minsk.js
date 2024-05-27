function showTable(idTable, element) {
    let oldActive = document.getElementsByClassName("activeOrg")[0];
    if (oldActive)
        oldActive.classList.remove("activeOrg");
    element.classList.add('activeOrg');
    let tables = document.getElementsByTagName('table');
    [...tables].forEach(item => {
        item.style.display = 'none';
    })
    let table = document.getElementById(idTable);
    table.style.display = "block";
    $('table').DataTable().destroy();
    $('#infoOb' + idTable.substr(6)).DataTable();
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
}

function myFunction(input) {
    let filter = input.value.toUpperCase();
    let ul = input.nextElementSibling;
    let lis = ul.children;
    for (let i = 0; i < lis.length; i++) {
        let a = lis[i].children[0];
        let li = a.textContent.toUpperCase();
        if (li.indexOf(filter) > -1) {
            lis[i].style.display = "";
        } else {
            lis[i].style.display = "none";
        }
    }
}