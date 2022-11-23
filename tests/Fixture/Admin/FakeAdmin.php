<?php

declare(strict_types=1);

namespace Daric\SilasJoisten\Sonata\MultiUploadBundle\Tests\Fixture\Admin;

use Daric\SilasJoisten\Sonata\MultiUploadBundle\Tests\Fixture\Entity\Fake;
use Sonata\AdminBundle\Admin\AbstractAdmin;

/**
 * @internal
 */
final class FakeAdmin extends AbstractAdmin
{
    protected $code = self::class;
    protected $class = Fake::class;
    protected $baseControllerName = '';

    public function __construct()
    {
        parent::__construct($this->code, $this->class, $this->baseControllerName);
    }
}
