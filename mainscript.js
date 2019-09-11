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

function login(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
        }
    };
    
    var username = document.getElementsByName('lusername')[0].value;
    var password = document.getElementsByName('lpassword')[0].value;
    
    xmlhttp.open("POST", "dbread.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("action=login&username="+username+"&password="+password);
}

function register(){
    alert(3);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
        }
    };
    
    var username = document.getElementsByName('rusername')[0].value;
    var email = document.getElementsByName('remail')[0].value;
    var password = document.getElementsByName('rpassword')[0].value;
    
    xmlhttp.open("POST", "register.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("username="+username+"&password="+password+"&email="+email);
}
