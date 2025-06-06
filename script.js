// script.js

function agregarAlCarrito(nombre, precio) {
    let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
    carrito.push({ nombre, precio });
    localStorage.setItem("carrito", JSON.stringify(carrito));
    alert(`${nombre} agregado al carrito`);
  }
  
  function verCarrito() {
    let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
    console.log("Carrito:", carrito);
    alert("Abre la consola para ver el carrito");
  }
  
  function buscarProducto() {
    const input = document.getElementById("busqueda");
    const filtro = input.value.toLowerCase();
    const productos = document.querySelectorAll(".producto");
  
    productos.forEach(producto => {
      const nombre = producto.querySelector("h3").textContent.toLowerCase();
      producto.style.display = nombre.includes(filtro) ? "" : "none";
    });
  }
  
