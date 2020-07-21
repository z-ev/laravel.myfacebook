<?php

namespace Tests\Feature;
use App\Post;
use App\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;

/** @test */
class PostToTimelineTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_post_a_text_post()
    {
        $this->withoutExceptionHandling();
       $this->actingAs($user = factory(User::class)->create(), 'api');
       $response = $this->post('/api/posts', [
           'data' => [
               'type' => 'posts',
               'attributes' => [
                   'body' => 'Testing body',
               ]
           ]
       ]);
         $post = Post::first();
        $this->assertCount(1, Post::all());
       $this->assertEquals($user->id, $post->user_id);
        $this->assertEquals('Testing body', $post->body);
       $response->assertStatus(201)
       ->assertJson([
           'data' => [
               'type' => 'posts',
               'post_id' => $post->id,
               'attributes' => [
                   'posted_by' => ['data' => ['attributes' => ['name' => $user->name]]],
                   'body' => 'Testing body',
               ]],
           'links' => [
                'self' => url('/posts/'.$post->id),
           ]

       ]);

    }
}
