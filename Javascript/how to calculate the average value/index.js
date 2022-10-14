const nilai = [];
let kondisi = true;
while (kondisi) {
  const result = parseInt(prompt("Enter value..!!!"));
  nilai.push(result);
  kondisi = confirm(
    "Enter Value Again..?\n\nif you have finished inputting the value, you can click cancel to get the average value..!!!"
  );
}
if (kondisi == false) {
  const jumlah_nilai = nilai.reduce((acc, curr) => acc + curr);
  let hasil_akhir = jumlah_nilai / nilai.length;
  alert(`The result of the average value is = ${hasil_akhir}`);
}
