<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    public function period($type){
        $_y = (int) date('Y');
        $_m = (int) date('n');
        $_j = (int) date('j');

        $course = Course::where('Timeslot', 'elemMatch', [
            'year'  => ['$eq' => $_y],
            'month' => ['$eq' => $_m],
            'day' => ['$gt' => $_j]
        ])->orderBy('created_at','desc')->get();

        return view('lessons.index',compact('course','type'));
    }

    public function history($type){
        $_y = (int) date('Y');
        $_m = (int) date('n');
        $_j = (int) date('j');

        $course = Course::where('Timeslot', 'elemMatch', [
            'year'  => ['$lte' => $_y],
            'month' => ['$lt'  => $_m],
            'day' => ['$lt'  => $_j],
        ])->orderBy('created_at','desc')->get();

        $limtymkill = [];
        $limtym = $course;
        for($i=0;$i<count($limtym);$i++){
            for($j=0;$j<count($limtym[$i]->Timeslot);$j++){
                if( !( ($limtym[$i]->Timeslot[$j]['year'] <= $_y) &&
                       ($limtym[$i]->Timeslot[$j]['month'] <= $_m) &&
                       ($limtym[$i]->Timeslot[$j]['day'] < $_j) ) ){
                    $limtymkill[$i] = 'kill';
                    break;
                };
            };
        };

        $changecourse = [];
        if(count($limtymkill) >= 1){
            for($i=0;$i<count($course);$i++){
                if($limtymkill[$i] != "kill"){
                    array_push($changecourse,$course[$i]);
                };
            };
            $course = $changecourse;
        };

        return view('lessons.index',compact('course','type'));
    }

    public function index(){
        $course = Course::orderBy('created_at', 'desc')->get();

        return view('lessons.index',compact('course'));
    }

    public function subindex($id){
        $course = Course::findOrFail($id);

        //增加點擊率
        $course->push('point', [ 'date' => time()]);
        $course->update();

        return view('lessons.subindex', compact('course'));
    }
}
