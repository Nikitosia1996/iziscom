var socket = new WebSocket("ws://172.19.6.64:8889");

socket.onmessage = function(event) {
    let users;
    users = JSON.parse(event.data);
    updateTable(users);
};

function updateTable(users) {
    var tableBody = document.querySelector("#myusers tbody");
    if(tableBody)
    tableBody.innerHTML = ""; // Очищаем содержимое таблицы

    users.forEach(function(user) {
        var row = tableBody.insertRow();
        var idCell = row.insertCell(0);
        var loginCell = row.insertCell(1);
        var usernameCell = row.insertCell(2);
        var emailCell = row.insertCell(3);
        var tokenCell = row.insertCell(4);

        idCell.textContent = user.id;
        loginCell.textContent = user.login;
        loginCell.contentEditable = "true";
        usernameCell.textContent = user.username;
        emailCell.textContent = user.email;
        tokenCell.textContent = user.token;

        loginCell.onblur = function () {
            user.login = loginCell.textContent;
            socket.send(JSON.stringify(user));
        }
    });
}