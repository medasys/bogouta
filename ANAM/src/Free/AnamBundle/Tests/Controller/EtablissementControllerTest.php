<?php

namespace Free\AnamBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EtablissementControllerTest extends WebTestCase
{
    public function testAjouter()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ajouter');
    }

    public function testModifier()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/modifier');
    }

    public function testVoir()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/voir');
    }

    public function testLister()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/lister');
    }

}
