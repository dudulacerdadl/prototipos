function carregar() {
    var agora = new Date()
    var hrs = agora.getHours()
    var msg = document.querySelector('.msg')
    var img = document.querySelector('.imagem')
    msg.innerHTML = `<p>Agora são exatamente ${hrs} horas!</p>`
    if (hrs < 12) {
        img.src = 'manha.png'
        document.body.style.background = '#dbb488'
        msg.innerHTML += (`Bom Dia!`)
    } else if (hrs <= 18) {
        img.src = 'tarde.png'
        document.body.style.background = '#9d2c0f'
        msg.innerHTML += (`Boa Tarde!`)
    } else if (hrs < 24) {
        img.src = 'noite.png'
        msg.innerHTML += (`Boa Noite!`)
        document.body.style.background = '#131629'
    } else {
        msg.innerHTML += (`[ERRO] Digite um horário válido!`)
    }
}