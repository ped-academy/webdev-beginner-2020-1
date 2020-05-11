function evenOrOdd(input) {
  if (isNaN(input)) {
    return 'not a number';
  }

  return input % 2 === 0 ? 'even' : 'odd';
}

function check(event) {
  try {
    this.result.value = evenOrOdd(this.number.value);
  } catch (e) {
    alert(e);
  }

  event.preventDefault();
}

const form = document.getElementById("sample-form");

// attach event listener
form.addEventListener("submit", check);
