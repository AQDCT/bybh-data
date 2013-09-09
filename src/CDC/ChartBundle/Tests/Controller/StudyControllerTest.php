<?php

namespace CDC\ChartBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class StudyControllerTest extends WebTestCase
{
    public function testGetallstudies()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/studies');
    }

    public function testGet()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/study/{id}');
    }

}
