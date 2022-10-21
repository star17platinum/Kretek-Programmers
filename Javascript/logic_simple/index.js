for (var x = 0; x <= 10; x++) {
  for (var y = 0; y <= 10; y++) {
    if (y == 5 || x == 10 || x > 9 || x < 4) {
      document.write("*");
    } else {
      document.write("_");
    }
  }
  document.write("<br>");
}
document.write("<br>");
document.write("<br>");
for (var s = 0; s < 9; s++) {
  for (var d = 0; d < 9; d++) {
    if (s + d == 8) {
      document.write(d * 2);
    } else if (s == d) {
      document.write(d * 2 + 1);
    } else if (s == 4) {
      document.write(d * 2);
    } else if (d == 4) {
      document.write(s * 2 + 1);
    } else {
      document.write("_");
    }
  }
  document.write("<br>");
}
document.write("<br>");
document.write("<br>");

for (var x = 0; x <= 10; x++) {
  for (var e = 0; e <= 10; e++) {
    if (e <= x && x >= 9 - (e - 1)) {
      document.write("*");
    } else if (e >= x && x <= 9 - (e - 1)) {
      document.write("*");
    } else {
      document.write("_");
    }
  }
  document.write("<br>");
}
