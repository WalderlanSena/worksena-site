<?php

namespace Application\Controller;

use Application\Service\PackagistService;
use MVS\WorksenaMvc\AbstractActionController;

class ApplicationController extends AbstractActionController
{
    private $packagistService;

    public function __construct(PackagistService $packagistService)
    {
        $this->packagistService = $packagistService;
    }

    public function index()
    {
        $this->setPageTitle('Home');

        try {
            $response = $this->packagistService->findCountDownload();
        } catch (\Exception $exception) {}

        return $this->render('application.index', true, [
            'version'   => $response['version'],
            'downloads' => $response['downloads']
        ]);
    }
}