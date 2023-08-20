<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\BlogPost;
class CrudTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use DatabaseTransactions;

    public function testCreate()
    {
        $response = $this->get('/posts/create');
        $response->assertStatus(200);
        $response = $this->post(route('posts.store',[
            'title'=>'Погодите что?',
            'content'=>'Не понятно'
        ]));
        $response->assertStatus(302);
        $this->assertDatabaseHas('blogpost',[
        'title'=>'Погодите что?',
            'content'=>'Не понятно'
        ]);
    }
}
