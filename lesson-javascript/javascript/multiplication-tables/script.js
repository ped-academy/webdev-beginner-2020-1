function multiplicationTableFor(input) {
  for (let i = 1; i <= 10; i++) {
    console.log(input * i);
  }
}

function multiplicationTableWhile(input) {
  let i = 1;

  while (i <= 10) {
    console.log(input * i++);
  }
}

console.log("Usage: > multiplicationTableFor(2)");
multiplicationTableFor(2);

console.log("Usage: > multiplicationTableWhile(2)");
multiplicationTableWhile(2);
