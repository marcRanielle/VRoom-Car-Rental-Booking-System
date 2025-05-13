document.querySelectorAll('input[name="payment_method"]').forEach(el => {
    el.addEventListener('change', function () {
        document.getElementById('cashless-options').style.display = this.value === 'cashless' ? 'block' : 'none';
    });
});