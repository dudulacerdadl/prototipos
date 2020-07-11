main() {
  // Aritiméticos (Operadores Binários | Infix)
  int a = 7;
  int b = 3;

  print(a + b); //adição
  print(a - b); //subtração
  print(a * b); //multiplicação
  print(a / b); //divisão
  print(a % b); //resto da divisão
  print(a + b * a - b / a);

  // Lógicos
  bool c = true;
  bool d = false;

  print(c && d); // And -> E
  print(c || d); // Or -> Ou
  print(c ^ d); // Xor -> Ou Exclusivo
  print(!c); // Not -> Não é (Operador Unários | Prefix)
  print(!!c); // Negação reversa
}
