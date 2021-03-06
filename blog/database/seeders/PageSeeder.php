<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = ["Hakkımızda", "Kariyer", "Vizyonumuz", "Misyonumuz"];
        $count = 0;
        foreach ($pages as $page) {
            $count++;
            DB::table("pages")->insert([
                "title" => $page,
                "slug" => Str::slug($page),
                "image" => "https://access2eic.eu/wp-content/uploads/2020/09/ma4rket.jpg",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dapibus, nisl et semper
                            ullamcorper, odio purus bibendum dui, quis consequat enim nisl sed risus. Pellentesque feugiat accumsan
                            nulla, eu pharetra tortor malesuada eu. Sed quis quam molestie, laoreet nisi molestie, egestas nunc.
                            Nam quis pharetra orci. Ut cursus velit sed orci interdum pharetra. Morbi nec leo dictum mauris
                            fermentum vulputate ac vel nisl. Duis tempor facilisis nunc, vel posuere leo luctus eget. Nulla sit
                            amet leo nec mauris fermentum pellentesque. Sed dapibus nunc vitae mi egestas placerat at ac metus.
                            Proin accumsan eros non congue mollis.Fusce sodales lorem eget metus tempus sollicitudin.",
                "order" => $count,
                "created_at" => now(),
                "updated_at" => now()
            ]);
        }
    }
}
