<?php
    namespace App\Models;

class Listing {
    public static function all() {
        return  [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Veniam commodo minim aute velit qui quis cupidatat et cupidatat Lorem. Ad nostrud sint voluptate enim fugiat laboris velit occaecat nostrud occaecat consectetur qui amet irure. Nisi anim aliqua qui voluptate sint dolore. Qui nisi eu aliqua tempor irure incididunt commodo ipsum elit. Sint cupidatat consequat dolore minim occaecat exercitation eiusmod.',
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Veniam commodo minim aute velit qui quis cupidatat et cupidatat Lorem. Ad nostrud sint voluptate enim fugiat laboris velit occaecat nostrud occaecat consectetur qui amet irure. Nisi anim aliqua qui voluptate sint dolore. Qui nisi eu aliqua tempor irure incididunt commodo ipsum elit. Sint cupidatat consequat dolore minim occaecat exercitation eiusmod.',
            ]
            ];
    }
    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if($listing['id'] == $id){
                return $listing;
            }
        }

    }
}

?>
