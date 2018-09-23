<?php

namespace Application\Controller;

use Application\Service\Interfaces\PackagistServiceInterface;
use MVS\WorksenaMvc\AbstractActionController;

class ApplicationController extends AbstractActionController
{
    private $packagistService;

    public function __construct(PackagistServiceInterface $packagistService)
    {
        $this->packagistService = $packagistService;
    }

    public function index()
    {
        $this->setPageTitle('Home');

        try {
            $response = $this->packagistService->findCountDownload();
        } catch (\Exception $exception) {}

        return $this->render('application.index', [
            'version'   => $response['version'],
            'downloads' => $response['downloads']
        ]);
    }
}