<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\BlogPost;
class DeletePostTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use DatabaseTransactions;
    public function testDeletePost(){
        $post = BlogPost::factory()->create();
        $response = $this->get(route('posts.show',['post'=>$post->id]));
        $response->assertStatus(200);
        $response= $this->post(route('posts.destroy',['post'=>$post->id]),[
            '_method'=>'DELETE'
        ]);
        $response->assertStatus(302);
        $this->assertDatabaseMissing('blogpost', [
            'title'=>'Где я',
            'content'=>'Ничего не ясно'
        ]);
        $response->assertStatus(302);
    }
}
