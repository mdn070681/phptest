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
        $applicants = Applicant::where('status', 1)->paginate(5);
        return $applicants;
    }

    public static function addApplicant($data)
    {
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

        return 1;
    }

    public static function oldApplicant($data)
    {
        $oldApplicant = Applicant::where('email', $data->email)->first();
        return $oldApplicant;
    }

    public static function updateApplicant($data)
    {
        $oldApplicant = Applicant::oldApplicant($data);
        if (is_object($oldApplicant)) {
            $oldApplicant->name = $data->name;
            $oldApplicant->surname = $data->surname;
            $oldApplicant->gender = $data->gender;
            $oldApplicant->group_number = $data->group_number;
            $oldApplicant->email = $data->email;
            $oldApplicant->score_vno = $data->score_vno;
            $oldApplicant->year = $data->year;
            $oldApplicant->local_or_foreigner = $data->local_or_foreigner;
            $oldApplicant->save();

            return 1;
        }
        return 0;
    }

    public
    static function getApplicantsByNameUp()
    {
        $applicants = Applicant::where('status', 1)->orderBy('name')->paginate(5);
        return $applicants;
    }

    public
    static function getApplicantsByNameDown()
    {
        $applicants = Applicant::where('status', 1)->orderBy('name', 'desc')->paginate(5);
        return $applicants;
    }

    public
    static function getApplicantsBySurnameUp()
    {
        $applicants = Applicant::where('status', 1)->orderBy('surname')->paginate(5);
        return $applicants;
    }

    public
    static function getApplicantsBySurnameDown()
    {
        $applicants = Applicant::where('status', 1)->orderBy('surname', 'desc')->paginate(5);
        return $applicants;
    }

    public
    static function getApplicantsByNumberUp()
    {
        $applicants = Applicant::where('status', 1)->orderBy('group_number')->paginate(5);
        return $applicants;
    }

    public
    static function getApplicantsByNumberDown()
    {
        $applicants = Applicant::where('status', 1)->orderBy('group_number', 'desc')->paginate(5);
        return $applicants;
    }

    public
    static function getApplicantsByScoreUp()
    {
        $applicants = Applicant::where('status', 1)->orderBy('score_vno')->paginate(5);
        return $applicants;
    }

    public
    static function getApplicantsByScoreDown()
    {
        $applicants = Applicant::where('status', 1)->orderBy('score_vno', 'desc')->paginate(5);
        return $applicants;
    }

    public
    static function getApplicantFromEmail($email)
    {
        $applicant = Applicant::where('email', $email)->first();
        return $applicant;

    }
}
