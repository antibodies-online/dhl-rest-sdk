<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesItem
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
     * Please provide type of the license
     *
     * @var string
     */
    protected $typeCode;
    /**
     * Please provide the license
     *
     * @var string
     */
    protected $value;
    /**
     * Please provide type of the license
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * Please provide type of the license
     *
     * @param string $typeCode
     *
     * @return self
     */
    public function setTypeCode(string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;
        return $this;
    }
    /**
     * Please provide the license
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Please provide the license
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}