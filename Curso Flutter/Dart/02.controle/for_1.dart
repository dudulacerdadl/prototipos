main() {
  for (var i = 1; i <= 10; i += 2) {
    print('i = $i');
  }

  print('Fim!');

  int b = 100;
  for (; b >= 0; b -= 4) {
    print('b = $b');
  }

  print(b);

  print('Fim!');

  var notas = [8.9, 9.3, 7.8, 6.9, 9.1];
  for (var i = 0; i < notas.length; i++) {
    print('Nota ${i + 1} = ${notas[i]}');
  }
}
