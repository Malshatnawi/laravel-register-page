<?php

namespace App\Http\Controllers;

use App\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    



    public function CRUD(){
        // Student::create([
        //     "name"=>"Hamza",
        //     "GPA"=>3.55,
        //     "Description"=>"V.Good"

        // ]);

        $all_students =Student::all();
        // return ($all_students[2]['name']);
        $student_by_col_name=Student::where('GPA',2.25)->get();
        // return ($student_by_col_name);
        $student_by_id=Student::find(2);
        // return ($student_by_id);
        $delete_by_id=Student::destroy(2);

        $delete_by_col_name=Student::where('name', 'Laith')->delete();

        $update_by_col_name =Student::where("GPA" , 3.55)->update(
            [
                'GPA'=>'3.45',
            ]
            );


        return($all_students);

    }
}
 