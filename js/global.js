var currentUrl = window.location.search;



if(currentUrl == "?main" || currentUrl == ""){
    let mainMenu = document.querySelector('[href="index.php?main"]');
    mainMenu.classList.add('active');
}
else if(currentUrl == "/index.php?oborud"){
    let oborMenu = document.querySelector('[href="index.php?oborud"]');
    oborMenu.classList.add('active');
}
else if(currentUrl == "/index.php?servicemans"){
    let serviceMenu = document.querySelector('[href="index.php?servicemans"]');
    serviceMenu.classList.add('active');
}

