<?php

namespace Daric\SilasJoisten\Sonata\MultiUploadBundle\Tests\Admin;

use PHPUnit\Framework\TestCase;
use Daric\SilasJoisten\Sonata\MultiUploadBundle\Admin\MultiUploadAdminExtension;
use Daric\SilasJoisten\Sonata\MultiUploadBundle\Tests\Fixture\Admin\FakeAdmin;
use Sonata\AdminBundle\Model\AuditManager;
use Sonata\AdminBundle\Route\PathInfoBuilder;
use Sonata\AdminBundle\Security\Handler\NoopSecurityHandler;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Routing\Route;

class MultiUploadAdminExtensionTest extends TestCase
{
    public function testConfigureRoutes(): void
    {
        $admin = new FakeAdmin();
        $admin->setRouteBuilder(new PathInfoBuilder(new AuditManager(new Container())));
        $admin->setSecurityHandler(new NoopSecurityHandler());

        $extension = new MultiUploadAdminExtension();
        $extension->configureRoutes($admin, $admin->getRoutes());

        self::assertInstanceOf(Route::class, $admin->getRoutes()->get('multi_upload'));
    }
}
