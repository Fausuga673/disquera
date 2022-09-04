const cantidad = document.getElementById('cantidad');
const precio = document.getElementById('precio');
const total = document.getElementById('total');

function sumar() {

    // escribimos la cantidad y le sumamos 1
    cantidad.innerHTML = parseInt(cantidad.textContent)+1;
    // escribimos en total la cantidad actual por el precio 
    total.innerHTML = parseInt(cantidad.textContent)*parseInt(precio.textContent);
    
}

function restar() {
    
    // escribimos la cantidad y le restamos 1
    cantidad.innerHTML = parseInt(cantidad.textContent)-1;
    
    // si la cantidad es menor a 0 dejamos 1 como cantidad por defecto, con esto evitamos que la cantidad sea 0 o números negativos
    if (cantidad.textContent <= 0) {

        cantidad.innerHTML = 1;
    
    } else {

        // escribimos en total la cantidad actual por el precio 
        total.innerHTML = parseInt(cantidad.textContent)*parseInt(precio.textContent);
    
    }

}

// NOTA: Cuando hayan varios productos, sumaremos los precios de todos los productos