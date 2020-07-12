import 'dart:math';

main() {
  int resultado = somar(2, 3);
  print(resultado);

  resultado *= 2;
  print(resultado);

  print('O resultado é ${somarAleatorio()}');
}

int somar(int a, int b) {
  return (a + b);
}

int somarAleatorio() {
  int a = Random().nextInt(11);
  int b = Random().nextInt(11);
  return (a + b);
}
