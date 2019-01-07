<?php
/**
 * This file is part of the Billbee API package.
 *
 * Copyright 2017 - 2019 by Billbee GmbH
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 *
 * Created by Julian Finkler <julian@mintware.de>
 */

namespace BillbeeDe\BillbeeAPI\Model;

use MintWare\DMM\DataField;

class InvoiceDocument
{
    /**
     * @var string
     * @DataField(name="OrderNumber", type="string")
     */
    public $orderNumber;

    /**
     * @var string
     * @DataField(name="InvoiceNumber", type="string")
     */
    public $invoiceNumber;

    /**
     * @var string
     * @DataField(name="PDFData", type="string")
     */
    public $pdfData;

    /**
     * @var \DateTime
     * @DataField(name="InvoiceDate", type="datetime")
     */
    public $invoiceDate;

    /**
     * @var float
     * @DataField(name="TotalGross", type="float")
     */
    public $totalGross;

    /**
     * @var float
     * @DataField(name="TotalNet", type="float")
     */
    public $totalNet;

    /**
     * @var string
     * @DataField(name="PdfDownloadUrl", type="string")
     */
    public $pdfDownloadUrl;
}
