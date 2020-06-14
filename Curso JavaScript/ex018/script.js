var valores = []
var lista = document.querySelector('.flista')
var num = document.querySelector('.fnum')
var res = document.querySelector('.res')

function inNumero(n){
    if (Number(n) >= 1 && Number(n) <= 100) {
        return true
    } else {
        return false
    }
}

function inLista(n, l){
    if (l.indexOf(Number(n)) != -1){
        return true
    } else {
        return false
    }
}

function adicionar () {
    if (inNumero(num.value) && !inLista(num.value, valores)){
        valores.push(Number(num.value))
        var item = document.createElement('option')
        item.text = `O valor ${num.value} foi adicionado`
        lista.appendChild(item)
        res.innerHTML = ''
    } else if (num.value.length == '' ) {
        window.alert('[ERRO]Digite um número!')
    } else {
        window.alert('Valor inválido ou já encontrado na lista.')
    }
    num.value = ''
    num.focus()
}

function finalizar () {
    if (valores.length == 0){
        window.alert ('Adicione valores antes de finalizar!')
    } else {
        var total = valores.length
        var maior = valores [0]
        var menor = valores [0]
        var soma = 0
        var media = 0
        for (var pos in valores){
            soma += valores[pos]

            if (valores[pos] > maior){
                maior = valores[pos]
            }
            if (valores[pos] < menor){
                menor = valores[pos]
            }
        }
        var media = soma / total

        res.innerHTML = ''
        res.innerHTML += `<p>Ao todo, temos ${total} números cadastrados.</p>`
        res.innerHTML += `<p>O maior número informado foi ${maior}.</p>`
        res.innerHTML += `<p>O menor número informado foi ${menor}.</p>`
        res.innerHTML += `<p>Somando todos os valores, temos ${soma}.</p>`
        res.innerHTML += `<p>A média dos valores digitados é ${media}.</p>`
    }
}