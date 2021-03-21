console.log("this is tuts 14");
/*
element selectors
1. single element selectors
2. multiple element selectors

*/
//single element selector
let element = document.getElementById("first");
// element = element.className;
// element = element.childNodes;
// element = element.parentNode;
element.style.color = "red";
element.innerText = "Harry is a good boy";
element.innerHTML = `<b>harry is a good boy</b>`;
// console.log(element.innerHTML);
let sel = document.querySelector("#first");
sel = document.querySelector(".child");
sel = document.querySelector("div");
sel.style.color = "green";
// console.log(sel);

//Multi element selector
let elems = document.getElementsByClassName("child");
elems = document.getElementsByClassName("container");
elems = document.getElementsByClassName("container");
elems = document.getElementsByTagName("div");
// console.log(elems);
// Array.from(elems).forEach((element) => {
//   console.log(element);
//   element.style.color = "blue";
// });
// console.log(elems[0].getElementsByClassName("child"));
for (let index = 0; index < elems.length; index++) {
  const element = elems[index];
  console.log(element);
  element.style.color = "green";
}
