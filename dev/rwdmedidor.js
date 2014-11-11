 // Medidor de Resolução
 $(".header-principal").before('<span id="medidor"></span>');
 function redimensiona(){
    var largura = document.getElementById("medidor");
    largura.innerHTML = window.innerWidth + " px";
 }
 window.onresize = redimensiona;
 window.onload = redimensiona;
