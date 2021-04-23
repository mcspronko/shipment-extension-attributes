<?php

declare(strict_types=1);

namespace MageMastery\ShipmentAttributes\Model;

use Magento\Framework\Model\AbstractModel;
use MageMastery\ShipmentAttributes\Api\Data\AttributesInterface;

class Attributes extends AbstractModel implements AttributesInterface
{
    public const CARRIER = 'carrier';
    public const COST = 'cost';
    public const DELIVERY_DATE = 'delivery_date';
    public const SHIPMENT_ID = 'shipment_id';

    protected function _construct()
    {
        $this->_init(AttributesResource::class);
    }

    /**
     * @return int
     */
    public function getShipmentId(): int
    {
        return (int) $this->getData(self::SHIPMENT_ID);
    }

    /**
     * @return string
     */
    public function getCarrier(): string
    {
        return (string) $this->getData(self::CARRIER);
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return (float) $this->getData(self::COST);
    }

    /**
     * @return string
     */
    public function getDeliveryDate(): string
    {
        return (string) $this->getData(self::DELIVERY_DATE);
    }
}
