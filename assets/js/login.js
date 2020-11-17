document.querySelector('.img-btn').addEventListener('click', function()
	{
		document.querySelector('.cont').classList.toggle('s-signup')
	}
);


function myFunction() {

    var btn = document.getElementById("myButton");

    if (btn.value == "SIGN UP") {
        btn.value = "registered";
        btn.innerHTML = "Registered";
    }
    else {
        btn.value = "SIGN UP";
        btn.innerHTML = "SIGN UP";
    }

}
  