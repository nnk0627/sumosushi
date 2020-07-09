$(document).ready(function(){
	getMenulist();
	function getMenulist(){
		$.get('menulist.json',function(response){
			if(response){
				console.log(typeof(response));

				//string
				var menuObjArray=JSON.parse(response);

				var html='';
				var j=1;
				$.each(menuObjArray,function(i,v){
					html+=`<tr>
					<td>${j++}</td>
					<td>${v.name}</td>
					<td>${v.price}</td>
					
					<td>
					<button class="btn btn-outline-primary">
					<i class="fas fa-info-circle"></i></button>
					
					<button class="btn btn-outline-warning edit " data-id="${i}">
					<i class="fas fa-edit"></i></button>
					
					<button class="btn btn-outline-danger delete"  data-id="${i}">
					<i class="fas fa-trash-alt"></i></button></td>
							</tr>`
				})
				$('#tb').html(html);
			}
		})
	}
	$('tbody').on('click','.delete',function(){
					var id=$(this).data('id');
					console.log(id);
					var ans=confirm('Are you sure want to delete');
					if(ans){
						$.post(
							'deletemenu.php',{id:id},function(data){
								getMenulist();
							})
					}
				})
	$('#editMenudiv').hide();
	$('tbody').on('click','.edit',function(){
					var id=$(this).data('id');
					$.get('menulist.json',function(response){
						var menuObjArray=response;
						var name=menuObjArray[id].name;
						var price=menuObjArray[id].price;
						var photo=menuObjArray[id].photo;
						
						console.log("Name="+name);
						console.log("Price="+price);
						console.log("Name="+photo);

						$('#edit_name').val(name);
						$('#edit_price').val(price);
						
						/*img*/
						$('#edit_photo').attr('src',photo);
						$('#edit_id').val(id);
						$('#edit_oldphoto').val(photo);
						
					})
					$('#editMenudiv').show(500);
					$('#addMenudiv').hide(500);
				})



});