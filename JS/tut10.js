console.log("this is tutorial 10");
function greet(name, thank = "thank you") {
  let msg = `Happy birthday ${name}, My goodness wishes are there with you always with you . ${thank}!`;
  return msg;
}
let name = "skillF";
let thank = "rohan";

let val = greet(name, thank);
console.log(val);
