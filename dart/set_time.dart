import 'dart:io';

void main() {
  // Mendapatkan waktu saat ini
  var now = DateTime.now();

  // Menampilkan waktu saat ini
  print(now);

  // Mengatur waktu
  now = now.add(Duration(hours: 2, minutes: 30));

  // Menampilkan waktu yang telah diatur
  print(now);
}
