//primitive data type
//String
let name = "abhishek";
console.log("My string is " + name);
console.log("Data type is " + typeof name);

//Numbers
let marks = 54;
console.log("Data type is " + typeof marks);

//Boolean
let isDriver = true;
console.log("Data type is " + typeof isDriver);

//Null
let nullVar = null;
console.log("Data type is " + typeof nullVar);

//Undefined
let undef = undefined;
console.log("Data type is " + typeof undef);

//Reference Data Type
//Arrays
let myarr = [1, 2, 3, 4, 5, 6, false, String];
console.log("Data type is " + typeof myarr);

//Object literals
let stuMarks = {
  harry: 89,
  Shubham: 36,
  RohanDas: 34,
};
console.log("Data type is " + typeof stuMarks);

function findName() {}
console.log("Data type is " + typeof findName);

let date = new Date();
console.log("Data type is " + typeof date);
