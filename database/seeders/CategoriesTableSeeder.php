<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Headlights category and its subcategories
        $headlights = Category::create(['name' => 'Headlights',]);

        $tailLights = Category::create([
            'name' => 'Tail Lights',
            'parent_id' => $headlights->id,
        ]);

        $fogLights = Category::create([
            'name' => 'Fog Lights',
            'parent_id' => $headlights->id,
        ]);

        $turnSignals = Category::create([
            'name' => 'Turn Signals',
            'parent_id' => $headlights->id,
        ]);

        $switchesRelays = Category::create([
            'name' => 'Switches & Relays',
            'parent_id' => $headlights->id,
        ]);

        // Fuel System category and its subcategories
        $fuelSystem = Category::create(['name' => 'Fuel System',]);

        $fuelPumps = Category::create([
            'name' => 'Fuel Pumps',
            'parent_id' => $fuelSystem->id,
        ]);

        $motorOil = Category::create([
            'name' => 'Motor Oil',
            'parent_id' => $fuelSystem->id,
        ]);

        $sparkPlugs = Category::create([
            'name' => 'Spark Plugs',
            'parent_id' => $fuelSystem->id,
        ]);

        $fuelInjector = Category::create([
            'name' => 'Fuel Injector',
            'parent_id' => $fuelSystem->id,
        ]);

        $controlMotor = Category::create([
            'name' => 'Control Motor',
            'parent_id' => $fuelSystem->id,
        ]);

        // Body Parts category and its subcategories
        $bodyParts = Category::create([
            'name' => 'Body Parts',
        ]);

        $bumpers = Category::create([
            'name' => 'Bumpers',
            'parent_id' => $bodyParts->id,
        ]);

        $hoods = Category::create([
            'name' => 'Hoods',
            'parent_id' => $bodyParts->id,
        ]);

        $grilles = Category::create([
            'name' => 'Grilles',
            'parent_id' => $bodyParts->id,
        ]);

        $doorHandles = Category::create([
            'name' => 'Door Handles',
            'parent_id' => $bodyParts->id,
        ]);

        // Interior Parts category and its subcategories
        $interiorParts = Category::create([
            'name' => 'Interior Parts',
        ]);

        $dashboards = Category::create([
            'name' => 'Dashboards',
            'parent_id' => $interiorParts->id,
        ]);

        $seatCovers = Category::create([
            'name' => 'Seat Covers',
            'parent_id' => $interiorParts->id,
        ]);

        $floorMats = Category::create([
            'name' => 'Floor Mats',
            'parent_id' => $interiorParts->id,
        ]);

        $sunShades = Category::create([
            'name' => 'Sun Shades',
            'parent_id' => $interiorParts->id,
        ]);

        $visors = Category::create([
            'name' => 'Visors',
            'parent_id' => $interiorParts->id,
        ]);

        // Wheels & Tires category and its subcategories
        $wheelsTires = Category::create([
            'name' => 'Wheels & Tires',
        ]);

        $wheelCovers = Category::create([
            'name' => 'Wheel Covers',
            'parent_id' => $wheelsTires->id,
        ]);

        $brakeKits = Category::create([
            'name' => 'Brake Kits',
            'parent_id' => $wheelsTires->id,
        ]);

        $tireChains = Category::create([
            'name' => 'Tire Chains',
            'parent_id' => $wheelsTires->id,
        ]);

        $wheelDisks = Category::create([
            'name' => 'Wheel Disks',
            'parent_id' => $wheelsTires->id,
        ]);

        $tires = Category::create([
            'name' => 'Tires',
            'parent_id' => $wheelsTires->id,
        ]);

        // Engine & Drivetrain category and its subcategories
        $engineDrivetrain = Category::create([
            'name' => 'Engine & Drivetrain',
        ]);

        $airFilters = Category::create([
            'name' => 'Air Filters',
            'parent_id' => $engineDrivetrain->id,
        ]);

        $oxygenSensors = Category::create([
            'name' => 'Oxygen Sensors',
            'parent_id' => $engineDrivetrain->id,
        ]);

        $heating = Category::create([
            'name' => 'Heating',
            'parent_id' => $engineDrivetrain->id,
        ]);

        $exhaust = Category::create([
            'name' => 'Exhaust',
            'parent_id' => $engineDrivetrain->id,
        ]);

        $cranksPistons = Category::create([
            'name' => 'Cranks & Pistons',
            'parent_id' => $engineDrivetrain->id,
        ]);
    }
}
