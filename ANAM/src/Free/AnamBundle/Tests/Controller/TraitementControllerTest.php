<?php

namespace Free\AnamBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TraitementControllerTest extends WebTestCase
{
    public function testImporter()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/importer');
    }

    public function testExporter()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/exporter');
    }

    public function testControle()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/controle');
    }

}
