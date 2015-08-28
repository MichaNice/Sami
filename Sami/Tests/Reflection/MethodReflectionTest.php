<?php

namespace Sami\Tests\Reflection;

use Sami\Reflection\MethodReflection;

class MethodReflectionTest extends \PHPUnit_Framework_TestCase
{
    public function testSetGetModifiers()
    {
        $method = new MethodReflection('foo', 0);
        $method->setModifiers(0);
        $this->assertTrue($method->isPublic());

        $method->setModifiers(MethodReflection::MODIFIER_PUBLIC);
        $this->assertTrue($method->isPublic());

        $method->setModifiers(MethodReflection::MODIFIER_PROTECTED);
        $this->assertTrue($method->isProtected());

        $method->setModifiers(MethodReflection::MODIFIER_PRIVATE);
        $this->assertTrue($method->isPrivate());
    }
}
