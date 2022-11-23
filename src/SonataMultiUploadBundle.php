<?php

declare(strict_types=1);

namespace Daric\SilasJoisten\Sonata\MultiUploadBundle;

use Daric\SilasJoisten\Sonata\MultiUploadBundle\DependencyInjection\Compiler\MultiUploadCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SonataMultiUploadBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new MultiUploadCompilerPass());
    }
}
