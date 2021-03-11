//STRINGS IN JAVASCRIPT
console.log("we are at tut 6");
const name = "jacks";
const greet = "good morning";
// console.log(name + " " + greet);

let html;
html = "<h1>this is heading</h1>" + "<p>this is a para tag</p>";
html = html.concat("this");
// console.log(html);
// console.log(html.length);
// console.log(html.toLowerCase());
// console.log(html.toUpperCase());
// console.log(html);

// console.log(html[0]);
// console.log(html.indexOf("this"));
// console.log(html.lastIndexOf("this"));
// console.log(html.charAt(2));
// console.log(html.endsWith("this"));
// console.log(html.includes("is"));
// console.log(html.substring(1, 5));
// console.log(html.slice(-4));
// console.log(html.split("<"));
// console.log(html.replace("this", "it"));

let fruits1 = "orange";
let fruits2 = "apple";
let myHtml = `hello ${name}
<h1>this is heading</h1>
<p>you like ${fruits1} and ${fruits2}`;

document.body.innerHTML = myHtml;
