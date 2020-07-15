import 'cliente.dart';
import 'produto.dart';
import 'venda.dart';
import 'venda_item.dart';

main() {
  var venda = Venda(
      cliente: new Cliente(nome: 'Fransisco Cardoso', cpf: '123.456.789-00'),
      itens: <VendaItem>[
        VendaItem(
            quantidade: 30,
            produto:
                Produto(codigo: 1, nome: 'Lápis', preco: 6.00, desconto: 0.5)),
        VendaItem(
            quantidade: 20,
            produto: Produto(
                codigo: 123, nome: 'Caderno', preco: 20.00, desconto: 0.25)),
        VendaItem(
            quantidade: 100,
            produto: Produto(
                codigo: 52, nome: 'Borracha', preco: 2.00, desconto: 0.5))
      ]);

  print('O valor total da venda é: R\$${venda.valorTotal}');
  print('O nome do primeiro produto é: ${venda.itens[0].produto.nome}');
  print('O CPF do cliente é: ${venda.cliente.cpf}');
}
