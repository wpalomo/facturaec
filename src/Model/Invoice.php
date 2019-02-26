<?php

namespace PabloVeintimilla\FacturaEC\Model;

use JMS\Serializer\Annotation as JMSSerializer;

/**
 * Invoice model (Factura).
 *
 * @JMSSerializer\ExclusionPolicy("all")
 * @JMSSerializer\XmlRoot("factura")
 * 
 * @author Pablo Veintimilla Vargas <pabloveintimilla@gmail.com>
 */
class Invoice extends Voucher
{
    /**
     * @var float
     *
     * @JMSSerializer\Expose
     * @JMSSerializer\Type("float")
     * @JMSSerializer\SerializedName("propina")
     */
    private $tip;
    /**
     * @var float
     *
     * @JMSSerializer\Expose
     * @JMSSerializer\Type("float")
     * @JMSSerializer\SerializedName("totalDescuento")
     */
    private $discount;
    /**
     * @var float
     *
     * @JMSSerializer\Expose
     * @JMSSerializer\Type("float")
     * @JMSSerializer\SerializedName("totalSinImpuestos")
     */
    private $subtotal;
    /**
     * @var Tax{]
     *
     * @JMSSerializer\Expose
     * @JMSSerializer\Type("array<PabloVeintimilla\FacturaEC\Model\Tax>")
     * @JMSSerializer\SerializedName("totalConImpuestos")
     * @JMSSerializer\XmlList(entry = "totalImpuesto")
     */
    private $tax;

    /**
     * Overwrite details property of parent class to define serialization /
     * deserialization.
     *
     * @JMSSerializer\Expose
     * @JMSSerializer\Type("array<PabloVeintimilla\FacturaEC\Model\InvoiceDetail>")
     * @JMSSerializer\SerializedName("detalles")
     * @JMSSerializer\XmlList(entry = "detalle")
     *
     * @return Detail[]
     */
    protected $details;
}
