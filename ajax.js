	$("#mark-select").change(function() 
			{
				let mark = $(this).val();
				
				$.ajax(
				{
					method: "GET",
					url: "cars.php",
					dataType: 'json',
					data: {mark: mark}
				})
				.done(function(response) 
				{
					$('#models-select').empty();
					$.each(response, function(index, element) 
					{
						$('#models-select').append(`<option value=${element.toLowerCase()}>`+element+"</option>");		
					});
					
				});
				fail :(function(response){
					alert('Error'+response);
				});
			});
			
			
			/*==========================*/
			
			$("#models-select").change(function() 
			
			{
				let model = $(this).val();	
				$.ajax(
				{
					method: "POST",
					url: "cars.php",
					dataType: 'json',
					data: 
					{ 
						model: model
					}
					
				})
				.done(function(response) 
				{
					$('#madeIn-select').empty();
					$.each(response, function(index, element) 
					{
						$('#madeIn-select').append("<option>"+element+"</option>");
					});
				});
				error :(function(response){
					alert('Error'+response);
				});
			});
			
			//=============================================
			$("#madeIn-select").change(function() 
			
			{
				let model = $(this).val();
				$('#car').empty();	
				$('#car').append("<h4 class='text-center'>"+model+"</h4>");
				
			});
			
