function verificar() {
    var agora = new Date
    var ano = agora.getFullYear()
    var fano = document.querySelector('.txtano')
    var res = document.querySelector('.res')

    if (fano.value.length == 0 || fano.value > ano) {
        window.alert('[ERRO] Verifique os dados e tente novamente!')
    } else {
        var fsex = document.getElementsByName('radsex')
        var idade = ano - Number(fano.value)
        var faxa = ''
        var genero = ''
        var img = document.createElement('img')
        img.setAttribute('class', 'fotos')
        if (fsex[0].checked) {
            genero = 'Um homem'
            if (idade < 6) {
                faxa = 'um Bebê'
                img.setAttribute('src', 'garoto-bebe.png')
                document.body.style.background = '#b6b2a4'
            } else if (idade < 12) {
                faxa = 'uma Criança'
                img.setAttribute('src', 'garoto-crianca.png')
                document.body.style.background = '#264651'
            } else if (idade < 21) {
                faxa = 'um Adolecente'
                img.setAttribute ('src', 'garoto-adolescente.png')
                document.body.style.background = '#d4a97a'
            } else if (idade < 60) {
                faxa = 'um Adulto'
                img.setAttribute ('src', 'garoto-adulto.png')
                document.body.style.background = '#d1c1b1'
            } else {
                faxa = 'um Idoso'
                img.setAttribute ('src', 'garoto-idoso.png')
                document.body.style.background = '#e1e8f3'
                document.body.style.color = 'gray'
            }
        } else {
            genero = 'Uma mulher'
            if (idade < 6) {
                faxa = 'uma Bebê'
                img.setAttribute ('src', 'menina-bebe.png')
                document.body.style.background = '#d2dbbd'
            } else if (idade < 12) {
                faxa = 'uma Criança'
                img.setAttribute ('src', 'menina-crianca.png')
                document.body.style.background = '#a5bdc8'
            } else if (idade < 21) {
                faxa = 'uma Adolecente'
                img.setAttribute ('src', 'menina-adolescente.png')
                document.body.style.background = '#1e7e7e'
            } else if (idade < 60) {
                faxa = 'uma Adulta'
                img.setAttribute ('src', 'menina-adulta.png')
                document.body.style.background = '#eb4334'
            } else {
                faxa = 'uma Idosa'
                img.setAttribute ('src', 'menina-idosa.png')
                document.body.style.background = '#4e2f31'
            }
        }

        res.innerHTML = `${genero} de ${idade} é ${faxa}`
        res.appendChild(img)
    }

    /*var idade = Number(txtidade.value)
    res.innerHTML = `<p>Você tem <strong>${idade} anos</strong></p>`
    if (idade < 6) {
        res.innerHTML += (`Bebê`)
    } else if (idade < 12) {
        res.innerHTML += (`Criança`)
    } else if (idade < 21) {
        res.innerHTML += (`Adolecente`)
    } else if (idade < 60) {
        res.innerHTML += (`Adulto`)
    } else {
        res.innerHTML += (`Idoso`)
    }*/
}