function ValidarProducto() {
    let nombre = document.getElementById('nombre').value;
    let descripcion = document.getElementById('descripcion').value;
    let precio = document.getElementById('precio').value;
    let stock = document.getElementById('stock').value;

    if (nombre === '' || descripcion === '' || precio === '' || stock === ''){
        alert('Por favor, completa todos los campos.');
        return false;
    }
    if (precio <= 0){
        alert('El precio debe ser mayor que 0.');
        return false;
    }
    if (stock < 0){
        alert('El stock no puede ser negativo.');
        return false;
    }
    return true;
}

function ValidarCliente() {
    let nombre = document.getElementById('nombre_cliente').value;
    let email = document.getElementById('email_cliente').value;
    let direccion = document.getElementById('direccion_cliente').value;

    if (nombre === '' || email === '' || direccion === ''){
        alert('Por favor, completa todos los campos para el registro.');
        return false;
    }
    return true;
}