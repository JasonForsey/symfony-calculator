<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CalculatorControllerTest extends WebTestCase
{
    public function testCalculator()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/calculator');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Calculator', $crawler->filter('#container h1')->text());
    }
}
