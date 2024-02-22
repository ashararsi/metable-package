<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use anlutro\LaravelSettings\Facade as Settings;
class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        setting(['site_name' => 'My Site'])->save();
        setting(['logo_color' => 'red'])->save();
        setting(['max_items_per_page' => rand(5, 20)])->save();

        for ($i = 1; $i <= 10; $i++) {
            setting(["setting_key_$i" =>  $this->generateRandomValue()])->save();
        }
    }
    private function generateRandomValue()
    { 
        return rand(1, 100);
    }
}
