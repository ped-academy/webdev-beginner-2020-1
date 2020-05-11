const text = $('#sample-text');

$('#border-color').on("change", function () {
  text.css('borderColor', this.value);
});

$('#text-color').on("change", function () {
  text.css('color', this.value);
});

$('#font-size').on("change", function () {
  text.css('fontSize', `${this.value}px`);
});
