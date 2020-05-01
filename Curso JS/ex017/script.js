function gerar () {
    var tab = document.querySelector('.seltab')
    var num = document.querySelector('.txtnum')

    if (num.value.length == ''){
        window.alert('[ERRO] Por favor, digite um número!')
    } else {
        var n = Number(num.value)
        tab.innerHTML = ''
        for (var contador = 1; contador <= 10; contador ++){
            var item = document.createElement('option')
            item.text = `${n} X ${contador} = ${n*contador}`
            item.value = `tab${contador}`
            tab.appendChild(item)
        }
    }
}