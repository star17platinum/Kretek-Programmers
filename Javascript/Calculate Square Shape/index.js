alert("Mari menghitung bangun datar persegi");
const rules_pilihan = () => {
  let inputan_user = parseInt(
    prompt(
      "menghitung bangun datar persegi :" +
        "\n 1.keliling persegi" +
        "\n 2.Luas persegi" +
        "\n Tuliskan nomor yang sesuai dengan rumus..!!"
    )
  );
  if (inputan_user == 1) {
    keliling_persegi();
  } else if (inputan_user == 2) {
    luas_persegi();
  }
};
const keliling_persegi = () => {
  const inputan_keliling = parseInt(
    prompt("Masukkan sisi pada bangun datar Persegi !")
  );
  const hasil = 4 * inputan_keliling;
  alert(`hasil Keliling dari bangun datar persegi adalah = ${hasil}`);
};
const luas_persegi = () => {
  const inputan_luas = parseInt(
    prompt("Masukkan sisi pada bangun datar Persegi !")
  );
  const hasil = inputan_luas * inputan_luas;
  alert(`hasil Luas dari bangun datar persegi adalah = ${hasil}`);
};
rules_pilihan();
