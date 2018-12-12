function setDate(){
	var date 	= new Date();
	var day 	= checkDigit(date.getDate());
	var month 	= checkDigit(date.getMonth()+1);
	var year 	= date.getFullYear();
	var hour 	= checkDigit(date.getHours());
	var minute 	= checkDigit(date.getMinutes());
	var second 	= checkDigit(date.getSeconds());

	$("#time").text(
		day 	+"-"+
		month 	+"-"+
		year 	+" "+
		hour 	+":"+
		minute 	+":"+
		second
		);


}

function checkDigit(digit){
	if (digit < 10) {digit = "0" + digit};
    return digit;
}
$(document).ready(function(){
    setInterval(setDate, 500);
});