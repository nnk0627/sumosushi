$(document).ready(function(){
	getMenu();
	function getMenu(){
		$.get('menulist.json',function(response){
			if(response){
				console.log(typeof(response));
				//obj
				var menuObjArray=response;
				var html='';
				var j=1;
				

				$.each(menuObjArray,function(i,v){
					html+=`			
									<div class="col-md-4" id="c">
									<div class="card">
									<div class="card-img-top">
											<span class="price badge badge-dark badge-pill">${v.price}</span>
											<img src="${v.photo}" class="w-100 h-100" alt="card1.jpg">
											</div>
											<div class="card-body">
												<h5 class="card-title text-center text-uppercase">${v.name}</h5>
												
											</div>
											<div class="card-footer">
												<button class="btn btn-outline-danger btn-block addtocart" data-id="${i}" data-name="${v.name}" data-price="${v.price}">Add to Cart</button>
											</div>
										
									</div>
									</div>
									`
									})
				$('#menu').html(html);
			}
		})
	}
	


});
