console.log("we are at tut 7");
let marks = [45, 65, 77, 89, 89];
const fruits = ["orange", "apple", "mango"];
const mixed = ["str", 45, [3, 5]];

const arr = new Array(12, 35, 64, "orange");
// console.log(arr);
// console.log(mixed);
// console.log(fruits);
console.log(marks);

// console.log(arr.length);
// console.log(Array.isArray(arr));
// arr[0] = "harry";
// console.log(arr);
let val = marks.indexOf(89);
// console.log(val);
//mutating the array
// marks.push(25);
// marks.unshift(1009);
// marks.pop();
// marks.shift();
// marks.splice(1, 2);
// marks.reverse();
let marks2 = [1, 2, 3, 4];
marks = marks.concat(marks2);
// console.log(marks);

let myobj = {
  "first name": "harry",
  channel: "codewithharry",
  isActive: true,
  marks: [1, 2, 3, 4],
};
// console.log(myobj);
console.log(myobj.marks);
console.log(myobj["first name"]);
