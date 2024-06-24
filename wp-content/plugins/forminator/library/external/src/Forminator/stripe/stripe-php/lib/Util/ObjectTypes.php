<?php

namespace Forminator\Stripe\Util;

class ObjectTypes
{
    /**
     * @var array Mapping from object types to resource classes
     */
    const mapping = [
        \Forminator\Stripe\Collection::OBJECT_NAME => \Forminator\Stripe\Collection::class,
        \Forminator\Stripe\Issuing\CardDetails::OBJECT_NAME => \Forminator\Stripe\Issuing\CardDetails::class,
        \Forminator\Stripe\SearchResult::OBJECT_NAME => \Forminator\Stripe\SearchResult::class,
        \Forminator\Stripe\File::OBJECT_NAME_ALT => \Forminator\Stripe\File::class,
        // The beginning of the section generated from our OpenAPI spec
        \Forminator\Stripe\Account::OBJECT_NAME => \Forminator\Stripe\Account::class,
        \Forminator\Stripe\AccountLink::OBJECT_NAME => \Forminator\Stripe\AccountLink::class,
        \Forminator\Stripe\AccountSession::OBJECT_NAME => \Forminator\Stripe\AccountSession::class,
        \Forminator\Stripe\ApplePayDomain::OBJECT_NAME => \Forminator\Stripe\ApplePayDomain::class,
        \Forminator\Stripe\Application::OBJECT_NAME => \Forminator\Stripe\Application::class,
        \Forminator\Stripe\ApplicationFee::OBJECT_NAME => \Forminator\Stripe\ApplicationFee::class,
        \Forminator\Stripe\ApplicationFeeRefund::OBJECT_NAME => \Forminator\Stripe\ApplicationFeeRefund::class,
        \Forminator\Stripe\Apps\Secret::OBJECT_NAME => \Forminator\Stripe\Apps\Secret::class,
        \Forminator\Stripe\Balance::OBJECT_NAME => \Forminator\Stripe\Balance::class,
        \Forminator\Stripe\BalanceTransaction::OBJECT_NAME => \Forminator\Stripe\BalanceTransaction::class,
        \Forminator\Stripe\BankAccount::OBJECT_NAME => \Forminator\Stripe\BankAccount::class,
        \Forminator\Stripe\Billing\Meter::OBJECT_NAME => \Forminator\Stripe\Billing\Meter::class,
        \Forminator\Stripe\Billing\MeterEvent::OBJECT_NAME => \Forminator\Stripe\Billing\MeterEvent::class,
        \Forminator\Stripe\Billing\MeterEventAdjustment::OBJECT_NAME => \Forminator\Stripe\Billing\MeterEventAdjustment::class,
        \Forminator\Stripe\Billing\MeterEventSummary::OBJECT_NAME => \Forminator\Stripe\Billing\MeterEventSummary::class,
        \Forminator\Stripe\BillingPortal\Configuration::OBJECT_NAME => \Forminator\Stripe\BillingPortal\Configuration::class,
        \Forminator\Stripe\BillingPortal\Session::OBJECT_NAME => \Forminator\Stripe\BillingPortal\Session::class,
        \Forminator\Stripe\Capability::OBJECT_NAME => \Forminator\Stripe\Capability::class,
        \Forminator\Stripe\Card::OBJECT_NAME => \Forminator\Stripe\Card::class,
        \Forminator\Stripe\CashBalance::OBJECT_NAME => \Forminator\Stripe\CashBalance::class,
        \Forminator\Stripe\Charge::OBJECT_NAME => \Forminator\Stripe\Charge::class,
        \Forminator\Stripe\Checkout\Session::OBJECT_NAME => \Forminator\Stripe\Checkout\Session::class,
        \Forminator\Stripe\Climate\Order::OBJECT_NAME => \Forminator\Stripe\Climate\Order::class,
        \Forminator\Stripe\Climate\Product::OBJECT_NAME => \Forminator\Stripe\Climate\Product::class,
        \Forminator\Stripe\Climate\Supplier::OBJECT_NAME => \Forminator\Stripe\Climate\Supplier::class,
        \Forminator\Stripe\ConfirmationToken::OBJECT_NAME => \Forminator\Stripe\ConfirmationToken::class,
        \Forminator\Stripe\ConnectCollectionTransfer::OBJECT_NAME => \Forminator\Stripe\ConnectCollectionTransfer::class,
        \Forminator\Stripe\CountrySpec::OBJECT_NAME => \Forminator\Stripe\CountrySpec::class,
        \Forminator\Stripe\Coupon::OBJECT_NAME => \Forminator\Stripe\Coupon::class,
        \Forminator\Stripe\CreditNote::OBJECT_NAME => \Forminator\Stripe\CreditNote::class,
        \Forminator\Stripe\CreditNoteLineItem::OBJECT_NAME => \Forminator\Stripe\CreditNoteLineItem::class,
        \Forminator\Stripe\Customer::OBJECT_NAME => \Forminator\Stripe\Customer::class,
        \Forminator\Stripe\CustomerBalanceTransaction::OBJECT_NAME => \Forminator\Stripe\CustomerBalanceTransaction::class,
        \Forminator\Stripe\CustomerCashBalanceTransaction::OBJECT_NAME => \Forminator\Stripe\CustomerCashBalanceTransaction::class,
        \Forminator\Stripe\CustomerSession::OBJECT_NAME => \Forminator\Stripe\CustomerSession::class,
        \Forminator\Stripe\Discount::OBJECT_NAME => \Forminator\Stripe\Discount::class,
        \Forminator\Stripe\Dispute::OBJECT_NAME => \Forminator\Stripe\Dispute::class,
        \Forminator\Stripe\Entitlements\ActiveEntitlement::OBJECT_NAME => \Forminator\Stripe\Entitlements\ActiveEntitlement::class,
        \Forminator\Stripe\Entitlements\ActiveEntitlementSummary::OBJECT_NAME => \Forminator\Stripe\Entitlements\ActiveEntitlementSummary::class,
        \Forminator\Stripe\Entitlements\Feature::OBJECT_NAME => \Forminator\Stripe\Entitlements\Feature::class,
        \Forminator\Stripe\EphemeralKey::OBJECT_NAME => \Forminator\Stripe\EphemeralKey::class,
        \Forminator\Stripe\Event::OBJECT_NAME => \Forminator\Stripe\Event::class,
        \Forminator\Stripe\ExchangeRate::OBJECT_NAME => \Forminator\Stripe\ExchangeRate::class,
        \Forminator\Stripe\File::OBJECT_NAME => \Forminator\Stripe\File::class,
        \Forminator\Stripe\FileLink::OBJECT_NAME => \Forminator\Stripe\FileLink::class,
        \Forminator\Stripe\FinancialConnections\Account::OBJECT_NAME => \Forminator\Stripe\FinancialConnections\Account::class,
        \Forminator\Stripe\FinancialConnections\AccountOwner::OBJECT_NAME => \Forminator\Stripe\FinancialConnections\AccountOwner::class,
        \Forminator\Stripe\FinancialConnections\AccountOwnership::OBJECT_NAME => \Forminator\Stripe\FinancialConnections\AccountOwnership::class,
        \Forminator\Stripe\FinancialConnections\Session::OBJECT_NAME => \Forminator\Stripe\FinancialConnections\Session::class,
        \Forminator\Stripe\FinancialConnections\Transaction::OBJECT_NAME => \Forminator\Stripe\FinancialConnections\Transaction::class,
        \Forminator\Stripe\Forwarding\Request::OBJECT_NAME => \Forminator\Stripe\Forwarding\Request::class,
        \Forminator\Stripe\FundingInstructions::OBJECT_NAME => \Forminator\Stripe\FundingInstructions::class,
        \Forminator\Stripe\Identity\VerificationReport::OBJECT_NAME => \Forminator\Stripe\Identity\VerificationReport::class,
        \Forminator\Stripe\Identity\VerificationSession::OBJECT_NAME => \Forminator\Stripe\Identity\VerificationSession::class,
        \Forminator\Stripe\Invoice::OBJECT_NAME => \Forminator\Stripe\Invoice::class,
        \Forminator\Stripe\InvoiceItem::OBJECT_NAME => \Forminator\Stripe\InvoiceItem::class,
        \Forminator\Stripe\InvoiceLineItem::OBJECT_NAME => \Forminator\Stripe\InvoiceLineItem::class,
        \Forminator\Stripe\Issuing\Authorization::OBJECT_NAME => \Forminator\Stripe\Issuing\Authorization::class,
        \Forminator\Stripe\Issuing\Card::OBJECT_NAME => \Forminator\Stripe\Issuing\Card::class,
        \Forminator\Stripe\Issuing\Cardholder::OBJECT_NAME => \Forminator\Stripe\Issuing\Cardholder::class,
        \Forminator\Stripe\Issuing\Dispute::OBJECT_NAME => \Forminator\Stripe\Issuing\Dispute::class,
        \Forminator\Stripe\Issuing\PersonalizationDesign::OBJECT_NAME => \Forminator\Stripe\Issuing\PersonalizationDesign::class,
        \Forminator\Stripe\Issuing\PhysicalBundle::OBJECT_NAME => \Forminator\Stripe\Issuing\PhysicalBundle::class,
        \Forminator\Stripe\Issuing\Token::OBJECT_NAME => \Forminator\Stripe\Issuing\Token::class,
        \Forminator\Stripe\Issuing\Transaction::OBJECT_NAME => \Forminator\Stripe\Issuing\Transaction::class,
        \Forminator\Stripe\LineItem::OBJECT_NAME => \Forminator\Stripe\LineItem::class,
        \Forminator\Stripe\LoginLink::OBJECT_NAME => \Forminator\Stripe\LoginLink::class,
        \Forminator\Stripe\Mandate::OBJECT_NAME => \Forminator\Stripe\Mandate::class,
        \Forminator\Stripe\PaymentIntent::OBJECT_NAME => \Forminator\Stripe\PaymentIntent::class,
        \Forminator\Stripe\PaymentLink::OBJECT_NAME => \Forminator\Stripe\PaymentLink::class,
        \Forminator\Stripe\PaymentMethod::OBJECT_NAME => \Forminator\Stripe\PaymentMethod::class,
        \Forminator\Stripe\PaymentMethodConfiguration::OBJECT_NAME => \Forminator\Stripe\PaymentMethodConfiguration::class,
        \Forminator\Stripe\PaymentMethodDomain::OBJECT_NAME => \Forminator\Stripe\PaymentMethodDomain::class,
        \Forminator\Stripe\Payout::OBJECT_NAME => \Forminator\Stripe\Payout::class,
        \Forminator\Stripe\Person::OBJECT_NAME => \Forminator\Stripe\Person::class,
        \Forminator\Stripe\Plan::OBJECT_NAME => \Forminator\Stripe\Plan::class,
        \Forminator\Stripe\PlatformTaxFee::OBJECT_NAME => \Forminator\Stripe\PlatformTaxFee::class,
        \Forminator\Stripe\Price::OBJECT_NAME => \Forminator\Stripe\Price::class,
        \Forminator\Stripe\Product::OBJECT_NAME => \Forminator\Stripe\Product::class,
        \Forminator\Stripe\ProductFeature::OBJECT_NAME => \Forminator\Stripe\ProductFeature::class,
        \Forminator\Stripe\PromotionCode::OBJECT_NAME => \Forminator\Stripe\PromotionCode::class,
        \Forminator\Stripe\Quote::OBJECT_NAME => \Forminator\Stripe\Quote::class,
        \Forminator\Stripe\Radar\EarlyFraudWarning::OBJECT_NAME => \Forminator\Stripe\Radar\EarlyFraudWarning::class,
        \Forminator\Stripe\Radar\ValueList::OBJECT_NAME => \Forminator\Stripe\Radar\ValueList::class,
        \Forminator\Stripe\Radar\ValueListItem::OBJECT_NAME => \Forminator\Stripe\Radar\ValueListItem::class,
        \Forminator\Stripe\Refund::OBJECT_NAME => \Forminator\Stripe\Refund::class,
        \Forminator\Stripe\Reporting\ReportRun::OBJECT_NAME => \Forminator\Stripe\Reporting\ReportRun::class,
        \Forminator\Stripe\Reporting\ReportType::OBJECT_NAME => \Forminator\Stripe\Reporting\ReportType::class,
        \Forminator\Stripe\ReserveTransaction::OBJECT_NAME => \Forminator\Stripe\ReserveTransaction::class,
        \Forminator\Stripe\Review::OBJECT_NAME => \Forminator\Stripe\Review::class,
        \Forminator\Stripe\SetupAttempt::OBJECT_NAME => \Forminator\Stripe\SetupAttempt::class,
        \Forminator\Stripe\SetupIntent::OBJECT_NAME => \Forminator\Stripe\SetupIntent::class,
        \Forminator\Stripe\ShippingRate::OBJECT_NAME => \Forminator\Stripe\ShippingRate::class,
        \Forminator\Stripe\Sigma\ScheduledQueryRun::OBJECT_NAME => \Forminator\Stripe\Sigma\ScheduledQueryRun::class,
        \Forminator\Stripe\Source::OBJECT_NAME => \Forminator\Stripe\Source::class,
        \Forminator\Stripe\SourceMandateNotification::OBJECT_NAME => \Forminator\Stripe\SourceMandateNotification::class,
        \Forminator\Stripe\SourceTransaction::OBJECT_NAME => \Forminator\Stripe\SourceTransaction::class,
        \Forminator\Stripe\Subscription::OBJECT_NAME => \Forminator\Stripe\Subscription::class,
        \Forminator\Stripe\SubscriptionItem::OBJECT_NAME => \Forminator\Stripe\SubscriptionItem::class,
        \Forminator\Stripe\SubscriptionSchedule::OBJECT_NAME => \Forminator\Stripe\SubscriptionSchedule::class,
        \Forminator\Stripe\Tax\Calculation::OBJECT_NAME => \Forminator\Stripe\Tax\Calculation::class,
        \Forminator\Stripe\Tax\CalculationLineItem::OBJECT_NAME => \Forminator\Stripe\Tax\CalculationLineItem::class,
        \Forminator\Stripe\Tax\Registration::OBJECT_NAME => \Forminator\Stripe\Tax\Registration::class,
        \Forminator\Stripe\Tax\Settings::OBJECT_NAME => \Forminator\Stripe\Tax\Settings::class,
        \Forminator\Stripe\Tax\Transaction::OBJECT_NAME => \Forminator\Stripe\Tax\Transaction::class,
        \Forminator\Stripe\Tax\TransactionLineItem::OBJECT_NAME => \Forminator\Stripe\Tax\TransactionLineItem::class,
        \Forminator\Stripe\TaxCode::OBJECT_NAME => \Forminator\Stripe\TaxCode::class,
        \Forminator\Stripe\TaxDeductedAtSource::OBJECT_NAME => \Forminator\Stripe\TaxDeductedAtSource::class,
        \Forminator\Stripe\TaxId::OBJECT_NAME => \Forminator\Stripe\TaxId::class,
        \Forminator\Stripe\TaxRate::OBJECT_NAME => \Forminator\Stripe\TaxRate::class,
        \Forminator\Stripe\Terminal\Configuration::OBJECT_NAME => \Forminator\Stripe\Terminal\Configuration::class,
        \Forminator\Stripe\Terminal\ConnectionToken::OBJECT_NAME => \Forminator\Stripe\Terminal\ConnectionToken::class,
        \Forminator\Stripe\Terminal\Location::OBJECT_NAME => \Forminator\Stripe\Terminal\Location::class,
        \Forminator\Stripe\Terminal\Reader::OBJECT_NAME => \Forminator\Stripe\Terminal\Reader::class,
        \Forminator\Stripe\TestHelpers\TestClock::OBJECT_NAME => \Forminator\Stripe\TestHelpers\TestClock::class,
        \Forminator\Stripe\Token::OBJECT_NAME => \Forminator\Stripe\Token::class,
        \Forminator\Stripe\Topup::OBJECT_NAME => \Forminator\Stripe\Topup::class,
        \Forminator\Stripe\Transfer::OBJECT_NAME => \Forminator\Stripe\Transfer::class,
        \Forminator\Stripe\TransferReversal::OBJECT_NAME => \Forminator\Stripe\TransferReversal::class,
        \Forminator\Stripe\Treasury\CreditReversal::OBJECT_NAME => \Forminator\Stripe\Treasury\CreditReversal::class,
        \Forminator\Stripe\Treasury\DebitReversal::OBJECT_NAME => \Forminator\Stripe\Treasury\DebitReversal::class,
        \Forminator\Stripe\Treasury\FinancialAccount::OBJECT_NAME => \Forminator\Stripe\Treasury\FinancialAccount::class,
        \Forminator\Stripe\Treasury\FinancialAccountFeatures::OBJECT_NAME => \Forminator\Stripe\Treasury\FinancialAccountFeatures::class,
        \Forminator\Stripe\Treasury\InboundTransfer::OBJECT_NAME => \Forminator\Stripe\Treasury\InboundTransfer::class,
        \Forminator\Stripe\Treasury\OutboundPayment::OBJECT_NAME => \Forminator\Stripe\Treasury\OutboundPayment::class,
        \Forminator\Stripe\Treasury\OutboundTransfer::OBJECT_NAME => \Forminator\Stripe\Treasury\OutboundTransfer::class,
        \Forminator\Stripe\Treasury\ReceivedCredit::OBJECT_NAME => \Forminator\Stripe\Treasury\ReceivedCredit::class,
        \Forminator\Stripe\Treasury\ReceivedDebit::OBJECT_NAME => \Forminator\Stripe\Treasury\ReceivedDebit::class,
        \Forminator\Stripe\Treasury\Transaction::OBJECT_NAME => \Forminator\Stripe\Treasury\Transaction::class,
        \Forminator\Stripe\Treasury\TransactionEntry::OBJECT_NAME => \Forminator\Stripe\Treasury\TransactionEntry::class,
        \Forminator\Stripe\UsageRecord::OBJECT_NAME => \Forminator\Stripe\UsageRecord::class,
        \Forminator\Stripe\UsageRecordSummary::OBJECT_NAME => \Forminator\Stripe\UsageRecordSummary::class,
        \Forminator\Stripe\WebhookEndpoint::OBJECT_NAME => \Forminator\Stripe\WebhookEndpoint::class,
    ];
}