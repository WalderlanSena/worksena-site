<?php
/**
 * --- WorkSena - Micro Framework ---
 * @license https://github.com/WalderlanSena/worksena/blob/master/LICENSE (MIT License)
 * @copyright © 2013-2018 - @author Walderlan Sena <walderlan@worksena.xyz>
 */

namespace Config\Autoload;

use Application\Repository\Interfaces\PackagistRepositoryInterface;
use Application\Repository\PackagistRepository;
use Application\Service\Interfaces\PackagistServiceInterface;
use Application\Service\PackagistService;

return [
    'di' => [
        PackagistService::class     => PackagistServiceInterface::class,
        PackagistRepository::class  =>  PackagistRepositoryInterface::class,
    ],
];