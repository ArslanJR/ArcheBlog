let x = 1
y = 0.1
q = "qwerty"
v = true

let obj = {            //объект
    topic: "JavaScript",
    edition: 7,
    2: "2"
}

let arr = [1, 4, 75, 0.22];  //массив

let data = {          // объект с двумя элементами, каждый из которого явл. массивом
    arr1: [1, 2, 3, 4],
    arr2: [4, 3, 2, 1]
}
let empty = [          // массив с двумя элементами, каждый из которого явл. объектом
    {obj1: 11, obj11: 'obj11'},
    {obj2: 0.22, obj21: "obj21"}
]

empty[0].obj1 + empty[1].obj2;
