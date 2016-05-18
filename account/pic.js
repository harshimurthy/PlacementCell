function picturecheck()
{
	var img=document.getElementById('image').files.length;
	if(img==0)
	{
	document.getElementById('ptxt').innerHTML= 'ERROR!  Kindly select a picture!';
	return false;
	}
	else
	{
		return true;
	}
}