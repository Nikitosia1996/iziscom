var currentUrl = window.location.pathname;

if(currentUrl == "/" || currentUrl == "/index.php"){
    let mainMenu = document.querySelector('[href="index.php?main"]');
    mainMenu.classList.add('active');
}

