// Función para limpiar el campo de búsqueda
function clearSearch() {
    document.getElementById('search-input').value = '';
    filterProducts('');
}

// Función para buscar productos
function searchProducts() {
    const searchTerm = document.getElementById('search-input').value.toLowerCase();
    filterProducts(searchTerm);
}

// Filtrar productos por nombre
function filterProducts(term) {
    const products = document.querySelectorAll('.producto');
    let visibleCount = 0;

    products.forEach(product => {
        const title = product.querySelector('h2').textContent.toLowerCase();
        if (title.includes(term)) {
            product.style.display = '';
            visibleCount++; // Contar productos visibles
        } else {
            product.style.display = 'none';
        }
    });

        if (visibleCount === 0) {
        document.getElementById('no-results').style.display = 'block';
    } else {
        document.getElementById('no-results').style.display = 'none';
    }
}
