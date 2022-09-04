const carritoBody = document.getElementById('carrito-body');
const total = document.getElementById('total');

function añadirProducto(id) {
    
    const precio = document.getElementById(`precio${id}`);
    const productCard = document.getElementById(`productCard${id}`);
    
    carritoBody.appendChild(productCard); 
    
    precio.classList.add('precio');
    const precios = document.getElementsByClassName('precio');
    
    
    for (let i = 0; i < precios.length; i++) {
        
        precioProducto = parseInt(precios[i].textContent);
        
    }
    
    if (precios.length == 1) {
        
        total.innerHTML = precioProducto;
        
    } else {
        
        total.innerHTML = parseInt(total.textContent)+parseInt(precio.textContent);

    }
   
}

function quitarProducto(id) {
    
    const cantidad = document.getElementById(`cantidad${id}`);
    const precio = document.getElementById(`precio${id}`);
    const carta = document.getElementById(`carta${id}`);
    const productCard = document.getElementById(`productCard${id}`); 
    
    precio.classList.remove('precio');
    carta.appendChild(productCard);

    total.innerHTML = parseInt(total.textContent)-parseInt(precio.textContent);
    cantidad.innerHTML = 1;

}

function sumar(id) {
    
    const cantidad = document.getElementById(`cantidad${id}`);
    const btnSuma = parseInt(document.getElementById(`sumar${id}`).value);
    
    cantidad.innerHTML = parseInt(cantidad.textContent)+1;
    total.innerHTML = parseInt(total.textContent)+btnSuma;

}

function restar(id) {

    const cantidad = document.getElementById(`cantidad${id}`);
    const btnResta = parseInt(document.getElementById(`restar${id}`).value);

    if (cantidad.textContent <= 1) {

        cantidad.innerHTML = 1;

    } else {

        cantidad.innerHTML = parseInt(cantidad.textContent)-1;
        total.innerHTML = parseInt(total.textContent)-btnResta;

    }

}