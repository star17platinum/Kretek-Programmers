// Juragan Angkot
// pengelolaan penumpang
// 1. Penumpang naik
//     >>tambah penumpang
//     ada 2 parameter
//     I. nama penumpang
//     II. Array penumpang (no kursi)
//     ~~Rules:
//     a. jika angkot kosong penumpang naik duduk kursi pertama
//     b. penumpang berikutnya duduk di kursi selanjutnya secara berurutan
//     c. jika ada dkursi yg kosong ( penumoang turun ),penumpang yg naik berikutnya duduk di kursi kosong terlebih dahulu
//     d. asumsi kursi tidak akan penuh dan akan terus bertambah jika ada penumpang yg naik
//     e. nama penumpang tidak boleh sama,untuk menghindari kebingungan ketika penumpang turun
// 2. Penumpang turun
//     >>hapus penumpang

// ~~~~~~~~~~~~~~~~
// var kursi = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
var penumpang = [];
var tambahPenumpang = function (namaPenumapang, penumpang) {
  //jika angkot kosong
  if (penumpang.length == 0) {
    //tambah penumpang
    penumpang.push(namaPenumapang);
    //penumpang keluar
    return penumpang;
  } else {
    // telusuri seluruh kursi dari awal
    for (var i = 0; i < penumpang.length; i++) {
      // Jika ada kursi kosong
      if (penumpang[i] == undefined) {
        // tambah penungpang di kursi tersebut
        penumpang[i] = namaPenumapang;
        // kembalikan isi array keluar dari function
        return penumpang;
      }
      // jika sudah ada nama yg sama
      else if (penumpang[i] == namaPenumapang) {
        //tampilkan pesan kesalahannya
        console.log(namaPenumapang + " sudah ada di dalam angkot");
        // return penumpang;
      }
      // jika seluruh kursi terisi
      else if (i == penumpang.length - 1) {
        // tambah penumpang di akhir array
        penumpang.push(namaPenumapang);
        // kembalikan isi array keluar dari function
        return penumpang;
      }
    }
  }
};
// Hapus penumpang()
// >> 2 parameter:
// ~nama penumpang
// ~array penumpang
// >> rules
// ~jika angkot koseong ,tampilkan pesan
// ~jika ada penumpang yang namanya sesuai,hapus nama penumpang pada array dengan memberi nilai undifined
// ~jika tidak ada penumpang yg di maksud makan tampilkan pesan

var hapusPenumpang = function (namaPenumapang, penumpang) {
  if (penumpang.length == 0) {
    console.log("angkot masih kosong");
    // return penumpang
  } else {
    for (i = 0; i < penumpang.length; i++) {
      if (penumpang[i] == namaPenumapang) {
        penumpang[i] = undefined;
        return penumpang;
      } else if (i == penumpang.length - 1) {
        console.log(namaPenumapang + " tidak ada di dalam angkot");
        // return penumpang;
      }
    }
  }
};
