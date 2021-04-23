<?php

declare(strict_types=1);

namespace MageMastery\ShipmentAttributes\Api;

use MageMastery\ShipmentAttributes\Api\Data\AttributesInterface;

/**
 * @api
 */
interface ManagementInterface
{

    /**
     * @param int $shipmentId
     * @return AttributesInterface
     */
    public function getByShipmentId(int $shipmentId): AttributesInterface;
}
