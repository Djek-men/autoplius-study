<!DOCTYPE html>
<html>
    <head>
		<meta charset='utf-8'>
        <title>Autoplius.by</title>
		<meta name='description' content='auto'>
		<meta name='keywords' content='auto'>
		<link href='{{asset("media/bootstrap/css/bootstrap.min.css")}}' rel="stylesheet" type="text/css">
        <link href='{{asset("media/css/style.css")}}' rel="stylesheet" type="text/css">
    </head>
    <body>
	<div class="container">

        <div id='header'>
				<div id="banner" class="border">

				</div>
				<div id="header-small" class="border col-md-8">
					<div>

						<div id="header-top" class="header-line">
							<a href="#" class="logo"><img src="media/img/logo.gif" /></a>
							<span class="portal">Портал транспортных объявлений</span>

							<div class="btn-group fr">
								<button class="btn">Logo 1</button>
								<button class="btn">Logo 2</button>
							</div>
						</div>

						<div class="clear"></div>

						<nav>

							<div id="header-middle" class="header-line divBlue">

								<div class="btn-group">
									<button class="btn  btn-small"><strong>Б/У Авто</strong></button>
									<button class="btn  btn-small"><strong>Новые авто</strong></button>
								</div>


								<div class="btn-group fr">
									<button class="btn  btn-small"><strong>Войти</strong></button>
									<button class="btn  btn-small"><strong>Зарегистрироваться</strong></button>
								</div>
							</div>

							<div class="clear"></div>

							<div id="header-bottom" class="header-line">
								<div class="btn-group">
									<button class="btn btn-small"><strong>Детальный поиск</strong></button>
									<button class="btn btn-small"><strong>Мой поиск</strong></button>
									<button class="btn btn-small"><strong>Мои заметки</strong></button>
								</div>
							</div>
						</nav>

					</div>
				</div>
		</div>



		<div id="banners" class="banners col-md-4 border">
			<div id="right-banner1" class="border  right-banner">
			</div>

			<div id="right-banner2" class="border  right-banner">
			</div>

			<div id="right-banner3" class="border  right-banner">
			</div>
		</div>

<!--Begin content-->
		<div id="content" class='col-md-8' style="padding-left: 0px; padding-right: 0px">


			<div class="main border">

				<div class="border main_top">

					<!--begin left container-->
					<div class="border container_left">

						<div class="border" style="float: left"><strong>Быстрый поиск</strong></div>
						<div class="border" style="float: left"><strong>Подать объявление</strong></div>
						<div class="clear"></div>

						<div class="form-seach" id="Form">
							<div class="fast_search_step1">
								<label for="category">Категория</label>
								<table>
									<tr>
										<td class="first"> <select name="category" id="cats_search_1" class="textbox"> </select></td>
										<td class="last"> <select name="category" id="cats_search_2" class="textbox" style="display: none"> </select></td>
										<td class="last"> <select name="category" id="cats_search_3" class="textbox" style="display: none"> </select></td>
										<td class="last"> <select name="category" id="cats_search_4" class="textbox" style="display: none"> </select></td>

									</tr>
								</table>
							</div>

							<div class="fl search_side">
								<label>Марка</label>
								<select id="make_id" class="textbox"> </select>
							</div>

							<div class="fr search_side">
								<label>Модель</label>
								<select id="model_id" class="textbox"> </select>
							</div>
							<div class="clear" ></div>

							<div class="forms_block fl">
								<div class="fl rel">
									<label>Год от</label>
									<select class="textbox"></select>
								</div>
								<div class="fr rel">
									<label>Год до</label>
									<select class="textbox"></select>
								</div>
							</div>



							<div class="forms_block fr">
								<div class="fl rel">
									<label>Цена от</label>
									<select class="textbox"></select>
								</div>

								<div class="fr rel">
									<label>Цена до</label>
									<select class="textbox"></select>
								</div>
							</div>

							<div class="clear" ></div>

							<div class="fl search_side">
								<label>Тип топлива</label>
								<select id="make_id" class="textbox"> </select>
							</div>

							<div class="fr search_side">
								<label>Объявления не старше</label>
								<select id="model_id" class="textbox"> </select>
							</div>

							<div class="clear" ></div>

							<div class="fl search_side">
								<label>Текстовый поиск</label>
								<input type="text" name="find_words" class="textbox"/>
							</div>
						</div>

						<div class="fr fast-search-nav">
							<a href="#" class="fr"><span class="border btn_find glyphicon glyphicon-search">Найти</span></a>
							<a href="#" class="link_detail"><span class="border">Детальный поиск</span></a>
						</div>

						<div class="clear"></div>

					</div>
					<!--end left container-->


					<!-- container centr-->
					<div class="border container_centr">
						<ul>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>

					<!--end centr container-->


					<!--begin container right-->
					<div class="border container_right">
						<h1>Каталог автомобилей</h1>
					</div>

					<!--end right container-->
					<div class="clear"></div>

				</div>



			</div>

		</div>
<!---End content->


		<div id='footer' class="border col-md-8">
		</div>



	</div>



    </body>
</html>