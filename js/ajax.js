function GetXMLHttp() {
    if (navigator.appName == "Microsoft Internet Explorer") {
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        xmlHttp = new XMLHttpRequest();
    }
    return xmlHttp;
}
var xmlRequest = GetXMLHttp();
//--inicio bloco novo--\\
function carregaPro(aluid1, modid1, proid1) {
    var urlget = "responder.php?aluid=" + aluid1 + "&modid=" + modid1 + "&proid=" + proid1;
    window.open(urlget);
    //xmlRequest.open("GET", url, true);
    //xmlRequest.send(null);
    //return url;
}

function carregaPer(aluid1, modid1, proid1, perid1, resnota1) {
    var url = "gravaresposta.php?aluid=" + aluid1 + "&modid=" + modid1 + "&proid=" + proid1 + "&perid=" + perid1 + "&resnota=" + resnota1;
    //alert(aluid1 + "-" + modid1 + "-" + proid1 + "-" + perid1 + "-" + resnota1);
    xmlRequest.open("GET", url, true);
    //xmlRequest.onreadystatechange = mudancaEstado;
    xmlRequest.send(null);
    return url;
}
var modid;
function carregaMod(modid1) {
    modid = modid1;
}
function carregaProTurma(proid1) {
    var url = "gravaprofessorturma.php?modid=" + modid + "&proid=" + proid1;
    xmlRequest.open("GET", url, true);
    //xmlRequest.onreadystatechange = mudancaEstado;
    xmlRequest.send(null);
    return url;
}

function carregaAlu(modid1, aluid1) {
    //alert(modid1+" - "+aluid1);
    var url = "gravaalunocurso.php?modid=" + modid1 + "&aluid=" + aluid1;
    xmlRequest.open("GET", url, true);
    xmlRequest.send(null);
    return url;
}

//function carregaPro(aluid1,modid1,proid1) {
//    //var url = "gravaprofessorturma.php?modid=" + modid + "&proid=" + proid1;
//    alert(aluid1 + "-" + modid1 + "-" + proid1);
//    xmlRequest.open("GET", url, true);
//    //xmlRequest.onreadystatechange = mudancaEstado;
//    xmlRequest.send(null);
//    return url;
//}