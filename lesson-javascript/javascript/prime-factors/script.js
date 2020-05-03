function getPrimeFactors(input) {
  const output = [];

  for (let p = 2; p <= input; p++) {
    while (input % p === 0) {
      input /= p;
      output.push(p);
    }
  }

  return output;
}

console.log("Usage: > getPrimeFactors(60)");
console.log(getPrimeFactors(60));
