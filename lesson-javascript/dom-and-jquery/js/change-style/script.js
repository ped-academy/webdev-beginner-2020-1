const text = document.querySelector('#sample-text');

document.querySelector('#border-color').addEventListener("change", function () {
  text.style.borderColor = this.value;
});

document.querySelector('#text-color').addEventListener("change", function () {
  text.style.color = this.value;
});

document.querySelector('#font-size').addEventListener("change", function () {
  text.style.fontSize = `${this.value}px`;
});
