function hero(){
	document.getElementById("choice").innerHTML = "<h4>Question 2: Why did you become a Hero?<h4> <br>" + 
	"<input type='radio' name='past' value='Just a good person' onclick=visible()>Just because<br>" +
	"<input type='radio' name='past' value='Promise' onclick=visible()>Promise to a loved one<br>" +
	"<input type='radio' name='past' value='past tragety with villan' onclick='visible()'>Past tragety with villan<br>";
	document.getElementById("newInvisible").innerHTML = "<br><h4>Which city would you protect?<h4><br>";
		
}
function villan(){
	document.getElementById("choice").innerHTML = "<h4>Question 2: Why did you become a Villan? <h4><br>" +
	"<input type='radio' name='past' value='past tragety' onclick='visible()'>Past Tragety<br>" +
	"<input type='radio' name='past' value='Just because Im Evil' onclick='visible()'>Thats just the way i am<br>" +
	"<input type='radio' name='past' value='Chaos' onclick='visible()'>Advocate of Chaos<br>";
	document.getElementById("newInvisible").innerHTML = "<br><h4>Which city would you antagonize?<h4><br>";

}

function visible(){
	document.getElementById("invisible").style.visibility = "visible";
}

function newVisible(){
	document.getElementById("newInvisible").style.visibility = "visible";
	document.getElementById("vis").style.visibility = "visible";
}

function powers(){
	document.getElementById("element").innerHTML ="<pre>    Which elements do you control? <br>" +
	"    <input type=checkbox name=pow[] value=Water>Water<br>" +
	"    <input type=checkbox name=pow[] value=Fire>Fire<br>" +
	"    <input type=checkbox name=pow[] value=Earth>Earth<br>" +
	"    <input type=checkbox name=pow[] value=Air>Air<br>" +
	"    <input type=checkbox name=pow[] value=Lightning>Lightning<br> </pre>";
}

function powerGone(){
	document.getElementById("element").innerHTML="";
}