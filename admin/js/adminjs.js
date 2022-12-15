// messagesView
$(".msgBtn").click(function(){

	$(this).parent().prev().text('Read');

	let id = $(this).data('id');

	$.post('functions/messages/viewMessage.php',{

		messageid:id 

	},function(data){

		$('.view-count').text(data);

	});
});



//TEST
$('.addnewproduct').submit(function(eve) {
  eve.preventDefault(); // Prevent browser default submit.
  $.ajax({
    url: "functions/product/add_product.php",
    type: "POST",
    data: new FormData(this),
    dataType:"JSON",
    success: function (data) {

    // let proid=$(data).attr('id'); // last inserted product id 
    // $('#product_name').text(data.name);
    // $('#product_price').text(data.price);
    // $('#product_sale').text(data.sale);
    // $('#product_description').text(data.description);
	// let totalNums=$(data).attr('data-num'); // total number of all products
	var appendNewRow='<tr>';
		appendNewRow+='<td>'+"New"+'</td>';
		appendNewRow+='<td>'+data.name+'</td>';
		appendNewRow+='<td>'+data.price+'</td>';
		appendNewRow+='<td>'+data.sale+'</td>';
		appendNewRow+='<td>'+data.img+'</td>';
		appendNewRow+='<td>'+data.description+'</td>';
		appendNewRow+='<td>'+data.category+'</td>';

		// appendNewRow+='<td><a class="btn btn-primary" href="?action=edit&id='+proid+
		// '">Edit</a><a class="btn btn-danger" href="functions/product/delete_product.php?id='
		// +proid+'">Delete</a></td></tr>';
		
		$('#exampleModal').modal('hide');	
		$('tbody').prepend(appendNewRow);
		// $('.res').html(data); // response success message
		// $('.proNumbers').html('Total Products = ' +totalNums);
   
    },
    // error: function () {

    //     }
    cache: false,
    contentType: false,
    processData: false
  });
});

               
// add product new script
// $('.addnewproduct').submit(function(eve) {
//   eve.preventDefault(); // Prevent browser default submit.
// 	let name =$('input[name="name"]').val();
// 	let price=$('input[name="price"]').val();
// 	let	sale=$('input[name="sale"]').val();
// 	let	img=$('input[name="img"]').val();
// 	let	description=$('input[name="description"]').val();
// 	let	category=$('select[name="cat_id"]').val();
//   $.ajax({
//     url: "functions/product/add_product.php",
//     type: "POST",
//     data: new FormData(this),
//     success: function (data) {
//     let proid=$(data).attr('id'); // last inserted product id 
// 	let totalNums=$(data).attr('data-num'); // total number of all products
// 	var appendNewRow='<tr>';
// 		appendNewRow+='<td>'+"New"+'</td>';
// 		appendNewRow+='<td>'+name+'</td>';
// 		appendNewRow+='<td>'+price+'</td>';
// 		appendNewRow+='<td>'+sale+'</td>';
// 		appendNewRow+='<td>'+img+'</td>';
// 		appendNewRow+='<td>'+description+'</td>';
// 		appendNewRow+='<td>'+category+'</td>';

// 		appendNewRow+='<td><a class="btn btn-primary" href="?action=edit&id='+proid+
// 		'">Edit</a><a class="btn btn-danger" href="functions/product/delete_product.php?id='
// 		+proid+'">Delete</a></td></tr>';
		
// 		$('#exampleModal').modal('hide');	
// 		$('tbody').prepend(appendNewRow);
// 		$('.res').html(data); // response success message
// 		$('.proNumbers').html('Total Products = ' +totalNums);
//     },
//     // error: function () {

//     //     }
//     cache: false,
//     contentType: false,
//     processData: false
//   });
//     // console.log('Testing'); 
// });

















// add product 
// $('.addnewproduct').submit(function(ev){
// 	// console.log('test');
// 	ev.preventDefault();
// 	let num =$('input[name="lastNum"]').val();
// 	let num2=parseInt(num);
// 	let name =$('input[name="name"]').val();
// 	let price=$('input[name="price"]').val();
// 	let	sale=$('input[name="sale"]').val();
// 	let	img=$('input[name="img"]').val();
// 	let	description=$('input[name="description"]').val();
// 	let	category=$('select[name="cat_id"]').val();
// 	num2+=1;

// 	$.post('functions/product/add_product.php',
// 	{
// 			Name:name,
// 			Price:price,	
// 			Sale:sale,
// 			Description:description,
// 			Category:category
// 	},function(data){

// 	let proid=$(data).attr('id');
// 	let totalNums=$(data).attr('data-num');
// 	var appendNewRow='<tr>';
// 		appendNewRow+='<td>'+"New"+'</td>';
// 		appendNewRow+='<td>'+name+'</td>';
// 		appendNewRow+='<td>'+price+'</td>';
// 		appendNewRow+='<td>'+sale+'</td>';
// 		appendNewRow+='<td>'+img+'</td>';
// 		appendNewRow+='<td>'+description+'</td>';
// 		appendNewRow+='<td>'+category+'</td>';
// 		appendNewRow+='<td><a class="btn btn-primary" href="?action=edit&id='+proid+'">Edit</a><a class="btn btn-danger" href="functions/product/delete_product.php?id='+proid+'">Delete</a></td></tr>';
		
// 		$('#exampleModal').modal('hide');	
// 		$('tbody').prepend(appendNewRow);
// 		$('.res').html(data);
// 		$('.proNumbers').html('Total Products = ' +totalNums);
// 	});
// });


// success: function (res) {
//                 document.getElementById("response").innerHTML = res;
//             }