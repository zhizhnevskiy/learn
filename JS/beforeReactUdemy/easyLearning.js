// function varTest(){
//     for (var i = 1; i < 2 ; i++){
//         console.log('var')
//     }
//     console.log(i);
// }
//
// function letTest(){
//     for (let i = 1; i < 2 ; i++){
//         console.log('let')
//     }
//     console.log(i); // error
// }
//
// function constTest(){
//     for (const i = 1; i < 2 ; i++){ // error
//         console.log('const')
//     }
//     console.log(i);
// }
//
// varTest()
// letTest()
// constTest()

// let a = function(name){
//     return name;
// }
// console.log(a('Yuriy'));
//
// let name = (f) => {
//     return f;
// }
// console.log(name('Ivan'));
//
// let name = n => `Your name is ${n}`;
// console.log(name("Yuriy"));

// const Mango = {
//     color: 'yellow',
//     price: 100,
//     weight: 200,
//     about: function() {
//         return `This mango price is ${this.price} USD`;
//     }
// }
// console.log(Mango.about());

class Fruit{
    constructor(name){
        this.name = name;
    }
    print(){
        console.log(`This ${this.name} is too tasty`)
    }
    static testStatic(){
        console.log('Print from static method without object of that class')
    }
}
let test = new Fruit('Mango');
test.print();
Fruit.testStatic();