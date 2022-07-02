<?php

namespace App\Actions\Fortify;

use App\Models\User;

use App\Models\Jobseeker;
use App\Models\recruiter;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;



class CreateNewUser implements CreatesNewUsers
{

    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input )
    {

        Validator::make($input, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_number'=>['required', 'unique:users'],
            'role'=>['required'],
            'password' => $this->passwordRules(),
            

        ])->validate();

        $user = User::create([
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'email' => $input['email'],
            'phone_number'=>$input['phone_number'],
            'password' => Hash::make($input['password']),
        ]);
        
        $role=$input['role'];

        if($role=="user"){
            Validator::make($input, [
                'Birthday' => ['required'],
                'Nationality' => ['required', 'string', 'max:255'],
                'Linkdin_url' => ['required'],
                'Town_of_residence'=>['required'],
                'Gender'=>['required'],
                'Civility'=>['required'],
                'Level_of_education'=>['required'],
                'Field_of_study'=>['required'],
                'School'=>['required'],
                'School_location'=>['required'],
                'from_year'=>['required'],
                'to_year'=>['required'],
                'resume'=>['required'],
            ])->validate();
    
            $jobseeker = Jobseeker::create([
                'Birthday' => $input['Birthday'],
                'Nationality' => $input['Nationality'],
                'Linkdin_url' => $input['Linkdin_url'],
                'Town_of_residence'=>$input['Town_of_residence'],
                'Gender'=>$input['Gender'],
                'Civility'=>$input['Civility'],
                'Level_of_education'=>$input['Level_of_education'],
                'Field_of_study'=>$input['Field_of_study'],
                'School'=>$input['School'],
                'School_location'=>$input['School_location'],
                'from_year'=>$input['from_year'],
                'to_year'=>$input['to_year'],
                'resume'=>$input['resume'],
            ]);  
            event(new Registered($jobseeker));      
        }

        if($role=="author"){
            Validator::make($input, [
                'company' => ['required'],
                'line' => ['required', 'string', 'max:255'],
                'workforce' => ['required'],
                'city'=>['required'],
                'phone_number'=>['required']
            ])->validate();

            $recruiter = Recruiter::create([
                'company' => $input['Company_Name'],
                'line' => $input['line_of_business'],
                'workforce' => $input['Workforce_number'],
                'city'=>$input['City'],
                'Phone_Number'=>$input['Phone_Number'],
                'phone_number'=>$input['Commercial_Register'],
            ]);
            event(new Registered($recruiter));
        } 
      $user->assignRole($input['role']);
       return $user;
    
}

}
