import 'dart:io';

main() {
  //Área da circunferência = PI * raio^2

  //const é uma constante usada quando você tem uma constante que pode ser definida durante a compilação
  const PI = 3.1415;

  //Demais constantes você deve usar final
  stdout.write("Informe o Raio: ");
  final entradaDoUsuario = stdin.readLineSync();
  final double raio = double.parse(entradaDoUsuario);

  final area = PI * (raio * raio);

  print("O valor da área é: " + area.toString());
}
