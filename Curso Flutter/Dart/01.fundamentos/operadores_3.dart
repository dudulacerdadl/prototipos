main() {
  int a = 3;
  int b = 4;

  //a = a + 1;
  //a += 1;
  a++; // Ingremento - Unário | Postfix (Perde prioridade)
  ++b; // Ingremento - Unário | Prefix (Ganha prioridade)
  a--; // Decremento - Unário | Postfix (Perde prioridade)
  --b; // Decremento - Unário | Prefix (Ganha prioridade)

  print(a);
  print(b);

  print(a++ == --b);
  // A resposta será verdadeira, pois o --b ganha prioridade e é executado antes da verificação de igualdade, enquanto o a++ perde prioridade, dexidando para ser executado somente depois da verificação de igualdade.
}
