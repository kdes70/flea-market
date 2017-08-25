<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['parent_id' => 0, 'slug' => str_slug('Продукты питания, напитки'), 'name' => 'Продукты питания, напитки'],
            ['parent_id' => 0, 'slug' => str_slug('Электроника, бытовая техника'), 'name' => 'Электроника, бытовая техника'],
            ['parent_id' => 0, 'slug' => str_slug('Одежда, обувь, текстиль'), 'name' => 'Одежда, обувь, текстиль'],
            ['parent_id' => 0, 'slug' => str_slug('Товары для детей, игрушки'), 'name' => 'Товары для детей, игрушки'],
            ['parent_id' => 0, 'slug' => str_slug('Мебель, интерьер'), 'name' => 'Мебель, интерьер'],
            ['parent_id' => 0, 'slug' => str_slug('Строительство и ремонт'), 'name' => 'Строительство и ремонт'],
            ['parent_id' => 0, 'slug' => str_slug('Хозтовары, бытовая химия'), 'name' => 'Хозтовары, бытовая химия'],
            ['parent_id' => 0, 'slug' => str_slug('Подарки, сувениры'), 'name' => 'Подарки, сувениры'],
            ['parent_id' => 0, 'slug' => str_slug('Украшения, драгоценности'), 'name' => 'Украшения, драгоценности'],
            ['parent_id' => 0, 'slug' => str_slug('Косметика, гигиена'), 'name' => 'Косметика, гигиена'],
            ['parent_id' => 0, 'slug' => str_slug('Медицина, здоровье'), 'name' => 'Медицина, здоровье'],
            ['parent_id' => 0, 'slug' => str_slug('Авто, мото'), 'name' => 'Авто, мото'],
            ['parent_id' => 0, 'slug' => str_slug('Спорт, охота, туризм'), 'name' => 'Спорт, охота, туризм'],
            ['parent_id' => 0, 'slug' => str_slug('Книги, печатная продукция'), 'name' => 'Книги, печатная продукция'],
            ['parent_id' => 0, 'slug' => str_slug('Музыка, живопись, искусство'), 'name' => 'Музыка, живопись, искусство'],
            ['parent_id' => 0, 'slug' => str_slug('Музыка, живопись, искусство'), 'name' => 'Музыка, живопись, искусство'],
            ['parent_id' => 0, 'slug' => str_slug('Животные и растения'), 'name' => 'Животные и растения'],
            ['parent_id' => 0, 'slug' => str_slug('Товары для дома и сада'), 'name' => 'Товары для дома и сада'],
            ['parent_id' => 0, 'slug' => str_slug('Промышленное оборудование'), 'name' => 'Промышленное оборудование'],
            ['parent_id' => 0, 'slug' => str_slug('Сырье и материалы'), 'name' => 'Сырье и материалы'],
            ['parent_id' => 0, 'slug' => str_slug('Услуги'), 'name' => 'Услуги'],
            ['parent_id' => 0, 'slug' => str_slug('Другое'), 'name' => 'Другое'],
        ]);

    }
}
