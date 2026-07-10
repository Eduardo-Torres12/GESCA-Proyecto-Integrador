const productContainer = document.getElementById('productContainer');

const buscador = document.getElementById('buscador');

let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

let productosGlobal = [];

fetch('data/productos.json')
.then(response => response.json())
.then(data => {

    productosGlobal = data;

    renderProductos(data);

});

function renderProductos(productos){

    productContainer.innerHTML = '';

    productos.forEach(producto => {

        const div = document.createElement('div');

        div.classList.add('product-card');

        div.innerHTML = `

            <img src="${producto.imagen}">

            <h3>${producto.nombre}</h3>

            <p>$${producto.precio}</p>

            <div class="stars">
                ★★★★★
            </div>

            <button onclick="agregarCarrito(${producto.id}, '${producto.nombre}', ${producto.precio})">

                Agregar

            </button>

        `;

        productContainer.appendChild(div);

    });

}

function agregarCarrito(id, nombre, precio){

    carrito.push({
        id,
        nombre,
        precio
    });

    localStorage.setItem('carrito', JSON.stringify(carrito));

    actualizarContador();

    Swal.fire({
        title:'Agregado al carrito',
        text:nombre,
        icon:'success'
    });

}

function actualizarContador(){

    const contador = document.getElementById('contadorCarrito');

    contador.textContent = carrito.length;

}

buscador.addEventListener('keyup', () => {

    const filtro = buscador.value.toLowerCase();

    const filtrados = productosGlobal.filter(producto => {

        return producto.nombre
        .toLowerCase()
        .includes(filtro);

    });

    renderProductos(filtrados);

});

actualizarContador();