@extends('templates.base_template')
<!--Begin content-->

		@section('content')




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


<!---End content-->
		@endsection

