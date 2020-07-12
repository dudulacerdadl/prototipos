main() {
  // Operadores de Atribuição (Operadores Binários | Infix)
  double a = 2; // "'a' recebe 2"
  a = a + 3;
  a += 3; // Atribução somativa
  a -= 3; // Atribução subtrativa
  a *= 3; // Atribução multiplicativa
  a /= 5; // Atribução divisiva
  a %= 2; // Atribução modular

  print(a);

  // Operadores Relacionais (Operadores Binários | Infix) -> O resultado sempre é um valor booleano
  print(3 > 2); // Maior
  print(3 >= 2); // Maior ou igual
  print(3 < 2); // Menor
  print(3 <= 2); // Menor ou igual
  print(3 != 2); // Diferente
  print(3 == 2); // Igual
  print(3 == "3");

  print(2 + 5 > 3 - 1 && 4 + 7 != 7 - 4);

  // 101 = 5
  // 100 = 4
  // -------
  // 100 = 4
  print(5 & 4);
}
