
// $.ajax({
// 	url: "config.json",
// 	dataType: "json",
// 	beforeSend: function(xhr) {
// 		if (xhr.overrideMimeType) {
// 			xhr.overrideMimeType("application/json");
// 		}
// 	},
// 	success: function(DataFromJson) {
// 		console.log(DataFromJson);
// 	},
// 	error: function() {
// 		console.log("Something Went Wrong");
// 	}
// })
var id = 12; // A random variable for this example




$("#estimateform").submit(function(event) {
	event.preventDefault();
	$.ajax({
    method: 'POST', 
    url: '/dashboard/product/estimate', 
    data: {'id' : id},
	success: function(DataFromJson) {
		console.log(DataFromJson);
	},
	error: function() {
		console.log("Something Went Wrong");
	}
});
});