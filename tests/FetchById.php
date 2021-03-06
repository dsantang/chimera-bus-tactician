<?php
declare(strict_types=1);

namespace Lcobucci\Chimera\Bus\Tactician\Tests;

final class FetchById
{
    /**
     * @var int
     */
    public $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }
}
