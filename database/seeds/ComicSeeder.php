<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics_db.cards');

        foreach($comics as $comic){
            $_comic= new Comic();
            $_comic->title=$comic['title'];
            $_comic->description=$comic['description'];
            $_comic->thumb=$comic['thumb'];
            $_comic->price=$comic['price'];
            $_comic->series=$comic['series'];
            $_comic->sale_date=$comic['sale_date'];
            $_comic->type=$comic['type'];
            $_comic->save();
        }
    }
}
