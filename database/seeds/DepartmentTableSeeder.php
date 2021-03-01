<?php

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $departments=[
            [
                "name" => 'Surgery',
                "description"=>'Surgery Unit',
            ],
            [
            "name" => 'Surgery 2',
            "description"=>'Surgery Unit 2',
            ],
            [
                "name" => 'Surgery 3',
                "description"=>'Surgery Unit 3',
            ],
            [
                "name" => 'Surgery 4',
                "description"=>'Surgery Unit 4',
            ],
            [
                "name" => 'Surgery 5',
                "description"=>'Surgery Unit 5',
            ]
        ];
        foreach ($departments as $department){
            Department::create($department);
        }
    }
}
