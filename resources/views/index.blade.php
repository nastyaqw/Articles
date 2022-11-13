<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Новый инстаграм</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="../minified/bootstrap-gallery.min.css">
		<link rel="stylesheet" href="../css/app.css">
	</head>
	
	<body>
		<div class="container">
			<h2>Новые посты</h2>
						
			<div class="row">
			
					<h3>Галерея</h3>
					
					<div class="row">
					@foreach ($posts as $post)
						<div class="col-4">
							<a href="cover/{{ $post->cover }}" class="thumbnail" data-gallery="gallery1">
								<img src="cover/{{ $post->cover }}"alt="{{ $post->title }}"/>
								<div class="caption" style="background-color:#ffffff">
        						<h3>&nbsp;&nbsp;&nbsp;{{ $post->author }}</h3>
       							 <p>&nbsp;&nbsp;&nbsp;{{ $post->body }}</p>
								 
      							</div>
							</a>
						</div>
					@endforeach	
					
					</div>
				
				
			</div>
			
		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="../minified/bootstrap-gallery.min.js"></script>
		
		<script>
		$(document).ready(function() {
			bootstrapGallery('a.custom-selector');
		});
		</script>
	</body>
</html>