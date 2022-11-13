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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
	</head>
	
	<body>
        <header class="header">
            <div class="container">
                <div class="header__content">
                    <div class="header__item">
                        <h1 class="header__title">Мир под другим углом</h1>
                        <p class="header__text">“Искусство — зеркало, где каждый видит себя.”</p>
                        <p class="header__autor">Иоганн Вольфганг Гёте</p>
                    </div>
                    <div class="header__item">
                        <img src="../img/header_img.svg" alt="ДевушкаСЖемчужиной" class="header__img">
                    </div>
                </div>
            </div>
        </header>
		<div class="container">
           
			<h2>Новые посты</h2>
						
			<div class="row">
			
					<h3>Галерея</h3>
					
					<div class="row">
					@foreach ($posts as $post)
                    @if (preg_match("/./",$post->author))
						<div class="col-4">
							<a href="cover/{{ $post->cover }}" class="thumbnail" data-gallery="gallery1">
								<img src="cover/{{ $post->cover }}"alt="{{ $post->title }}"/>
								<div class="caption" style="background-color:#ffffff">
        						<h3>&nbsp;&nbsp;&nbsp;{{ $post->author }}</h3>
       							 <p>&nbsp;&nbsp;&nbsp;{{ $post->body }}</p>
								 
      							</div>
							</a>
						</div>
                    @endif  
					@endforeach	
					
					</div>
				
				
			</div>
			
		</div>
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            body{
                font-family: 'PT Serif', serif;
                background-color: #F7E6D5;
            }
            .container{
                padding: 0 20px;
            }
            .header{
                background-color: #010005;
                color: #ffffff;
                height: 800px;
            }
            .header__content{
                display: flex;
                justify-content: space-between;
            }
            .header__title{
                margin-top: 251px;
                width: 397px;
                font-weight: 400;
                font-size: 40px;
                line-height: 53px;
                letter-spacing: 0.2em;
            }
            .header__text{
                margin-top: 109px;
                font-weight: 400;
                font-size: 24px;
                line-height: 32px;
                letter-spacing: 0.05em;
            }
            .header__autor{
                margin-left: 30px;
                margin-top: 23px;
                font-weight: 400;
                font-size: 24px;
                line-height: 32px;
                letter-spacing: 0.05em;
    
            }
            .header__img{
                margin-top: 368px;
            }
           </style> 
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