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

        return $this->render('documentation.init', true, [
            'version'   => $response['version']
        ]);
    }

    public function module()
    {
        $this->setPageTitle('Modulo');

        try {
            $response = $this->packagistService->findCountDownload();
        } catch (\Exception $exception) {}

        return $this->render('documentation.modulo', true, [
            'version'   => $response['version']
        ]);
    }

    public function route()
    {
        $this->setPageTitle('Rotas');

        try {
            $response = $this->packagistService->findCountDownload();
        } catch (\Exception $exception) {}

        return $this->render('documentation.route', true, [
            'version'   => $response['version']
        ]);
    }
}