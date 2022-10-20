const stock = {
  coffeBeanse: 250,
  water: 1000,
}

const checkStock = () => {
  return new Promise((resolve, rejected) => {
    if(stock.coffeBeanse >= 16 && stock.water >= 250) {
      resolve("Stok cukup. Bisa membuat kopi");
    } else {
      rejected("Stok tidak cukup");
    }
  })
}

const handleSuccess = resolvedValue => {
  console.log(resolvedValue);
}

const handleFailure = rejectionValue => {
  console.log(rejectionValue);
}

checkStock()
  .then(handleSuccess)
  .then(handleFailure);
// parameter yang dipakai semuanya harus berupa callback function

/*
Mari kita bedah kode di atas:

* checkStock() merupakan fungsi yang mengembalikan promise dan akan menghasilkan resolve() dengan membawa nilai “Stok cukup. Bisa membuat kopi”.
* Lalu kita mendeklarasikan fungsi handleSuccess() dan handleFailure() yang mencetak nilai dari parameternya.
* Kemudian kita memanggil method .then() dari checkStock. Isi parameter then() dengan dua fungsi handler yang telah kita buat sebelumnya.
* Parameter pertama berisi fungsi handleSuccess untuk menangani kondisi ketika promise berstatus resolve. Parameter kedua berisi fungsi handleFailure yang menangani ketika promise berstatus reject.
*/
