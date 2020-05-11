const arabToRoman = [
  [1000, 'M'],
  [900, 'CM'],
  [500, 'D'],
  [400, 'CD'],
  [100, 'C'],
  [90, 'XC'],
  [50, 'L'],
  [40, 'XL'],
  [10, 'X'],
  [9, 'IX'],
  [5, 'V'],
  [4, 'IV'],
  [1, 'I']
];

function numericToRoman(input) {
  const output = [];

  for (let [arab, roman] of arabToRoman) {
    while (input >= arab) {
      output.push(roman);
      input -= arab
    }
  }

  return output.join('');
}

function convert(event) {
  try {
    this.result.value = numericToRoman(this.number.value);
  } catch (e) {
    alert(e);
  }

  event.preventDefault();
}

$(document).ready(function () {
  $('#sample-form').on('submit', convert);
});
