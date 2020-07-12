main() {
  saudarPessoa(nome: 'João', idade: 33);
  saudarPessoa(idade: 47, nome: 'Maria');

  imprimirData(dia: 12, mes: 07, ano: 2020);
  imprimirData();
}

// Parâmetros Posicionais
//saudarPessoa(String nome, int idade)

// Parâmetros Nomeados
saudarPessoa({String nome, int idade}) {
  print('Olá $nome, me parece que você tem $idade anos.');
}

imprimirData({int dia = 1, int mes = 1, int ano = 1970}) {
  print('$dia/$mes/$ano');
}
