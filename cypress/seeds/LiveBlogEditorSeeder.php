<?php

use WP_Cypress\Seeder\Seeder;
use WP_Cypress\Fixtures;

class LiveBlogEditorSeeder extends Seeder {
    public function run() {
        $user = new Fixtures\User([
            'role' => 'editor',
            'user_login' => 'livebloguser1',
            'user_pass' => 'password',
            'display_name' => $this->faker->name(),
            'first_name' => $this->faker->firstName(),
            'user_meta' => [
                'live_blog_editorial_ui' => 1,
                'wp_capabilities' => 'a:10:{s:6:"editor";b:1;s:15:"view_live_blogs";b:1;s:14:"read_live_blog";b:1;s:14:"edit_live_blog";b:1;s:15:"edit_live_blogs";b:1;s:21:"edit_other_live_blogs";b:1;s:25:"edit_published_live_blogs";b:1;s:18:"publish_live_blogs";b:1;s:23:"read_private_live_blogs";b:1;s:16:"delete_live_blog";b:1;}'
            ]
        ]);
        $user->create(1);
    }
}
