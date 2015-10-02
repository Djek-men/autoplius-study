<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Page;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('pagesTableSeeder');

        Model::reguard();
    }
};

class pagesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('pages')->delete();


        $pages= array(
            array('url'=>'contacts',
                'content'=>'Здесь содержатся контактные данные +123456789'),
            array('url'=>'global_find',
                'content'=>'Развернутый поиск авто')
        );

        DB::table('pages')->insert($pages); // вставляем массив


        Page::create(['url'=>'new_auto',
            'content'=>'Новые авто под заказ']);
        Page::create(['url'=>'about_us',
            'content'=>'Страничка о нас']);
        Page::create(['url'=>'used_auto',
            'content'=>'Б\У авто']);
        Page::create(['url'=>'my_find',
            'content'=>'Мой поиск']);
        Page::create(['url'=>'notes',
            'content'=>'Заметки. Сюда будут добавлены машины, помеченные пользователем, как отслеживаемые']);

    }
};

