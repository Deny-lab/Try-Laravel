<?php

namespace App\Models;

class Post 
{
    private static $blog_post =  [
        [
            'title' => "First Post",
            'slug' => 'first-post',
            'author' => "Deny F",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quod totam consectetur, praesentium assumenda iste explicabo. 
            Repellendus expedita fugit aliquam magni veniam, autem vero, dolorum ipsam tempora, accusantium hic. Perferendis!" 
        ],
    
        [
            'title' => "Second Post",
            'slug' => 'second-post',
            'author' => "Deny F",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Dolore asperiores rem quo iure doloribus minima quis perferendis vero laborum maxime enim quaerat doloremque id officia odio, nulla quisquam. 
            Cumque placeat illum libero numquam! Rerum molestias, in at corporis sit consequatur velit sunt enim? Modi facilis ut deleniti esse soluta nihil eum. 
            Magni, cum. Quod consectetur dicta earum minima architecto fuga error doloribus, autem neque ex deserunt maxime nemo omnis, 
            deleniti mollitia accusamus veniam ad libero officiis sed obcaecati ipsum odit ab at! 
            Culpa, quasi nobis ut nostrum magni quam tempora nulla quod molestias, at placeat praesentium voluptas sit. Deserunt, sunt." 
        ],
    
    
        ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];

        //  foreach ($posts as $p) {
        //     if($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts -> firstWhere('slug', $slug);
    }
}
