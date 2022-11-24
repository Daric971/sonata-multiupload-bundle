<?php

namespace Daric\Sonata\MultiUploadBundle\Tests\Controller;

use PHPUnit\Framework\TestCase;
use Daric\Sonata\MultiUploadBundle\Controller\MultiUploadController;
use Sonata\Doctrine\Model\ManagerInterface;

class MultiUploadControllerTest extends TestCase
{
    private $controller;

    protected function setUp()
    {
        $mediaManager = $this->createMock(ManagerInterface::class);
        $this->controller = new MultiUploadController($mediaManager);
    }

    public function testItIsInstantiable()
    {
        $this->assertNotNull($this->controller);
    }
}
