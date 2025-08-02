<?php

namespace Gportail\PopplerPhp\PopplerOptions;

use Gportail\PopplerPhp\Constants as C;

/**
 * Trait InfoFlags
 * @package gportail\PopplerPhp\PopplerOptions
 */
trait InfoFlags
{
    /**
     * @return mixed
     */
    public function setBox()
    {
        return $this->setFlag(C::_BOX);
    }

    /**
     * @return array
     */
    protected function infoFlags()
    {
        return [C::_BOX];
    }
}
