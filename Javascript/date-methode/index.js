var the_date = new Date();
console.log(the_date);
// Output : Thu Oct 13 2022 10:42:36 GMT+0700 (Western Indonesia Time)

// getFullYear() =>Mengembalikan tahun
var year = the_date.getFullYear();
console.log(year);
// Output : 2022

// getMonth() =>Mengembalikan sebuah nomor, dari 0 - 11 yang mewakili bulan dalam setahun
// 0 = Jan, 1 = Feb, 2 = Mar, 3 = Apr, 4 = Mei, 5 = Jun, 6 = Jul, 7 = Aug, 8 = Sep, 9 = Oct, 10 = Nov, 11 = Des
var month = the_date.getMonth();
console.log(month);
// Output : 9

// getDate() => Mengembalikan tanggal, dari 1 - 31
var date = the_date.getDate();
console.log(date);
// Output : 13

// getDay() =>Mengembalikan sebuah nomor, dari 0 - 6 yang mewakili hari dalam seminggu
// 0 = Sun, 1 = Mon, 2 = Tue, 3 = Wed, 4 = Thu, 5 = Fri, 6 = Sat
var day = the_date.getDay();
console.log(day);
// Output : 4

// getHours() =>Mengembalikan jam, dari 0 -23
var hour = the_date.getHours();
console.log(hour);
// Output : 10

// getMinutes() =>Mengembalikan menit, dari 0 - 59
var minute = the_date.getMinutes();
console.log(minute);
// Output : 42

// getSeconds() =>Mengembalikan detik ,dari 0 - 59
var second = the_date.getSeconds();
console.log(second);
// Output : 36

// getMilliseconds() =>Mengembalikan milidetik, dari 0 - 999
var millisecond = the_date.getMilliseconds();
console.log(millisecond);
// Output: 621
