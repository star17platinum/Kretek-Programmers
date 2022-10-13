function updateClock() {
  var waktu = new Date();
  var dname = waktu.getDay(),
    bulan = waktu.getMonth(),
    tanggal = waktu.getDate(),
    tahun = waktu.getFullYear(),
    jam = waktu.getHours(),
    menit = waktu.getMinutes(),
    detik = waktu.getSeconds(),
    pe = "AM";

  // if (jam >= 12) {
  //   pe = "PM";
  // }
  if (jam == 0) {
    jam = 24;
  }
  // if (jam > 12) {
  //   jam = jam - 12;
  // }

  Number.prototype.pad = function (digits) {
    for (var n = this.toString(); n.length < digits; n = 0 + n);
    return n;
  };

  var months = [
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember",
  ];
  var week = ["Ahad", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
  var ids = [
    "dayname",
    "month",
    "daynum",
    "year",
    "hour",
    "minutes",
    "seconds",
  ];
  var values = [
    week[dname],
    months[bulan],
    tanggal.pad(2),
    tahun,
    jam.pad(2),
    menit.pad(2),
    detik.pad(2),
    pe,
  ];
  for (var i = 0; i < ids.length; i++)
    document.getElementById(ids[i]).firstChild.nodeValue = values[i];
}

function initClock() {
  updateClock();
  window.setInterval("updateClock()", 1);
}
