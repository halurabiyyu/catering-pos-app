document.querySelectorAll('.product-checkbox').forEach(function(checkbox) {
    checkbox.addEventListener('change', calculateTotal);
});

function calculateTotal() {
    let total = 0;
    document.querySelectorAll('.product-checkbox:checked').forEach(function(checkbox) {
        total += parseFloat(checkbox.dataset.price);
    });
    document.getElementById('totalPrice').innerText = total.toFixed(2);
}

document.querySelectorAll('.increase-quantity').forEach(button => {
    button.addEventListener('click', function() {
        let input = this.previousElementSibling;
        input.value = parseInt(input.value) + 1;
        updateTotalPrice();
    });
});

document.querySelectorAll('.decrease-quantity').forEach(button => {
    button.addEventListener('click', function() {
        let input = this.nextElementSibling;
        if (input.value > 1) {
            input.value = parseInt(input.value) - 1;
            updateTotalPrice();
        }
    });
});

function updateTotalPrice() {
    let totalPrice = 0;
    document.querySelectorAll('.product-checkbox:checked').forEach(checkbox => {
        let price = parseFloat(checkbox.getAttribute('data-price'));
        let quantity = parseInt(checkbox.closest('.form-check').querySelector('.quantity-input').value);
        totalPrice += price * quantity;
    });
    document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);
}

document.querySelectorAll('.product-checkbox, .quantity-input').forEach(item => {
    item.addEventListener('change', updateTotalPrice);
});

updateTotalPrice(); // Inisialisasi total harga