# Shipment Attributes

An example of the Magento 2 extension that adds Extension Attributes to a Shipment document.

Example response from the http://domain-name/rest/V1/shipment/1 endpoint:

```json
{
    "billing_address_id": 2,
    "created_at": "2021-04-23 08:25:38",
    "entity_id": 1,
    "increment_id": "000000001",
    "order_id": 1,
    "extension_attributes": {
        "source_code": "default",
        "carrier": "Carrier 1",
        "delivery_date": "2021-12-31",
        "cost": "20.03"
    }
}
```
## Installation

Navigate to a Magento 2 installation directory and execute the following commands:
```
composer config repositories.magemastery_shipment_attributes git https://github.com/mcspronko/shipment-extension-attributes
composer require magemastery/shipment-extension-attributes:dev-main
bin/magento module:enable MageMastery_ShipmentAttributes
bin/magento setup:upgrade
```

## MageMastery

Learn Magento 2 at our [Mage Mastery](https://magemastery.net) website.
