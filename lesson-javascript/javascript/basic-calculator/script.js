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

console.log("Usage: > calculator.calculate('sum', 2, 5)");
console.log(calculator.calculate('sum', 2, 5));
