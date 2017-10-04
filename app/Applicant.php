<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    //
    protected $table = 'applicants';
    protected $primaryKey = 'id';

    public static function getApplicants()
    {
        $applicants = Applicant::where('status', 1)->paginate(50);
        return $applicants;
    }

    public static function addApplicant($data)
    {
        $oldApplicant = Applicant::where('email', $data->email);



        if ($oldApplicant->email) {
            $oldApplicant->name = $data->name;
            $oldApplicant->surname = $data->surname;
            $oldApplicant->gender = $data->gender;
            $oldApplicant->group_number = $data->group_number;
            $oldApplicant->email = $data->email;
            $oldApplicant->score_vno = $data->score_vno;
            $oldApplicant->year = $data->year;
            $oldApplicant->local_or_foreigner = $data->local_or_foreigner;
            $oldApplicant->save();
        } else {
            $applicant = new Applicant;
            $applicant->name = $data->name;
            $applicant->surname = $data->surname;
            $applicant->gender = $data->gender;
            $applicant->group_number = $data->group_number;
            $applicant->email = $data->email;
            $applicant->score_vno = $data->score_vno;
            $applicant->year = $data->year;
            $applicant->local_or_foreigner = $data->local_or_foreigner;
            $applicant->save();
        }
        return 1;
    }
}
