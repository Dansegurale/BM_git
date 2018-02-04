var imgEmp = document.getElementById("imgLoginEmpresa");
var zonaEmp = document.getElementById("zonaLoginEmpresa");

var imgAl = document.getElementById("imgLoginAlumne");
var zonaAl = document.getElementById("zonaLoginAlumne");

window.addEventListener("load", function(){
    
    zonaEmp.style.display="none";
    zonaAl.style.display="none";
    
    imgEmp.addEventListener("click", mostraEmp);
    imgAl.addEventListener("click", mostraAl);
});

function mostraEmp(e){
    e.target.style.display="none";
    zonaEmp.style.display="block";
    zonaAl.style.display="none";
    imgAl.style.display="block";

}
function mostraAl(e){
    e.target.style.display="none";
    zonaAl.style.display="block";
    zonaEmp.style.display="none";
    imgEmp.style.display="block";
}