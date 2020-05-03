let amiga = {
    nome: 'Maria',
    sexo: 'F',
    peso: 60,
    engordar(p){
       console.log('Engordou')
       this.peso += p
    }
}
amiga.engordar(2)
console.log(`${amiga.nome} pesa ${amiga.peso}Kg`)