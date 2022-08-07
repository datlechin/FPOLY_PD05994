let time = document.getElementById("time");
let count = document.getElementById("count");
let result = document.getElementById("result");
let error = document.getElementById("error");
let submitCalculator = document.getElementById("submitCalculator");
let submitGeneratorNumber = document.getElementById("submitGeneratorNumber");
let num1 = document.getElementById("num1");
let num2 = document.getElementById("num2");
let num3 = document.getElementById("num3");
let mathCount = parseInt(localStorage.getItem("mathCount") || 0);
count.innerHTML = mathCount;

submitCalculator.disabled = true;

submitCalculator.addEventListener("click", function (e) {
  e.preventDefault();

  let a = parseInt(num1.value);
  let b = parseInt(num2.value);
  let c = parseInt(num3.value);

  // phuong trinh bac 2
  if (a !== 0 && b !== 0 && c !== 0) {
    let delta = b * b - 4 * a * c;
    if (delta < 0) {
      result.innerHTML = "Phương trình vô nghiệm";
    } else if (delta === 0) {
      let x = -b / (2 * a);
      result.innerHTML = "Phương trình có nghiệm kép x1 = x2 = " + x;
    } else {
      let x1 = (-b + Math.sqrt(delta)) / (2 * a);
      let x2 = (-b - Math.sqrt(delta)) / (2 * a);
      result.innerHTML =
        "Phương trình có 2 nghiệm phân biệt <br> x1 = " +
        Math.round(x1) +
        " <br> x2 = " +
        Math.round(x2);
    }
    result.style.display = "block";
    mathCount++;
    localStorage.setItem("mathCount", mathCount);
    count.innerHTML = mathCount;
  } else {
    error.innerHTML = "Số a, b, c phải khác 0";
    error.style.display = "block";
  }

  submitCalculator.disabled = true;
});

submitGeneratorNumber.addEventListener("click", function (e) {
  e.preventDefault();
  num1.value = Math.floor(Math.random() * 10);
  num2.value = Math.floor(Math.random() * 10);
  num3.value = Math.floor(Math.random() * 10);
  submitCalculator.disabled = false;
  result.style.display = "none";
  error.style.display = "none";
});

setInterval(function () {
  time.innerHTML = new Date().toLocaleString();
}, 0);
