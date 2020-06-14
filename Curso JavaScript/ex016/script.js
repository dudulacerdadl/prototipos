function contar() {
    var inicio = document.querySelector('.txtinicio')
    var fim = document.querySelector('.txtfim')
    var passo = document.querySelector('.txtpasso')
    var res = document.querySelector('.res')

    if (inicio.value.length == '' || fim.value.length == '' || passo.value.length == '') {
        res.innerHTML = 'Impossível contar!'
        /*  } else */
    } else {
        res.innerHTML = 'Contando: <br>'
        var i = Number(inicio.value)
        var f = Number(fim.value)
        var p = Number(passo.value)

        if (p == 0) {
            window.alert('Passo inválido! Será considerado passo = 1')
            p = 1
        }

        if (i < f) {
            for (var contador = i; contador <= f; contador += p) {
                res.innerHTML += ` ${contador} \u{1F449} `
            }
        } else {
            for (var contador = i; contador >= f; contador -= p) {
                res.innerHTML += ` ${contador} \u{1F449} `
            }
        }
        res.innerHTML += '\u{1F3C1}'
    }
}