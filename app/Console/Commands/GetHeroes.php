<?php

namespace App\Console\Commands;

use App\HeroesAPI\HeroAPI;
use App\Models\Appearance;
use App\Models\Biography;
use App\Models\Alias;
use App\Models\Connection;
use App\Models\Work;
use Illuminate\Console\Command;
use App\Models\Hero;
use App\Models\PowerStat;

class GetHeroes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:heroes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch heroes result from API';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        try {
            $heroAPI = new HeroAPI();
            $results = $heroAPI->getHeroes();

            foreach ($results as $result) {
                $hero = Hero::updateOrCreate([
                    'api_id' => $result->id
                ], [
                    'api_id' => $result->id,
                    'name' => $result->name,
                    'image' => $result->image->url,
                ]);

                $hero->biography()->updateOrCreate([
                    'hero_id' => $hero->id,
                ], [
                    'full_name' => $result->biography->{'full-name'},
                    'alter_egos' => $result->biography->{'alter-egos'},
                    'place_of_birth' => $result->biography->{'place-of-birth'},
                    'first_appearance' => $result->biography->{'first-appearance'},
                    'publisher' => $result->biography->{'publisher'},
                    'alignment' => $result->biography->{'alignment'},
                ]);

                if ($result->biography->aliases[0] != '-') {
                    foreach ($result->biography->aliases as $alias) {
                        $hero->aliases()->updateOrCreate([
                            'hero_id' => $hero->id
                        ], [
                            'alias' => $alias
                        ]);
                    }
                }

                $hero->appearance()->updateOrCreate([
                    'hero_id' => $hero->id,
                ], [
                    'gender' => $result->appearance->gender,
                    'race' => $result->appearance->race,
                    'height' => array(
                        "lb" => $result->appearance->weight[0] ?? '-',
                        "kg" => $result->appearance->weight[1] ?? 0
                    ),
                    'weight' => array(
                        "ft" => $result->appearance->height[0] ?? '-',
                        "cm" => $result->appearance->height[1] ?? 0
                    ),
                    'eye_color' => $result->appearance->{'eye-color'},
                    'hair_color' => $result->appearance->{'hair-color'},
                ]);

                $hero->work()->updateOrCreate([
                    'hero_id' => $hero->id,
                ], [
                    'occupation' => $result->work->occupation,
                    'base' => $result->work->base,
                ]);

                $hero->powerStats()->updateOrCreate([
                    'hero_id' => $hero->id
                ], [
                    'intelligence' => $result->powerstats->intelligence != 'null'
                        ?  $result->powerstats->intelligence
                        : null,
                    'strength' =>
                        $result->powerstats->strength != 'null'
                            ?  $result->powerstats->strength :
                            null,
                    'speed' => $result->powerstats->speed != 'null'
                        ?  $result->powerstats->speed
                        : null,
                    'durability' => $result->powerstats->durability != 'null'
                        ?  $result->powerstats->durability
                        : null,
                    'power' => $result->powerstats->power != 'null'
                        ?  $result->powerstats->power
                        : null,
                    'combat' => $result->powerstats->combat != 'null'
                        ?  $result->powerstats->combat
                        : null,
                ]);

                $hero->connections()->updateOrCreate([
                    'hero_id' => $hero->id,
                ], [
                    'group_affiliation' => $result->connections->{'group-affiliation'},
                    'relatives' => $result->connections->relatives,
                ]);

                $this->output->success($hero->name . ' data was added/updated.');
            }

            $this->output->success('Heroes has been fetched.');
        } catch (\Exception $exception) {
            $this->output->error($exception->getMessage());
        }
    }
}
