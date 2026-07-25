class Producto {
    constructor(nombre, precio) {
        this.nombre = nombre;
        this.precio =precio;
    }

    mostrarInfo() {
        return `${this.nombre} - $${this.precio}`;
    }    
}

const productos = [
    new Producto("Mouse Gamer", 7990),
    new Producto("Audífonos Bluetooth", 18500),
    new Producto("Monitor Samsung", 99990),
    new Producto("NotebooK Lenovo", 350990),
    new Producto("Teclado Mecánico", 15790),
    new Producto("PC Gamer", 500990),
    new Producto("Samsung Galaxy A50", 345990)
];


function searchProducts() {
    let texto = document.getElementById("product-search").value;
    let resultados = document.getElementById("results-container");
    resultados.innerHTML="";
    let encontrado = false;

    console.log(texto);
  
    console.log(resultados);
    
   
    productos.forEach(function(producto){
        if (producto.nombre.toLowerCase().includes(texto.toLowerCase())) {

            encontrado = true;

            let parrafo = document.createElement("p");
            parrafo.textContent = producto.mostrarInfo();
            resultados.appendChild(parrafo);
         console.log(producto.mostrarInfo())
        }
        }); 
    if (encontrado ==false) {
        let mensaje = document.createElement("p");
        mensaje.textContent = "No hay resultados para tu búsqueda."
        resultados.appendChild(mensaje);
    }
};
