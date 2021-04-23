<?php

declare(strict_types=1);

namespace MageMastery\ShipmentAttributes\Model;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class AttributesCollection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Attributes::class, AttributesResource::class);
    }
}
