<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressRegistrationNumbers
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
     * VAT: Value-Added tax<BR>      EIN: Employer Identification Number<BR>      GST: Goods and Service Tax<BR>      SSN: Social Security Number<BR>      EOR: European Union Registration and Identification<BR>      DUN: Data Universal Numberin System<BR>      FED: Federal Tax ID<BR>      STA: State Tax ID<BR>      CNP: Brazil CNPJ/CPF Federal Tax<BR>      IE: Brazil type IE/RG Federal Tax<BR>      INN: Russia bank details section INN<BR>      KPP: Russia bank details section KPP<BR>      OGR: Russia bank details section OGRN<BR>      OKP: Russia bank details section OKPO<BR>      SDT: Overseas Registered Supplier or Import One-Stop-Shop or GB VAT (foreign) registration or AUSid GST Registration or VAT on E-Commerce<BR>      FTZ: Free Trade Zone ID<BR>      DAN: Deferment Account Duties Only<BR>      TAN: Deferment Account Tax Only<BR>      DTF: Deferment Account Duties, Taxes and Fees Only<BR>      RGP: EU Registered Exporters registration ID<BR>       DLI: Driver's License <BR>      NID: National Identity Card<BR> PAS: Passport<BR> MID: Manufacturer ID<BR>IMS: UK Internal Market Scheme<BR> Note: 'IMS' code will be available in Production by the end of March 2025.
     *
     * @var string
     */
    protected $typeCode = 'VAT';
    /**
     * Please enter registration number
     *
     * @var string
     */
    protected $number;
    /**
     * Please enter 2 character code of the country where the Registration Number has been issued by
     *
     * @var string
     */
    protected $issuerCountryCode;
    /**
     * VAT: Value-Added tax<BR>      EIN: Employer Identification Number<BR>      GST: Goods and Service Tax<BR>      SSN: Social Security Number<BR>      EOR: European Union Registration and Identification<BR>      DUN: Data Universal Numberin System<BR>      FED: Federal Tax ID<BR>      STA: State Tax ID<BR>      CNP: Brazil CNPJ/CPF Federal Tax<BR>      IE: Brazil type IE/RG Federal Tax<BR>      INN: Russia bank details section INN<BR>      KPP: Russia bank details section KPP<BR>      OGR: Russia bank details section OGRN<BR>      OKP: Russia bank details section OKPO<BR>      SDT: Overseas Registered Supplier or Import One-Stop-Shop or GB VAT (foreign) registration or AUSid GST Registration or VAT on E-Commerce<BR>      FTZ: Free Trade Zone ID<BR>      DAN: Deferment Account Duties Only<BR>      TAN: Deferment Account Tax Only<BR>      DTF: Deferment Account Duties, Taxes and Fees Only<BR>      RGP: EU Registered Exporters registration ID<BR>       DLI: Driver's License <BR>      NID: National Identity Card<BR> PAS: Passport<BR> MID: Manufacturer ID<BR>IMS: UK Internal Market Scheme<BR> Note: 'IMS' code will be available in Production by the end of March 2025.
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * VAT: Value-Added tax<BR>      EIN: Employer Identification Number<BR>      GST: Goods and Service Tax<BR>      SSN: Social Security Number<BR>      EOR: European Union Registration and Identification<BR>      DUN: Data Universal Numberin System<BR>      FED: Federal Tax ID<BR>      STA: State Tax ID<BR>      CNP: Brazil CNPJ/CPF Federal Tax<BR>      IE: Brazil type IE/RG Federal Tax<BR>      INN: Russia bank details section INN<BR>      KPP: Russia bank details section KPP<BR>      OGR: Russia bank details section OGRN<BR>      OKP: Russia bank details section OKPO<BR>      SDT: Overseas Registered Supplier or Import One-Stop-Shop or GB VAT (foreign) registration or AUSid GST Registration or VAT on E-Commerce<BR>      FTZ: Free Trade Zone ID<BR>      DAN: Deferment Account Duties Only<BR>      TAN: Deferment Account Tax Only<BR>      DTF: Deferment Account Duties, Taxes and Fees Only<BR>      RGP: EU Registered Exporters registration ID<BR>       DLI: Driver's License <BR>      NID: National Identity Card<BR> PAS: Passport<BR> MID: Manufacturer ID<BR>IMS: UK Internal Market Scheme<BR> Note: 'IMS' code will be available in Production by the end of March 2025.
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
     * Please enter registration number
     *
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }
    /**
     * Please enter registration number
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * Please enter 2 character code of the country where the Registration Number has been issued by
     *
     * @return string
     */
    public function getIssuerCountryCode(): string
    {
        return $this->issuerCountryCode;
    }
    /**
     * Please enter 2 character code of the country where the Registration Number has been issued by
     *
     * @param string $issuerCountryCode
     *
     * @return self
     */
    public function setIssuerCountryCode(string $issuerCountryCode): self
    {
        $this->initialized['issuerCountryCode'] = true;
        $this->issuerCountryCode = $issuerCountryCode;
        return $this;
    }
}