function on_load(){
var currentTime = new Date(), hours = currentTime.getHours(), minutes = currentTime.getMinutes();
var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
var months = ["Jan","Feb","Mar","Apr","May","Jun","Jul", "Aug", "Sept", "Oct", "Nov", "Dec"];

if (minutes < 10) {
	minutes = "0" + minutes;
	}

document.getElementById("time").innerHTML = (hours + ":" + minutes);
document.getElementById("footer_time").innerHTML = (hours + ":" + minutes);
document.getElementById("date").innerHTML = days[currentTime.getDay()] + ", " + months[currentTime.getMonth()] + " " + currentTime.getDate();

var t = setTimeout(function(){on_load()},500);
}


function get_grid_data()
{
	var associate_persons = [{date_time:'07/02/2017 11:22', module:'IMS', topic:'merge associated person', description:'123'}, {date_time:'09/03/2017 11:30', module:'CMMS', topic:'random worker order', description:'123'}, {date_time:'07/02/2017 11:22', module:'IMS', topic:'merge associated person', description:'123'}, {date_time:'09/03/2017 11:30', module:'CMMS', topic:'random worker order', description:'123'}, {date_time:'07/02/2017 11:22', module:'IMS', topic:'merge associated person', description:'123'}] ;

	for (let i=0; i<(associate_persons.length); i++){
		document.getElementById('table_body').innerHTML += `<tr align='center'> <td> ${associate_persons[i].date_time} </td>
		<td> ${associate_persons[i].module} </td>
		<td> ${associate_persons[i].topic} </td>
		<td> ${associate_persons[i].description} </td>
		<td> <img src=images/eye> </td>
		<td> <img src=images/information-white> </td> </tr>`;
	}
}

$(document).ready(function(){
	var today = new Date();
	$('.datepicker').datepicker({
		format: 'dd-mm-yyyy',
		autoclose:true,
		endDate: "today",
		maxDate: today
	});
});

function checkemail(mail)
{
	var pattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	if(mail == "pooja@iss247.in")
	{
		document.getElementById("email_id").classList.add("data-error");
		document.getElementById("data_error").innerHTML = "Email id already present";
		// document.getElementById("email_id").value = "";
	}
	else if(!(mail))
	{
		document.getElementById("email_id").classList.add("data-error");
		document.getElementById("data_error").innerHTML = "Email Id cannot be empty";
	}
	else if(!(pattern.test(mail)))
	{
		document.getElementById("email_id").classList.add("data-error");
		document.getElementById("data_error").innerHTML = "Invalid Email Id";
		// document.getElementById("email_id").value = "";
	}
	else
	{
		document.getElementById("email_id").classList.remove("data-error");
		document.getElementById("data_error").innerHTML = "";
	}
}

function checkdob(dob)
{
	var today = new Date();
	var selectedDate = new Date(dob);
	var age = today.getFullYear() - selectedDate.getFullYear();

	document.getElementById("age").value = today.getFullYear() - selectedDate.getFullYear();
}