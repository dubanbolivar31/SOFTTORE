let cart = [];

function addToCart(name, price) {
    const productIndex = cart.findIndex(item => item.name === name);
    if (productIndex > -1) {
        cart[productIndex].quantity += 1;
    } else {
        cart.push({ name, price, quantity: 1 });
    }
    updateCartUI();
}

function removeFromCart(name) {
    cart = cart.filter(item => item.name !== name);
    updateCartUI();
}

function clearCart() {
    cart = [];
    updateCartUI();
}

function calculateTotal() {
    return cart.reduce((total, item) => total + (item.price * item.quantity), 0);
}

function updateCartUI() {
    const cartItemsList = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');

    cartItemsList.innerHTML = '';

    cart.forEach(item => {
        const listItem = document.createElement('li');
        listItem.textContent = `${item.name} - ${item.quantity} x ${item.price}$`;
        cartItemsList.appendChild(listItem);
    });

    cartTotal.textContent = `Total: ${calculateTotal()}$`;
}

// Función para proceder con la compra
function checkout() {
    if (cart.length === 0) {
        alert('El carrito está vacío.');
        return;
    }

    alert('Gracias por comprar en tiendas la economia. Vuelva pronto!');
    clearCart();
}

document.getElementById('checkout-button').addEventListener('click', checkout);

updateCartUI();
