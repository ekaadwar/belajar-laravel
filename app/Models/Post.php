<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Eka Fajhari Adwar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quia autem excepturi doloribus inventore voluptate ex, eligendi esse voluptatum possimus eaque facere. Laudantium, assumenda animi odio molestias eligendi soluta tempora explicabo deleniti placeat aliquid quas dicta magnam. Ex tenetur nesciunt reiciendis consequuntur! A aut, rem modi itaque ea dicta iure nostrum. Quam id totam consequatur! Consequatur quae natus consequuntur pariatur deleniti consectetur recusandae debitis aliquam, iste nesciunt temporibus, sequi illo officiis aliquid dicta animi assumenda magnam iusto distinctio neque culpa."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sandika Galih",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam dolores facilis totam quod expedita, architecto, dolor cum impedit repudiandae tempore voluptatem nisi quia, odio modi nemo debitis eaque iusto. Cum reiciendis doloremque deleniti eligendi atque veritatis temporibus, reprehenderit esse magni nesciunt totam eos, itaque minima fugit impedit! Repudiandae assumenda sunt error vitae debitis, facere quaerat accusantium delectus consequatur officiis! Velit, iste id dignissimos voluptatum accusamus quae molestiae quidem sed, laborum optio sequi ex obcaecati ratione quod. Unde, quasi! Sunt, quos aut adipisci veniam dolores consequuntur neque error libero consectetur mollitia repellendus iusto vel voluptas nostrum quidem harum minus itaque sapiente?"
        ],
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-ketiga",
            "author" => "Eka Fajhari Adwar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, dolores! Deleniti libero qui illum nobis eos at? Corrupti sint dolor inventore et dignissimos dolorem accusantium. Illum sunt architecto nesciunt vel, incidunt quia aperiam voluptas soluta aspernatur qui reiciendis fuga quidem accusamus sequi maiores voluptatibus voluptates totam ea quas sapiente repudiandae. Voluptate optio rerum possimus id recusandae beatae molestiae eum suscipit aliquam sequi! Ad perspiciatis voluptatum dolores mollitia voluptatem id sint cumque quibusdam est tenetur nobis saepe aut fugit blanditiis explicabo eligendi nesciunt, minima nulla excepturi reiciendis expedita quasi? Amet fugiat magnam praesentium vel, voluptatibus modi? Delectus possimus minima iste voluptates magnam vitae aliquam, velit quaerat quod non adipisci libero nulla ex facere reprehenderit vero dignissimos, qui enim officia fugiat perferendis!"
        ],
    ];

    public static function all(){
        return self::$blog_posts;
    }

    public static function find($slug){
        $posts = self::$blog_posts;
        $post = [];
        foreach($posts as $p){
            if($p["slug"]===$slug){
                $post = $p;
            };
        }
        return $post;
    }
}
