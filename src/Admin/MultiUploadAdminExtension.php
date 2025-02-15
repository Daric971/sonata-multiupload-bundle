<?php

declare(strict_types=1);

namespace Daric\SilasJoisten\Sonata\MultiUploadBundle\Admin;

use Daric\SilasJoisten\Sonata\MultiUploadBundle\Controller\CreateController;
use Daric\SilasJoisten\Sonata\MultiUploadBundle\Controller\MultiUploadController;
use Sonata\AdminBundle\Admin\AbstractAdminExtension;
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Route\RouteCollectionInterface;

final class MultiUploadAdminExtension extends AbstractAdminExtension
{
    public function configureRoutes(AdminInterface $admin, RouteCollectionInterface $collection): void
    {
        $collection->add('multi_upload', 'multi-upload', [
            '_controller' => sprintf('%s::multiUpload', MultiUploadController::class),
        ]);

        $collection
            ->get('create')
            ->setDefault('_controller', sprintf('%s::createAction', CreateController::class));
    }
}
