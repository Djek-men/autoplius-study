<?php

use Illuminate\Database\Seeder;

class CarsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('cars')->delete();
        $cars= array(
            array('user_id'=>'2',
                'description'=>'Иногда вам может быть нужно применить фильтры к набору маршрутов.
                Вместо того, чтобы указывать их для каждого маршрута в отдельности вы можете сгруппировать маршруты',
                'marke'=>'mazda',
                'model'=>'626',
                'price'=>'550'),
            array('user_id'=>'3',
                'description'=>'Из-за того, что мы ранее привязали параметр {user} к модели App\User, то её экземпляр будет передан в маршрут.
                Таким образом, к примеру, запрос profile/1 передаст объект User, который соответствует ID 1, полученному из БД.',
                'marke'=>'subaru',
                'model'=>'impreza',
                'price'=>'1200'),
            array('user_id'=>'1',
                'description'=>'Если вы хотите задать свой собственный обработчик для события "не найдено", вы можете передать функцию-замыкание в метод model:',
                'marke'=>'audi',
                'model'=>'tt',
                'price'=>'1330'),
            array('user_id'=>'1',
                'description'=>'Привязка моделей - удобный способ передачи экземпляров классов в ваш роут.
                Например, вместо передачи ID пользователя вы можете передать модель User, которая соответствует данному ID, целиком.
                Для начала используйте метод route в RouteServiceProvider::boot для указания класса, который должен быть внедрён.',
                'marke'=>'nissan',
                'model'=>'micro',
                'price'=>'700'),
            array('user_id'=>'2',
                'description'=>'otdel-devsite.ru/laravel-5-аутентификация/О блоге. 01.09.2015 / Laravel ... А авторизация — это проверка ваших прав.
                 Имеете ли права .... Теперь, надо проверить, как это работает. Но как мы ..',
                'marke'=>'mitsubishi',
                'model'=>'eclipse',
                'price'=>'2400'),
            array('user_id'=>'3',
                'description'=>'Группа роутов может быть зарегистрирована с одним префиксом без его явного указания с помощью ключа prefix в параметрах группы',
                'marke'=>'mercedes',
                'model'=>'w221',
                'price'=>'1650'),
            array('user_id'=>'2',
                'description'=>'Чтобы не писать полный неймспейс к каждому контроллеру, вы можете использовать параметр namespace в группе:',
                'marke'=>'opel',
                'model'=>'cadett',
                'price'=>'1000')
        );
        DB::table('cars')->insert($cars); // вставляем массив
    }
}
