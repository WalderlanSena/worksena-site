<?php
/**
 * Created by PhpStorm.
 * User: Walderlan Sena <senawalderlan@gmail.com>
 * Date: 23/09/18
 * Time: 01:59
 */

namespace Application\Repository;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class PackagistRepository
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @throws \Exception
     */
    public function findCountDownload()
    {
        try {
            $response = $this->client->get("https://packagist.org/packages/mvs/worksena.json");
        } catch (ClientException $clientException) {
            throw new \Exception($clientException->getMessage());
        }

        $response = json_decode($response->getBody());

        return $response;
    }
}