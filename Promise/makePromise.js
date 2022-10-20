const excutorFunction = (resolve, reject) => {
  const isCoffeeMakerReady = true;
  isCoffeeMakerReady ? resolve("Kopi berhasil dibuat") : reject("Mesin kopi tidak bisa digunakan");
}

const makeCoffee = () => {
  return new Promise(excutorFunction);
}

const coffePromise = makeCoffee();
console.log(coffePromise);
