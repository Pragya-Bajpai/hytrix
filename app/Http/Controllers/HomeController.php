<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Application;
use App\Models\Job;
use App\Models\HappyClient;
use DB;
class HomeController extends Controller
{
    public function dashboard()
    {
        return view('home.home');
    }

    public function about()
    { 
        return view('home.about');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function contactstore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|numeric|min:10',
            'msg_subject' => 'required',
            'message' => 'required|min:10|max:500',
			'check' => 'required'
        ]);


		if($request->email != null){
			
			$to='hytrixtech@gmail.com';
			$subject=$request->msg_subject;
			
			$text ="Mr/Mrs : ".ucwords($request->name).".\r\n"."Phone Number : ".$request->phone_number.".\r\n"."Email Id : ".$request->email.".\r\n"."Subject : ".$request->msg_subject."\r\n"."Message : ".".\n\n".$request->message;
			
			$from =$request->email;
			$headers ="From: $from";
			mail($to,$subject,$text,$headers);
			
			$contact= new Contact();
			$contact->name= $request['name'];
			$contact->email= $request['email'];
			$contact->phone_number= $request['phone_number'];
			$contact->msg_subject= $request['msg_subject'];
			$contact->message= $request['message'];
			$contact->save();

			return redirect()->back()->with('success', 'Your messagae have been send successfully');  
		}else{
			return redirect()->back()->with('failed', 'Operation failed due to technical issue');  
		}
		
 /*
 if(mail($to,$subject,$message,$headers)){
		return redirect()->back()->with('success', 'Your messagae have been send successfully');  
		}else{
		return redirect()->back()->with('failed', 'Operation failed due to technical issue');  
		}
		
        $contact= new Contact();
        $contact->name= $request['name'];
        $contact->email= $request['email'];
        $contact->phone_number= $request['phone_number'];
        $contact->msg_subject= $request['msg_subject'];
        $contact->message= $request['message'];
        $contact->save();

        return redirect()->back()->with('success', 'You have been registered yourself');  
 */
    }

    public function career()
    {
		$data=Job::all();
		$res= compact('data');
        return view('home.career', compact('data'));
    }

    public function product()
    {
        return view('home.product');
    }

    public function android()
    {
        return view('home.android');
    }

    public function api()
    {
        return view('home.api');
    }

    public function digital()
    {
        return view('home.digital');
    }

    public function application()
    {
        return view('home.application');
    }

    public function appstore(Request $request)
    {

        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'file' => 'required|mimes:png,jpg,jpeg,pdf|max:2048',
        ]);

        $apps= new Application();
        if($request->file('file')){         
            $file= $request->file('file');               
            $filename= date('YmdHi').$file->getClientOriginalName();          
            $path= $file-> move('public/assets/file',$filename);
            $apps->file = $filename;
        }
        $apps->fname= $request['fname'];
        $apps->lname= $request['lname'];
        $apps->email= $request['email'];
        $apps->mobile= $request['mobile'];
        $apps->save();

        return redirect()->back()->with('success', 'Thank you! Job applied successfully.');
    }

    public function software()
    {
        return view('home.software');
    }

    public function web()
    {
        return view('home.web');
    }

    public function ecommerce()
    {
        return view('home.ecommerce');
    }

    public function webhost()
    {
        return view('home.webhost');
    }

    public function portfolio()
    {
		$data = HappyClient::all();
		$res= compact('data');
        return view('home.portfolio')->with($res);
    }
	public function term_and_condition()
    {
        return view('home.termAndCondition');
    }
	public function ckeditortest()
    {
        return view('home.test');
    }
	public function ckeditorstore(Request $request){
		dd($request->all());
	}
	 public function ckeditorimageupload(Request $request){
		
        if($request->hasFile('upload')){
            $originName= $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.' .$extension ;

            $request->file('upload')->move(public_path('images'), $fileName);
           
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');

            $url = asset('public/images/'.$fileName);
			
            $msg= "Image Upload Successfully";
            $response = "<script> window.parent.CKEDITOR.tools.callFunction('".$CKEditorFuncNum."','".$url."'); </script>";
			 
            @header('Content-type: text/html; charset=utf-8');
            echo $response;
			
         }
        }
		
}
