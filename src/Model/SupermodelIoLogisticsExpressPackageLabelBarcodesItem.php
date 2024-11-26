<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressPackageLabelBarcodesItem
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Position of the bespoke barcode
     *
     * @var string
     */
    protected $position;
    /**
     * Please enter valid Symbology code
     *
     * @var string
     */
    protected $symbologyCode;
    /**
     * Please enter barcode content
     *
     * @var string
     */
    protected $content;
    /**
     * Please enter text below customer barcode
     *
     * @var string
     */
    protected $textBelowBarcode;
    /**
     * Position of the bespoke barcode
     *
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }
    /**
     * Position of the bespoke barcode
     *
     * @param string $position
     *
     * @return self
     */
    public function setPosition(string $position): self
    {
        $this->initialized['position'] = true;
        $this->position = $position;
        return $this;
    }
    /**
     * Please enter valid Symbology code
     *
     * @return string
     */
    public function getSymbologyCode(): string
    {
        return $this->symbologyCode;
    }
    /**
     * Please enter valid Symbology code
     *
     * @param string $symbologyCode
     *
     * @return self
     */
    public function setSymbologyCode(string $symbologyCode): self
    {
        $this->initialized['symbologyCode'] = true;
        $this->symbologyCode = $symbologyCode;
        return $this;
    }
    /**
     * Please enter barcode content
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
    /**
     * Please enter barcode content
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
    /**
     * Please enter text below customer barcode
     *
     * @return string
     */
    public function getTextBelowBarcode(): string
    {
        return $this->textBelowBarcode;
    }
    /**
     * Please enter text below customer barcode
     *
     * @param string $textBelowBarcode
     *
     * @return self
     */
    public function setTextBelowBarcode(string $textBelowBarcode): self
    {
        $this->initialized['textBelowBarcode'] = true;
        $this->textBelowBarcode = $textBelowBarcode;
        return $this;
    }
}