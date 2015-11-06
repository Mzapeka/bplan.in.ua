<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Бизнес планирование</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
<!--
    <script src="assets/js/jquery.js"></script>
-->
<!--	<script src="assets/js/Chart.js"></script>
-->	<script src="assets/js/modernizr.custom.js"></script>
      <script src="/js/bootstrap.min.js"></script>

	
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#theMenu">
		
	<!-- Menu -->
	<nav class="menu" id="theMenu">
		<div class="menu-wrap">
			<h1 class="logo"><a href="index.php#home">Жабинец & Co</a></h1>
			<i class="icon-remove menu-close"></i>
			<a href="#services" class="smoothScroll">Услуги</a>
			<a href="#portfolio" class="smoothScroll">Условия работы</a>
			<a href="#price" class="smoothScroll">Стоимость</a>
			<a href="#contact" class="smoothScroll">Контакты</a>
			<a href="#"><i class="icon-facebook"></i></a>
			<a href="#"><i class="icon-linkedin"></i></a>
			<a href="#"><i class="icon-vk"></i></a>
			<a href="#"><i class="icon-envelope"></i></a>
		</div>
		
		<!-- Menu button -->
		<div id="menuToggle"><i class="icon-reorder"></i></div>
	</nav>


	
	<!-- ========== HEADER SECTION ========== -->
	<section id="home" name="home"></section>
	<div id="headerwrap" class="jumbotron">
		<div class="container" id="jb">
			<br>
			<h1>Жабинец & Co</h1>
			<h2>Консультационные услуги в сфере планирования бизнеса</h2>
			<div class="row">
				<br>
				<br>
				<br>
				<div class="col-lg-6 col-lg-offset-3">
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /headerwrap -->
    <!-- ========== About us ========== -->
    <section id="about" name="about"></section>
    <div id="w">
        <div id="aboutme" class="container">
            <div class="row">
                <h3>ОБО МНЕ</h3>
                <br>

<!--
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lectus elit, tincidunt nec turpis sed, accumsan iaculis ipsum. Nulla at augue auctor, tristique erat in, ultricies nunc. Mauris eget metus leo. Ut in mi lacinia, mattis nisl non, ultrices risus. Vestibulum aliquet aliquam ipsum ut ullamcorper. Pellentesque fringilla, massa vel rutrum consequat, nulla velit fermentum dolor, sed scelerisque.</p>
                    <br>
                    <br>
                </div>
                <div class="col-lg-2"></div>
-->
                <!-- Текст -->
                <div class="col-lg-4 team">
                    <div class="im">
                        <h2>Жабинец Сергей Александрович</h2>
                        <h4><i>Опытный эксперт по разработке бизнес-планов международного класса</i></h4>
                        <br/>
                        <p>1 уровень международного профеcсионального сертификата от СFA Institute</p>
                        <br/>
                        <p>
                            <a href="index.php#"><i class="icon-facebook"></i></a>
                            <a href="index.php#"><i class="icon-linkedin"></i></a>
                            <a href="index.php#"><i class="icon-vk"></i></a>
                            <a href="index.php#"><i class="icon-envelope"></i></a>

                        </p>
                    </div>
                </div>
                <!-- Фото -->
                <div class="col-lg-4 team">
                    <br/>
                    <img class="img-rounded" src="/assets/img/foto2.jpg" height="300" width="215">
                </div>

                <!-- Форма с контактами -->
                <div class="col-lg-4 team">
                    <div class="im" id="queryF">
                        <h4>Здесь Вы можете задать мне любой вопрос</h4>
                        <form class="form-horizontal" role="form" method="post" action="start.php" id="question">
                            <div class="form-group">
                                <div class="input-group" id="name1">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <input type="text" name="userName" class="form-control" id="name" placeholder="Ваше имя" required="">
                                </div>
                            </div>
                            <div class="form-group" id="phone1">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></span>
                                    <input type="text" name="userPhone" class="form-control" id="phone" placeholder="Ваш телефон" required="">
                                </div>
                            </div>
                            <div class="form-group" id="sd1">
                                <textarea class="form-control" name="userText" id="sd" rows="6" placeholder="Ваш вопрос"
                                          data-toggle="tooltip" data-placement="left" title="Підказка ліворуч"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" id="sendForm" class="form-control" value="Отправить" style="background-color: #f85c37; color: #ffffff"
                                       />
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div><!-- /container -->
    </div><!-- /g -->
	
	<!-- ========== WHITE SECTION ========== -->
	<div id="g">
		<div class="container">
			<div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4">
                       <div class="advant">
                           <p>Более 10 лет в сфере финансов и инвестиций</p>
                       </div>
                </div>
                <div class="col-lg-1 col-md-2 col-sm-2">
                       <div class="plus">
                           <h1>+</h1>
                       </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4">
                       <div class="advant">
                           <p>Десятки бизнес-планов в различных отраслях экономики</p>
                       </div>
                </div>
                <div class="col-lg-1 col-md-2 col-sm-2">
                    <div class="plus">
                        <h1>+</h1>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-4">
                       <div class="advant">
                           <p>Гарантийная поддержка готовых бизнес-планов</p>
                       </div>
                </div>
                <div class="col-lg-1 col-md-2 col-sm-2">
                    <div class="plus">
                        <h1>=</h1>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                       <div class="advant">
                           <h2>Ваш финансовый результат!</h2>
                       </div>
                </div>

                <!--
                                <h3>WELCOME TO <bold>ONASSIS</bold>. <bold>A FREE BOOTSTRAP 3</bold> THEME. CRAFTED WITH LOVE BY <bold>BLACKTIE.CO</bold>. <br/>
                                    <bold>IDEAL FOR</bold> AGENCIES & FREELANCERS.
                                </h3>
                -->
			</div>
		</div><!-- /container -->
	</div><!-- /w -->



	<!-- ========== SERVICES - GREY SECTION ========== -->
	<section id="services" name="services"></section>
	<div id="w">
		<div class="container">
			<div class="row">
				<h3>МОИ УСЛУГИ</h3>
				<br>
				<br>
				<div class="col-lg-4">
					<img src="/assets/img/icon/keynote-on-icon.png">
					<h4>Подготовка бизнес-плана</h4>
                    <br/>
					<p>Использую международные нормы и стандарты.</p>
                    <p>Язык бизнес-плана - английский, украинский, русский.</p>
				</div>
				<div class="col-lg-4">
					<img src="/assets/img/icon/numbers-white-icon.png">
					<h4>Подготовка инвестиционного меморандума</h4>
					<p>Вы можете сами выбрать структуру и глубину предоставления информации.
                    В результате получите документ, который можно презентовать инвесторам, не раскрыв при этом конфиденциальную
                    информацию о предприятии.</p>
				</div>
				<div class="col-lg-4">
                    <img src="/assets/img/icon/pages-brown-icon.png">
					<h4>Другие услуги</h4>
                    <br/>
                    <ul class="services">
                        <li>
                            Анализ рынка;
                        </li>
                        <li>
                            Консультации при получении кредита (в отечественных банках, ЕБРР);
                        </li>
                        <li>
                            Консультации при реструктуризации кредита;
                        </li>
                        <li>
                            Помощь в привлечении зарубежных инвестиций;
                        </li>
                        <li>
                            Подготовка финансовой модели.
                        </li>
                    </ul>
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /g -->
	
	<!-- ========== CHARTS - DARK GREY SECTION ========== -->
	<div id="dg">
		<div class="container">
			<div class="row">
				<h3>ПОЧЕМУ ВЫБИРАЮТ МОИ УСЛУГИ</h3>
				<br>
				<br>
				<div class="col-lg-4">
                    <img class="img-circle" src="/assets/img/meetting1.png">
					<br>
					<h4>Качество предоставляемых услуг подтверждено многолетним опытом и деловой репутацией</h4>
					<br>
				</div>
				<div class="col-lg-4">
                    <img class="img-circle" src="/assets/img/hands1.png">
                    <br>
                    <h4>Предлагаю приемлемые цены и гибкие схемы оплаты</h4>
                    <br>
				</div>
				<div class="col-lg-4">
                    <img class="img-circle" src="/assets/img/garant.jpg">
                    <br>
                    <h4>В рамках сервисного обслуживания я доработаю бизнес-план под Ваши потребности</h4>
				</div>
			
			</div>	
		</div><!-- /container -->
	</div><!-- /dg -->
	
	<section id="portfolio" name="portfolio"></section>
	<div id="portfoliowrap">
		<div class="container">
			<div class="row">
				<h3>КАК Я РАБОТАЮ</h3>
				<br>
				<br>
                <div class="col-lg-2 col-md-2">
                    <div class="work">
                        <div class="row">
                            <div class="col-sm-12">
                                <img src="/assets/img/icon/Business-Collaboration-icon_wite.png">
                            </div>
                            <br/>
                            <div class="col-sm-12">
                            <p>Вам нужна помощь</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1">
                    <div class="srt">
                        <h1><span class="glyphicon glyphicon-hand-right hidden-sm hidden-xs"></span></h1>
                        <h1><span class="glyphicon glyphicon-hand-down hidden-lg hidden-md"></span></h1>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2">
                    <div class="work">
                        <div class="row">
                            <div class="col-sm-12">
                                <img src="/assets/img/icon/Handshake-icon_wite.png">
                            </div>
                            <br/>
                            <div class="col-sm-12">
                                <p>Договариваемся об объеме работ и стоимости</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1">
                    <div class="str">
                        <h1><span class="glyphicon glyphicon-hand-right hidden-sm hidden-xs"></span></h1>
                        <h1><span class="glyphicon glyphicon-hand-down hidden-lg hidden-md"></span></h1>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2">
                    <div class="work">
                        <div class="row">
                            <div class="col-sm-12">
                                <img src="/assets/img/icon/Business-Answers-icon_wite.png">
                            </div>
                            <br/>
                            <div class="col-sm-12">
                                <p>Подписываем договор</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1">
                    <div class="str">
                        <h1><span class="glyphicon glyphicon-hand-right hidden-sm hidden-xs"></span></h1>
                        <h1><span class="glyphicon glyphicon-hand-down hidden-lg hidden-md"></span></h1>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3">
                    <div class="row">
                        <div class="work">
                            <div class="col-sm-12">
                                <img src="/assets/img/icon/Business-Briefcase-2-icon_wite.png">
                            </div>
                            <br/>
                            <div class="col-sm-12">
                                <p>Решаем Ваш вопрос</p>
                            </div>
                        </div>
                    </div>
                </div>
			</div>	
		</div><!-- /container -->
	</div><!-- /portfoliowrap -->
	
	<!-- ========== WHITE SECTION ========== -->
	<div id="w">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
                    <h2 style="color: #d2322d">ВАЖНО!</h2>
				<h3>ПОСЛЕ ПЕРЕДАЧИ ВАМ ГОТОВОГО БИЗНЕС-ПЛАНА, НА ПРОТЯЖЕНИИ 1 МЕСЯЦА ОСУЩЕСТВЛЯЮ
                    <bold>ГАРАНТИЙНОЕ ОБСЛУЖИВАНИЕ</bold>, В ПРОЦЕССЕ КОТОРОГО ДЕЛАЮ ДОРАБОТКИ, ПЕРЕСЧИТЫВАЮ ДАННЫЕ
                    ПО ВАШЕМУ ЗАПРОСУ.
				</h3>
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /w -->
	
	<!-- ========== ABOUT - GREY SECTION ========== -->
	<section id="price" name="about"></section>
	<div id="g">
		<div class="container">
			<div class="row">
				<h3>СТОИМОСТЬ УСЛУГ</h3>
				<br>
				<div class="col-lg-1"></div>
				<div class="col-lg-10">
                    <ul class="list-style price">
                        <li><h3>Подготовка бизнес-плана - <span class="priceItem">от 5000грн.</span></h3></li>
                        <li><h3>Подготовка инвестиционного меморандума - <span class="priceItem">от 2000грн.</span></h3></li>
                        <li><h3>Анализ рынка - <span class="priceItem">от 2000грн.</span></h3></li>
                        <li><h3>Консультации по кредитованию - <span class="priceItem">от 1000грн.</span></h3></li>
                        <li><h3>Консультации по реструктуризации кредитной задолженности - <span class="priceItem">от 1000грн.</span></h3></li>
                        <li><h3>Подготовка финансовой модели - <span class="priceItem">от 1000грн.</span></h3></li>
                        <li><h3>Помощь в поиске инвесторов, контрагентов зарубежом - <span class="priceItem">договорная.</span></h3></li>
                    </ul>
				<br>
                    <h2><span class="priceItem">Акция! Позвоните до <?
                        $month = [
                        '1' => "31 января",
                        '2' => "29 февраля",
                        '3' => "31 марта",
                        '4' => "30 апреля",
                        '5' => "31 мая",
                        '6' => "30 июня",
                        '7' => "31 июля",
                        '8' => "31 августа",
                        '9' => "30 сентября",
                        '10' => "31 октября",
                        '11' => "30 ноября",
                        '12' => "31 декабря",
                        ];
                        echo ($month[date("n")]);?>
                        включительно и получите скидку 10%</span></h2>
				</div>


            </div>
		</div><!-- /container -->
	</div><!-- /g -->
	
	<!-- ========== FOOTER SECTION ========== -->
	<section id="contact" name="contact"></section>
	<div id="f">
		<div class="container">
			<div class="row">
					<h3><b>КАК СО МНОЙ СВЯЗАТЬСЯ</b></h3>
					<br>
					<div class="col-lg-4">
						<h3><b>Написать:</b></h3>
						<h3>sergii.zhabynets@gmail.com</h3>
						<br>
					</div>
					
					<div class="col-lg-4">	
						<h3><b>Позвонить:</b></h3>
						<h3>+38 (098) 449-7712</h3>
						<br>
					</div>
					
					<div class="col-lg-4">
						<h3><b>Социальные сети:</b></h3>
						<p>
							<a href="index.php#"><i class="icon-facebook"></i></a>
							<a href="index.php#"><i class="icon-linkedin"></i></a>
                            <a href="index.php#"><i class="icon-vk"></i></a>
                            <a href="index.php#"><i class="icon-envelope"></i></a>

						</p>
						<br>
					</div>
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /f -->
	
	<div id="c">
		<div class="container">
			<p>Created by <a href="#">Mykola Zapeka</a></p>
		
		</div>
	</div>
	
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/js/classie.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>
