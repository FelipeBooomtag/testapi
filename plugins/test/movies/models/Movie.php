<?php namespace Test\Movies\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'test_movies_';


    public $belongsToMany= [

        'genres' => [
            'Test\Movies\Models\Genre', 
            'table' => 'test_movies_movies_genres',
            'order' => 'genre_title'
        ]

    ];

    protected $jsonable = ['actors'];

    // relations fileupload

    public $attachOne = [

        'poster' => 'System\Models\File'

    ];

    public $attachMany = [

        'movie_gallery' => 'System\Models\File'

    ];


    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
