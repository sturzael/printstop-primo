$("#estimateform").submit(function(event) {
	event.preventDefault();
	$('#estimate_loader').css('display','inline-block');
	let inputs = {'productTypeId': $("input[name=productTypeID]").val(),
		'productTypePartID': $("input[name=productTypePartID]").val(),
		'productID':$("input[name=productID]").val(),
		'size': $("#size").val(),
		'stock': $("#stock").val(),
		'pages': $("#pages").val(),
		'lamination': $("#lamination").val(),
		'quantity': $("#Quantity").val()
};

	$('#price').empty();
	$.ajax({
    method: 'POST', 
		url: '/dashboard/product/estimate',
		data: inputs,
		success: function(DataFromJson) {
			$('#estimate_loader').css('display','none');
			$('#price').append(DataFromJson);
		},
		error: function() {
			console.log("Something Went Wrong");
		}
	});
});