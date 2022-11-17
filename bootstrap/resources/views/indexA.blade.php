<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Новый инстаграм</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="../css/bootstrap-gallery.min.css">
		<link rel="stylesheet" href="../css/app.css">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
	</head>
	
	<body>
        <div class="nav">
            <div class="container">
                <div class="nav__content">
                    <a href="/" class="nav__link">
                        Картинная галерея
                    </a>
                    <a href="artists.html" class="nav__link">
                        Художники
                    </a>
                    <a href="/Archiceture" class="nav__link nav__link-active">
                        Архитектура
                    </a>
                    <a href="museum.html" class="nav__link">
                        Музеи мира
                    </a>
                </div>
            </div>
        </div>
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
        <main class="main">
            <div class="container">
                <div class="title-block">
                    <p class="title">Картинная галерея</p>
                </div>
                <div class="row">
                    @foreach ($posts as $post)
                    @if (preg_match("/[а|А]рхитектура/",$post->title))
                        <div class="col-4">
                            <a href="storage/{{ $post->image }}" class="thumbnail" data-gallery="gallery1">
                                <img src="storage/{{ $post->image }}"alt="{{ $post->title }}"/>
                                <div class="caption" style="background-color:#ffffff">
                                <h3>{{ $post->meta_description }}</h3>
                                    <p>{{ $post->excerpt }}</p>
                                 
                                  </div>
                            </a>
                        </div>
                        @endif
                    @endforeach	
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="container">
                <div class="footer__content">
                    <div class="footer__inner">
                        <img src="../img/footer_img.svg" alt="" class="footer__img">
                    </div>
                    <div class="footer__inner">
                        <div class="footer__nav">
                            <a href="#" class="nav__link">
                                Картинная галерея
                            </a>
                            <a href="#" class="nav__link">
                                Музеи мира
                            </a>
                            <a href="#" class="nav__link nav__link-active">
                                Архитектура
                            </a>
                            <a href="#" class="nav__link">
                                Музеи мира
                            </a>
                        </div>
                    </div>
                    <div class="footer__inner">
                        <h1 class="footer__title">Мир под другим углом</h1>
                    </div>
                </div>
            </div>
        </footer>
       

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="../css/bootstrap-gallery.min.js"></script>
		
		<script>
		$(document).ready(function() {
			bootstrapGallery('a.custom-selector');
		});
		</script>
	</body>
</html>