<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = new \App\Blog();
        $blog->title = "TOi thay hoa vang tren co xanh";
        $blog->author = "Nguyen Van Khoi";
        $blog->content = "Khoi love";
        $blog->save();

        $blog = new \App\Blog();
        $blog->title = "TOi thay hoa vang tren co xanh";
        $blog->author = "Nguyen Van Khoi2";
        $blog->content = "Khoi love2";
        $blog->save();

        $blog = new \App\Blog();
        $blog->title = "TOi thay hoa vang tren co xanh";
        $blog->author = "Nguyen Van Khoi3";
        $blog->content = "Khoi love3";
        $blog->save();
    }
}
