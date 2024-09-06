<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Game;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'G/',
            'email' => 'g@tx.email',
        ]);

        Genre::create(['name' => 'Action']);
        Genre::create(['name' => 'Adventure']);
        Genre::create(['name' => 'Role-Playing']);
        Genre::create(['name' => 'Simulation']);
        Genre::create(['name' => 'Strategy']);
        Genre::create(['name' => 'Sports']);
        Genre::create(['name' => 'Puzzle']);
        Genre::create(['name' => 'Idle']);
        Genre::create(['name' => 'Horror']);
        Genre::create(['name' => 'Racing']);
        Genre::create(['name' => 'FPS']);
        Genre::create(['name' => 'RTS']);
        Genre::create(['name' => 'MOBA']);
        Genre::create(['name' => 'Survival']);
        Genre::create(['name' => 'Open World']);
        Genre::create(['name' => 'Sandbox']);
        Genre::create(['name' => 'Roguelike']);
        Genre::create(['name' => 'Metroidvania']);
        Genre::create(['name' => 'Platformer']);

        $game = Game::create([
            'title' => 'The Legend of Zelda: Breath of the Wild',
            'release_year' => 2017,
            'editor' => 'Nintendo',
            'igdb_id' => 7346,
        ]);
        $game->genres()->attach(Genre::where('name', 'Adventure')->first()->id);

        $game = Game::create([
            'title' => 'The Witcher 3: Wild Hunt',
            'release_year' => 2015,
            'editor' => 'CD Projekt',
            'igdb_id' => 1942,
        ]);
        $game->genres()->attach(Genre::where('name', 'Role-Playing')->first()->id);

        $game = Game::create([
            'title' => 'Red Dead Redemption 2',
            'release_year' => 2018,
            'editor' => 'Rockstar Games',
            'igdb_id' => 25076,
        ]);
        $game->genres()->attach(Genre::where('name', 'Action')->first()->id);

        $game = Game::create([
            'title' => 'God of War',
            'release_year' => 2018,
            'editor' => 'Santa Monica Studio',
            'igdb_id' => 19560,
        ]);
        $game->genres()->attach(Genre::where('name', 'Action')->first()->id);

        $game = Game::create([
            'title' => 'Minecraft',
            'release_year' => 2011,
            'editor' => 'Mojang',
            'igdb_id' => 135400,
        ]);
        $game->genres()->attach(Genre::where('name', 'Sandbox')->first()->id);

        $game = Game::create([
            'title' => 'Fortnite',
            'release_year' => 2017,
            'editor' => 'Epic Games',
            'igdb_id' => 1905,
        ]);
        $game->genres()->attach(Genre::where('name', 'FPS')->first()->id);

        $game = Game::create([
            'title' => 'Overwatch',
            'release_year' => 2016,
            'editor' => 'Blizzard Entertainment',
            'igdb_id' => 8173,
        ]);
        $game->genres()->attach(Genre::where('name', 'FPS')->first()->id);

        $game = Game::create([
            'title' => 'Overwatch 2',
            'release_year' => 2023,
            'editor' => 'Blizzard Entertainment',
            'igdb_id' => 125174,
        ]);
        $game->genres()->attach(Genre::where('name', 'FPS')->first()->id);

        $game = Game::create([
            'title' => 'Grand Theft Auto V',
            'release_year' => 2013,
            'editor' => 'Rockstar North',
            'igdb_id' => 1020,
        ]);
        $game->genres()->attach(Genre::where('name', 'Open World')->first()->id);

        $game = Game::create([
            'title' => 'Dark Souls III',
            'release_year' => 2016,
            'editor' => 'Bandai Namco Entertainment',
            'igdb_id' => 11133,
        ]);
        $game->genres()->attach(Genre::where('name', 'Action')->first()->id);

        $game = Game::create([
            'title' => 'Horizon Zero Dawn',
            'release_year' => 2017,
            'editor' => 'Guerrilla Games',
            'igdb_id' => 11156,
        ]);
        $game->genres()->attach(Genre::where('name', 'Action')->first()->id);

        $game = Game::create([
            'title' => 'Persona 5',
            'release_year' => 2016,
            'editor' => 'Atlus',
            'igdb_id' => 9927,
        ]);
        $game->genres()->attach(Genre::where('name', 'Role-Playing')->first()->id);

        $game = Game::create([
            'title' => 'The Elder Scrolls V: Skyrim',
            'release_year' => 2011,
            'editor' => 'Bethesda Game Studios',
        ]);
        $game->genres()->attach(Genre::where('name', 'Role-Playing')->first()->id);

        $game = Game::create([
            'title' => 'Bloodborne',
            'release_year' => 2015,
            'editor' => 'FromSoftware',
            'igdb_id' => 472,
        ]);
        $game->genres()->attach(Genre::where('name', 'Action')->first()->id);

        $game = Game::create([
            'title' => 'The Last of Us Part II',
            'release_year' => 2020,
            'editor' => 'Naughty Dog',
            'igdb_id' => 26192,
        ]);
        $game->genres()->attach(Genre::where('name', 'Action')->first()->id);

        $game = Game::create([
            'title' => 'Cyberpunk 2077',
            'release_year' => 2020,
            'editor' => 'CD Projekt',
            'igdb_id' => 1877,
        ]);
        $game->genres()->attach(Genre::where('name', 'Role-Playing')->first()->id);

        $game = Game::create([
            'title' => 'Animal Crossing: New Horizons',
            'release_year' => 2020,
            'editor' => 'Nintendo',
            'igdb_id' => 109462,
        ]);
        $game->genres()->attach(Genre::where('name', 'Simulation')->first()->id);

        $game = Game::create([
            'title' => 'Doom Eternal',
            'release_year' => 2020,
            'editor' => 'id Software',
        ]);
        $game->genres()->attach(Genre::where('name', 'FPS')->first()->id);

        $game = Game::create([
            'title' => 'Sekiro: Shadows Die Twice',
            'release_year' => 2019,
            'editor' => 'FromSoftware',
            'igdb_id' => 103298,
        ]);
        $game->genres()->attach(Genre::where('name', 'Action')->first()->id);

        $game = Game::create([
            'title' => 'Resident Evil 2',
            'release_year' => 2019,
            'editor' => 'Capcom',
            'igdb_id' => 19686,
        ]);
        $game->genres()->attach(Genre::where('name', 'Horror')->first()->id);

        $game = Game::create([
            'title' => 'Assassin\'s Creed Valhalla',
            'release_year' => 2020,
            'editor' => 'Ubisoft Montreal',
            'igdb_id' => 133004,
        ]);
        $game->genres()->attach(Genre::where('name', 'Action')->first()->id);
    }
}
