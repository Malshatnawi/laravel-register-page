<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/users', function () {
//     return view('users');
// });


Route::get('trainees', 'traineesController@index');

Route::get('traineeprofile/{id}', 'traineesController@profile');

Route::get('reports', 'traineesController@report');

Route::get('gallery', 'traineesController@gallery');




Route::get('students', 'StudentController@CRUD');



Route::post('/users', 'EmployeeController@index');

Route::get('/users', 'EmployeeController@form');



// Route::get('/editEmployees', function () {
//     return view('editEmployees');
// });



Route::get('/userstable', 'EmployeeController@show');

Route::get('userstable/{employee_id}', 'EmployeeController@delete');

Route::get('editEmployees/{employee_id}', 'EmployeeController@edit');


Route::post('editEmployees/userstable/{employee_id}', 'EmployeeController@update');


























// Route::get('/trainees', function () {

    
//     $students= array(
//         "0"=>array(
    
//             "name"=>"adam",
//             "birthday"=>"14_June",
//             "github"=>"​https://github.com/oca-class-b",
//             "image"=>"https://dmxg5wxfqgb4u.cloudfront.net/styles/background_image_xl/s3/2020-03/khabib-hero.jpg?MZVx4WF2p_Jp67BAEktXoxrajJdDeqpH&itok=626AGTtB",
//             "linkedin"=>"https://www.linkedin.com/feed/",
//             "projects"=>array(
//                 "0" => array ( 
//                     "project_name"=>"project1",
//                     "is_complicated"=>"yes"),
    
//                 "1" => array ( 
//                     "project_name"=>"project2",
//                     "is_complicated"=>"no")
//             )
    
            
//                 ),


//                 "1"=>array(
    
//                     "name"=>"ahmad",
//                     "birthday"=>"18_June",
//                     "github"=>"​https://github.com/oca-class-b",
//                     "image"=>"https://cdn-wp.thesportsrush.com/2020/09/Khamzat-Chimaev-next-fight.jpg",

//                     "linkedin"=>"https://www.linkedin.com/feed/",
//                     "projects"=>array(
//                         "0" => array ( 
//                             "project_name"=>"project1",
//                             "is_complicated"=>"yes"),
            
//                         "1" => array ( 
//                             "project_name"=>"project2",
//                             "is_complicated"=>"no")
//                     )
            
                    
//                         ),
    
    
//         );


//     return view('trainees', compact('students'));
// });

