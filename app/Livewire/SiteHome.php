<?php

namespace App\Livewire;

use Livewire\Component;

class SiteHome extends Component
{
    public $courseCategories;
    public $openCategories = [];

    public function mount()
    {
        // Dummy data for course categories
        $this->courseCategories = [
            [
                'id' => 1,
                'name' => 'Digital Literacy',
                'courses' => [
                    ['id' => 1, 'name' => 'ภาควิชาเคมี '],
                    ['id' => 2, 'name' => 'ภาควิชาชีววิทยา'],
                ]
            ],
            [
                'id' => 2,
                'name' => 'คณะวิทยาศาสตร์',
                'courses' => [
                    ['id' => 1, 'name' => 'ภาควิชาเคมี '],
                    ['id' => 2, 'name' => 'ภาควิชาชีววิทยา'],
                ]
            ],
            [
                'id' => 3,
                'name' => 'วิทยาลัยครูสุริยเทพ',
                'courses' => [
                    ['id' => 3, 'name' => 'สาขาวิชาวิทยาเอ็นโดดอนต์ '],

                ]
            ],
        ];
    }

    public function toggleCategory($categoryId)
    {
        if (in_array($categoryId, $this->openCategories)) {
            $this->openCategories = array_diff($this->openCategories, [$categoryId]);
        } else {
            $this->openCategories[] = $categoryId;
        }
    }

    public function toggleAll()
    {
        if (count($this->openCategories) === count($this->courseCategories)) {
            $this->openCategories = [];
        } else {
            $this->openCategories = array_map(function ($category) {
                return $category['id'];
            }, $this->courseCategories);
        }
    }
    public function render()
    {
        return view('livewire.site-home');
    }
}
