<?php

namespace Cert\IncidentBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GenerePDFControllerTest extends WebTestCase
{
    public function testGenererpdf()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/genererpdf');
    }

}
