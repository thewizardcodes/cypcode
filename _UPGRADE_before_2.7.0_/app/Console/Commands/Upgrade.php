<?php
/**
 *   1Stake iGaming Platform
 *   -----------------------
 *   Upgrade.php
 * 
 *   @copyright  Copyright (c) 1stake, All rights reserved
 *   @author     1stake <sales@1stake.app>
 *   @see        https://1stake.app
*/

namespace App\Console\Commands;

use App\Facades\Manager;
use App\Services\ArtisanService;
use Illuminate\Console\Command;

class Upgrade extends Command
{
    
    protected $signature = 'app:upgrade';

    
    protected $description = 'Upgrade the application to the latest version';

    
    public function handle()
    {
        set_time_limit(600);
        Manager::download(env(FP_CODE), env(FP_EMAIL));
        ArtisanService::migrateAndSeed();
        ArtisanService::clearAllCaches();
    }
}
