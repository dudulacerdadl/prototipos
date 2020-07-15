class Carro {
  final int velocidadeMaxima;
  int _velocidadeAtual;

  Carro([this.velocidadeMaxima = 200]) {
    this._velocidadeAtual = 0;
  }

  int get velocidadeAtual {
    return this._velocidadeAtual;
  }

  void set velocidadeAtual(int novaVelocidadeAtual) {
    bool deltaValido = (_velocidadeAtual - novaVelocidadeAtual).abs() <= 5;
    if (deltaValido == true &&
        (novaVelocidadeAtual + this._velocidadeAtual) < velocidadeMaxima) {
      this._velocidadeAtual = novaVelocidadeAtual;
    }
  }

  bool noLimite() {
    return this._velocidadeAtual == this.velocidadeMaxima;
  }

  bool estaParado() {
    return this._velocidadeAtual == 0;
  }

  int acelerar() {
    if ((this._velocidadeAtual + 5) >= this.velocidadeMaxima) {
      this._velocidadeAtual = this.velocidadeMaxima;
    } else {
      this._velocidadeAtual += 5;
    }
    return this._velocidadeAtual;
  }

  int frear() {
    if ((this._velocidadeAtual - 5) <= 0) {
      this._velocidadeAtual = 0;
    } else {
      this._velocidadeAtual -= 5;
    }
    return this._velocidadeAtual;
  }
}
