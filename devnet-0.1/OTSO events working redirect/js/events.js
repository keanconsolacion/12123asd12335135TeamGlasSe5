function ready(){
	var viewbutton = document.getElementsByClassName('view-button')

	 for (var i = 0; i < viewbutton.length; i++) {
	  viewbutton[i].addEventListener('click', showDesc);
	 }
}

function showDesc(){
	var viewbutton = event.target;
	var eventlist = viewbutton.parentElement;

	var title = eventlist.getElementsByClassName('event-title')[0].innerHTML;
	// var image = eventlist.getElementsByClassName('event-image')[0].src;
	var desc = eventlist.getElementsByClassName('event-desc')[0].innerHTML;

	console.log(title);
	console.log(desc);
	// console.log(image);

	document.getElementsByClassName('eventtitle')[0].innerHTML = title;
	// document.getElementsByClassName('evetimage')[0].src = image;
	document.getElementsByClassName('eventdesc')[0].innerHTML = desc;
}

function viewFunction(eventlist){
	
	var listOfEvents = document.getElementsByClassName("event-list")[0];

	var listEvents = [];
	var viewbutton = event.target;
	var eventlist = viewbutton.parentElement;

	for(var i = 0; i < listOfEvents.length; i++){
	var titleOfEvent = eventlist.getElementsByClassName('event-title')[0].innerHTML;
	var creator = eventlist.getElementsByClassName('event-creator')[0].innerHTML;
	var descOfEvent = eventlist.getElementsByClassName('event-desc')[0].innerHTML;
	var category = eventlist.getElementsByClassName('event-category')[0].innerHTML;
	var audience = eventlist.getElementsByClassName('event-audience')[0].innerHTML;
	var image = eventlist.getElementsByClassName('event-image')[0].innerHTML;

	console.log(titleOfEvent)
	console.log(creator)
	console.log(descOfEvent)
	console.log(category)
	console.log(audience)

	listEvents[i] = {titleValue: titleOfEvent, creatorValue: creator, imageValue: image, descOfEventValue: descOfEvent,
				categoryValue: category, audienceValue: audience};

	}

	sessionStorage.setItem("listEvents", JSON.stringify(listEvents));

	//redirects to a certain event page when the view button is clicked

	window.location.href = "event-details.html";

}

//function that loads the details of certain event once the view button has been clicked

function onLoadView(){
	var listEvents = JSON.parse(sessionStorage.getItem("listEvents"));

	var eventDetails = document.getElementsByClassName('event-details')[0];

	for(var i = 0; i < listEvents.length; i++){

		var title = listEvents[i].titleValue;
		var creator = listEvents[i].creatorValue;
		var image = listEvents[i].imageValue;
		var descOfEvent = listEvents[i].descOfEventValue;
		var category = listEvents[i].categoryValue;
		var audience = listEvents[i].audienceValue;

		var deetsOfEvents = document.creatElement('div');
		deetsOfEvents.classList.add("event-details");
		deetsOfEvents.classList.add("row");

		//displayes event details after clicking the view button from the previous page

		var showEventDetails = `<table align="center" border="0">

	<tr>
		<td><center>&nbsp;</center></td>
		<td><center><h1><${title}</h1></center>
		<br> <center><h3><span class="event-creator">${creator}</span></h3></td>
		<td><center>&nbsp;</center></td>
	</tr>

	<tr>
		<td>><img class"event-image" src="${image}" style="width: 300px; height: 300px;"></td>
		<td><span class="event-desc">${descOfEvent}</span>
		<br> <span class="event-category">${category}</span> <span class="event-audience">${audience}</span></td>
		<td>&nbsp;</td>
	</tr>
	</table>`
	}
}