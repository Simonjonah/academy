<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
// use App\Models\Event;
use App\Models\Contact;
use App\Models\User;
// use App\Models\Article;
use App\Models\Course;
use App\Models\Blog;
// use App\Models\Gallery;
// use App\Models\Team;
use App\Models\Testimony;
// use App\Models\Contactme;




use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function create(Request $request){
        //create method
        $request->validate([
            
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8'],
            'cpassword' => 'required|min:5|max:30|same:cpassword'
           
        ]);
        $registration = new Admin();
      
       $registration->agree = $request->agree;
        $registration->email = $request->email;
        $registration->password = \Hash::make($request->password);
        $registration->save();
 
        if ($registration) {
            return redirect()->route('admin.home')->with('success', 'you have successfully registered');
                
            }else{
                return redirect()->back()->with('error', 'you have fail to registered');
        }
    }

    

    public function check(Request $request){
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'exists:admins'],
            'password' => ['required', 'string', 'min:8']
        ], [
            'email.exist'=>'This email does not exist in the admins table'
        ]);
        $creds = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($creds)) {
            return redirect()->route('admin.home')->with('success', 'You have successfully login');
        }else{
            return redirect()->route('admin.login')->with('error', 'Failed to login');
        }
    }

    public function home(){
      
        $blog = Blog::count();
        $hepitis = Course::count();
        $arts = Course::count();
        $view_users = User::latest()->take(5)->get();
        $view_orws = Course::latest()->take(5)->get();
        $view_books = Course::latest()->take(5)->get();
        $view_contacts = Contact::latest()->take(5)->get();
        $contacts = Contact::count();
        
        // $team = Team::count();
        $legals = Blog::count();
        // $articlecounts = Article::count();
        $buyercounts = User::count();
        // $gallery = Gallery::count();
        $testmony = Testimony::count();
        // $contactme = Contactme::count();
        
        
        
        
        // $buyercounts = Article::count();
        return view('dashboard.admin.home', compact('contacts', 'testmony', 'arts', 'hepitis',  'view_contacts', 'view_books', 'view_orws', 'view_users', 'buyercounts', 'legals', 'blog'));
    }

    public function profile() {

        return view('dashboard.admin.profile');
    }

    public function settingsupdate(Request $request, $id){
        $edit_profiles = Admin::find($id);
        $edit_profiles = Admin::where('id', $id)->first();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'designation' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255'],

            'phone' => ['required', 'string'],
            'address' => ['required', 'string'],
            'studycenter' => ['required', 'string'],
            'images' => 'nullable|mimes:jpg,png,jpeg'
        ]);
       // dd($request->all());
        if ($request->hasFile('images')){

            $file = $request['images'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images')->storeAs('resourceimages', $filename);

        }
        $edit_profiles['images'] = $path;
        $edit_profiles->name = $request->name;
        $edit_profiles->email = $request->email;
        $edit_profiles->address = $request->address;
        $edit_profiles->phone = $request->phone;
        $edit_profiles->studycenter = $request->studycenter;
        $edit_profiles->designation = $request->designation;

        $edit_profiles->update();

        return redirect()->back()->with('success', 'you have update successfully');

    }



    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
    
    
}
