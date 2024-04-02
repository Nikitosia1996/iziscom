function login(){
    let login = document.getElementById("login").value
    let password = document.getElementById("password").value
    $.ajax({
        url: "../auth/enter.php",
        method: "POST",
        data: {login: login, password: password}
    }).done((response) => {
        if (response == 1){
            location.href = "/index.php"
        }else{
            alert("Неверный логин или пароль")
        }
    })
}
