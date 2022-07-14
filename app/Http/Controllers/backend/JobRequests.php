<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
class JobRequests extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('backend.jobs', ['jobs' => $jobs]);
    }
    public function downloadCv($cv)
    {
        $downloadPath = public_path('/uploads/' . $cv);
        $headers = array(
            'Content-Type: application/pdf',
        );
        return Response::download($downloadPath, 'cv.pdf', $headers);
    }



    public function removeJobRequest($id, $action)
    {
        if ($action == 'delete') {
            $imageName = Job::find($id)->select(['cv'])->get();
            $imagePath = public_path('/uploads/' . $imageName[0]->cv);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }
            if (Job::where('id', $id)->delete()) {
                Session::flash('success', 'Job Deleted Successfully');
                return redirect('admins/jobs');
            }else{
                Session::flash('error', 'Something went wrong');
                return redirect('admins/jobs');
            }
        }
    }
}
