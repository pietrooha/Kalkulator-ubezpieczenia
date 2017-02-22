/**
*	Funkcja do obliczania skladki ubezpieczenia.
*/
function obliczSkladke(sumaUbezp, szkoda, raty)
{
	var skladkaUbezp = 0;

	if(sumaUbezp < 100 || sumaUbezp > 10000)
	{
		return "Podano niepoprawną kwotę. Podaj kwotę z zakresu 100 - 10000 PLN.";
	}
	else if(sumaUbezp >= 100 && sumaUbezp <= 1000)
	{
		skladkaUbezp = 20;
	}
	else if(sumaUbezp >= 1001 && sumaUbezp <= 3000)
	{
		skladkaUbezp = 70;
	}
	else if(sumaUbezp >= 3001 && sumaUbezp <= 6000)
	{
		skladkaUbezp = 130;
	}
	else if(sumaUbezp >= 6001 && sumaUbezp <= 9000)
	{
		skladkaUbezp = 180;
	}
	else if(sumaUbezp >= 9001 && sumaUbezp <= 10000)
	{
		skladkaUbezp = 200;
	}

	if(szkoda == true)
	{
		skladkaUbezp *= 1.08;
	}
	else
	{
		skladkaUbezp *= 0.95;
	}

	if(raty == true)
	{
		skladkaUbezp *= 1.04;
	}
	else
	{
		skladkaUbezp *= 0.98;
	}
	var temp = sumaUbezp;
	skladkaUbezp = Math.round(skladkaUbezp);
	if(temp > skladkaUbezp)
	{
		skladkaUbezp++;
	}
	return skladkaUbezp + " PLN";
}

function szkodaf()
{
	var szkoda;

	if(document.getElementById('szkoda').checked)
	{
		szkoda = true;
	}
	else
	{
		szkoda = false;
	}
	return szkoda;
}

function ratyf()
{
	var raty;

	if(document.getElementById('raty').checked)
	{
		raty = true;
	}
	else
	{
		raty = false;
	}
	return raty;
}

function oblicz()
{
    var e = document.getElementById("sumaUbezp");
    var szkoda = szkodaf();
    var raty = ratyf();
    t = parseInt(e.value);
	document.getElementById("result").innerHTML = obliczSkladke(t, szkoda, raty);
}