<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BoardTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->call('GET', '/');

        // $response->assertStatus(200);
        $this->assertEquals(200, $response->getStatusCode());
    }

    /** 中略　*/
    /**
     * 掲示板トップページの表示内容のテスト
     *
     * @return void
     */
    public function testIndex()
    {
        $this->visit('/boards')
        ->see('掲示板のテスト');
    }

}
