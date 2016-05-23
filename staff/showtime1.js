
function timefn()
{
var currentTime=new Date();
var hours=currentTime.getHours();
var minutes=currentTime.getMinutes();
var day=currentTime.getDate();
var month=currentTime.getMonth()+1;
var year=currentTime.getFullYear();
document.write('Time  ' + hours + ':' + minutes + '   Date ' + day + '-' + month + '-' + year);
}



