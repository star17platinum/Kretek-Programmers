import 'dart:io';

void main() {
  // Membuat subquery
  var subquery = (query) => query.select([Column('name')], from: 'users');

  // Menggunakan subquery dalam query utama
  var query =
      (query) => query.select([Column('name')], from: (subquery).as('users'));

  // Menjalankan query dan mencetak hasilnya
  var results = query(db).execute();
  for (var result in results) {
    print(result['name']);
  }
}
