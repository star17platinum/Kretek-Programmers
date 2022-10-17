// ~~~~~~Manipulasi Arry

// menambah kan isi Arry
// var arr = [];
// arr[0] = "sandhika";
// arr[1] = "galih";
// arr[2] = "nofa";
// arr[5] = "dody";

// Method pada arry
// 1. length
// menghitung

// 2. join
// var arr = ["Algis", "Alkausar", "Carnaby"];
// console.log(arr.join(" - "));
// c/ bifore: Algis,Alkausar,Carnaby
// c/ after: Algis - Alkausar - Carnaby

// 3. push & pop (menambahkan dan menghapus)
// var arr = ["Algis", "Alkausar", "Carnaby"];
// arr.push("Carmanita");
// console.log(arr.join(" - "));

// c/ Algis - Alkausar - Carnaby - Carmanita
// nb: push menambahkan dari belakang bisa lebih dari satu
// arr.pop();
// console.log(arr.join(" - "));

// c/ Algis - Alkausar - Carnaby
// nb: pop satu per satu hapusnya dari belakang...

// 4. unshift & shift (menambah dan menghapus)
//  ctt/ sama kaya push dan pop tpi bedanya dia di menambah kan dan menghapus elemant awal

// 5. splice
// splice (index awal,yg mau di hapus berapa,elementbaru1,elementbaru2,...)
// var arr = ["Algis", "Alkausar", "Carnaby"];
// arr.splice(2, 0, "eko", "edy");
// console.log(arr.join(" - "));
// c/ Algis - Alkasuar - eko - edy - Carnaby
// arr.splice(1, 2, "eko", "edy");
// console.log(arr.join(" - "));
// c/ Algis - eko - edy

// 6. slice (mengambil beberapa element dan membuar arry baru)
// slice(awal,akhir)
// nb:jika yg di ingikan no 1 dan 2 maka arr.slice(1,3)
// var arr = ["Algis", "Alkausar", "Carnaby", "eko", "edy", "purnomo"];
// var arr2 = arr.slice(1, 3);
// console.log(arr2.join(" - "));
// c/ Alkausar - Carnaby
// nb: tpi inget arr pertama masih bisa di akses
// console.log(arr.join(" - "));

// 7. forEach
// >>1
// var angka = [1, 2, 3, 4, 5, 6, 7, 8];
// for (i = 0; i < angka.length; i++) {
//   console.log(angka[i]);
// }
// angka.forEach(function (e) {
// console.log(e);
// });
// c/ 1;
// 2;
// 3;
// 4;
// 5;
// 6;
// 7;
// 8;

// >>2
// var nama = ["Algis", "Alkasuar", "Caranaby", "Eko", "Edy"];

// nama.forEach(function (e, i) {
// console.log("mahasiswa ke " + (i + 1) + " adalah : " + e);
// });

/* 8. map 
ctt/map sama seperti forEach bedanya klo map dia mengembalikan arry sedangkan forEach tidak mengembalikan arry */

// 9. sort
// ctt/ menyusun
// >>1
var angka = [1, 2, 3, 8, 6, 5, 4];
console.log(angka.join(" - "));
// hs/ 1,2,3,8,6,5,4
angka.sort();
console.log(angka.join(" - "));
hs / 1, 2, 3, 4, 5, 6, 8;
// jika
var angka = [1, 2, 3, 10, 8, 6, 5, 20, 4];
angka.sort();
console.log(angka.join(" - "));
// hs/1,10,2,20,3,4,5,6,8
// ctt:sort akan mengurutkan angka yg awalnya dulu baru yg kedua dan seterusnya
// jadi
// >>2
var angka = [1, 2, 3, 10, 8, 6, 5, 20, 4];
angka.sort(function (a, b) {
  return a - b;
});
console.log(angka.join(" - "));
// hs/1,2,3,4,5,6,8,10,20

// 10. filter (mengembalikan arry dan yg di ambil bisa lebih dari 1)
var angka = [1, 2, 3, 10, 8, 6, 5, 20, 4];
var angka2 = angka.filter(function (e) {
  return e > 5;
});
console.log(angka2.join(" - "));
// hs/ 10 - 8 - 6 - 20
// nb:tidak menyusun

// 11. find (tidak mengembalaikan arry dan yg di ambil 1)
var angka = [1, 2, 3, 10, 8, 6, 5, 20, 4];
var angka2 = angka.find(function (e) {
  return e > 5;
});
console.log(angka2);
// hs/ 10

// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array
