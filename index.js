function data()
{
var a = document.getElementById("name").value;
var b = document.getElementById("age").value;
var c = document.getElementById("gender").value;
var d = document.getElementById("email").value;
var e = document.getElementById("phone").value;
var f = document.getElementById("desc").value;

if(a==""|| b==""||c==""|| d==""||e==""||f==""){
    alert("ALL FIELDS ARE MENDATORY");
    return false;
}
else{
    true;
}

}
