// Soal Logic Menggunakan perulangan for

for (var x = 0; x < 10; x++) {
  for (var y = 0; y < 10; y++) {
    if (x == y) {
      document.write(" * ");
    } else {
      document.write(" _ ");
    }
  }
  document.write("<br>");
}

document.write("</br>");
for (var x = 0; x < 10; x++) {
  for (var y = 0; y < 10; y++) {
    if (x + y == 9) {
      document.write(" * ");
    } else {
      document.write(" _ ");
    }
  }
  document.write("<br>");
}

document.write("</br>");
for (var x = 0; x < 10; x++) {
  for (var y = 0; y < 10; y++) {
    if (x == y || x + y == 9) {
      document.write(" * ");
    } else {
      document.write(" _ ");
    }
  }
  document.write("<br>");
}

document.write("</br>");
for (var x = 0; x < 11; x++) {
  for (var y = 0; y < 11; y++) {
    if (x == 5 || y == 5) {
      document.write(" * ");
    } else {
      document.write(" _ ");
    }
  }
  document.write("<br>");
}

document.write("</br>");
for (var x = 0; x < 10; x++) {
  for (var y = 0; y < 10; y++) {
    if (x >= y) {
      document.write(" * ");
    } else {
      document.write(" _ ");
    }
  }
  document.write("<br>");
}

document.write("</br>");
for (var x = 0; x < 10; x++) {
  for (var y = 0; y < 10; y++) {
    if (x + y >= 9) {
      document.write(" * ");
    } else {
      document.write(" _ ");
    }
  }
  document.write("<br>");
}

document.write("tugas" + "</br>");
for (var x = 0; x < 11; x++) {
  for (var y = 0; y < 11; y++) {
    if (x == 5 || y == 5 || x == y || x + y == 10) {
      document.write(" * ");
    } else {
      document.write(" _ ");
    }
  }
  document.write("<br>");
}
