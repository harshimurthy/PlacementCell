
function timefn()
{
var currentTime=new Date();
var hours=currentTime.getHours();
var minutes=currentTime.getMinutes();
var day=currentTime.getDate();
var month=currentTime.getMonth()+1;
var year=currentTime.getFullYear();
document.write('TIME : ' + hours + ':' + minutes + ' DATE : ' + day + '-' + month + '-' + year);
}



