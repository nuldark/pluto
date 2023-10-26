<?php

namespace Nulldark\Tests\Stubs;

use Nulldark\ORM\Mapping\Annotations;

#[Annotations\Entity]
#[Annotations\Table(name: 'users')]
class User
{
    #[Annotations\Id()]
    #[Annotations\Column(name: 'id')]
    public int $id;

    #[Annotations\Column(name: 'name')]
    public string $name;
}
