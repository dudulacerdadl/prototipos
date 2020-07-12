main() {
  var adicao = (int a, int b) {
    return a + b;
  };
  var subtracao = (int a, int b) => a - b;
  var multiplicacao = (int a, int b) => a * b;
  var divisao = (int a, int b) => a / b;

  print(adicao(6, 19));
  print(subtracao(19, 4));
  print(multiplicacao(19, 4));
  print(divisao(19, 4));
}
