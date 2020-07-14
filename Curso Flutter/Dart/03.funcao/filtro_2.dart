main() {
  var notas = [8.2, 7.1, 6.2, 4.4, 3.9, 8.8, 9.1, 5.1];

  bool Function(double) notasBoasFn = (double nota) => nota >= 7;
  bool Function(double) notasMuitoBoasFn = (double nota) => nota >= 8.5;
  bool Function(double) notasRuinsFn = (double nota) => nota <= 5;

  var notasBoas = notas.where(notasBoasFn);
  var notasMuitoBoas = notas.where(notasMuitoBoasFn);
  var notasRuins = notas.where(notasRuinsFn);

  print(notas);
  print(notasBoas);
  print(notasMuitoBoas);
  print(notasRuins);
}
