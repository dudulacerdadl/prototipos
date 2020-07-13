import 'dart:math';

void executar({Function fnPar, Function fnImpar}) {
  var valorSorteado = Random().nextInt(10);
  print('O valor sorteado foi $valorSorteado');
  valorSorteado % 2 == 0 ? fnPar() : fnImpar();

  /*
  if (Random().nextInt(10) % 2 == 0) {
    fnPar();
  } else {
    fnImpar();
  }
  */
}

main() {
  var minhaFnPar = () => print('Eita! O valor é par!');
  var minhaFnImpar = () => print('Legal! O valor é ímpar!');

  executar(fnPar: minhaFnPar, fnImpar: minhaFnImpar);
}
