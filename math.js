function multiplyBy()
{
		num1 = document.getElementById("firstNumber").value;
		num2 = document.getElementById("secondNumber").value;
		document.getElementById("result").innerHTML= num1 * num2;
}

function divideBy()
{
		num1 = document.getElementById("firstNumber").value;
		num2 = document.getElementById("secondNumber").value;
		document.getElementById("result").innerHTML = num1 / num2;
}

function primeCheck()
{
	num1 = document.getElementByID("primeNumber").value;
	result = false
	for i in num1 do
		if i>1
			for j in range(2,i)
				if(i % j == 0)
					break
				else
					result = true
}
