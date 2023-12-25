<?php

declare(strict_types=1);

namespace EnumCountriesIso3166;

class CountryService
{
    public function alpha3(Country $country): CountryAlpha3
    {
        switch ($country) {
            case Country::AF:
                return CountryAlpha3::AFG;
            case Country::AL:
                return CountryAlpha3::ALB;
            case Country::DZ:
                return CountryAlpha3::DZA;
            case Country::AS:
                return CountryAlpha3::ASM;
            case Country::AD:
                return CountryAlpha3::AND;
            case Country::AO:
                return CountryAlpha3::AGO;
            case Country::AI:
                return CountryAlpha3::AIA;
            case Country::AQ:
                return CountryAlpha3::ATA;
            case Country::AG:
                return CountryAlpha3::ATG;
            case Country::AR:
                return CountryAlpha3::ARG;
            case Country::AM:
                return CountryAlpha3::ARM;
            case Country::AW:
                return CountryAlpha3::ABW;
            case Country::AU:
                return CountryAlpha3::AUS;
            case Country::AT:
                return CountryAlpha3::AUT;
            case Country::AZ:
                return CountryAlpha3::AZE;
            case Country::BS:
                return CountryAlpha3::BHS;
            case Country::BH:
                return CountryAlpha3::BHR;
            case Country::BD:
                return CountryAlpha3::BGD;
            case Country::BB:
                return CountryAlpha3::BRB;
            case Country::BY:
                return CountryAlpha3::BLR;
            case Country::BE:
                return CountryAlpha3::BEL;
            case Country::BZ:
                return CountryAlpha3::BLZ;
            case Country::BJ:
                return CountryAlpha3::BEN;
            case Country::BM:
                return CountryAlpha3::BMU;
            case Country::BT:
                return CountryAlpha3::BTN;
            case Country::BO:
                return CountryAlpha3::BOL;
            case Country::BQ:
                return CountryAlpha3::BES;
            case Country::BA:
                return CountryAlpha3::BIH;
            case Country::BW:
                return CountryAlpha3::BWA;
            case Country::BV:
                return CountryAlpha3::BVT;
            case Country::BR:
                return CountryAlpha3::BRA;
            case Country::IO:
                return CountryAlpha3::IOT;
            case Country::BN:
                return CountryAlpha3::BRN;
            case Country::BG:
                return CountryAlpha3::BGR;
            case Country::BF:
                return CountryAlpha3::BFA;
            case Country::BI:
                return CountryAlpha3::BDI;
            case Country::CV:
                return CountryAlpha3::CPV;
            case Country::KH:
                return CountryAlpha3::KHM;
            case Country::CM:
                return CountryAlpha3::CMR;
            case Country::CA:
                return CountryAlpha3::CAN;
            case Country::KY:
                return CountryAlpha3::CYM;
            case Country::CF:
                return CountryAlpha3::CAF;
            case Country::TD:
                return CountryAlpha3::TCD;
            case Country::CL:
                return CountryAlpha3::CHL;
            case Country::CN:
                return CountryAlpha3::CHN;
            case Country::CX:
                return CountryAlpha3::CXR;
            case Country::CC:
                return CountryAlpha3::CCK;
            case Country::CO:
                return CountryAlpha3::COL;
            case Country::KM:
                return CountryAlpha3::COM;
            case Country::CD:
                return CountryAlpha3::COD;
            case Country::CG:
                return CountryAlpha3::COG;
            case Country::CK:
                return CountryAlpha3::COK;
            case Country::CR:
                return CountryAlpha3::CRI;
            case Country::HR:
                return CountryAlpha3::HRV;
            case Country::CU:
                return CountryAlpha3::CUB;
            case Country::CW:
                return CountryAlpha3::CUW;
            case Country::CY:
                return CountryAlpha3::CYP;
            case Country::CZ:
                return CountryAlpha3::CZE;
            case Country::CI:
                return CountryAlpha3::CIV;
            case Country::DK:
                return CountryAlpha3::DNK;
            case Country::DJ:
                return CountryAlpha3::DJI;
            case Country::DM:
                return CountryAlpha3::DMA;
            case Country::DO:
                return CountryAlpha3::DOM;
            case Country::EC:
                return CountryAlpha3::ECU;
            case Country::EG:
                return CountryAlpha3::EGY;
            case Country::SV:
                return CountryAlpha3::SLV;
            case Country::GQ:
                return CountryAlpha3::GNQ;
            case Country::ER:
                return CountryAlpha3::ERI;
            case Country::EE:
                return CountryAlpha3::EST;
            case Country::SZ:
                return CountryAlpha3::SWZ;
            case Country::ET:
                return CountryAlpha3::ETH;
            case Country::FK:
                return CountryAlpha3::FLK;
            case Country::FO:
                return CountryAlpha3::FRO;
            case Country::FJ:
                return CountryAlpha3::FJI;
            case Country::FI:
                return CountryAlpha3::FIN;
            case Country::FR:
                return CountryAlpha3::FRA;
            case Country::GF:
                return CountryAlpha3::GUF;
            case Country::PF:
                return CountryAlpha3::PYF;
            case Country::TF:
                return CountryAlpha3::ATF;
            case Country::GA:
                return CountryAlpha3::GAB;
            case Country::GM:
                return CountryAlpha3::GMB;
            case Country::GE:
                return CountryAlpha3::GEO;
            case Country::DE:
                return CountryAlpha3::DEU;
            case Country::GH:
                return CountryAlpha3::GHA;
            case Country::GI:
                return CountryAlpha3::GIB;
            case Country::GR:
                return CountryAlpha3::GRC;
            case Country::GL:
                return CountryAlpha3::GRL;
            case Country::GD:
                return CountryAlpha3::GRD;
            case Country::GP:
                return CountryAlpha3::GLP;
            case Country::GU:
                return CountryAlpha3::GUM;
            case Country::GT:
                return CountryAlpha3::GTM;
            case Country::GG:
                return CountryAlpha3::GGY;
            case Country::GN:
                return CountryAlpha3::GIN;
            case Country::GW:
                return CountryAlpha3::GNB;
            case Country::GY:
                return CountryAlpha3::GUY;
            case Country::HT:
                return CountryAlpha3::HTI;
            case Country::HM:
                return CountryAlpha3::HMD;
            case Country::VA:
                return CountryAlpha3::VAT;
            case Country::HN:
                return CountryAlpha3::HND;
            case Country::HK:
                return CountryAlpha3::HKG;
            case Country::HU:
                return CountryAlpha3::HUN;
            case Country::IS:
                return CountryAlpha3::ISL;
            case Country::IN:
                return CountryAlpha3::IND;
            case Country::ID:
                return CountryAlpha3::IDN;
            case Country::IR:
                return CountryAlpha3::IRN;
            case Country::IQ:
                return CountryAlpha3::IRQ;
            case Country::IE:
                return CountryAlpha3::IRL;
            case Country::IM:
                return CountryAlpha3::IMN;
            case Country::IL:
                return CountryAlpha3::ISR;
            case Country::IT:
                return CountryAlpha3::ITA;
            case Country::JM:
                return CountryAlpha3::JAM;
            case Country::JP:
                return CountryAlpha3::JPN;
            case Country::JE:
                return CountryAlpha3::JEY;
            case Country::JO:
                return CountryAlpha3::JOR;
            case Country::KZ:
                return CountryAlpha3::KAZ;
            case Country::KE:
                return CountryAlpha3::KEN;
            case Country::KI:
                return CountryAlpha3::KIR;
            case Country::KP:
                return CountryAlpha3::PRK;
            case Country::KR:
                return CountryAlpha3::KOR;
            case Country::KW:
                return CountryAlpha3::KWT;
            case Country::KG:
                return CountryAlpha3::KGZ;
            case Country::LA:
                return CountryAlpha3::LAO;
            case Country::LV:
                return CountryAlpha3::LVA;
            case Country::LB:
                return CountryAlpha3::LBN;
            case Country::LS:
                return CountryAlpha3::LSO;
            case Country::LR:
                return CountryAlpha3::LBR;
            case Country::LY:
                return CountryAlpha3::LBY;
            case Country::LI:
                return CountryAlpha3::LIE;
            case Country::LT:
                return CountryAlpha3::LTU;
            case Country::LU:
                return CountryAlpha3::LUX;
            case Country::MO:
                return CountryAlpha3::MAC;
            case Country::MG:
                return CountryAlpha3::MDG;
            case Country::MW:
                return CountryAlpha3::MWI;
            case Country::MY:
                return CountryAlpha3::MYS;
            case Country::MV:
                return CountryAlpha3::MDV;
            case Country::ML:
                return CountryAlpha3::MLI;
            case Country::MT:
                return CountryAlpha3::MLT;
            case Country::MH:
                return CountryAlpha3::MHL;
            case Country::MQ:
                return CountryAlpha3::MTQ;
            case Country::MR:
                return CountryAlpha3::MRT;
            case Country::MU:
                return CountryAlpha3::MUS;
            case Country::YT:
                return CountryAlpha3::MYT;
            case Country::MX:
                return CountryAlpha3::MEX;
            case Country::FM:
                return CountryAlpha3::FSM;
            case Country::MD:
                return CountryAlpha3::MDA;
            case Country::MC:
                return CountryAlpha3::MCO;
            case Country::MN:
                return CountryAlpha3::MNG;
            case Country::ME:
                return CountryAlpha3::MNE;
            case Country::MS:
                return CountryAlpha3::MSR;
            case Country::MA:
                return CountryAlpha3::MAR;
            case Country::MZ:
                return CountryAlpha3::MOZ;
            case Country::MM:
                return CountryAlpha3::MMR;
            case Country::NA:
                return CountryAlpha3::NAM;
            case Country::NR:
                return CountryAlpha3::NRU;
            case Country::NP:
                return CountryAlpha3::NPL;
            case Country::NL:
                return CountryAlpha3::NLD;
            case Country::NC:
                return CountryAlpha3::NCL;
            case Country::NZ:
                return CountryAlpha3::NZL;
            case Country::NI:
                return CountryAlpha3::NIC;
            case Country::NE:
                return CountryAlpha3::NER;
            case Country::NG:
                return CountryAlpha3::NGA;
            case Country::NU:
                return CountryAlpha3::NIU;
            case Country::NF:
                return CountryAlpha3::NFK;
            case Country::MK:
                return CountryAlpha3::MKD;
            case Country::MP:
                return CountryAlpha3::MNP;
            case Country::NO:
                return CountryAlpha3::NOR;
            case Country::OM:
                return CountryAlpha3::OMN;
            case Country::PK:
                return CountryAlpha3::PAK;
            case Country::PW:
                return CountryAlpha3::PLW;
            case Country::PS:
                return CountryAlpha3::PSE;
            case Country::PA:
                return CountryAlpha3::PAN;
            case Country::PG:
                return CountryAlpha3::PNG;
            case Country::PY:
                return CountryAlpha3::PRY;
            case Country::PE:
                return CountryAlpha3::PER;
            case Country::PH:
                return CountryAlpha3::PHL;
            case Country::PN:
                return CountryAlpha3::PCN;
            case Country::PL:
                return CountryAlpha3::POL;
            case Country::PT:
                return CountryAlpha3::PRT;
            case Country::PR:
                return CountryAlpha3::PRI;
            case Country::QA:
                return CountryAlpha3::QAT;
            case Country::RO:
                return CountryAlpha3::ROU;
            case Country::RU:
                return CountryAlpha3::RUS;
            case Country::RW:
                return CountryAlpha3::RWA;
            case Country::RE:
                return CountryAlpha3::REU;
            case Country::BL:
                return CountryAlpha3::BLM;
            case Country::SH:
                return CountryAlpha3::SHN;
            case Country::KN:
                return CountryAlpha3::KNA;
            case Country::LC:
                return CountryAlpha3::LCA;
            case Country::MF:
                return CountryAlpha3::MAF;
            case Country::PM:
                return CountryAlpha3::SPM;
            case Country::VC:
                return CountryAlpha3::VCT;
            case Country::WS:
                return CountryAlpha3::WSM;
            case Country::SM:
                return CountryAlpha3::SMR;
            case Country::ST:
                return CountryAlpha3::STP;
            case Country::SA:
                return CountryAlpha3::SAU;
            case Country::SN:
                return CountryAlpha3::SEN;
            case Country::RS:
                return CountryAlpha3::SRB;
            case Country::SC:
                return CountryAlpha3::SYC;
            case Country::SL:
                return CountryAlpha3::SLE;
            case Country::SG:
                return CountryAlpha3::SGP;
            case Country::SX:
                return CountryAlpha3::SXM;
            case Country::SK:
                return CountryAlpha3::SVK;
            case Country::SI:
                return CountryAlpha3::SVN;
            case Country::SB:
                return CountryAlpha3::SLB;
            case Country::SO:
                return CountryAlpha3::SOM;
            case Country::ZA:
                return CountryAlpha3::ZAF;
            case Country::GS:
                return CountryAlpha3::SGS;
            case Country::SS:
                return CountryAlpha3::SSD;
            case Country::ES:
                return CountryAlpha3::ESP;
            case Country::LK:
                return CountryAlpha3::LKA;
            case Country::SD:
                return CountryAlpha3::SDN;
            case Country::SR:
                return CountryAlpha3::SUR;
            case Country::SJ:
                return CountryAlpha3::SJM;
            case Country::SE:
                return CountryAlpha3::SWE;
            case Country::CH:
                return CountryAlpha3::CHE;
            case Country::SY:
                return CountryAlpha3::SYR;
            case Country::TW:
                return CountryAlpha3::TWN;
            case Country::TJ:
                return CountryAlpha3::TJK;
            case Country::TZ:
                return CountryAlpha3::TZA;
            case Country::TH:
                return CountryAlpha3::THA;
            case Country::TL:
                return CountryAlpha3::TLS;
            case Country::TG:
                return CountryAlpha3::TGO;
            case Country::TK:
                return CountryAlpha3::TKL;
            case Country::TO:
                return CountryAlpha3::TON;
            case Country::TT:
                return CountryAlpha3::TTO;
            case Country::TN:
                return CountryAlpha3::TUN;
            case Country::TM:
                return CountryAlpha3::TKM;
            case Country::TC:
                return CountryAlpha3::TCA;
            case Country::TV:
                return CountryAlpha3::TUV;
            case Country::TR:
                return CountryAlpha3::TUR;
            case Country::UG:
                return CountryAlpha3::UGA;
            case Country::UA:
                return CountryAlpha3::UKR;
            case Country::AE:
                return CountryAlpha3::ARE;
            case Country::GB:
                return CountryAlpha3::GBR;
            case Country::UM:
                return CountryAlpha3::UMI;
            case Country::US:
                return CountryAlpha3::USA;
            case Country::UY:
                return CountryAlpha3::URY;
            case Country::UZ:
                return CountryAlpha3::UZB;
            case Country::VU:
                return CountryAlpha3::VUT;
            case Country::VE:
                return CountryAlpha3::VEN;
            case Country::VN:
                return CountryAlpha3::VNM;
            case Country::VG:
                return CountryAlpha3::VGB;
            case Country::VI:
                return CountryAlpha3::VIR;
            case Country::WF:
                return CountryAlpha3::WLF;
            case Country::EH:
                return CountryAlpha3::ESH;
            case Country::YE:
                return CountryAlpha3::YEM;
            case Country::ZM:
                return CountryAlpha3::ZMB;
            case Country::ZW:
                return CountryAlpha3::ZWE;
            case Country::AX:
                return CountryAlpha3::ALA;
        }

        throw new CountryException('No alpha3 value for ' . $country->name);
    }

    public function alpha2(CountryAlpha3 $countryAlpha3): Country
    {
        switch ($countryAlpha3) {
            case CountryAlpha3::AFG:
                return Country::AF;
            case CountryAlpha3::ALB:
                return Country::AL;
            case CountryAlpha3::DZA:
                return Country::DZ;
            case CountryAlpha3::ASM:
                return Country::AS;
            case CountryAlpha3::AND:
                return Country::AD;
            case CountryAlpha3::AGO:
                return Country::AO;
            case CountryAlpha3::AIA:
                return Country::AI;
            case CountryAlpha3::ATA:
                return Country::AQ;
            case CountryAlpha3::ATG:
                return Country::AG;
            case CountryAlpha3::ARG:
                return Country::AR;
            case CountryAlpha3::ARM:
                return Country::AM;
            case CountryAlpha3::ABW:
                return Country::AW;
            case CountryAlpha3::AUS:
                return Country::AU;
            case CountryAlpha3::AUT:
                return Country::AT;
            case CountryAlpha3::AZE:
                return Country::AZ;
            case CountryAlpha3::BHS:
                return Country::BS;
            case CountryAlpha3::BHR:
                return Country::BH;
            case CountryAlpha3::BGD:
                return Country::BD;
            case CountryAlpha3::BRB:
                return Country::BB;
            case CountryAlpha3::BLR:
                return Country::BY;
            case CountryAlpha3::BEL:
                return Country::BE;
            case CountryAlpha3::BLZ:
                return Country::BZ;
            case CountryAlpha3::BEN:
                return Country::BJ;
            case CountryAlpha3::BMU:
                return Country::BM;
            case CountryAlpha3::BTN:
                return Country::BT;
            case CountryAlpha3::BOL:
                return Country::BO;
            case CountryAlpha3::BES:
                return Country::BQ;
            case CountryAlpha3::BIH:
                return Country::BA;
            case CountryAlpha3::BWA:
                return Country::BW;
            case CountryAlpha3::BVT:
                return Country::BV;
            case CountryAlpha3::BRA:
                return Country::BR;
            case CountryAlpha3::IOT:
                return Country::IO;
            case CountryAlpha3::BRN:
                return Country::BN;
            case CountryAlpha3::BGR:
                return Country::BG;
            case CountryAlpha3::BFA:
                return Country::BF;
            case CountryAlpha3::BDI:
                return Country::BI;
            case CountryAlpha3::CPV:
                return Country::CV;
            case CountryAlpha3::KHM:
                return Country::KH;
            case CountryAlpha3::CMR:
                return Country::CM;
            case CountryAlpha3::CAN:
                return Country::CA;
            case CountryAlpha3::CYM:
                return Country::KY;
            case CountryAlpha3::CAF:
                return Country::CF;
            case CountryAlpha3::TCD:
                return Country::TD;
            case CountryAlpha3::CHL:
                return Country::CL;
            case CountryAlpha3::CHN:
                return Country::CN;
            case CountryAlpha3::CXR:
                return Country::CX;
            case CountryAlpha3::CCK:
                return Country::CC;
            case CountryAlpha3::COL:
                return Country::CO;
            case CountryAlpha3::COM:
                return Country::KM;
            case CountryAlpha3::COD:
                return Country::CD;
            case CountryAlpha3::COG:
                return Country::CG;
            case CountryAlpha3::COK:
                return Country::CK;
            case CountryAlpha3::CRI:
                return Country::CR;
            case CountryAlpha3::HRV:
                return Country::HR;
            case CountryAlpha3::CUB:
                return Country::CU;
            case CountryAlpha3::CUW:
                return Country::CW;
            case CountryAlpha3::CYP:
                return Country::CY;
            case CountryAlpha3::CZE:
                return Country::CZ;
            case CountryAlpha3::CIV:
                return Country::CI;
            case CountryAlpha3::DNK:
                return Country::DK;
            case CountryAlpha3::DJI:
                return Country::DJ;
            case CountryAlpha3::DMA:
                return Country::DM;
            case CountryAlpha3::DOM:
                return Country::DO;
            case CountryAlpha3::ECU:
                return Country::EC;
            case CountryAlpha3::EGY:
                return Country::EG;
            case CountryAlpha3::SLV:
                return Country::SV;
            case CountryAlpha3::GNQ:
                return Country::GQ;
            case CountryAlpha3::ERI:
                return Country::ER;
            case CountryAlpha3::EST:
                return Country::EE;
            case CountryAlpha3::SWZ:
                return Country::SZ;
            case CountryAlpha3::ETH:
                return Country::ET;
            case CountryAlpha3::FLK:
                return Country::FK;
            case CountryAlpha3::FRO:
                return Country::FO;
            case CountryAlpha3::FJI:
                return Country::FJ;
            case CountryAlpha3::FIN:
                return Country::FI;
            case CountryAlpha3::FRA:
                return Country::FR;
            case CountryAlpha3::GUF:
                return Country::GF;
            case CountryAlpha3::PYF:
                return Country::PF;
            case CountryAlpha3::ATF:
                return Country::TF;
            case CountryAlpha3::GAB:
                return Country::GA;
            case CountryAlpha3::GMB:
                return Country::GM;
            case CountryAlpha3::GEO:
                return Country::GE;
            case CountryAlpha3::DEU:
                return Country::DE;
            case CountryAlpha3::GHA:
                return Country::GH;
            case CountryAlpha3::GIB:
                return Country::GI;
            case CountryAlpha3::GRC:
                return Country::GR;
            case CountryAlpha3::GRL:
                return Country::GL;
            case CountryAlpha3::GRD:
                return Country::GD;
            case CountryAlpha3::GLP:
                return Country::GP;
            case CountryAlpha3::GUM:
                return Country::GU;
            case CountryAlpha3::GTM:
                return Country::GT;
            case CountryAlpha3::GGY:
                return Country::GG;
            case CountryAlpha3::GIN:
                return Country::GN;
            case CountryAlpha3::GNB:
                return Country::GW;
            case CountryAlpha3::GUY:
                return Country::GY;
            case CountryAlpha3::HTI:
                return Country::HT;
            case CountryAlpha3::HMD:
                return Country::HM;
            case CountryAlpha3::VAT:
                return Country::VA;
            case CountryAlpha3::HND:
                return Country::HN;
            case CountryAlpha3::HKG:
                return Country::HK;
            case CountryAlpha3::HUN:
                return Country::HU;
            case CountryAlpha3::ISL:
                return Country::IS;
            case CountryAlpha3::IND:
                return Country::IN;
            case CountryAlpha3::IDN:
                return Country::ID;
            case CountryAlpha3::IRN:
                return Country::IR;
            case CountryAlpha3::IRQ:
                return Country::IQ;
            case CountryAlpha3::IRL:
                return Country::IE;
            case CountryAlpha3::IMN:
                return Country::IM;
            case CountryAlpha3::ISR:
                return Country::IL;
            case CountryAlpha3::ITA:
                return Country::IT;
            case CountryAlpha3::JAM:
                return Country::JM;
            case CountryAlpha3::JPN:
                return Country::JP;
            case CountryAlpha3::JEY:
                return Country::JE;
            case CountryAlpha3::JOR:
                return Country::JO;
            case CountryAlpha3::KAZ:
                return Country::KZ;
            case CountryAlpha3::KEN:
                return Country::KE;
            case CountryAlpha3::KIR:
                return Country::KI;
            case CountryAlpha3::PRK:
                return Country::KP;
            case CountryAlpha3::KOR:
                return Country::KR;
            case CountryAlpha3::KWT:
                return Country::KW;
            case CountryAlpha3::KGZ:
                return Country::KG;
            case CountryAlpha3::LAO:
                return Country::LA;
            case CountryAlpha3::LVA:
                return Country::LV;
            case CountryAlpha3::LBN:
                return Country::LB;
            case CountryAlpha3::LSO:
                return Country::LS;
            case CountryAlpha3::LBR:
                return Country::LR;
            case CountryAlpha3::LBY:
                return Country::LY;
            case CountryAlpha3::LIE:
                return Country::LI;
            case CountryAlpha3::LTU:
                return Country::LT;
            case CountryAlpha3::LUX:
                return Country::LU;
            case CountryAlpha3::MAC:
                return Country::MO;
            case CountryAlpha3::MDG:
                return Country::MG;
            case CountryAlpha3::MWI:
                return Country::MW;
            case CountryAlpha3::MYS:
                return Country::MY;
            case CountryAlpha3::MDV:
                return Country::MV;
            case CountryAlpha3::MLI:
                return Country::ML;
            case CountryAlpha3::MLT:
                return Country::MT;
            case CountryAlpha3::MHL:
                return Country::MH;
            case CountryAlpha3::MTQ:
                return Country::MQ;
            case CountryAlpha3::MRT:
                return Country::MR;
            case CountryAlpha3::MUS:
                return Country::MU;
            case CountryAlpha3::MYT:
                return Country::YT;
            case CountryAlpha3::MEX:
                return Country::MX;
            case CountryAlpha3::FSM:
                return Country::FM;
            case CountryAlpha3::MDA:
                return Country::MD;
            case CountryAlpha3::MCO:
                return Country::MC;
            case CountryAlpha3::MNG:
                return Country::MN;
            case CountryAlpha3::MNE:
                return Country::ME;
            case CountryAlpha3::MSR:
                return Country::MS;
            case CountryAlpha3::MAR:
                return Country::MA;
            case CountryAlpha3::MOZ:
                return Country::MZ;
            case CountryAlpha3::MMR:
                return Country::MM;
            case CountryAlpha3::NAM:
                return Country::NA;
            case CountryAlpha3::NRU:
                return Country::NR;
            case CountryAlpha3::NPL:
                return Country::NP;
            case CountryAlpha3::NLD:
                return Country::NL;
            case CountryAlpha3::NCL:
                return Country::NC;
            case CountryAlpha3::NZL:
                return Country::NZ;
            case CountryAlpha3::NIC:
                return Country::NI;
            case CountryAlpha3::NER:
                return Country::NE;
            case CountryAlpha3::NGA:
                return Country::NG;
            case CountryAlpha3::NIU:
                return Country::NU;
            case CountryAlpha3::NFK:
                return Country::NF;
            case CountryAlpha3::MKD:
                return Country::MK;
            case CountryAlpha3::MNP:
                return Country::MP;
            case CountryAlpha3::NOR:
                return Country::NO;
            case CountryAlpha3::OMN:
                return Country::OM;
            case CountryAlpha3::PAK:
                return Country::PK;
            case CountryAlpha3::PLW:
                return Country::PW;
            case CountryAlpha3::PSE:
                return Country::PS;
            case CountryAlpha3::PAN:
                return Country::PA;
            case CountryAlpha3::PNG:
                return Country::PG;
            case CountryAlpha3::PRY:
                return Country::PY;
            case CountryAlpha3::PER:
                return Country::PE;
            case CountryAlpha3::PHL:
                return Country::PH;
            case CountryAlpha3::PCN:
                return Country::PN;
            case CountryAlpha3::POL:
                return Country::PL;
            case CountryAlpha3::PRT:
                return Country::PT;
            case CountryAlpha3::PRI:
                return Country::PR;
            case CountryAlpha3::QAT:
                return Country::QA;
            case CountryAlpha3::ROU:
                return Country::RO;
            case CountryAlpha3::RUS:
                return Country::RU;
            case CountryAlpha3::RWA:
                return Country::RW;
            case CountryAlpha3::REU:
                return Country::RE;
            case CountryAlpha3::BLM:
                return Country::BL;
            case CountryAlpha3::SHN:
                return Country::SH;
            case CountryAlpha3::KNA:
                return Country::KN;
            case CountryAlpha3::LCA:
                return Country::LC;
            case CountryAlpha3::MAF:
                return Country::MF;
            case CountryAlpha3::SPM:
                return Country::PM;
            case CountryAlpha3::VCT:
                return Country::VC;
            case CountryAlpha3::WSM:
                return Country::WS;
            case CountryAlpha3::SMR:
                return Country::SM;
            case CountryAlpha3::STP:
                return Country::ST;
            case CountryAlpha3::SAU:
                return Country::SA;
            case CountryAlpha3::SEN:
                return Country::SN;
            case CountryAlpha3::SRB:
                return Country::RS;
            case CountryAlpha3::SYC:
                return Country::SC;
            case CountryAlpha3::SLE:
                return Country::SL;
            case CountryAlpha3::SGP:
                return Country::SG;
            case CountryAlpha3::SXM:
                return Country::SX;
            case CountryAlpha3::SVK:
                return Country::SK;
            case CountryAlpha3::SVN:
                return Country::SI;
            case CountryAlpha3::SLB:
                return Country::SB;
            case CountryAlpha3::SOM:
                return Country::SO;
            case CountryAlpha3::ZAF:
                return Country::ZA;
            case CountryAlpha3::SGS:
                return Country::GS;
            case CountryAlpha3::SSD:
                return Country::SS;
            case CountryAlpha3::ESP:
                return Country::ES;
            case CountryAlpha3::LKA:
                return Country::LK;
            case CountryAlpha3::SDN:
                return Country::SD;
            case CountryAlpha3::SUR:
                return Country::SR;
            case CountryAlpha3::SJM:
                return Country::SJ;
            case CountryAlpha3::SWE:
                return Country::SE;
            case CountryAlpha3::CHE:
                return Country::CH;
            case CountryAlpha3::SYR:
                return Country::SY;
            case CountryAlpha3::TWN:
                return Country::TW;
            case CountryAlpha3::TJK:
                return Country::TJ;
            case CountryAlpha3::TZA:
                return Country::TZ;
            case CountryAlpha3::THA:
                return Country::TH;
            case CountryAlpha3::TLS:
                return Country::TL;
            case CountryAlpha3::TGO:
                return Country::TG;
            case CountryAlpha3::TKL:
                return Country::TK;
            case CountryAlpha3::TON:
                return Country::TO;
            case CountryAlpha3::TTO:
                return Country::TT;
            case CountryAlpha3::TUN:
                return Country::TN;
            case CountryAlpha3::TKM:
                return Country::TM;
            case CountryAlpha3::TCA:
                return Country::TC;
            case CountryAlpha3::TUV:
                return Country::TV;
            case CountryAlpha3::TUR:
                return Country::TR;
            case CountryAlpha3::UGA:
                return Country::UG;
            case CountryAlpha3::UKR:
                return Country::UA;
            case CountryAlpha3::ARE:
                return Country::AE;
            case CountryAlpha3::GBR:
                return Country::GB;
            case CountryAlpha3::UMI:
                return Country::UM;
            case CountryAlpha3::USA:
                return Country::US;
            case CountryAlpha3::URY:
                return Country::UY;
            case CountryAlpha3::UZB:
                return Country::UZ;
            case CountryAlpha3::VUT:
                return Country::VU;
            case CountryAlpha3::VEN:
                return Country::VE;
            case CountryAlpha3::VNM:
                return Country::VN;
            case CountryAlpha3::VGB:
                return Country::VG;
            case CountryAlpha3::VIR:
                return Country::VI;
            case CountryAlpha3::WLF:
                return Country::WF;
            case CountryAlpha3::ESH:
                return Country::EH;
            case CountryAlpha3::YEM:
                return Country::YE;
            case CountryAlpha3::ZMB:
                return Country::ZM;
            case CountryAlpha3::ZWE:
                return Country::ZW;
            case CountryAlpha3::ALA:
                return Country::AX;
        }

        throw new CountryException('No alpha2 value for ' . $countryAlpha3->name);
    }

    public function numericCode(Country|CountryAlpha3 $country): int
    {
        switch ($country) {
            case Country::AF:
            case CountryAlpha3::AFG:
                return 4;
            case Country::AL:
            case CountryAlpha3::ALB:
                return 8;
            case Country::DZ:
            case CountryAlpha3::DZA:
                return 12;
            case Country::AS:
            case CountryAlpha3::ASM:
                return 16;
            case Country::AD:
            case CountryAlpha3::AND:
                return 20;
            case Country::AO:
            case CountryAlpha3::AGO:
                return 24;
            case Country::AI:
            case CountryAlpha3::AIA:
                return 660;
            case Country::AQ:
            case CountryAlpha3::ATA:
                return 10;
            case Country::AG:
            case CountryAlpha3::ATG:
                return 28;
            case Country::AR:
            case CountryAlpha3::ARG:
                return 32;
            case Country::AM:
            case CountryAlpha3::ARM:
                return 51;
            case Country::AW:
            case CountryAlpha3::ABW:
                return 533;
            case Country::AU:
            case CountryAlpha3::AUS:
                return 36;
            case Country::AT:
            case CountryAlpha3::AUT:
                return 40;
            case Country::AZ:
            case CountryAlpha3::AZE:
                return 31;
            case Country::BS:
            case CountryAlpha3::BHS:
                return 44;
            case Country::BH:
            case CountryAlpha3::BHR:
                return 48;
            case Country::BD:
            case CountryAlpha3::BGD:
                return 50;
            case Country::BB:
            case CountryAlpha3::BRB:
                return 52;
            case Country::BY:
            case CountryAlpha3::BLR:
                return 112;
            case Country::BE:
            case CountryAlpha3::BEL:
                return 56;
            case Country::BZ:
            case CountryAlpha3::BLZ:
                return 84;
            case Country::BJ:
            case CountryAlpha3::BEN:
                return 204;
            case Country::BM:
            case CountryAlpha3::BMU:
                return 60;
            case Country::BT:
            case CountryAlpha3::BTN:
                return 64;
            case Country::BO:
            case CountryAlpha3::BOL:
                return 68;
            case Country::BQ:
            case CountryAlpha3::BES:
                return 535;
            case Country::BA:
            case CountryAlpha3::BIH:
                return 70;
            case Country::BW:
            case CountryAlpha3::BWA:
                return 72;
            case Country::BV:
            case CountryAlpha3::BVT:
                return 74;
            case Country::BR:
            case CountryAlpha3::BRA:
                return 76;
            case Country::IO:
            case CountryAlpha3::IOT:
                return 86;
            case Country::BN:
            case CountryAlpha3::BRN:
                return 96;
            case Country::BG:
            case CountryAlpha3::BGR:
                return 100;
            case Country::BF:
            case CountryAlpha3::BFA:
                return 854;
            case Country::BI:
            case CountryAlpha3::BDI:
                return 108;
            case Country::CV:
            case CountryAlpha3::CPV:
                return 132;
            case Country::KH:
            case CountryAlpha3::KHM:
                return 116;
            case Country::CM:
            case CountryAlpha3::CMR:
                return 120;
            case Country::CA:
            case CountryAlpha3::CAN:
                return 124;
            case Country::KY:
            case CountryAlpha3::CYM:
                return 136;
            case Country::CF:
            case CountryAlpha3::CAF:
                return 140;
            case Country::TD:
            case CountryAlpha3::TCD:
                return 148;
            case Country::CL:
            case CountryAlpha3::CHL:
                return 152;
            case Country::CN:
            case CountryAlpha3::CHN:
                return 156;
            case Country::CX:
            case CountryAlpha3::CXR:
                return 162;
            case Country::CC:
            case CountryAlpha3::CCK:
                return 166;
            case Country::CO:
            case CountryAlpha3::COL:
                return 170;
            case Country::KM:
            case CountryAlpha3::COM:
                return 174;
            case Country::CD:
            case CountryAlpha3::COD:
                return 180;
            case Country::CG:
            case CountryAlpha3::COG:
                return 178;
            case Country::CK:
            case CountryAlpha3::COK:
                return 184;
            case Country::CR:
            case CountryAlpha3::CRI:
                return 188;
            case Country::HR:
            case CountryAlpha3::HRV:
                return 191;
            case Country::CU:
            case CountryAlpha3::CUB:
                return 192;
            case Country::CW:
            case CountryAlpha3::CUW:
                return 531;
            case Country::CY:
            case CountryAlpha3::CYP:
                return 196;
            case Country::CZ:
            case CountryAlpha3::CZE:
                return 203;
            case Country::CI:
            case CountryAlpha3::CIV:
                return 384;
            case Country::DK:
            case CountryAlpha3::DNK:
                return 208;
            case Country::DJ:
            case CountryAlpha3::DJI:
                return 262;
            case Country::DM:
            case CountryAlpha3::DMA:
                return 212;
            case Country::DO:
            case CountryAlpha3::DOM:
                return 214;
            case Country::EC:
            case CountryAlpha3::ECU:
                return 218;
            case Country::EG:
            case CountryAlpha3::EGY:
                return 818;
            case Country::SV:
            case CountryAlpha3::SLV:
                return 222;
            case Country::GQ:
            case CountryAlpha3::GNQ:
                return 226;
            case Country::ER:
            case CountryAlpha3::ERI:
                return 232;
            case Country::EE:
            case CountryAlpha3::EST:
                return 233;
            case Country::SZ:
            case CountryAlpha3::SWZ:
                return 748;
            case Country::ET:
            case CountryAlpha3::ETH:
                return 231;
            case Country::FK:
            case CountryAlpha3::FLK:
                return 238;
            case Country::FO:
            case CountryAlpha3::FRO:
                return 234;
            case Country::FJ:
            case CountryAlpha3::FJI:
                return 242;
            case Country::FI:
            case CountryAlpha3::FIN:
                return 246;
            case Country::FR:
            case CountryAlpha3::FRA:
                return 250;
            case Country::GF:
            case CountryAlpha3::GUF:
                return 254;
            case Country::PF:
            case CountryAlpha3::PYF:
                return 258;
            case Country::TF:
            case CountryAlpha3::ATF:
                return 260;
            case Country::GA:
            case CountryAlpha3::GAB:
                return 266;
            case Country::GM:
            case CountryAlpha3::GMB:
                return 270;
            case Country::GE:
            case CountryAlpha3::GEO:
                return 268;
            case Country::DE:
            case CountryAlpha3::DEU:
                return 276;
            case Country::GH:
            case CountryAlpha3::GHA:
                return 288;
            case Country::GI:
            case CountryAlpha3::GIB:
                return 292;
            case Country::GR:
            case CountryAlpha3::GRC:
                return 300;
            case Country::GL:
            case CountryAlpha3::GRL:
                return 304;
            case Country::GD:
            case CountryAlpha3::GRD:
                return 308;
            case Country::GP:
            case CountryAlpha3::GLP:
                return 312;
            case Country::GU:
            case CountryAlpha3::GUM:
                return 316;
            case Country::GT:
            case CountryAlpha3::GTM:
                return 320;
            case Country::GG:
            case CountryAlpha3::GGY:
                return 831;
            case Country::GN:
            case CountryAlpha3::GIN:
                return 324;
            case Country::GW:
            case CountryAlpha3::GNB:
                return 624;
            case Country::GY:
            case CountryAlpha3::GUY:
                return 328;
            case Country::HT:
            case CountryAlpha3::HTI:
                return 332;
            case Country::HM:
            case CountryAlpha3::HMD:
                return 334;
            case Country::VA:
            case CountryAlpha3::VAT:
                return 336;
            case Country::HN:
            case CountryAlpha3::HND:
                return 340;
            case Country::HK:
            case CountryAlpha3::HKG:
                return 344;
            case Country::HU:
            case CountryAlpha3::HUN:
                return 348;
            case Country::IS:
            case CountryAlpha3::ISL:
                return 352;
            case Country::IN:
            case CountryAlpha3::IND:
                return 356;
            case Country::ID:
            case CountryAlpha3::IDN:
                return 360;
            case Country::IR:
            case CountryAlpha3::IRN:
                return 364;
            case Country::IQ:
            case CountryAlpha3::IRQ:
                return 368;
            case Country::IE:
            case CountryAlpha3::IRL:
                return 372;
            case Country::IM:
            case CountryAlpha3::IMN:
                return 833;
            case Country::IL:
            case CountryAlpha3::ISR:
                return 376;
            case Country::IT:
            case CountryAlpha3::ITA:
                return 380;
            case Country::JM:
            case CountryAlpha3::JAM:
                return 388;
            case Country::JP:
            case CountryAlpha3::JPN:
                return 392;
            case Country::JE:
            case CountryAlpha3::JEY:
                return 832;
            case Country::JO:
            case CountryAlpha3::JOR:
                return 400;
            case Country::KZ:
            case CountryAlpha3::KAZ:
                return 398;
            case Country::KE:
            case CountryAlpha3::KEN:
                return 404;
            case Country::KI:
            case CountryAlpha3::KIR:
                return 296;
            case Country::KP:
            case CountryAlpha3::PRK:
                return 408;
            case Country::KR:
            case CountryAlpha3::KOR:
                return 410;
            case Country::KW:
            case CountryAlpha3::KWT:
                return 414;
            case Country::KG:
            case CountryAlpha3::KGZ:
                return 417;
            case Country::LA:
            case CountryAlpha3::LAO:
                return 418;
            case Country::LV:
            case CountryAlpha3::LVA:
                return 428;
            case Country::LB:
            case CountryAlpha3::LBN:
                return 422;
            case Country::LS:
            case CountryAlpha3::LSO:
                return 426;
            case Country::LR:
            case CountryAlpha3::LBR:
                return 430;
            case Country::LY:
            case CountryAlpha3::LBY:
                return 434;
            case Country::LI:
            case CountryAlpha3::LIE:
                return 438;
            case Country::LT:
            case CountryAlpha3::LTU:
                return 440;
            case Country::LU:
            case CountryAlpha3::LUX:
                return 442;
            case Country::MO:
            case CountryAlpha3::MAC:
                return 446;
            case Country::MG:
            case CountryAlpha3::MDG:
                return 450;
            case Country::MW:
            case CountryAlpha3::MWI:
                return 454;
            case Country::MY:
            case CountryAlpha3::MYS:
                return 458;
            case Country::MV:
            case CountryAlpha3::MDV:
                return 462;
            case Country::ML:
            case CountryAlpha3::MLI:
                return 466;
            case Country::MT:
            case CountryAlpha3::MLT:
                return 470;
            case Country::MH:
            case CountryAlpha3::MHL:
                return 584;
            case Country::MQ:
            case CountryAlpha3::MTQ:
                return 474;
            case Country::MR:
            case CountryAlpha3::MRT:
                return 478;
            case Country::MU:
            case CountryAlpha3::MUS:
                return 480;
            case Country::YT:
            case CountryAlpha3::MYT:
                return 175;
            case Country::MX:
            case CountryAlpha3::MEX:
                return 484;
            case Country::FM:
            case CountryAlpha3::FSM:
                return 583;
            case Country::MD:
            case CountryAlpha3::MDA:
                return 498;
            case Country::MC:
            case CountryAlpha3::MCO:
                return 492;
            case Country::MN:
            case CountryAlpha3::MNG:
                return 496;
            case Country::ME:
            case CountryAlpha3::MNE:
                return 499;
            case Country::MS:
            case CountryAlpha3::MSR:
                return 500;
            case Country::MA:
            case CountryAlpha3::MAR:
                return 504;
            case Country::MZ:
            case CountryAlpha3::MOZ:
                return 508;
            case Country::MM:
            case CountryAlpha3::MMR:
                return 104;
            case Country::NA:
            case CountryAlpha3::NAM:
                return 516;
            case Country::NR:
            case CountryAlpha3::NRU:
                return 520;
            case Country::NP:
            case CountryAlpha3::NPL:
                return 524;
            case Country::NL:
            case CountryAlpha3::NLD:
                return 528;
            case Country::NC:
            case CountryAlpha3::NCL:
                return 540;
            case Country::NZ:
            case CountryAlpha3::NZL:
                return 554;
            case Country::NI:
            case CountryAlpha3::NIC:
                return 558;
            case Country::NE:
            case CountryAlpha3::NER:
                return 562;
            case Country::NG:
            case CountryAlpha3::NGA:
                return 566;
            case Country::NU:
            case CountryAlpha3::NIU:
                return 570;
            case Country::NF:
            case CountryAlpha3::NFK:
                return 574;
            case Country::MK:
            case CountryAlpha3::MKD:
                return 807;
            case Country::MP:
            case CountryAlpha3::MNP:
                return 580;
            case Country::NO:
            case CountryAlpha3::NOR:
                return 578;
            case Country::OM:
            case CountryAlpha3::OMN:
                return 512;
            case Country::PK:
            case CountryAlpha3::PAK:
                return 586;
            case Country::PW:
            case CountryAlpha3::PLW:
                return 585;
            case Country::PS:
            case CountryAlpha3::PSE:
                return 275;
            case Country::PA:
            case CountryAlpha3::PAN:
                return 591;
            case Country::PG:
            case CountryAlpha3::PNG:
                return 598;
            case Country::PY:
            case CountryAlpha3::PRY:
                return 600;
            case Country::PE:
            case CountryAlpha3::PER:
                return 604;
            case Country::PH:
            case CountryAlpha3::PHL:
                return 608;
            case Country::PN:
            case CountryAlpha3::PCN:
                return 612;
            case Country::PL:
            case CountryAlpha3::POL:
                return 616;
            case Country::PT:
            case CountryAlpha3::PRT:
                return 620;
            case Country::PR:
            case CountryAlpha3::PRI:
                return 630;
            case Country::QA:
            case CountryAlpha3::QAT:
                return 634;
            case Country::RO:
            case CountryAlpha3::ROU:
                return 642;
            case Country::RU:
            case CountryAlpha3::RUS:
                return 643;
            case Country::RW:
            case CountryAlpha3::RWA:
                return 646;
            case Country::RE:
            case CountryAlpha3::REU:
                return 638;
            case Country::BL:
            case CountryAlpha3::BLM:
                return 652;
            case Country::SH:
            case CountryAlpha3::SHN:
                return 654;
            case Country::KN:
            case CountryAlpha3::KNA:
                return 659;
            case Country::LC:
            case CountryAlpha3::LCA:
                return 662;
            case Country::MF:
            case CountryAlpha3::MAF:
                return 663;
            case Country::PM:
            case CountryAlpha3::SPM:
                return 666;
            case Country::VC:
            case CountryAlpha3::VCT:
                return 670;
            case Country::WS:
            case CountryAlpha3::WSM:
                return 882;
            case Country::SM:
            case CountryAlpha3::SMR:
                return 674;
            case Country::ST:
            case CountryAlpha3::STP:
                return 678;
            case Country::SA:
            case CountryAlpha3::SAU:
                return 682;
            case Country::SN:
            case CountryAlpha3::SEN:
                return 686;
            case Country::RS:
            case CountryAlpha3::SRB:
                return 688;
            case Country::SC:
            case CountryAlpha3::SYC:
                return 690;
            case Country::SL:
            case CountryAlpha3::SLE:
                return 694;
            case Country::SG:
            case CountryAlpha3::SGP:
                return 702;
            case Country::SX:
            case CountryAlpha3::SXM:
                return 534;
            case Country::SK:
            case CountryAlpha3::SVK:
                return 703;
            case Country::SI:
            case CountryAlpha3::SVN:
                return 705;
            case Country::SB:
            case CountryAlpha3::SLB:
                return 90;
            case Country::SO:
            case CountryAlpha3::SOM:
                return 706;
            case Country::ZA:
            case CountryAlpha3::ZAF:
                return 710;
            case Country::GS:
            case CountryAlpha3::SGS:
                return 239;
            case Country::SS:
            case CountryAlpha3::SSD:
                return 728;
            case Country::ES:
            case CountryAlpha3::ESP:
                return 724;
            case Country::LK:
            case CountryAlpha3::LKA:
                return 144;
            case Country::SD:
            case CountryAlpha3::SDN:
                return 729;
            case Country::SR:
            case CountryAlpha3::SUR:
                return 740;
            case Country::SJ:
            case CountryAlpha3::SJM:
                return 744;
            case Country::SE:
            case CountryAlpha3::SWE:
                return 752;
            case Country::CH:
            case CountryAlpha3::CHE:
                return 756;
            case Country::SY:
            case CountryAlpha3::SYR:
                return 760;
            case Country::TW:
            case CountryAlpha3::TWN:
                return 158;
            case Country::TJ:
            case CountryAlpha3::TJK:
                return 762;
            case Country::TZ:
            case CountryAlpha3::TZA:
                return 834;
            case Country::TH:
            case CountryAlpha3::THA:
                return 764;
            case Country::TL:
            case CountryAlpha3::TLS:
                return 626;
            case Country::TG:
            case CountryAlpha3::TGO:
                return 768;
            case Country::TK:
            case CountryAlpha3::TKL:
                return 772;
            case Country::TO:
            case CountryAlpha3::TON:
                return 776;
            case Country::TT:
            case CountryAlpha3::TTO:
                return 780;
            case Country::TN:
            case CountryAlpha3::TUN:
                return 788;
            case Country::TM:
            case CountryAlpha3::TKM:
                return 795;
            case Country::TC:
            case CountryAlpha3::TCA:
                return 796;
            case Country::TV:
            case CountryAlpha3::TUV:
                return 798;
            case Country::TR:
            case CountryAlpha3::TUR:
                return 792;
            case Country::UG:
            case CountryAlpha3::UGA:
                return 800;
            case Country::UA:
            case CountryAlpha3::UKR:
                return 804;
            case Country::AE:
            case CountryAlpha3::ARE:
                return 784;
            case Country::GB:
            case CountryAlpha3::GBR:
                return 826;
            case Country::UM:
            case CountryAlpha3::UMI:
                return 581;
            case Country::US:
            case CountryAlpha3::USA:
                return 840;
            case Country::UY:
            case CountryAlpha3::URY:
                return 858;
            case Country::UZ:
            case CountryAlpha3::UZB:
                return 860;
            case Country::VU:
            case CountryAlpha3::VUT:
                return 548;
            case Country::VE:
            case CountryAlpha3::VEN:
                return 862;
            case Country::VN:
            case CountryAlpha3::VNM:
                return 704;
            case Country::VG:
            case CountryAlpha3::VGB:
                return 92;
            case Country::VI:
            case CountryAlpha3::VIR:
                return 850;
            case Country::WF:
            case CountryAlpha3::WLF:
                return 876;
            case Country::EH:
            case CountryAlpha3::ESH:
                return 732;
            case Country::YE:
            case CountryAlpha3::YEM:
                return 887;
            case Country::ZM:
            case CountryAlpha3::ZMB:
                return 894;
            case Country::ZW:
            case CountryAlpha3::ZWE:
                return 716;
            case Country::AX:
            case CountryAlpha3::ALA:
                return 248;
        }
        throw new CountryException('No numeric match for  ' . $country->name);
    }

    public function fromNumericCode(int $code): Country
    {
        return match ($code) {
            4 => Country::AF,
            8 => Country::AL,
            12 => Country::DZ,
            16 => Country::AS,
            20 => Country::AD,
            24 => Country::AO,
            660 => Country::AI,
            10 => Country::AQ,
            28 => Country::AG,
            32 => Country::AR,
            51 => Country::AM,
            533 => Country::AW,
            36 => Country::AU,
            40 => Country::AT,
            31 => Country::AZ,
            44 => Country::BS,
            48 => Country::BH,
            50 => Country::BD,
            52 => Country::BB,
            112 => Country::BY,
            56 => Country::BE,
            84 => Country::BZ,
            204 => Country::BJ,
            60 => Country::BM,
            64 => Country::BT,
            68 => Country::BO,
            535 => Country::BQ,
            70 => Country::BA,
            72 => Country::BW,
            74 => Country::BV,
            76 => Country::BR,
            86 => Country::IO,
            96 => Country::BN,
            100 => Country::BG,
            854 => Country::BF,
            108 => Country::BI,
            132 => Country::CV,
            116 => Country::KH,
            120 => Country::CM,
            124 => Country::CA,
            136 => Country::KY,
            140 => Country::CF,
            148 => Country::TD,
            152 => Country::CL,
            156 => Country::CN,
            162 => Country::CX,
            166 => Country::CC,
            170 => Country::CO,
            174 => Country::KM,
            180 => Country::CD,
            178 => Country::CG,
            184 => Country::CK,
            188 => Country::CR,
            191 => Country::HR,
            192 => Country::CU,
            531 => Country::CW,
            196 => Country::CY,
            203 => Country::CZ,
            384 => Country::CI,
            208 => Country::DK,
            262 => Country::DJ,
            212 => Country::DM,
            214 => Country::DO,
            218 => Country::EC,
            818 => Country::EG,
            222 => Country::SV,
            226 => Country::GQ,
            232 => Country::ER,
            233 => Country::EE,
            748 => Country::SZ,
            231 => Country::ET,
            238 => Country::FK,
            234 => Country::FO,
            242 => Country::FJ,
            246 => Country::FI,
            250 => Country::FR,
            254 => Country::GF,
            258 => Country::PF,
            260 => Country::TF,
            266 => Country::GA,
            270 => Country::GM,
            268 => Country::GE,
            276 => Country::DE,
            288 => Country::GH,
            292 => Country::GI,
            300 => Country::GR,
            304 => Country::GL,
            308 => Country::GD,
            312 => Country::GP,
            316 => Country::GU,
            320 => Country::GT,
            831 => Country::GG,
            324 => Country::GN,
            624 => Country::GW,
            328 => Country::GY,
            332 => Country::HT,
            334 => Country::HM,
            336 => Country::VA,
            340 => Country::HN,
            344 => Country::HK,
            348 => Country::HU,
            352 => Country::IS,
            356 => Country::IN,
            360 => Country::ID,
            364 => Country::IR,
            368 => Country::IQ,
            372 => Country::IE,
            833 => Country::IM,
            376 => Country::IL,
            380 => Country::IT,
            388 => Country::JM,
            392 => Country::JP,
            832 => Country::JE,
            400 => Country::JO,
            398 => Country::KZ,
            404 => Country::KE,
            296 => Country::KI,
            408 => Country::KP,
            410 => Country::KR,
            414 => Country::KW,
            417 => Country::KG,
            418 => Country::LA,
            428 => Country::LV,
            422 => Country::LB,
            426 => Country::LS,
            430 => Country::LR,
            434 => Country::LY,
            438 => Country::LI,
            440 => Country::LT,
            442 => Country::LU,
            446 => Country::MO,
            450 => Country::MG,
            454 => Country::MW,
            458 => Country::MY,
            462 => Country::MV,
            466 => Country::ML,
            470 => Country::MT,
            584 => Country::MH,
            474 => Country::MQ,
            478 => Country::MR,
            480 => Country::MU,
            175 => Country::YT,
            484 => Country::MX,
            583 => Country::FM,
            498 => Country::MD,
            492 => Country::MC,
            496 => Country::MN,
            499 => Country::ME,
            500 => Country::MS,
            504 => Country::MA,
            508 => Country::MZ,
            104 => Country::MM,
            516 => Country::NA,
            520 => Country::NR,
            524 => Country::NP,
            528 => Country::NL,
            540 => Country::NC,
            554 => Country::NZ,
            558 => Country::NI,
            562 => Country::NE,
            566 => Country::NG,
            570 => Country::NU,
            574 => Country::NF,
            807 => Country::MK,
            580 => Country::MP,
            578 => Country::NO,
            512 => Country::OM,
            586 => Country::PK,
            585 => Country::PW,
            275 => Country::PS,
            591 => Country::PA,
            598 => Country::PG,
            600 => Country::PY,
            604 => Country::PE,
            608 => Country::PH,
            612 => Country::PN,
            616 => Country::PL,
            620 => Country::PT,
            630 => Country::PR,
            634 => Country::QA,
            642 => Country::RO,
            643 => Country::RU,
            646 => Country::RW,
            638 => Country::RE,
            652 => Country::BL,
            654 => Country::SH,
            659 => Country::KN,
            662 => Country::LC,
            663 => Country::MF,
            666 => Country::PM,
            670 => Country::VC,
            882 => Country::WS,
            674 => Country::SM,
            678 => Country::ST,
            682 => Country::SA,
            686 => Country::SN,
            688 => Country::RS,
            690 => Country::SC,
            694 => Country::SL,
            702 => Country::SG,
            534 => Country::SX,
            703 => Country::SK,
            705 => Country::SI,
            90 => Country::SB,
            706 => Country::SO,
            710 => Country::ZA,
            239 => Country::GS,
            728 => Country::SS,
            724 => Country::ES,
            144 => Country::LK,
            729 => Country::SD,
            740 => Country::SR,
            744 => Country::SJ,
            752 => Country::SE,
            756 => Country::CH,
            760 => Country::SY,
            158 => Country::TW,
            762 => Country::TJ,
            834 => Country::TZ,
            764 => Country::TH,
            626 => Country::TL,
            768 => Country::TG,
            772 => Country::TK,
            776 => Country::TO,
            780 => Country::TT,
            788 => Country::TN,
            795 => Country::TM,
            796 => Country::TC,
            798 => Country::TV,
            792 => Country::TR,
            800 => Country::UG,
            804 => Country::UA,
            784 => Country::AE,
            826 => Country::GB,
            581 => Country::UM,
            840 => Country::US,
            858 => Country::UY,
            860 => Country::UZ,
            548 => Country::VU,
            862 => Country::VE,
            704 => Country::VN,
            92 => Country::VG,
            850 => Country::VI,
            876 => Country::WF,
            732 => Country::EH,
            887 => Country::YE,
            894 => Country::ZM,
            716 => Country::ZW,
            248 => Country::AX,
        };
    }

    public function getName(Country|CountryAlpha3 $country): string
    {
        switch ($country) {
            case Country::AF:
            case CountryAlpha3::AFG:
                return 'Afghanistan';
            case Country::AL:
            case CountryAlpha3::ALB:
                return 'Albania';
            case Country::DZ:
            case CountryAlpha3::DZA:
                return 'Algeria';
            case Country::AS:
            case CountryAlpha3::ASM:
                return 'American Samoa';
            case Country::AD:
            case CountryAlpha3::AND:
                return 'Andorra';
            case Country::AO:
            case CountryAlpha3::AGO:
                return 'Angola';
            case Country::AI:
            case CountryAlpha3::AIA:
                return 'Anguilla';
            case Country::AQ:
            case CountryAlpha3::ATA:
                return 'Antarctica';
            case Country::AG:
            case CountryAlpha3::ATG:
                return 'Antigua and Barbuda';
            case Country::AR:
            case CountryAlpha3::ARG:
                return 'Argentina';
            case Country::AM:
            case CountryAlpha3::ARM:
                return 'Armenia';
            case Country::AW:
            case CountryAlpha3::ABW:
                return 'Aruba';
            case Country::AU:
            case CountryAlpha3::AUS:
                return 'Australia';
            case Country::AT:
            case CountryAlpha3::AUT:
                return 'Austria';
            case Country::AZ:
            case CountryAlpha3::AZE:
                return 'Azerbaijan';
            case Country::BS:
            case CountryAlpha3::BHS:
                return 'Bahamas (the)';
            case Country::BH:
            case CountryAlpha3::BHR:
                return 'Bahrain';
            case Country::BD:
            case CountryAlpha3::BGD:
                return 'Bangladesh';
            case Country::BB:
            case CountryAlpha3::BRB:
                return 'Barbados';
            case Country::BY:
            case CountryAlpha3::BLR:
                return 'Belarus';
            case Country::BE:
            case CountryAlpha3::BEL:
                return 'Belgium';
            case Country::BZ:
            case CountryAlpha3::BLZ:
                return 'Belize';
            case Country::BJ:
            case CountryAlpha3::BEN:
                return 'Benin';
            case Country::BM:
            case CountryAlpha3::BMU:
                return 'Bermuda';
            case Country::BT:
            case CountryAlpha3::BTN:
                return 'Bhutan';
            case Country::BO:
            case CountryAlpha3::BOL:
                return 'Bolivia (Plurinational State of)';
            case Country::BQ:
            case CountryAlpha3::BES:
                return 'Bonaire, Sint Eustatius and Saba';
            case Country::BA:
            case CountryAlpha3::BIH:
                return 'Bosnia and Herzegovina';
            case Country::BW:
            case CountryAlpha3::BWA:
                return 'Botswana';
            case Country::BV:
            case CountryAlpha3::BVT:
                return 'Bouvet Island';
            case Country::BR:
            case CountryAlpha3::BRA:
                return 'Brazil';
            case Country::IO:
            case CountryAlpha3::IOT:
                return 'British Indian Ocean Territory (the)';
            case Country::BN:
            case CountryAlpha3::BRN:
                return 'Brunei Darussalam';
            case Country::BG:
            case CountryAlpha3::BGR:
                return 'Bulgaria';
            case Country::BF:
            case CountryAlpha3::BFA:
                return 'Burkina Faso';
            case Country::BI:
            case CountryAlpha3::BDI:
                return 'Burundi';
            case Country::CV:
            case CountryAlpha3::CPV:
                return 'Cabo Verde';
            case Country::KH:
            case CountryAlpha3::KHM:
                return 'Cambodia';
            case Country::CM:
            case CountryAlpha3::CMR:
                return 'Cameroon';
            case Country::CA:
            case CountryAlpha3::CAN:
                return 'Canada';
            case Country::KY:
            case CountryAlpha3::CYM:
                return 'Cayman Islands (the)';
            case Country::CF:
            case CountryAlpha3::CAF:
                return 'Central African Republic (the)';
            case Country::TD:
            case CountryAlpha3::TCD:
                return 'Chad';
            case Country::CL:
            case CountryAlpha3::CHL:
                return 'Chile';
            case Country::CN:
            case CountryAlpha3::CHN:
                return 'China';
            case Country::CX:
            case CountryAlpha3::CXR:
                return 'Christmas Island';
            case Country::CC:
            case CountryAlpha3::CCK:
                return 'Cocos (Keeling) Islands (the)';
            case Country::CO:
            case CountryAlpha3::COL:
                return 'Colombia';
            case Country::KM:
            case CountryAlpha3::COM:
                return 'Comoros (the)';
            case Country::CD:
            case CountryAlpha3::COD:
                return 'Congo (the Democratic Republic of the)';
            case Country::CG:
            case CountryAlpha3::COG:
                return 'Congo (the)';
            case Country::CK:
            case CountryAlpha3::COK:
                return 'Cook Islands (the)';
            case Country::CR:
            case CountryAlpha3::CRI:
                return 'Costa Rica';
            case Country::HR:
            case CountryAlpha3::HRV:
                return 'Croatia';
            case Country::CU:
            case CountryAlpha3::CUB:
                return 'Cuba';
            case Country::CW:
            case CountryAlpha3::CUW:
                return 'Curacao';
            case Country::CY:
            case CountryAlpha3::CYP:
                return 'Cyprus';
            case Country::CZ:
            case CountryAlpha3::CZE:
                return 'Czechia';
            case Country::CI:
            case CountryAlpha3::CIV:
                return 'Cote d\'Ivoire';
            case Country::DK:
            case CountryAlpha3::DNK:
                return 'Denmark';
            case Country::DJ:
            case CountryAlpha3::DJI:
                return 'Djibouti';
            case Country::DM:
            case CountryAlpha3::DMA:
                return 'Dominica';
            case Country::DO:
            case CountryAlpha3::DOM:
                return 'Dominican Republic (the)';
            case Country::EC:
            case CountryAlpha3::ECU:
                return 'Ecuador';
            case Country::EG:
            case CountryAlpha3::EGY:
                return 'Egypt';
            case Country::SV:
            case CountryAlpha3::SLV:
                return 'El Salvador';
            case Country::GQ:
            case CountryAlpha3::GNQ:
                return 'Equatorial Guinea';
            case Country::ER:
            case CountryAlpha3::ERI:
                return 'Eritrea';
            case Country::EE:
            case CountryAlpha3::EST:
                return 'Estonia';
            case Country::SZ:
            case CountryAlpha3::SWZ:
                return 'Eswatini';
            case Country::ET:
            case CountryAlpha3::ETH:
                return 'Ethiopia';
            case Country::FK:
            case CountryAlpha3::FLK:
                return 'Falkland Islands (the) [Malvinas]';
            case Country::FO:
            case CountryAlpha3::FRO:
                return 'Faroe Islands (the)';
            case Country::FJ:
            case CountryAlpha3::FJI:
                return 'Fiji';
            case Country::FI:
            case CountryAlpha3::FIN:
                return 'Finland';
            case Country::FR:
            case CountryAlpha3::FRA:
                return 'France';
            case Country::GF:
            case CountryAlpha3::GUF:
                return 'French Guiana';
            case Country::PF:
            case CountryAlpha3::PYF:
                return 'French Polynesia';
            case Country::TF:
            case CountryAlpha3::ATF:
                return 'French Southern Territories (the)';
            case Country::GA:
            case CountryAlpha3::GAB:
                return 'Gabon';
            case Country::GM:
            case CountryAlpha3::GMB:
                return 'Gambia (the)';
            case Country::GE:
            case CountryAlpha3::GEO:
                return 'Georgia';
            case Country::DE:
            case CountryAlpha3::DEU:
                return 'Germany';
            case Country::GH:
            case CountryAlpha3::GHA:
                return 'Ghana';
            case Country::GI:
            case CountryAlpha3::GIB:
                return 'Gibraltar';
            case Country::GR:
            case CountryAlpha3::GRC:
                return 'Greece';
            case Country::GL:
            case CountryAlpha3::GRL:
                return 'Greenland';
            case Country::GD:
            case CountryAlpha3::GRD:
                return 'Grenada';
            case Country::GP:
            case CountryAlpha3::GLP:
                return 'Guadeloupe';
            case Country::GU:
            case CountryAlpha3::GUM:
                return 'Guam';
            case Country::GT:
            case CountryAlpha3::GTM:
                return 'Guatemala';
            case Country::GG:
            case CountryAlpha3::GGY:
                return 'Guernsey';
            case Country::GN:
            case CountryAlpha3::GIN:
                return 'Guinea';
            case Country::GW:
            case CountryAlpha3::GNB:
                return 'Guinea-Bissau';
            case Country::GY:
            case CountryAlpha3::GUY:
                return 'Guyana';
            case Country::HT:
            case CountryAlpha3::HTI:
                return 'Haiti';
            case Country::HM:
            case CountryAlpha3::HMD:
                return 'Heard Island and McDonald Islands';
            case Country::VA:
            case CountryAlpha3::VAT:
                return 'Holy See (the)';
            case Country::HN:
            case CountryAlpha3::HND:
                return 'Honduras';
            case Country::HK:
            case CountryAlpha3::HKG:
                return 'Hong Kong';
            case Country::HU:
            case CountryAlpha3::HUN:
                return 'Hungary';
            case Country::IS:
            case CountryAlpha3::ISL:
                return 'Iceland';
            case Country::IN:
            case CountryAlpha3::IND:
                return 'India';
            case Country::ID:
            case CountryAlpha3::IDN:
                return 'Indonesia';
            case Country::IR:
            case CountryAlpha3::IRN:
                return 'Iran (Islamic Republic of)';
            case Country::IQ:
            case CountryAlpha3::IRQ:
                return 'Iraq';
            case Country::IE:
            case CountryAlpha3::IRL:
                return 'Ireland';
            case Country::IM:
            case CountryAlpha3::IMN:
                return 'Isle of Man';
            case Country::IL:
            case CountryAlpha3::ISR:
                return 'Israel';
            case Country::IT:
            case CountryAlpha3::ITA:
                return 'Italy';
            case Country::JM:
            case CountryAlpha3::JAM:
                return 'Jamaica';
            case Country::JP:
            case CountryAlpha3::JPN:
                return 'Japan';
            case Country::JE:
            case CountryAlpha3::JEY:
                return 'Jersey';
            case Country::JO:
            case CountryAlpha3::JOR:
                return 'Jordan';
            case Country::KZ:
            case CountryAlpha3::KAZ:
                return 'Kazakhstan';
            case Country::KE:
            case CountryAlpha3::KEN:
                return 'Kenya';
            case Country::KI:
            case CountryAlpha3::KIR:
                return 'Kiribati';
            case Country::KP:
            case CountryAlpha3::PRK:
                return 'Korea (the Democratic People\'s Republic of)';
            case Country::KR:
            case CountryAlpha3::KOR:
                return 'Korea (the Republic of)';
            case Country::KW:
            case CountryAlpha3::KWT:
                return 'Kuwait';
            case Country::KG:
            case CountryAlpha3::KGZ:
                return 'Kyrgyzstan';
            case Country::LA:
            case CountryAlpha3::LAO:
                return 'Lao People\'s Democratic Republic (the)';
            case Country::LV:
            case CountryAlpha3::LVA:
                return 'Latvia';
            case Country::LB:
            case CountryAlpha3::LBN:
                return 'Lebanon';
            case Country::LS:
            case CountryAlpha3::LSO:
                return 'Lesotho';
            case Country::LR:
            case CountryAlpha3::LBR:
                return 'Liberia';
            case Country::LY:
            case CountryAlpha3::LBY:
                return 'Libya';
            case Country::LI:
            case CountryAlpha3::LIE:
                return 'Liechtenstein';
            case Country::LT:
            case CountryAlpha3::LTU:
                return 'Lithuania';
            case Country::LU:
            case CountryAlpha3::LUX:
                return 'Luxembourg';
            case Country::MO:
            case CountryAlpha3::MAC:
                return 'Macao';
            case Country::MG:
            case CountryAlpha3::MDG:
                return 'Madagascar';
            case Country::MW:
            case CountryAlpha3::MWI:
                return 'Malawi';
            case Country::MY:
            case CountryAlpha3::MYS:
                return 'Malaysia';
            case Country::MV:
            case CountryAlpha3::MDV:
                return 'Maldives';
            case Country::ML:
            case CountryAlpha3::MLI:
                return 'Mali';
            case Country::MT:
            case CountryAlpha3::MLT:
                return 'Malta';
            case Country::MH:
            case CountryAlpha3::MHL:
                return 'Marshall Islands (the)';
            case Country::MQ:
            case CountryAlpha3::MTQ:
                return 'Martinique';
            case Country::MR:
            case CountryAlpha3::MRT:
                return 'Mauritania';
            case Country::MU:
            case CountryAlpha3::MUS:
                return 'Mauritius';
            case Country::YT:
            case CountryAlpha3::MYT:
                return 'Mayotte';
            case Country::MX:
            case CountryAlpha3::MEX:
                return 'Mexico';
            case Country::FM:
            case CountryAlpha3::FSM:
                return 'Micronesia (Federated States of)';
            case Country::MD:
            case CountryAlpha3::MDA:
                return 'Moldova (the Republic of)';
            case Country::MC:
            case CountryAlpha3::MCO:
                return 'Monaco';
            case Country::MN:
            case CountryAlpha3::MNG:
                return 'Mongolia';
            case Country::ME:
            case CountryAlpha3::MNE:
                return 'Montenegro';
            case Country::MS:
            case CountryAlpha3::MSR:
                return 'Montserrat';
            case Country::MA:
            case CountryAlpha3::MAR:
                return 'Morocco';
            case Country::MZ:
            case CountryAlpha3::MOZ:
                return 'Mozambique';
            case Country::MM:
            case CountryAlpha3::MMR:
                return 'Myanmar';
            case Country::NA:
            case CountryAlpha3::NAM:
                return 'Namibia';
            case Country::NR:
            case CountryAlpha3::NRU:
                return 'Nauru';
            case Country::NP:
            case CountryAlpha3::NPL:
                return 'Nepal';
            case Country::NL:
            case CountryAlpha3::NLD:
                return 'Netherlands (Kingdom of the)';
            case Country::NC:
            case CountryAlpha3::NCL:
                return 'New Caledonia';
            case Country::NZ:
            case CountryAlpha3::NZL:
                return 'New Zealand';
            case Country::NI:
            case CountryAlpha3::NIC:
                return 'Nicaragua';
            case Country::NE:
            case CountryAlpha3::NER:
                return 'Niger (the)';
            case Country::NG:
            case CountryAlpha3::NGA:
                return 'Nigeria';
            case Country::NU:
            case CountryAlpha3::NIU:
                return 'Niue';
            case Country::NF:
            case CountryAlpha3::NFK:
                return 'Norfolk Island';
            case Country::MK:
            case CountryAlpha3::MKD:
                return 'North Macedonia';
            case Country::MP:
            case CountryAlpha3::MNP:
                return 'Northern Mariana Islands (the)';
            case Country::NO:
            case CountryAlpha3::NOR:
                return 'Norway';
            case Country::OM:
            case CountryAlpha3::OMN:
                return 'Oman';
            case Country::PK:
            case CountryAlpha3::PAK:
                return 'Pakistan';
            case Country::PW:
            case CountryAlpha3::PLW:
                return 'Palau';
            case Country::PS:
            case CountryAlpha3::PSE:
                return 'Palestine, State of';
            case Country::PA:
            case CountryAlpha3::PAN:
                return 'Panama';
            case Country::PG:
            case CountryAlpha3::PNG:
                return 'Papua New Guinea';
            case Country::PY:
            case CountryAlpha3::PRY:
                return 'Paraguay';
            case Country::PE:
            case CountryAlpha3::PER:
                return 'Peru';
            case Country::PH:
            case CountryAlpha3::PHL:
                return 'Philippines (the)';
            case Country::PN:
            case CountryAlpha3::PCN:
                return 'Pitcairn';
            case Country::PL:
            case CountryAlpha3::POL:
                return 'Poland';
            case Country::PT:
            case CountryAlpha3::PRT:
                return 'Portugal';
            case Country::PR:
            case CountryAlpha3::PRI:
                return 'Puerto Rico';
            case Country::QA:
            case CountryAlpha3::QAT:
                return 'Qatar';
            case Country::RO:
            case CountryAlpha3::ROU:
                return 'Romania';
            case Country::RU:
            case CountryAlpha3::RUS:
                return 'Russian Federation (the)';
            case Country::RW:
            case CountryAlpha3::RWA:
                return 'Rwanda';
            case Country::RE:
            case CountryAlpha3::REU:
                return 'Reunion';
            case Country::BL:
            case CountryAlpha3::BLM:
                return 'Saint Barthelemy';
            case Country::SH:
            case CountryAlpha3::SHN:
                return 'Saint Helena, Ascension and Tristan da Cunha';
            case Country::KN:
            case CountryAlpha3::KNA:
                return 'Saint Kitts and Nevis';
            case Country::LC:
            case CountryAlpha3::LCA:
                return 'Saint Lucia';
            case Country::MF:
            case CountryAlpha3::MAF:
                return 'Saint Martin (French part)';
            case Country::PM:
            case CountryAlpha3::SPM:
                return 'Saint Pierre and Miquelon';
            case Country::VC:
            case CountryAlpha3::VCT:
                return 'Saint Vincent and the Grenadines';
            case Country::WS:
            case CountryAlpha3::WSM:
                return 'Samoa';
            case Country::SM:
            case CountryAlpha3::SMR:
                return 'San Marino';
            case Country::ST:
            case CountryAlpha3::STP:
                return 'Sao Tome and Principe';
            case Country::SA:
            case CountryAlpha3::SAU:
                return 'Saudi Arabia';
            case Country::SN:
            case CountryAlpha3::SEN:
                return 'Senegal';
            case Country::RS:
            case CountryAlpha3::SRB:
                return 'Serbia';
            case Country::SC:
            case CountryAlpha3::SYC:
                return 'Seychelles';
            case Country::SL:
            case CountryAlpha3::SLE:
                return 'Sierra Leone';
            case Country::SG:
            case CountryAlpha3::SGP:
                return 'Singapore';
            case Country::SX:
            case CountryAlpha3::SXM:
                return 'Sint Maarten (Dutch part)';
            case Country::SK:
            case CountryAlpha3::SVK:
                return 'Slovakia';
            case Country::SI:
            case CountryAlpha3::SVN:
                return 'Slovenia';
            case Country::SB:
            case CountryAlpha3::SLB:
                return 'Solomon Islands';
            case Country::SO:
            case CountryAlpha3::SOM:
                return 'Somalia';
            case Country::ZA:
            case CountryAlpha3::ZAF:
                return 'South Africa';
            case Country::GS:
            case CountryAlpha3::SGS:
                return 'South Georgia and the South Sandwich Islands';
            case Country::SS:
            case CountryAlpha3::SSD:
                return 'South Sudan';
            case Country::ES:
            case CountryAlpha3::ESP:
                return 'Spain';
            case Country::LK:
            case CountryAlpha3::LKA:
                return 'Sri Lanka';
            case Country::SD:
            case CountryAlpha3::SDN:
                return 'Sudan (the)';
            case Country::SR:
            case CountryAlpha3::SUR:
                return 'Suriname';
            case Country::SJ:
            case CountryAlpha3::SJM:
                return 'Svalbard and Jan Mayen';
            case Country::SE:
            case CountryAlpha3::SWE:
                return 'Sweden';
            case Country::CH:
            case CountryAlpha3::CHE:
                return 'Switzerland';
            case Country::SY:
            case CountryAlpha3::SYR:
                return 'Syrian Arab Republic (the)';
            case Country::TW:
            case CountryAlpha3::TWN:
                return 'Taiwan (Province of China)';
            case Country::TJ:
            case CountryAlpha3::TJK:
                return 'Tajikistan';
            case Country::TZ:
            case CountryAlpha3::TZA:
                return 'Tanzania, the United Republic of';
            case Country::TH:
            case CountryAlpha3::THA:
                return 'Thailand';
            case Country::TL:
            case CountryAlpha3::TLS:
                return 'Timor-Leste';
            case Country::TG:
            case CountryAlpha3::TGO:
                return 'Togo';
            case Country::TK:
            case CountryAlpha3::TKL:
                return 'Tokelau';
            case Country::TO:
            case CountryAlpha3::TON:
                return 'Tonga';
            case Country::TT:
            case CountryAlpha3::TTO:
                return 'Trinidad and Tobago';
            case Country::TN:
            case CountryAlpha3::TUN:
                return 'Tunisia';
            case Country::TM:
            case CountryAlpha3::TKM:
                return 'Turkmenistan';
            case Country::TC:
            case CountryAlpha3::TCA:
                return 'Turks and Caicos Islands (the)';
            case Country::TV:
            case CountryAlpha3::TUV:
                return 'Tuvalu';
            case Country::TR:
            case CountryAlpha3::TUR:
                return 'Turkiye';
            case Country::UG:
            case CountryAlpha3::UGA:
                return 'Uganda';
            case Country::UA:
            case CountryAlpha3::UKR:
                return 'Ukraine';
            case Country::AE:
            case CountryAlpha3::ARE:
                return 'United Arab Emirates (the)';
            case Country::GB:
            case CountryAlpha3::GBR:
                return 'United Kingdom of Great Britain and Northern Ireland (the)';
            case Country::UM:
            case CountryAlpha3::UMI:
                return 'United States Minor Outlying Islands (the)';
            case Country::US:
            case CountryAlpha3::USA:
                return 'United States of America (the)';
            case Country::UY:
            case CountryAlpha3::URY:
                return 'Uruguay';
            case Country::UZ:
            case CountryAlpha3::UZB:
                return 'Uzbekistan';
            case Country::VU:
            case CountryAlpha3::VUT:
                return 'Vanuatu';
            case Country::VE:
            case CountryAlpha3::VEN:
                return 'Venezuela (Bolivarian Republic of)';
            case Country::VN:
            case CountryAlpha3::VNM:
                return 'Viet Nam';
            case Country::VG:
            case CountryAlpha3::VGB:
                return 'Virgin Islands (British)';
            case Country::VI:
            case CountryAlpha3::VIR:
                return 'Virgin Islands (U.S.)';
            case Country::WF:
            case CountryAlpha3::WLF:
                return 'Wallis and Futuna';
            case Country::EH:
            case CountryAlpha3::ESH:
                return 'Western Sahara*';
            case Country::YE:
            case CountryAlpha3::YEM:
                return 'Yemen';
            case Country::ZM:
            case CountryAlpha3::ZMB:
                return 'Zambia';
            case Country::ZW:
            case CountryAlpha3::ZWE:
                return 'Zimbabwe';
            case Country::AX:
            case CountryAlpha3::ALA:
                return 'Aland Islands';
        };
        throw new CountryException('No numeric match for  ' . $country->name);
    }
}
