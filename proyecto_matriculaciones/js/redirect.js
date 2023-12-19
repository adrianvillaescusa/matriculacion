function redireccion() {
    var DNI = prompt("Introduce tu DNI:"); // Pide el DNI

    if (DNI) {
        // Redirige a info_mat.php con el valor DNI= $DNI 
        window.location.href = './php/info_mat.php?DNI=' + DNI;
    }
}