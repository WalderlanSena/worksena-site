<?php
/**
 * Created by PhpStorm.
 * User: Walderlan Sena <senawalderlan@gmail.com>
 * Date: 23/09/18
 * Time: 02:05
 */

namespace Application\Service;

use Application\Repository\Interfaces\PackagistRepositoryInterface;
use Application\Service\Interfaces\PackagistServiceInterface;

class PackagistService implements PackagistServiceInterface
{
    private $packagistRepository;

    public function __construct(PackagistRepositoryInterface $packagistRepository)
    {
        $this->packagistRepository = $packagistRepository;
    }

    /**
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \Exception
     */
    public function findCountDownload()
    {
        try {
            $response = $this->packagistRepository->findCountDownload();
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }

        $version      = (array) $response->package->versions;
        $versionFinal = '';
        $i            = 0;

        foreach ($version as $key => $value) {
            $i++;
            if ($i == 2) {
                $versionFinal = $value->version;
            }
        }

        return [
            'downloads' => $response->package->downloads->total,
            'version'   => $versionFinal
        ];
    }
}