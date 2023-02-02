
function checkNumbers(numbers) {
  let arrNumbers = numbers;
  let newArrNumbers = [];

  for (let i = 0; i < arrNumbers.length; i++) {

    if ( arrNumbers[i] % 3 == 0 &&  arrNumbers[i] % 5 == 0) {
      newArrNumbers.push("Switch Telecom");
    }else if (arrNumbers[i] % 5 == 0) {
      newArrNumbers.push("Telecom");
    }else if (arrNumbers[i] % 3 == 0) {
      newArrNumbers.push("Switch");
    }else{
      newArrNumbers.push(arrNumbers[i]);
    }

  }

  return String(newArrNumbers);
}

let numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20]
console.log(checkNumbers(numbers));
document.getElementById("app").innerHTML = checkNumbers(numbers);
