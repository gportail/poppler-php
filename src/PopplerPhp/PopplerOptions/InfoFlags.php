<?php

namespace GPortail\PopplerPhp\PopplerOptions;

use GPortail\PopplerPhp\Constants as C;

/**
 * Trait InfoFlags
 * @package GPortail\PopplerPhp\PopplerOptions
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
