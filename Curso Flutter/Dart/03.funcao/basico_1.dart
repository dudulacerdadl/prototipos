import 'dart:math';

void main() {
  somaComPrint(2, 3);

  int c = 4;
  int d = 5;
  somaComPrint(c, d);

  somaDoisNumeros();
}

// void = função sem retorno
void somaComPrint(int a, int b) {
  print(a + b);
}

void somaDoisNumeros() {
  int n1 = Random().nextInt(11);
  int n2 = Random().nextInt(11);
  print('A soma entre $n1 e $n2 é ${n1 + n2}');
}
