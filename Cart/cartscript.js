document.querySelectorAll('.quantity-controls').forEach(control => {
    const minusBtn = control.querySelector('button:first-child');
    const plusBtn = control.querySelector('button:last-child');
    const input = control.querySelector('input');

    minusBtn.addEventListener('click', () => {
      let value = parseInt(input.value);
      if (value > 1) {
        input.value = value - 1;
      }
    });

    plusBtn.addEventListener('click', () => {
      let value = parseInt(input.value);
      input.value = value + 1;
    });
  });