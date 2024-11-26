<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetails
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
     * 
     *
     * @var SupermodelIoLogisticsExpressAddress
     */
    protected $postalAddress;
    /**
     * 
     *
     * @var SupermodelIoLogisticsExpressContact
     */
    protected $contactInformation;
    /**
     * Please enter the business party type of the ultimate consignee
     *
     * @var string
     */
    protected $typeCode;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressRegistrationNumbers>
     */
    protected $registrationNumbers;
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressAddress
     */
    public function getPostalAddress(): SupermodelIoLogisticsExpressAddress
    {
        return $this->postalAddress;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressAddress $postalAddress
     *
     * @return self
     */
    public function setPostalAddress(SupermodelIoLogisticsExpressAddress $postalAddress): self
    {
        $this->initialized['postalAddress'] = true;
        $this->postalAddress = $postalAddress;
        return $this;
    }
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressContact
     */
    public function getContactInformation(): SupermodelIoLogisticsExpressContact
    {
        return $this->contactInformation;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressContact $contactInformation
     *
     * @return self
     */
    public function setContactInformation(SupermodelIoLogisticsExpressContact $contactInformation): self
    {
        $this->initialized['contactInformation'] = true;
        $this->contactInformation = $contactInformation;
        return $this;
    }
    /**
     * Please enter the business party type of the ultimate consignee
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * Please enter the business party type of the ultimate consignee
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
     * 
     *
     * @return list<SupermodelIoLogisticsExpressRegistrationNumbers>
     */
    public function getRegistrationNumbers(): array
    {
        return $this->registrationNumbers;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressRegistrationNumbers> $registrationNumbers
     *
     * @return self
     */
    public function setRegistrationNumbers(array $registrationNumbers): self
    {
        $this->initialized['registrationNumbers'] = true;
        $this->registrationNumbers = $registrationNumbers;
        return $this;
    }
}