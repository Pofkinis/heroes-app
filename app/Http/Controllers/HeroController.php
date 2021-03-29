<?php

namespace App\Http\Controllers;

use App\Http\Requests\HeroRequest;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function indexUserHeroes()
    {
        $heroes = Hero::where('user_id', auth()->id())->get();
        return view('user-hero-dashboard', compact('heroes'));
    }

    public function showFavorites()
    {
        $heroes = auth()->user()->heroes;
        return view('heroes.favorites', compact('heroes'));
    }

    public function show($id)
    {
        $hero = Hero::find($id);
        return view('heroes.details', compact('hero'));
    }

    public function create()
    {
        return view('heroes.create');
    }
    public function store(HeroRequest $request)
    {
        $heroImage = $request->image->store('heroes');

        $hero = auth()->user()->hero()->create([
            'name' => $request->name,
            'image' => $heroImage,
            'api_id' => 5
        ]);

        $hero->biography()->create([
            'full_name' => $request->full_name,
            'alter_egos' => $request->alter_egos,
            'place_of_birth' => $request->place_of_birth,
            'first_appearance' => $request->first_appearance,
            'publisher' => $request->publisher,
            'alignment' => $request->alignment,
        ]);

        $hero->powerStats()->create([
            'intelligence' => $request->intelligence,
            'strength' => $request->strength,
            'speed' => $request->speed,
            'durability' => $request->durability,
            'power' => $request->power,
            'combat' => $request->combat,
        ]);

        $hero->appearance()->create([
            'gender' => $request->gender,
            'race' => $request->race,
            'height' => $request->height,
            'weight' => $request->weight,
            'eye_color' => $request->eye_color,
            'hair_color' => $request->hair_color,
        ]);

        $hero->work()->create([
            'occupation' => $request->occupation,
            'base' => $request->base,
        ]);

        $hero->aliases()->create([
            'alias' => $request->alias,
        ]);

        $hero->connections()->create([
            'group_affiliation' => $request->group_affiliation,
            'relatives' => $request->relatives,
        ]);

        return redirect()->route('heroes.manage');
    }

    public function edit(Hero $hero)
    {
        return view('heroes.edit', compact('hero'));
    }

    public function update(HeroRequest $request, Hero $hero)
    {
        $heroImage = $request->image->store('heroes');

        $hero->update([
            'name' => $request->name,
            'image' => $heroImage,
            'api_id' => 5
        ]);

        $hero->biography()->update([
            'full_name' => $request->full_name,
            'alter_egos' => $request->alter_egos,
            'place_of_birth' => $request->place_of_birth,
            'first_appearance' => $request->first_appearance,
            'publisher' => $request->publisher,
            'alignment' => $request->alignment,
        ]);

        $hero->powerStats()->update([
            'intelligence' => $request->intelligence,
            'strength' => $request->strength,
            'speed' => $request->speed,
            'durability' => $request->durability,
            'power' => $request->power,
            'combat' => $request->combat,
        ]);

        $hero->appearance()->update([
            'gender' => $request->gender,
            'race' => $request->race,
            'height' => $request->height,
            'weight' => $request->weight,
            'eye_color' => $request->eye_color,
            'hair_color' => $request->hair_color,
        ]);

        $hero->work()->update([
            'occupation' => $request->occupation,
            'base' => $request->base,
        ]);

        $hero->aliases()->update([
            'alias' => $request->alias,
        ]);

        $hero->connections()->update([
            'group_affiliation' => $request->group_affiliation,
            'relatives' => $request->relatives,
        ]);

        return redirect()->route('heroes.manage')->with('success', 'Your hero has been updated');
    }

    public function destroy(Hero $hero)
    {
        $hero->delete();
        return redirect()->route('heroes.manage')->with('success', 'Your hero has been deleted');
    }
}
