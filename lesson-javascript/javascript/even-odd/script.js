function evenOrOdd(input) {
  if (isNaN(input)) {
    return 'not a number';
  }

  return input % 2 === 0 ? 'even' : 'odd';
}

console.log("Usage: > evenOrOdd(24)");
console.log(evenOrOdd(24));
