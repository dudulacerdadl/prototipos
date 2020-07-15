import './carro.dart';

main() {
  var car1 = new Carro(150);

  while (!car1.noLimite()) {
    print('Acelerando: ${car1.velocidadeAtual}Km/h...');
    car1.acelerar();
  }

  print('Velocidade máxima atingida! ${car1.velocidadeAtual}Km/h');

  while (!car1.estaParado()) {
    print('Freando: ${car1.velocidadeAtual}Km/h...');
    car1.frear();
  }

  print('Parados novamente! ${car1.velocidadeAtual}Km/h');
}
