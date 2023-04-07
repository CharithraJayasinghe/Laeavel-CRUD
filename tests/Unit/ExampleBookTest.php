<?php

namespace Tests\Unit;


use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleBookTest extends TestCase
{
    use RefreshDatabase;
    public function test_book_can_be_added_to_the_library()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/books',[
           'title' => 'book title',
           'author' => 'victor',
       ]);

        $response->assertOk();
        $response->assertStatus(200);
        $this->assertCount(1,Book::all());
    }
}

