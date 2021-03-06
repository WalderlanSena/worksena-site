<?php
/**
 * Created by PhpStorm.
 * User: Walderlan Sena <senawalderlan@gmail.com>
 * Date: 23/09/18
 * Time: 02:51
 */

namespace Documentation\Controller;

use Application\Service\PackagistService;
use MVS\WorksenaMvc\AbstractActionController;

class DocumentationInitController extends AbstractActionController
{
    private $packagistService;

    public function __construct(PackagistService $packagistService)
    {
        $this->packagistService = $packagistService;
    }

    public function init()
    {
        $this->setPageTitle('Documentação');
        try {
            $response = $this->packagistService->findCountDownload();
        } catch (\Exception $exception) {}

        return $this->render('documentation.init', [
            'version'   => $response['version']
        ]);
    }

    public function module()
    {
        $this->setPageTitle('Modulo');

        try {
            $response = $this->packagistService->findCountDownload();
        } catch (\Exception $exception) {}

        return $this->render('documentation.modulo', [
            'version'   => $response['version']
        ]);
    }

    public function route()
    {
        $this->setPageTitle('Rotas');

        try {
            $response = $this->packagistService->findCountDownload();
        } catch (\Exception $exception) {}

        return $this->render('documentation.route', [
            'version'   => $response['version']
        ]);
    }

    public function controller()
    {
        $this->setPageTitle('Controller');

        try {
            $response = $this->packagistService->findCountDownload();
        } catch (\Exception $exception) {}

        return $this->render('documentation.controller', [
            'version'   => $response['version']
        ]);
    }

    public function dependency()
    {
        $this->setPageTitle('Injeção de Dependência');

        try {
            $response = $this->packagistService->findCountDownload();
        } catch (\Exception $exception) {}

        return $this->render('documentation.dependency', [
            'version'   => $response['version']
        ]);
    }

}