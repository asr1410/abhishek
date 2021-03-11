//type conversion and type cohersion
let myVar;
myVar = 34;
myVar = String(34);
console.log(myVar, typeof myVar);
let booleanVar = String(true);
console.log(booleanVar, typeof booleanVar);

let date = String(new Date());
console.log(date, typeof date);

let arr = String([1, 2, 3, 4, 5]);
console.log(arr.length, typeof arr);

let i = 75;
console.log(i.toString());

let str = Number("3456");
console.log(str, typeof str);

let str1 = Number(true);
console.log(str1, typeof str1);

let number = parseInt("34.298");
console.log(number, typeof number);

let number1 = parseFloat("34.298");
console.log(number1, typeof number1);

let number3 = 45.2566;
console.log(number3.toFixed(2), typeof number3);

let numbe = 45;
console.log(numbe);

//type cohersion

let mystr = Number("256");
let mynum = 56;
console.log(mystr + mynum);
