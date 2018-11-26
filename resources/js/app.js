


$("#estimateform").submit(function(event) {

	event.preventDefault();

	let inputs = {'productTypeId': $("input[name=productTypeID]").val(),
		'productTypePartID': $("input[name=productTypePartID]").val(),
		'productID':$("input[name=productID]").val(),
		'size': $("#size").val(),
		'stock': $("#stock").val(),
		'pages': $("#pages").val(),
		'lamination': $("#lamination").val(),
		'quantity': $("#Quantity").val()
};


	$.ajax({
    method: 'POST', 
		url: '/dashboard/product/estimate',
		data: inputs,
		success: function(DataFromJson) {
			$('#price').clear();
			$('#price').append(`<b>Estimated Price:</b> $${DataFromJson}`);
		},
		error: function() {
			console.log("Something Went Wrong");
		}
	});
});