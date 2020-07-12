/*
- List
- Set
- Map
*/

main() {
  // List
  List aprovados = ['Ana', 'Carlos', 'Daniel', 'Rafael'];

  print(aprovados.length);
  aprovados.add('Daniel');
  print(aprovados);
  print(aprovados.elementAt(2));
  print(aprovados[0]);
  print(aprovados.length);

  // Map
  Map<String, String> telefones = {
    'João': '+55 (43) 98765-4321',
    'Maria': '+55 (44) 98765-4321',
    'Pedro': '+55 (45) 98765-4321',
    //'João': '+55 (43) 77777-7777',
  };

  print(telefones);
  print(telefones['João']);
  print(telefones.length);
  print(telefones.values);
  print(telefones.keys);
  print(telefones.entries);

  // Set
  Set<String> times = {'Vasco', 'Flamengo', 'Fortaleza', 'São Paulo'};

  print(times);
  print(times.length);
  times.add('Corinthians');
  print(times.length);
  print(times.contains('Vasco'));
  print(times.first);
  print(times.last);
  times.add('Corinthians');
  print(times);
}
