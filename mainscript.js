var loginform, registerform;

function initialize() {
    loginform = document.querySelector("#loginform");
    registerform = document.querySelector("#registerform");
    registerform.style.display = "none";
    var haveAcntBtn = document.querySelector("#haveAcntBtn"), dntHaveAcntBtn = document.querySelector("#dntHaveAcntBtn");
}

function replace() {
    if(loginform.style.display == "none"){
        loginform.style.display = "initial";
        registerform.style.display = "none";
    }else{
        loginform.style.display = "none";
        registerform.style.display = "initial";
    }
}
