const calculator = {
  sum(a, b) {
    return a + b;
  },
  mul(a, b) {
    return a * b;
  },
  diff(a, b) {
    return a - b;
  },
  div(a, b) {
    return a / b;
  },
  calculate(operator, a, b) {
    try {
      return this[operator](a, b);
    } catch (e) {
      console.warn(e);
    }
  }
};

function calculate(event) {
  try {
    document.querySelector('#result').value = calculator.calculate(
      event.target.getAttribute('op'),
      parseFloat(document.querySelector('#numberA').value),
      parseFloat(document.querySelector('#numberB').value)
    );
  } catch (e) {
    alert(e);
  }

  event.preventDefault();
}

const myButtons = document.querySelectorAll('button');

for (b of myButtons) {
  b.addEventListener('click', calculate)
}
