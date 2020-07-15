class Data {
  int dia;
  int mes;
  int ano;

  Data([this.dia = 1, this.mes = 1, this.ano = 1970]);

  // Named Constructors
  Data.com({this.dia = 1, this.mes = 1, this.ano = 1970});
  Data.ultimoDiaDoAno(this.ano) {
    this.dia = 31;
    this.mes = 12;
  }

  String obterFormatada() {
    return "$dia/$mes/$ano";
  }

  String toString() {
    return obterFormatada();
  }
}

main() {
  var dataAniversario = new Data(12, 4, 2020);
  //dataAniversario.dia = 12;
  //dataAniversario.mes = 4;
  //dataAniversario.ano = 2020;
  String d1 = dataAniversario.obterFormatada();

  Data dataCompra = Data(23, 12, 2021);
  //dataCompra.dia = 23;
  //dataCompra.mes = 12;
  //dataCompra.ano = 2021;

  print("A data do aniversário é $d1");
  print("A data de compra é ${dataCompra.obterFormatada()}");

  print(dataCompra);
  print(Data());

  print(Data.com(ano: 2020));

  var dataFinal = Data.com(dia: 12, mes: 7, ano: 2024);
  print("O Muckey será público em $dataFinal");

  print(Data.ultimoDiaDoAno(2023));
}
