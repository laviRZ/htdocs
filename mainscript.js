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

function request(log){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //this.responseText;
        }
    };
    var data = new Array();
    if(log){
        data[0] = document.getElementsByName('lusername')[0].value;
        data[1] = document.getElementsByName('lpassword')[0].value;
    }
    xmlhttp.open("POST", "dbread.php", false);
    xmlhttp.send(data);
}
