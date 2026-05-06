<?php

namespace App\Enums;

enum SiteMenu: string
{
    case Home = 'home';
    case TheFund = 'the-fund';
    case InvestmentVehicles = 'investment-vehicles';
    case InvestorMaterials = 'investor-materials';
    case GovernanceServiceProviders = 'governance-service-providers';
//    case PlatformGroupCompanies = 'platform-group-companies';
//    case SfdrSustainability = 'sfdr-sustainability';
//    case ContactUs = 'contact-us';

    public function label(): string
    {
        return match ($this) {
            self::Home => 'Home',
            self::TheFund => 'The Fund',
            self::InvestmentVehicles => 'Investment Vehicles',
            self::InvestorMaterials => 'Investor Materials',
            self::GovernanceServiceProviders => 'Governance & Service Providers',
            self::PlatformGroupCompanies => 'Platform & Group Companies',
            self::SfdrSustainability => 'SFDR & Sustainability Disclosures',
            self::ContactUs => 'Contact',
        };
    }

    public function route(): string
    {
        return route($this->value);
    }
}
