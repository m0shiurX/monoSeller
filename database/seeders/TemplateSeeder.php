<?php

namespace Database\Seeders;

use App\Models\Template;
use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $templates = [
            [
                'name' => 'Default',
                'path' => 'themes.default',
                'template_fields' => json_encode([
                    [
                        'name' => 'Heading',
                        'type' => 'text',
                        'required' => true,
                        'placeholder' => 'Enter your heading here',
                    ],
                    [
                        'name' => 'Description',
                        'type' => 'textarea',
                        'required' => true,
                        'placeholder' => 'Enter your description here',
                    ],
                ]),
            ]
        ];

        Template::insert($templates);
    }
}
