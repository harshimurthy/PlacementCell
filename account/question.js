function questioncheck()
{
	var one=document.getElementById('secquestion').selectedIndex;
	var two=document.getElementById('newans').value;
	var three=document.getElementById('newans1').value;
	if(checkempty(one,two,three) && checksame(two,three))	
		return true;
	else
		return false;
}
function checkempty(one,two,three)
{
	if(two=="" || three=="" || one=="")
	{
				document.getElementById('stxt').innerHTML= 'ERROR!  Kindly fill all the details!';
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
		document.getElementById('stxt').innerHTML= 'ERROR!  New password and Confirm Password does not match!';
		return false;
	}
}