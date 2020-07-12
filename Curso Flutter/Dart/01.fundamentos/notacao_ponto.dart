main() {
  double nota = 6.99.roundToDouble();
  print(nota);

  String s1 = "eduardo lacerda";
  String s2 = s1.substring(0, 8);
  String s3 = s2.toUpperCase();
  String s4 = s3.padRight(15, "!");

  var s5 = "eduardo lacerda".substring(0, 8).toUpperCase().padRight(15, '!');

  print(s4);
  print(s5);
}
