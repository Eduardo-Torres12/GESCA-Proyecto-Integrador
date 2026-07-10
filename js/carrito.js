const cartContainer = document.getElementById('cartContainer');

let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

function renderCarrito(){

    cartContainer.innerHTML = '';

    let total = 0;

    carrito.forEach((producto, index) => {

        total += producto.precio;

        cartContainer.innerHTML += `

            <div class="cart-product">

                <div>
                    <h3>${producto.nombre}</h3>
                    <p>$${producto.precio}</p>
                </div>

                <button onclick="eliminarProducto(${index})">
                    Eliminar
                </button>

            </div>

        `;
    });

    document.getElementById('totalCompra')
    .textContent = `Total: $${total}`;
}

function eliminarProducto(index){

    carrito.splice(index, 1);

    localStorage.setItem('carrito', JSON.stringify(carrito));

    renderCarrito();
}

document.getElementById('finalizarCompra')
.addEventListener('click', () => {

    Swal.fire({
        title:'Compra realizada',
        text:'Gracias por tu compra.',
        icon:'success'
    });

    carrito = [];

    localStorage.removeItem('carrito');

    renderCarrito();

});

renderCarrito();