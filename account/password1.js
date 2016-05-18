function pwdcheck()
{
	var one=document.getElementById('oldpwd').value;
	var two=document.getElementById('newpwd').value;
	var three=document.getElementById('newpwd1').value;
	var txt=document.getElementById('ptxt');
	if(checkempty(one,two,three) && checksame(two,three) && pwdlength(two)  )
		return true;
	else
		return false;
}
function questioncheck()
{
	var one=document.getElementById('secquestion').value;
	var two=document.getElementById('newans').value;
	var three=document.getElementById('newans1').value;
	var txt=document.getElementById('stxt');
	if(checkempty(one,two,three) && checksame(two,three)){
	alert("success");
	return true;
	}
	else
		return false;
}

function checkempty(one,two,three)
{
	if(two=="" || three=="" || one=="")
	{
				txt.innerHTML= 'ERROR!  Kindly fill all the details!';
				return false;
	}
	else
	{		
	return true;
	}
}
function checksame(two,three)
{	if(two==three)
	{
		return true;
	}
	else
	{		
		txt.innerHTML= 'ERROR!  New password and Confirm Password does not match!';
		return false;
	}
}
function pwdlength(two)
{
	if(two.length>=8 && two.length<=32)
	{
		return true;
	}
	else
	{		
		txt.innerHTML = 'ERROR!  Password is not in the range(8-32 character)';
		return false;
	}
}