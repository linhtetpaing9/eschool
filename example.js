<script>
$(document).ready(function(){
$.getJSON( "https://spreadsheets.google.com/feeds/list/<?php echo $gsheetid;?>/<?php echo $colid;?>/public/values?alt=json", function( data ) {
	var data = 	data['feed']['entry'];
	console.log(data);
  	var items = [];
	var filter = $.grep(data, function (element, index) {
		var id = element['gsx$id']['$t'];
		
		return (<?php echo $propertyid;?>)
	    
	   	
	});
  $.each(filter, function( key, val ) {
    items.push(
		"<tr>" +
			"<td>" +val.gsx$name.$t+ "</td>" + 
			"<td>" +val.gsx$flightno.$t+ "</td>" +  
			"<td>" +val.gsx$route.$t+ "</td>" +  
			"<td>" +val.gsx$departure.$t+ "</td>" +  
			"<td>" +val.gsx$arrival.$t+ "</td>" +  	
			"<td>" +val.gsx$day.$t+ "</td>" + 
			"<td><a class='uk-button uk-button-secondary' href='"+val.gsx$name.$t+"'>Inquiry Now</a></td>" + 														
		"</tr>"
		);
   
   });
 
	  $( "<tbody>", {
	    "class": "",
	    html: items.join( "" )
	  }).appendTo( ".data" );
	});
});
	</script>