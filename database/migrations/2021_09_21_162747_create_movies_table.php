<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->string('movie_title')->unique();
            $table->text('descriptio');
            $table->text('filepath');
            $table->double('rating', 3, 2);
        });



        //For Demo Purposes Only..!!
        DB::table('movies')->insert([
            ['movie_title' => 'Venom',
            'descriptio' => 'A reporter battles a mad scientist in a 
            fight for his life after merging with a snarky alien symbiote that gives him remarkable superpowers.',
            'filepath' => 'images/venom.jpg',
            'rating' =>3.2],

            ['movie_title' => 'Sponge on the Run',
            'descriptio' => 'When his best friend Gary is suddenly snatched away, 
            SpongeBob takes Patrick on a madcap mission far beyond Bikini Bottom to save their pink-shelled pal.',
            'filepath' => 'images/spongbob.jpg',
            'rating' =>9.3],
            
            ['movie_title' => 'Bird Box',
            'descriptio' => 'Five years after an ominous unseen presence drives most of society to suicide, 
            a survivor and her two children make a desperate bid to reach safety.',
            'filepath' => 'images/birdbox.jpg',
            'rating' =>5.6],

            ['movie_title' => 'White House Down',
            'descriptio' => 'When a paramilitary group engineers a violent takeover of the White House, 
            the president must try to hide from the attackers until he can be rescued.',
            'filepath' => 'images/whithouse.jpg',
            'rating' =>8.2],

            ['movie_title' => 'Gemini Man',
            'descriptio' => 'A recently-retired sniper faces off with a younger, 
            stronger, cloned version of himself that a covert government agency has engineered to kill him.',
            'filepath' => 'images/geminiman.jpg',
            'rating' =>2.2],

            ['movie_title' => 'Fury',
            'descriptio' => ' green recruit experiences the horror of war with a veteran 
            American tank crew during the vicious combat of World War II\'s waning days.',
            'filepath' => 'images/fury.jpg',
            'rating' =>5.2],

            ['movie_title' => 'The Mask',
            'descriptio' => 'A hapless bank teller discovers an ancient mask that turns him into a 
            zany prankster who acts on his deepest desires.',
            'filepath' => 'images/mask.jpg',
            'rating' =>8.4],

            ['movie_title' => 'Kate',
            'descriptio' => 'Slipped a fatal poison on her final job, a ruthless assassin working in 
            Tokyo has less than 24 hours to find out who ordered the hit and exact revenge.',
            'filepath' => 'images/kate.jpg',
            'rating' =>4.5]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
