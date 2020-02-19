function judge(input) {
  if (input == 0) {
    document.getElementById("result").innerHTML = "kore is 0.";
  } else if (input % 2 == 0) {
    document.getElementById("result").innerHTML = "kore is gu-su.";
  } else if (input % 2 == 1) {
    document.getElementById("result").innerHTML = "kore is kisu.";
  } else {
    document.getElementById("result").innerHTML = "kore is nani?";
  }
}

