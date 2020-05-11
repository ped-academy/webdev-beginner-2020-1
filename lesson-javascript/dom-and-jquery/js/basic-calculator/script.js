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
    this.result.value = calculator.calculate(
      this.operator.value,
      parseFloat(this.numberA.value),
      parseFloat(this.numberB.value)
    );
  } catch (e) {
    alert(e);
  }

  event.preventDefault();
}

const form = document.getElementById("sample-form");

// attach event listener
form.addEventListener("submit", calculate);
