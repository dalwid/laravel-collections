<?php

namespace App\Http\Controllers;

use App\Library\Collection;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $data = [
            ['firstName' => 'David',     'lastName' => 'Teixeira', 'age' => 39],
            ['firstName' => 'Avraham',   'lastName' => 'Peretz',   'age' => 35],
            ['firstName' => 'Neri',      'lastName' => 'Neitzke',  'age' => 50],
            ['firstName' => 'Alexandre', 'lastName' => 'Cardoso',  'age' => 42],
            ['firstName' => 'Joana',     'lastName' => 'Maria',    'age' => 28],
            ['firstName' => 'Carolina',  'lastName' => 'Marques',  'age' => 42],
        
        ];

        $collection  = new Collection($data);

        // $result =  array_map(function($item){ return $item['firstName']; }, $data);
        // $result = $collection->map(function($item){ return $item['firstName']; });

        // $result = array_filter($data, function($item){ return $item['age'] > 30; });
        // $result = $collection->filter(fn($item) => $item['age'] < 30 );

        // $result= $collection->pluck('age')->sum();
        // $result= $collection->pluck('age')->isNotEmpty();
        // $result= $collection->contains('firstName', 'Avraham');

        // $result= $collection->filter(fn($item) => $item['age'] > 27 );
        // echo $result;

        // var_dump($result);

        // foreach ($result->get() as $r) {
        //     echo '<pre>';
        //     var_dump($r['firstName']);
        // }

        /* $collection = collect($data);
        var_dump($collection); */

        $user = new User();
        $result = $user->all()->pluck('firstName');
        echo '<pre>';
        var_dump($result);
        echo '</pre>';

        die();
        
        // return view('home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
