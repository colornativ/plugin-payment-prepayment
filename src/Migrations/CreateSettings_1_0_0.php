<?php

namespace CashInAdvance\Migrations;

use Plenty\Modules\Plugin\DataBase\Contracts\Migrate;
use CashInAdvance\Models\Settings;
use CashInAdvance\Services\SettingsService;

/** This migration initializes all Settings in the Database */
class CreateSettings_1_0_0
{

    use \Plenty\Plugin\Log\Loggable;

    public function run(Migrate $migrate)
    {
        try
        {
            $migrate->createTable(Settings::class);
            $this->setInitialSettings();
        }
        catch(\Exception $e)
        {
            echo $e->getMessage();
        }

    }

    private function setInitialSettings()
    {
        /** @var SettingsService $service */
        $service = pluginApp(SettingsService::class);
        $clients = $service->getClients();

        foreach(Settings::AVAILABLE_LANGUAGES as $lang)
        {
            foreach ($clients as $plentyId)
            {
                $service->createInitialSettingsForPlentyId($plentyId, $lang);
            }
        }
    }

}