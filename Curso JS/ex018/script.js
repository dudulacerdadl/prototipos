var memoria = ['']

function adicionar () {
    var tab = document.querySelector('.selnum')
    var num = document.querySelector('.txtnum')

    if (num.value.length == '' ) {
        window.alert('[ERRO]Digite um número!')
    } else {
        var n = Number(num.value)
        var item = document.createElement('option')
        item.text = (`O valor ${n} foi adicionado`)
        tab.appendChild(item)
    }
}

memoria.push(n)

function finalizar () {
    var texto = document.createElement('p')
    texto
}