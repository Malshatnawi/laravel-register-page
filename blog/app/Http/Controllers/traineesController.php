<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class traineesController extends Controller
{
    public function index(){
        $students= array(
            "0"=>array(
        
                "name"=>"Ahmad Aburumman",
                "birthday"=>"14 June",
                "age"=>"24",
                "github"=>"​https://github.com/oca-class-b",
                "image"=>"https://pbs.twimg.com/profile_images/3588724423/29515ac05616d17d11689468681f8eda.jpeg",
                "linkedin"=>"https://www.linkedin.com/feed/",
                "projects"=>array(
                    "0" => array ( 
                        "project_name"=>"project1",
                        "is_complicated"=>"yes"),
        
                    "1" => array ( 
                        "project_name"=>"project2",
                        "is_complicated"=>"no")
                    ),
        
                "hobbies"=>array(
                        "0" => "Football",
            
                        "1" => "Coding",
        
                        "2" => "Reading"),
        
                    "attendance"=>array(
                        "0" => array ( 
                            "check_in"=>"9:00",
                            "check_out"=>"16:00"),
            
                        "1" => array ( 
                            "check_in"=>"9:05",
                            "check_out"=>"16:10")
                    )
        
                
                    ),
        
        
                    "1"=>array(
        
                        "name"=>"Adam Abusamra",
                        "birthday"=>"18 July",
                        "age"=>"19",
        
                        "github"=>"​https://github.com/oca-class-b",
                        "image"=>"https://cdn141.picsart.com/236574517091202.jpg?type=webp&to=crop&r=256",
        
                        "linkedin"=>"https://www.linkedin.com/feed/",
                        "projects"=>array(
                            "0" => array ( 
                                "project_name"=>"project1",
                                "is_complicated"=>"yes"),
                
                            "1" => array ( 
                                "project_name"=>"project2",
                                "is_complicated"=>"no")
                            ),
        
                            "hobbies"=>array(
                                "0" => "Video Games",
                    
                                "1" => "Coding",
                
                                "2" => "Writing"),
                        
                            "attendance"=>array(
                                "0" => array ( 
                                    "check_in"=>"9:00",
                                    "check_out"=>"16:00"),
                    
                                "1" => array ( 
                                    "check_in"=>"9:05",
                                    "check_out"=>"16:10")
                            )
                
                        
                            ),
        
        
                            "2"=>array(
        
                                "name"=>"Laith Alenooz",
                                "birthday"=>"11 December",
                                "age"=>"25",
                
                                "github"=>"​https://github.com/oca-class-b",
                                "image"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRov3SuL4MgHuCzGyyA_N0anBN6eOyHecJ6iA&usqp=CAU",
                
                                "linkedin"=>"https://www.linkedin.com/feed/",
                                "projects"=>array(
                                    "0" => array ( 
                                        "project_name"=>"project1",
                                        "is_complicated"=>"yes"),
                        
                                    "1" => array ( 
                                        "project_name"=>"project2",
                                        "is_complicated"=>"no"),
        
                                    "2" => array ( 
                                            "project_name"=>"project2",
                                            "is_complicated"=>"no")
                                    ),
                
                                    "hobbies"=>array(
                                        "0" => "Video Games",
                            
                                        "1" => "Coding",
                        
                                        "2" => "Chess"),
                                
                                    "attendance"=>array(
                                        "0" => array ( 
                                            "check_in"=>"9:00",
                                            "check_out"=>"16:00"),
                            
                                        
                                    )
                        
                                
                                    ),

                                    "3"=>array(

                                        "name"=>"Hamza Obeidat",
                                        "birthday"=>"05 May",
                                        "age"=>"25",
                        
                                        "github"=>"​https://github.com/oca-class-b",
                                        "image"=>"https://pbs.twimg.com/profile_images/3495680679/9383039e9255694d300c205ed298c65d.jpeg",
                        
                                        "linkedin"=>"https://www.linkedin.com/feed/",
                                        "projects"=>array(
                                            "0" => array ( 
                                                "project_name"=>"project1",
                                                "is_complicated"=>"yes"),
                                
                                            "1" => array ( 
                                                "project_name"=>"project2",
                                                "is_complicated"=>"no"),
                
                                            "2" => array ( 
                                                    "project_name"=>"project2",
                                                    "is_complicated"=>"no")
                                            ),
                        
                                            "hobbies"=>array(
                                                "0" => "Movies",
                                    
                                                "1" => "Coding",
                                
                                                "2" => "Football"),
                                        
                                            "attendance"=>array(
                                                "0" => array ( 
                                                    "check_in"=>"9:00",
                                                    "check_out"=>"16:00"),
                                                "1" => array ( 
                                                    "check_in"=>"9:05",
                                                    "check_out"=>"16:00"),
                                                    "2" => array ( 
                                                        "check_in"=>"9:10",
                                                        "check_out"=>"16:30"),
        
        
                                    
                                                
                                            )
                                
                                        
                                            ),
        
        
            );

        return view('trainees', compact('students'));
    }

    public function profile($key){
        // $key = $request->key;
        // echo $key;
        $students= array(
        "0"=>array(

        "name"=>"Ahmad Aburumman",
        "birthday"=>"14 June",
        "age"=>"24",
        "github"=>"​https://github.com/oca-class-b",
        "image"=>"https://pbs.twimg.com/profile_images/3588724423/29515ac05616d17d11689468681f8eda.jpeg",
        "linkedin"=>"https://www.linkedin.com/feed/",
        "projects"=>array(
            "0" => array ( 
                "project_name"=>"project1",
                "is_complicated"=>"yes"),

            "1" => array ( 
                "project_name"=>"project2",
                "is_complicated"=>"no")
            ),

        "hobbies"=>array(
                "0" => "Football",
    
                "1" => "Coding",

                "2" => "Reading"),

            "attendance"=>array(
                "0" => array ( 
                    "check_in"=>"9:00",
                    "check_out"=>"16:00"),
    
                "1" => array ( 
                    "check_in"=>"9:05",
                    "check_out"=>"16:10")
            )

        
            ),


            "1"=>array(

                "name"=>"Adam Abusamra",
                "birthday"=>"18 July",
                "age"=>"19",

                "github"=>"​https://github.com/oca-class-b",
                "image"=>"https://cdn141.picsart.com/236574517091202.jpg?type=webp&to=crop&r=256",

                "linkedin"=>"https://www.linkedin.com/feed/",
                "projects"=>array(
                    "0" => array ( 
                        "project_name"=>"project1",
                        "is_complicated"=>"yes"),
        
                    "1" => array ( 
                        "project_name"=>"project2",
                        "is_complicated"=>"no")
                    ),

                    "hobbies"=>array(
                        "0" => "Video Games",
            
                        "1" => "Coding",
        
                        "2" => "Writing"),
                
                    "attendance"=>array(
                        "0" => array ( 
                            "check_in"=>"9:00",
                            "check_out"=>"16:00"),
            
                        "1" => array ( 
                            "check_in"=>"9:05",
                            "check_out"=>"16:10")
                    )
        
                
                    ),


                    "2"=>array(

                        "name"=>"Laith Alenooz",
                        "birthday"=>"11 December",
                        "age"=>"25",
        
                        "github"=>"​https://github.com/oca-class-b",
                        "image"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRov3SuL4MgHuCzGyyA_N0anBN6eOyHecJ6iA&usqp=CAU",
        
                        "linkedin"=>"https://www.linkedin.com/feed/",
                        "projects"=>array(
                            "0" => array ( 
                                "project_name"=>"project1",
                                "is_complicated"=>"yes"),
                
                            "1" => array ( 
                                "project_name"=>"project2",
                                "is_complicated"=>"no"),

                            "2" => array ( 
                                    "project_name"=>"project2",
                                    "is_complicated"=>"no")
                            ),
        
                            "hobbies"=>array(
                                "0" => "Video Games",
                    
                                "1" => "Coding",
                
                                "2" => "Chess"),
                        
                            "attendance"=>array(
                                "0" => array ( 
                                    "check_in"=>"9:00",
                                    "check_out"=>"16:00"),
                    
                                
                            )
                
                        
                            ),


                            "3"=>array(

                                "name"=>"Hamza Obeidat",
                                "birthday"=>"05 May",
                                "age"=>"25",
                
                                "github"=>"​https://github.com/oca-class-b",
                                "image"=>"https://pbs.twimg.com/profile_images/3495680679/9383039e9255694d300c205ed298c65d.jpeg",
                
                                "linkedin"=>"https://www.linkedin.com/feed/",
                                "projects"=>array(
                                    "0" => array ( 
                                        "project_name"=>"project1",
                                        "is_complicated"=>"yes"),
                        
                                    "1" => array ( 
                                        "project_name"=>"project2",
                                        "is_complicated"=>"no"),
        
                                    "2" => array ( 
                                            "project_name"=>"project2",
                                            "is_complicated"=>"no")
                                    ),
                
                                    "hobbies"=>array(
                                        "0" => "Movies",
                            
                                        "1" => "Coding",
                        
                                        "2" => "Football"),
                                
                                    "attendance"=>array(
                                        "0" => array ( 
                                            "check_in"=>"9:00",
                                            "check_out"=>"16:00"),
                                        "1" => array ( 
                                            "check_in"=>"9:05",
                                            "check_out"=>"16:00"),
                                            "2" => array ( 
                                                "check_in"=>"9:10",
                                                "check_out"=>"16:30"),


                            
                                        
                                    )
                        
                                
                                    ),


    );


    $student=array();

    $student=$students[$key];

    return view('traineeprofile', compact('student'));
}


public function report(){

    $students= array(
        "0"=>array(
    
            "name"=>"Ahmad Aburumman",
            "birthday"=>"14 June",
            "age"=>"24",
            "github"=>"​https://github.com/oca-class-b",
            "image"=>"https://pbs.twimg.com/profile_images/3588724423/29515ac05616d17d11689468681f8eda.jpeg",
            "linkedin"=>"https://www.linkedin.com/feed/",
            "projects"=>array(
                "0" => array ( 
                    "project_name"=>"project1",
                    "is_complicated"=>"yes"),
    
                "1" => array ( 
                    "project_name"=>"project2",
                    "is_complicated"=>"no")
                ),
    
            "hobbies"=>array(
                    "0" => "Football",
        
                    "1" => "Coding",
    
                    "2" => "Reading"),
    
                "attendance"=>array(
                    "0" => array ( 
                        "check_in"=>"9.25",
                        "check_out"=>"16.5"),
        
                    "1" => array ( 
                        "check_in"=>"9.1",
                        "check_out"=>"17.5"),

                    "2" => array ( 
                        "check_in"=>"9.5",
                        "check_out"=>"17.10"),

                )
    
            
                ),
    
    
                "1"=>array(
    
                    "name"=>"Adam Abusamra",
                    "birthday"=>"18 July",
                    "age"=>"19",
    
                    "github"=>"​https://github.com/oca-class-b",
                    "image"=>"https://cdn141.picsart.com/236574517091202.jpg?type=webp&to=crop&r=256",
    
                    "linkedin"=>"https://www.linkedin.com/feed/",
                    "projects"=>array(
                        "0" => array ( 
                            "project_name"=>"project1",
                            "is_complicated"=>"yes"),
            
                        "1" => array ( 
                            "project_name"=>"project2",
                            "is_complicated"=>"no")
                        ),
    
                        "hobbies"=>array(
                            "0" => "Video Games",
                
                            "1" => "Coding",
            
                            "2" => "Writing"),
                    
                        "attendance"=>array(
                            "0" => array ( 
                                "check_in"=>"9.01",
                                "check_out"=>"17.30"),
                
                            "1" => array ( 
                                "check_in"=>"9.05",
                                "check_out"=>"17.10"),
                                "2" => array ( 
                                    "check_in"=>"9.15",
                                    "check_out"=>"17.40"),

                        )
            
                    
                        ),
    
    
                        "2"=>array(
    
                            "name"=>"Laith Alenooz",
                            "birthday"=>"11 December",
                            "age"=>"25",
            
                            "github"=>"​https://github.com/oca-class-b",
                            "image"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRov3SuL4MgHuCzGyyA_N0anBN6eOyHecJ6iA&usqp=CAU",
            
                            "linkedin"=>"https://www.linkedin.com/feed/",
                            "projects"=>array(
                                "0" => array ( 
                                    "project_name"=>"project1",
                                    "is_complicated"=>"yes"),
                    
                                "1" => array ( 
                                    "project_name"=>"project2",
                                    "is_complicated"=>"no"),
    
                                "2" => array ( 
                                        "project_name"=>"project2",
                                        "is_complicated"=>"no")
                                ),
            
                                "hobbies"=>array(
                                    "0" => "Video Games",
                        
                                    "1" => "Coding",
                    
                                    "2" => "Chess"),
                            
                                "attendance"=>array(
                                    "0" => array ( 
                                        "check_in"=>"8.50",
                                        "check_out"=>"17.00"),
                                        "1" => array ( 
                                            "check_in"=>"9.00",
                                            "check_out"=>"17.10"),
                                            "2" => array ( 
                                                "check_in"=>"9.10",
                                                "check_out"=>"16.00"),
                        
                                    
                                )
                    
                            
                                ),

                                "3"=>array(

                                    "name"=>"Hamza Obeidat",
                                    "birthday"=>"05 May",
                                    "age"=>"25",
                    
                                    "github"=>"​https://github.com/oca-class-b",
                                    "image"=>"https://pbs.twimg.com/profile_images/3495680679/9383039e9255694d300c205ed298c65d.jpeg",
                    
                                    "linkedin"=>"https://www.linkedin.com/feed/",
                                    "projects"=>array(
                                        "0" => array ( 
                                            "project_name"=>"project1",
                                            "is_complicated"=>"yes"),
                            
                                        "1" => array ( 
                                            "project_name"=>"project2",
                                            "is_complicated"=>"no"),
            
                                        "2" => array ( 
                                                "project_name"=>"project2",
                                                "is_complicated"=>"no")
                                        ),
                    
                                        "hobbies"=>array(
                                            "0" => "Movies",
                                
                                            "1" => "Coding",
                            
                                            "2" => "Football"),
                                    
                                        "attendance"=>array(
                                            "0" => array ( 
                                                "check_in"=>"9.00",
                                                "check_out"=>"16.30"),
                                            "1" => array ( 
                                                "check_in"=>"9.05",
                                                "check_out"=>"16.00"),
                                                "2" => array ( 
                                                    "check_in"=>"9.10",
                                                    "check_out"=>"17.30"),
    
    
                                
                                            
                                        )
                            
                                    
                                        ),
    
    
        );

        return view('reports', compact('students'));

}





public function gallery(){

    $students= array(
        "0"=>array(
    
            "name"=>"Ahmad Aburumman",
            "birthday"=>"14 June",
            "age"=>"24",
            "github"=>"​https://github.com/oca-class-b",
            "image"=>"https://pbs.twimg.com/profile_images/3588724423/29515ac05616d17d11689468681f8eda.jpeg",
            "linkedin"=>"https://www.linkedin.com/feed/",
            "projects"=>array(
                "0" => array ( 
                    "project_name"=>"project1",
                    "is_complicated"=>"yes"),
    
                "1" => array ( 
                    "project_name"=>"project2",
                    "is_complicated"=>"no")
                ),
    
            "hobbies"=>array(
                    "0" => "Football",
        
                    "1" => "Coding",
    
                    "2" => "Reading"),
    
                "attendance"=>array(
                    "0" => array ( 
                        "check_in"=>"9.25",
                        "check_out"=>"16.5"),
        
                    "1" => array ( 
                        "check_in"=>"9.1",
                        "check_out"=>"17.5"),

                    "2" => array ( 
                        "check_in"=>"9.5",
                        "check_out"=>"17.10"),

                )
    
            
                ),
    
    
                "1"=>array(
    
                    "name"=>"Adam Abusamra",
                    "birthday"=>"18 July",
                    "age"=>"19",
    
                    "github"=>"​https://github.com/oca-class-b",
                    "image"=>"https://cdn141.picsart.com/236574517091202.jpg?type=webp&to=crop&r=256",
    
                    "linkedin"=>"https://www.linkedin.com/feed/",
                    "projects"=>array(
                        "0" => array ( 
                            "project_name"=>"project1",
                            "is_complicated"=>"yes"),
            
                        "1" => array ( 
                            "project_name"=>"project2",
                            "is_complicated"=>"no")
                        ),
    
                        "hobbies"=>array(
                            "0" => "Video Games",
                
                            "1" => "Coding",
            
                            "2" => "Writing"),
                    
                        "attendance"=>array(
                            "0" => array ( 
                                "check_in"=>"9.01",
                                "check_out"=>"17.30"),
                
                            "1" => array ( 
                                "check_in"=>"9.05",
                                "check_out"=>"17.10"),
                                "2" => array ( 
                                    "check_in"=>"9.15",
                                    "check_out"=>"17.40"),

                        )
            
                    
                        ),
    
    
                        "2"=>array(
    
                            "name"=>"Laith Alenooz",
                            "birthday"=>"11 December",
                            "age"=>"25",
            
                            "github"=>"​https://github.com/oca-class-b",
                            "image"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRov3SuL4MgHuCzGyyA_N0anBN6eOyHecJ6iA&usqp=CAU",
            
                            "linkedin"=>"https://www.linkedin.com/feed/",
                            "projects"=>array(
                                "0" => array ( 
                                    "project_name"=>"project1",
                                    "is_complicated"=>"yes"),
                    
                                "1" => array ( 
                                    "project_name"=>"project2",
                                    "is_complicated"=>"no"),
    
                                "2" => array ( 
                                        "project_name"=>"project2",
                                        "is_complicated"=>"no")
                                ),
            
                                "hobbies"=>array(
                                    "0" => "Video Games",
                        
                                    "1" => "Coding",
                    
                                    "2" => "Chess"),
                            
                                "attendance"=>array(
                                    "0" => array ( 
                                        "check_in"=>"8.50",
                                        "check_out"=>"17.00"),
                                        "1" => array ( 
                                            "check_in"=>"9.00",
                                            "check_out"=>"17.10"),
                                            "2" => array ( 
                                                "check_in"=>"9.10",
                                                "check_out"=>"16.00"),
                        
                                    
                                )
                    
                            
                                ),

                                "3"=>array(

                                    "name"=>"Hamza Obeidat",
                                    "birthday"=>"05 May",
                                    "age"=>"25",
                    
                                    "github"=>"​https://github.com/oca-class-b",
                                    "image"=>"https://pbs.twimg.com/profile_images/3495680679/9383039e9255694d300c205ed298c65d.jpeg",
                    
                                    "linkedin"=>"https://www.linkedin.com/feed/",
                                    "projects"=>array(
                                        "0" => array ( 
                                            "project_name"=>"project1",
                                            "is_complicated"=>"yes"),
                            
                                        "1" => array ( 
                                            "project_name"=>"project2",
                                            "is_complicated"=>"no"),
            
                                        "2" => array ( 
                                                "project_name"=>"project2",
                                                "is_complicated"=>"no")
                                        ),
                    
                                        "hobbies"=>array(
                                            "0" => "Movies",
                                
                                            "1" => "Coding",
                            
                                            "2" => "Football"),
                                    
                                        "attendance"=>array(
                                            "0" => array ( 
                                                "check_in"=>"9.00",
                                                "check_out"=>"16.30"),
                                            "1" => array ( 
                                                "check_in"=>"9.05",
                                                "check_out"=>"16.00"),
                                                "2" => array ( 
                                                    "check_in"=>"9.10",
                                                    "check_out"=>"17.30"),
    
    
                                
                                            
                                        )
                            
                                    
                                        ),
    
    
        );

        return view('gallery', compact('students'));

}

}
