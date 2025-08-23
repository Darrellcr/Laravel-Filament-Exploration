<?php

namespace App\Filament\Resources\PurchaseOrders\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PurchaseOrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make("order_number"),
                TextInput::make("company_address"),
                TextInput::make("vendor"),
                TextInput::make("vendor_address"),
                TextInput::make("value")
            ]);
    }
}
