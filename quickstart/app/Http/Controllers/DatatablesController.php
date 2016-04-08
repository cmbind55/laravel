<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests;
use Yajra\Datatables\Datatables;
use Raphaelb\ClashOfApi\Clash;
use Log;
use Faker;


class DatatablesController extends Controller
{
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('leaders');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        Log::debug('DatatablesController:anyData() reached.');

	    // $id = "9UCULY09";
	    // $clash = new Clash();
	    // $data = $clash->getClan($id)->getLeaders();
	    // echo '<pre>'; print_r($data); echo '</pre>';

       	$faker = Faker\Factory::create();

		$data  = [];
		for ($i = 0; $i < 10; $i++) {
			$obj = new \stdClass;
			$obj->tag = $i + 1;
			$obj->name = $faker->name;
			$obj->role = $faker->email;
			$obj->expLevel = $faker->numerify('###');
			$obj->league = $faker->numerify('###');
			$obj->trophies = $faker->numerify('###');
			$obj->clanRank = $faker->numerify('###');
			$obj->previousClanRank = $faker->numerify('###');
			$obj->donations = $faker->numerify('###');
			$obj->donationsReceived = $faker->numerify('###');
			$data[] = $obj;
           // { data: 'tag', name: 'id' },
           //  { data: 'name', name: 'name' },
           //  { data: 'role', name: 'email' },
           //  { data: 'expLevel', name: 'expLevel' },
           //  { data: 'league', name: 'league' },
           //  { data: 'trophies', name: 'trophies' },
           //  { data: 'clanRank', name: 'clanRank' },
           //  { data: 'previousClanRank', name: 'previousClanRank' },
           //  { data: 'donations', name: 'donations' }
           //  { data: 'donationsReceived', name: 'donationsReceived' }

		}

	    // echo '<pre>'; print_r($data); echo '</pre>';

	    $leaders = new Collection($data);

	    return Datatables::of($leaders)->make(true);
        // return Datatables::of(User::query())->make(true);
    }

}
