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
                'content'=>'Здесь содержатся контактные данные'),
            array('url'=>'global_find',
                'content'=>'Развернутый поиск авто'),
            array('url'=>'registration',
                'content'=>'Добро пожаловать')
        );

        DB::table('pages')->insert($pages); // вставляем массив

        Page::create(['url'=>'main',
            'content'=>'Главная']);
        Page::create(['url'=>'new_auto',
            'content'=>'Новые авто под заказ']);
        Page::create(['url'=>'about_us',
            'content'=>'Страничка о нас']);

    }
};

