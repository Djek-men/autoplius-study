   <div id="header-small">

       <div>

						<div id="header-top" class="header-line">
							<a href="{{asset('/')}}" class="logo"><img src="{{asset('media/img/logo.gif')}}" /></a>
							<span class="portal">Портал транспортных объявлений</span>

							<div class="btn-group fr">
								<a href="{{asset('contacts')}}"> <button class="btn"><strong>Контакты</strong></button></a>
								<a href="{{asset('about_us')}}"> <button class="btn"><strong>О нас</strong></button></a>
							</div>
						</div>

						<div class="clear"></div>

						<nav>

							<div id="header-middle" class="divBlue">

								<div class="btn-group">
									<a href="{{asset('used_auto')}}"><button class="btn  btn-small"><strong>Б/У Авто</strong></button></a>
									<a href="{{asset('new_auto')}}"><button class="btn  btn-small"><strong>Новые авто</strong></button></a>
								</div>

								@if (Auth::check())
									
									<div class="btn-group fr">
									<strong>{{Auth::user()->name}}</strong>
										<a href="{{asset('cabinet')}}"><button class="btn  btn-small"><strong>Личный кабинет</strong></button></>
										<a href="{{asset('auth/logout')}}"><button class="btn  btn-small"><strong>Выйти</strong></button></a>
									</div>
									@else
								<div class="btn-group fr">
									<a href="{{asset('auth/login')}}"><button class="btn  btn-small"><strong>Войти</strong></button></>
									<a href="{{asset('auth/register')}}"><button class="btn  btn-small"><strong>Зарегистрироваться</strong></button></a>
								</div>
									@endif
							</div>

							<div class="clear"></div>

							<div id="header-bottom" class="header-line">
								<div class="btn-group">
									<a href="{{asset('global_find')}}"> <button class="btn btn-small"><strong>Детальный поиск</strong></button></a>
									<a href="{{asset('my_find')}}"> <button class="btn btn-small"><strong>Мой поиск</strong></button></a>
									<a href="{{asset('notes')}}"> <button class="btn btn-small"><strong>Мои заметки</strong></button></a>
								</div>
							</div>
						</nav>

       </div>
   </div>