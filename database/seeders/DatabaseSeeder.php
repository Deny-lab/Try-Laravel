<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Post::factory(20)->create();
        
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);

        Category::create([
            'name' => 'Web-Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        // User::create([
        //     'name' => 'Deny Febriawan',
        //     'email' => 'denyfebriawan@gmail.com',
        //     'password' => bcrypt('qwerty')
        // ]);
        // User::create([
        //     'name' => 'Bima',
        //     'email' => 'bima@gmail.com',
        //     'password' => bcrypt('qwerty')
        // ]);
        // User::create([
        //     'name' => 'Amel',
        //     'email' => 'amel@gmail.com',
        //     'password' => bcrypt('qwerty')
        // ]);
        // User::create([
        //     'name' => 'Balqiz',
        //     'email' => 'balqiz@gmail.com',
        //     'password' => bcrypt('qwerty')
        // ]);
        // User::create([
        //     'name' => 'Ayu',
        //     'email' => 'ayu@gmail.com',
        //     'password' => bcrypt('qwerty')
        // ]);


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem pertama',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis suscipit vitae facere. Nulla quibusdam reprehenderit temporibus. Inventore, nihil aspernatur corrupti debitis vel quae fugiat, tenetur unde odit expedita ducimus quasi.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem kedua',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis explicabo ratione minus minima unde enim, nemo aliquid amet voluptatem tempora, praesentium tempore veritatis labore quaerat sequi autem aspernatur quisquam eius fuga ut perspiciatis ipsam? Ipsam incidunt provident minus aliquam cupiditate, ipsa voluptas reiciendis magni fugiat quidem praesentium neque fugit ratione reprehenderit tempore est aspernatur consequuntur unde perferendis deserunt. Illum numquam, ducimus officia aspernatur beatae expedita reiciendis nobis harum, impedit, deleniti aliquid earum iusto. Illum similique atque excepturi quaerat dolor? Vitae, velit laboriosam enim, aliquid tempore magni dolor doloribus veniam dignissimos dolorem officia alias, nesciunt nam placeat libero! Praesentium, sequi eveniet.</p>'

        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 3,
        //     'user_id' => 3,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ketiga',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias recusandae fugiat assumenda consequuntur corporis sunt inventore quisquam ex odit, enim, aperiam labore rerum, deserunt impedit reprehenderit magnam itaque iure quia animi. Dolorem quisquam dolores voluptas nulla voluptatem excepturi architecto laborum repellat dolore tempore optio aut, porro inventore suscipit error soluta hic esse in vero voluptatum modi temporibus harum nam. Non minus corrupti, velit autem sed voluptatum soluta quasi qui iure ea reiciendis quibusdam facere debitis nisi ullam laborum voluptates enim et deserunt possimus praesentium asperiores! Doloremque, tenetur quae quasi nemo, at voluptatum corporis iste cum impedit dolorum magnam voluptatem, vero porro? Doloribus, iste aliquam non tenetur dolor dignissimos ipsum, numquam laudantium quae, nesciunt nemo aliquid beatae ea repellendus praesentium quia.</p>'
        // ]);
    }
}
