const cartIcon = document.getElementById('cart-icon');
const cartModal = document.getElementById('cart-modal');
const closeBtn = document.querySelector('.close');
const cartItemsContainer = document.getElementById('cart-items');
let cartCount = 0;

cartIcon.addEventListener('click', () => {
    cartModal.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
    cartModal.style.display = 'none';
});

function updateCartCount(count) {
    cartCount = count;
    document.getElementById('cart-count').textContent = cartCount;
}

function addToCart(item) {
    const cartItem = document.createElement('div');
    cartItem.textContent = item.name + ' - $' + item.price;
    cartItemsContainer.appendChild(cartItem);
    updateCartCount(cartCount + 1);
}

// Example usage of addToCart function
const item1 = {
    name: 'Product 1',
    price: 19.99
};

const item2 = {
    name: 'Product 2',
