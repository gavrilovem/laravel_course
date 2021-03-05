<?php


namespace App\Services;


class CategoriesService
{
    protected $categories = [
        [
            'id' => '0',
            'name' => 'Politics'
        ],
        [
            'id' => '1',
            'name' => 'Money'
        ],
        [
            'id' => '2',
            'name' => 'Weather'
        ],
        [
            'id' => '3',
            'name' => 'Sport'
        ],
        [
            'id' => '4',
            'name' => 'Accidents'
        ]
    ];

    public function getCategories(): array {
        return $this->categories;
    }
}
