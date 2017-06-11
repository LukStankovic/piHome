<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SmartHomeControllerTest extends WebTestCase
{
    public function testLed()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/led');
    }

}
