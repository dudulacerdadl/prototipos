let num = [5, 8, 2, 9, 3]

num.push(1)

console.log(num)

num.sort()
console.log(`Nosso vetor é o ${num}`)
console.log(`O vetor tem ${num.length} posições, sendo o primero o número ${num[0]}`)

let pos = num.indexOf(8)
if (pos == -1) {
    console.log(`O valor não foi encontrado`)
} else {
    console.log(`O valor está na posição de número ${pos}`)
}