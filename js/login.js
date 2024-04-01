function login(){
    let email = document.getElementById("email").value
    let password = document.getElementById("password").value
    $.ajax({
        url: "auth/enter.php",
        method: "POST",
        data: {email: email, password: password}
    }).done((response) => {
        if (response === "да"){
            location.href = "/index.php"
        }else{
            alert("Неверный логин или пароль")
        }
    })
}
