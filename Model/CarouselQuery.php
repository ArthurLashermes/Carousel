<?php

/*
 * This file is part of the Thelia package.
 * http://www.thelia.net
 *
 * (c) OpenStudio <info@thelia.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Carousel\Model;

use Carousel\Model\Base\CarouselQuery as BaseCarouselQuery;

/**
 * Skeleton subclass for performing query and update operations on the 'carousel' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class CarouselQuery extends BaseCarouselQuery
{
    public function findAllByPosition()
    {
        return $this->orderByPosition()
            ->find();
    }
} // CarouselQuery
