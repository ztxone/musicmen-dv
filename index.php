<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Musicmen-dv - Аренда, продажа звукового оборудования, звукозапись");
$APPLICATION->SetTitle("Musicmen-dv - Аренда, продажа звукового оборудования, звукозапись");
?>

	<section class="hero is-fullheight has-carousel">
		<div class="hero-carousel carousel-animated carousel-animate-fade">
			<div class="carousel-container">
				<div class="carousel-item has-background is-active">
					<img class="is-background" src="<?=SITE_TEMPLATE_PATH?>/img/scena.jpg" alt="" />
					<div class="hero-body is-overlay">
				    <div class="hero-body-content">
						<p class="has-text-white is-size-5 is-uppercase">под ключ</p>
						<p class="has-text-white is-size-2 has-text-weight-bold is-uppercase">любые мероприятия</p>
						<p class="has-text-white is-size-7 is-italic">Техническое оснащение под ключ любых мероприятий. Качественно, мощно, профессионально, быстро. Удовлетворим любые запросы</p>
					</div>
					</div>
				</div>
				<div class="carousel-item has-background">
					<img class="is-background" src="<?=SITE_TEMPLATE_PATH?>/img/ploschad.jpg" alt="" />
					<div class="hero-body is-overlay">
				    <div class="hero-body-content">
						<p class="has-text-white is-size-5 is-uppercase">led-инсталляция</p>
						<p class="has-text-white is-size-2 has-text-weight-bold is-uppercase">musicmen-dv</p>
						<p class="has-text-white is-size-7 is-italic">Профессиональная установка современной качественной LED-панели под любые нужды на больших площадках и крупных праздниках 
						</p>
					</div>
					</div>
				</div>
				<div class="carousel-item has-background">
					<img class="is-background" src="<?=SITE_TEMPLATE_PATH?>/img/singer_2.jpg" alt="" />
					<div class="hero-body is-overlay">
				    <div class="hero-body-content">
						<p class="has-text-white is-size-5 is-uppercase">музыкальная группа</p>
						<p class="has-text-white is-size-2 has-text-weight-bold is-uppercase">blueslime</p>
						<p class="has-text-white is-size-7 is-italic">Украшение и музыкальное оформление Вашего праздника, оформление перерывов и антрактов живой музыкой и лучшими хитами от кавер группы
						</p>
					</div>
					</div>
				</div>
				<div class="carousel-item has-background">
					<img class="is-background" src="<?=SITE_TEMPLATE_PATH?>/img/scena_2.jpg" alt="" />
					<div class="hero-body is-overlay">
				    <div class="hero-body-content">
						<p class="has-text-white is-size-5 is-uppercase">аутсорсинг</p>
						<p class="has-text-white is-size-2 has-text-weight-bold is-uppercase">musicmen-dv</p>
						<p class="has-text-white is-size-7 is-italic">Полное техническое оснащение, инсталяция, обслуживание и управление всем комплексом светового, звукового, видео и музыкального оборудования по Вашим требованиям. Выполняется профессиональной командой с большим опытом и стажем
						</p>
					</div>
					</div>
				</div>
			</div>
			<div class="carousel-navigation is-overlay">
				<div class="carousel-nav-left">
					<i class="fa fa-play fa-rotate-180" aria-hidden="true"></i>
				</div>
				<div class="carousel-nav-right">
					<i class="fa fa-play" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</section>
	<section class="section has-background-white-bis">
		<div class="container">
			<div class="columns has-padding is-centered">
				<div class="column is-two-thirds is-narrow center">
					<h3 class="title is-uppercase is-underlined is-size-2">
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include", 
							".default", 
							array(
								"COMPONENT_TEMPLATE" => ".default",
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/inc/block1_h.php",
								"EDIT_TEMPLATE" => ""
							),
							false
						);?>
					</h3>
					<p class="is-size-7">
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include", 
							".default", 
							array(
								"COMPONENT_TEMPLATE" => ".default",
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/inc/block1_p.php",
								"EDIT_TEMPLATE" => ""
							),
							false
						);?>
					</p>
				</div>
			</div>
			<div class="columns has-padding-bottom">
                <a href="/rent/zvuk/" title="Звуковое оборудование musicmen-dv">
                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image  has-fixed-height">
                                  <img src="/img/zvuk_obor.jpg" alt="Звуковое оборудование">
                                </figure>
                            </div>
                            <div class="card-content has-fixed-height center-column">
                                <p class="center is-uppercase">Звуковое оборудование</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/rent/svet/" title="Световое оборудование musicmen-dv">
                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image has-fixed-height">
                                  <img src="/img/svet_obor.jpg" alt="Световое оборудование">
                                </figure>
                            </div>
                            <div class="card-content has-fixed-height center-column">
                                <p class="center is-uppercase">Световое оборудование</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/rent/video/" title="Видео инсталляции musicmen-dv">
                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image has-fixed-height">
                                  <img src="/img/led.jpg" alt="Видео инсталляции">
                                </figure>
                            </div>
                            <div class="card-content has-fixed-height center-column">
                                <p class="center-column is-uppercase">Видео инсталляции</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/rent/stsena_konstruktiv/" title="Сценические и баннерные конструкции musicmen-dv">
                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image has-fixed-height">
                                  <img src="/img/scena_konst.jpg" alt="Сценические и баннерные конструкции">
                                </figure>
                            </div>
                            <div class="card-content has-fixed-height center-column">
                                <p class="center is-uppercase">Сценические конструкции</p>
                            </div>
                        </div>
                    </div>
                </a>
			</div>
		</div>
	</section>
	<section class="section has-livebg-2">
		<h4 class="center is-uppercase has-text-weight-bold is-size-4">мы пользуемся только профессиональной техникой</h4>
		
<!--
		<div class='carousel carousel-animated carousel-animate-slide' data-size="4" data-autoplay="true">
			<div class='carousel-container'>
				<div class='carousel-item is-active'>
					<figure class="image is-2by1"><img src="https://bulma.io/images/placeholders/640x320.png"></figure>
				</div>
				<div class='carousel-item'>
					<figure class="image is-2by1"><img src="https://bulma.io/images/placeholders/640x320.png"></figure>
				</div>
				<div class='carousel-item'>
					<figure class="image is-2by1"><img src="https://bulma.io/images/placeholders/640x320.png"></figure>
				</div>
				<div class='carousel-item'>
					<figure class="image is-2by1"><img src="https://bulma.io/images/placeholders/640x320.png"></figure>
				</div>
				<div class='carousel-item'>
					<figure class="image is-2by1"><img src="https://bulma.io/images/placeholders/640x320.png"></figure>
				</div>
				<div class='carousel-item'>
					<figure class="image is-2by1"><img src="https://bulma.io/images/placeholders/640x320.png"></figure>
				</div>
				<div class='carousel-item'>
					<figure class="image is-2by1"><img src="https://bulma.io/images/placeholders/640x320.png"></figure>
				</div>
			</div>
			<div class="carousel-navigation is-centered is-overlay">
				<div class="carousel-nav-left">
					<i class="fa fa-play fa-rotate-180" aria-hidden="true"></i>
				</div>
				<div class="carousel-nav-right">
					<i class="fa fa-play" aria-hidden="true"></i>
				</div>
			</div>
-->
			
		</div>
	</section>

	<section class="section has-background-white-bis portfolio">
		<div class="container">
			<div class="columns has-padding is-centered">
				<div class="column is-two-thirds is-narrow center">
					<h3 class="title is-uppercase is-2 is-underlined is-size-2">
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include", 
							".default", 
							array(
								"COMPONENT_TEMPLATE" => ".default",
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/inc/block3_h.php",
								"EDIT_TEMPLATE" => ""
							),
							false
						);?>
					</h3><br><br>
					<p class="is-size-7">
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include", 
							".default", 
							array(
								"COMPONENT_TEMPLATE" => ".default",
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/inc/block3_p.php",
								"EDIT_TEMPLATE" => ""
							),
							false
						);?>
					</p>
				</div>
			</div>
			<div class="columns is-centered">
				<div class="column">
					<article class="media box has-no-round">
						<div class="media-left">
							<div class="has-text-centered">
								<div>
									<p class="heading">июль</p>
									<p class="subtitle">2014</p>
								</div>
							</div>
						</div>
						<figure class="media-left">
							<p class="image">
								<img src="/img/dengoroda.jpg" alt="СЛАВЯНКА - День города">
							</p>
						</figure>
						<div class="media-content">
							<div class="content">
								<p><strong>СЛАВЯНКА - День города</strong></p>
								<p class="mobile">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
								</p>
							</div>
							<nav class="level is-mobile has-text-red">
								<div class="level-left">
									<a class="level-item">
										<span class="icon is-small"><i class="fa fa-reply"></i></span>
									</a>
									<a class="level-item">
										<span class="icon is-small"><i class="fa fa-retweet"></i></span>
									</a>
									<a class="level-item">
										<span class="icon is-small"><i class="fa fa-heart"></i></span>
									</a>
								</div>
							</nav>
						</div>
					</article>
					<article class="media box has-no-round">
						<div class="media-left">
							<div class="has-text-centered">
								<div>
									<p class="heading">март</p>
									<p class="subtitle">2014</p>
								</div>
							</div>
						</div>
						<figure class="media-left">
							<p class="image">
								<img src="/img/worldclass.jpg" alt="WORLD CLASS - 5 лет">
							</p>
						</figure>
						<div class="media-content">
							<div class="content">
								<p><strong>WORLD CLASS - 5 лет</strong></p>
								<p class="mobile">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
								</p>
							</div>
							<nav class="level is-mobile has-text-red">
								<div class="level-left">
									<a class="level-item">
										<span class="icon is-small"><i class="fa fa-reply"></i></span>
									</a>
									<a class="level-item">
										<span class="icon is-small"><i class="fa fa-retweet"></i></span>
									</a>
									<a class="level-item">
										<span class="icon is-small"><i class="fa fa-heart"></i></span>
									</a>
								</div>
							</nav>
						</div>
					</article>
					<article class="media box has-no-round">
						<div class="media-left">
							<div class="has-text-centered">
								<div>
									<p class="heading">ноябрь</p>
									<p class="subtitle">2014</p>
								</div>
							</div>
						</div>
						<figure class="media-left">
							<p class="image">
								<img src="/img/rage.jpg" alt="R.A.G.E ДКЖД - ВЛАДИВОСТОК">
							</p>
						</figure>
						<div class="media-content">
							<div class="content">
								<p><strong>R.A.G.E ДКЖД - ВЛАДИВОСТОК</strong></p>
								<p class="mobile">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
								</p>
							</div>
							<nav class="level is-mobile has-text-red">
								<div class="level-left">
									<a class="level-item">
										<span class="icon is-small"><i class="fa fa-reply"></i></span>
									</a>
									<a class="level-item">
										<span class="icon is-small"><i class="fa fa-retweet"></i></span>
									</a>
									<a class="level-item">
										<span class="icon is-small"><i class="fa fa-heart"></i></span>
									</a>
								</div>
							</nav>
						</div>
					</article>
				</div>
			</div>
		</div>				
	</section>
		<section class="section has-livebg">
		<nav class="level has-text-white has-text-weight-bold">
		  <div class="level-item has-text-centered">
		    <div>
		      <p class="heading">выполненных работ</p>
		      <p class="title has-text-white">3,456</p>
		    </div>
		  </div>
		  <div class="level-item has-text-centered">
		    <div>
		      <p class="heading">партнеров</p>
		      <p class="title has-text-white">123</p>
		    </div>
		  </div>
		  <div class="level-item has-text-centered">
		    <div>
		      <p class="heading">довольных клиентов</p>
		      <p class="title has-text-white">456K</p>
		    </div>
		  </div>
		  <div class="level-item has-text-centered">
		    <div>
		      <p class="heading">мероприятий</p>
		      <p class="title has-text-white">789</p>
		    </div>
		  </div>
		</nav>
	</section>

	<section class="section has-background-white-bis studio">
		<div class="container">
			<div class="columns has-padding is-centered">
				<div class="column is-two-thirds is-narrow center">
					<h3 class="title is-uppercase is-underlined is-size-2">
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include", 
							".default", 
							array(
								"COMPONENT_TEMPLATE" => ".default",
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/inc/block5_h.php",
								"EDIT_TEMPLATE" => ""
							),
							false
						);?>
					</h3>
					<p class="is-size-7"><?$APPLICATION->IncludeComponent(
							"bitrix:main.include", 
							".default", 
							array(
								"COMPONENT_TEMPLATE" => ".default",
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/inc/block5_p.php",
								"EDIT_TEMPLATE" => ""
							),
							false
						);?>
					</p>
				</div>
			</div>
			<div class="columns is-gapless">
				<a href="/studio/" title="Студия звукозаписи musicmen-dv">
                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image">
                                  <img src="/img/service1.jpg" alt="Студия звукозаписи">
                                </figure>
                            </div>
                            <div class="card-content is-overlay has-fixed-height center-column">
                                <p class="title s center is-uppercase"><mark>Студия звукозаписи</mark></p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/repetition/" title="Точки для репетиций musicmen-dv">
                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image">
                                  <img src="/img/service2.jpg" alt="Точки для репетиций">
                                </figure>
                            </div>
                            <div class="card-content is-overlay has-fixed-height center-column">
                                <p class="title has-text-white center is-uppercase"><mark>Точки для репетиций</mark></p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/groups/" title="Музыкальные группы blueslime">
                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image">
                                  <img src="/img/service3.jpg" alt="Музыкальные группы">
                                </figure>
                            </div>
                            <div class="card-content is-overlay has-fixed-height center-column">
                                <p class="title center is-uppercase"><mark>Музыкальные группы</mark></p>
                            </div>
                        </div>
                    </div>
                </a>
			</div>
		</div>
	</section>
	<section class="is-paddingless blueslime has-parallax">
		<div class="columns has-padding">
			<div class="column has-text-white">
				<h2 class="center title is-size-1"><mark>Группа Blueslime</mark></h2>
			</div>
		</div>
		<div class="columns has-padding">
			<div class="column center">
				<a class="button is-primary is-radiusless is-large has-livebg" href="https://www.google.com/calendar/embed?src=bluezlime%40gmail.com&ctz=Asia/Vladivostok" target="_blank"><b>Расписание выступлений</b></a>
			</div>
		</div>

	</section>
	<section class="section has-background-grey has-padding-bottom">
		<div class="columns">
		    <div class="column center">
		    	<p class="title has-text-white">Нужна консультация?</p>
		    </div>
		    <div class="column center">
		    	<input type="tel" class="input is-large is-radiusless is-danger" placeholder="Пишите телефон!"/>
		    </div>
		    <div class="column center">
		    	<a class="button has-livebg is-primary is-radiusless is-large" href="#">Перезвоните мне!</a>
		    </div>
		</div>
	</section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>