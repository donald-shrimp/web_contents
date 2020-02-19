function fizzbuzz(max) {
  var i;

  for (i = 1; i <= max; i++) {
    //新たにp要素の作成
    var p = document.createElement("p");

    if (i % 15 == 0) {
      p.innerHTML = "FizzBuzz";
      document.body.appendChild(p);
    } else if (i % 5 == 0) {
      p.innerHTML = "Buzz";
      document.body.appendChild(p);
    } else if (i % 3 == 0) {
      p.innerHTML = "Fizz";
      document.body.appendChild(p);
    } else {
      p.innerHTML = i;
      document.body.appendChild(p);
    }
  }
}
