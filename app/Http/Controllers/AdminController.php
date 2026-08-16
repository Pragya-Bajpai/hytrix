<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\HappyClient;
use App\Models\Application;
use App\Models\Contact;

use DB;

class AdminController extends Controller
{
	public function admindashboard(){
		$totaljobs=Job::all();
		$happyclients=HappyClient::all();
		$totalContact=Contact::all();
		$Application=Application::all();
		$res=compact('totaljobs','happyclients','totalContact','Application');
		 return view('admin.admindashboard')->with($res);
	}
    public function jobapp()
    {
        $data = DB::table('applications')->get();
        return view('admin.jobapp', compact('data'));
    }

    public function jobstore(Request $request)
    {
	
        $request->validate([
            'title' => 'required',
            'description' => 'required',
			'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
	
		$fileName = time().'.'.$request->file('file')->extension();
		$request->file('file')->move(public_path('dist/img'), $fileName);
		$path ='dist/img/'.$fileName;
        $job = new Job();
		$job->title=$request->title;
		$job->description=trim($request->description,"<p></p>");
		$job->file=$path;
		if($job->save()){
			return redirect()->back()->with('success','New record has been successfully added!');	
		}else{
			return redirect()->back()->with('failed','New record has been failed!');		
		}
		
    }

    public function contactlist()
    {
        $user = DB::table('contacts')->get();
        return view ('admin.contactlist', compact('user'));
    }
	public function jobappdetail(){
		$user = DB::table('jobs')->get();
        return view ('admin.jobappdetail', compact('user'));
	}
	public function jobappdetaildelete(Request $request){
		$data =Job::find($request->id);
		
		if($data->delete() and unlink(public_path($data->file)) ){			
			return 1; 
		}else{
			return 0; 			
		}
	}
	
	public function portfoliodetail(){
		$data =HappyClient::all();
		$res= compact('data');
		return view('admin.portfoliodetail')->with($res);
	}
	
	public function jobappdetaileditstore(Request $request){
		$data =Job::find($request->id);
		return $data->toArray();
	}
	public function jobappdetailupdate(Request $request){
		
		$data =Job::find($request->id);
		
		$path='';
		if($request->file != null){
			$fileName = time().'.'.$request->file('file')->extension();
			$request->file('file')->move(public_path('dist/img'), $fileName);
			$path ='dist/img/'.$fileName;
		}else{
			$path=$data->file;
		}
		

		$data->title= $request->title;
		$data->description= $request->description;
		$data->file= $path;
		
		if($data->save()){
			return redirect()->route('jobappdetail')->with('success', 'Record has been Updated successfully');
		}else{
			return redirect()->route('jobappdetail')->with('failed', 'Record Updated failed!');
		}
	}
	public function jobcontactmaildetail(){
		 $data = DB::table('applications')->get();
        return view('admin.jobcontactmaildetail', compact('data'));
		
	}
	
	public function portfoliostore(Request $request){
        $request->validate([
			'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
		$fileName = time().'.'.$request->file('image')->extension();
		$request->file('image')->move(public_path('file'), $fileName);
		$path ='public/file/'.$fileName;
		
		$data=new HappyClient();
		$data->image= $path;
		if($data->save()){
			
		return back()->with('success', 'New Record has been successfully inserted');
		}else{
		return back()->with('failed', 'Record inserted failed!');
		}
	}
	public function portfoliodetaildelete(Request $request){
		$data=HappyClient::find($request->id);
		
			if($data->delete() and unlink(public_path($data->image))){	
					return 1; 
				}else{
					return 0; 
				}	
	}
	public function happyclientdatashow(Request $request){
		$data= DB::table('happy_clients')->where('id', '=', $request->id)->get();
		return $data->toArray();
	}
	public function jobappdetailchange(Request $request){
		$data =Job::find($request->id);
		$res= compact('data');
		return view('admin.jobappdetailchange')->with($res);
	}
	public function upload(){
		return view('admin.upload');
	}
	public function uploadstore(Request $request){
	
		$fileName = $request->file('file')->getClientOriginalName ();
		$request->file('file')->move(public_path('assets/images/product'), $fileName);
		return back();
	
	}
}
