<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostsControllerTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();

        $client->request('GET', '/posts/');
        $this->assertResponseIsSuccessful();
    }

    public function testNew(): void
    {
        $client = static::createClient();

        $client->request('GET', '/posts/new');
        $this->assertResponseIsSuccessful();
    }
}
