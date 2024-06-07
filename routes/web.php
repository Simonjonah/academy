<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FlutterwaveController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\ContactmeController;

use App\Models\Blog;
use App\Models\Course;

// use App\Models\Gallery;
// use App\Models\Team;
use App\Models\Testimony;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $view_blogs = Blog::take(4)->latest()->get();
    $view_books = Course::take(4)->latest()->get();
    // $view_articles = Article::latest()->get();
    // $view_galleries = Gallery::latest()->get();
    // $view_teams = Team::take(5)->orderby('created_at', 'ASC')->get();


    return view('welcome', compact('view_blogs', 'view_books'));
});

Route::get('/about', function () {
    $view_testimonies = Testimony::latest()->get();
    // $view_teams = Team::take(5)->orderby('created_at', 'ASC')->get();

    return view('pages.about', compact('view_testimonies'));
});



Route::get('/supporters', function () {

    return view('pages.supporters');
});


Route::get('/projects', function () {
    // $view_galleries = Gallery::latest()->get();
    return view('pages.projects', compact('view_galleries'));
});



Route::get('/courses', function () {
   $view_books = Course::latest()->get();
    return view('pages.courses', compact('view_books'));
});

Route::get('/whatishealth', function () {
   
    return view('pages.whatishealth');
});


Route::get('/advocacy', function () {
   
    return view('pages.advocacy');
});

Route::get('/affiliate', function () {
    // $view_teams = Team::orderby('created_at', 'ASC')->get();
    $view_testis = Testimony::orderby('created_at', 'DESC')->get();
    // $view_ascs = Article::orderby('created_at', 'DESC')->get();

    return view('pages.affiliate', compact('view_ascs', 'view_testis', 'view_teams'));
});

Route::get('/team', function () {
    // $view_teams = Team::orderby('created_at', 'ASC')->get();
    
    return view('pages.team', compact('view_teams'));
});

Route::get('/arts', function () {
    $view_books = Course::latest()->where('orw', 'orw')->get();

    return view('pages.arts', compact('view_books'));
});

Route::get('/privacypolicy', function () {

    return view('pages.privacypolicy');
});



Route::get('/blog', function () {
    $view_blogs = Blog::where('ben', null)->latest()->get();
    
    return view('pages.blog', compact('view_blogs'));
});

Route::get('/programs', function () {
    
    return view('pages.programs');
});


Route::get('/humanright', function () {
    $view_lgals = Blog::where('ben', 'legal')->latest()->get();

    return view('pages.humanright', compact('view_lgals'));
});

Route::get('/articles', function () {
    // $view_articles = Article::latest()->get();
    
    return view('pages.articles', compact('view_articles'));
});



Route::get('/contact', function () {
    
    return view('pages.contact');
});

Route::get('/login', function () {
    
    return view('pages.login');
});


Route::get('/profile/{ref_no}', function ($ref_no) {
    // $view_profile = Team::where('ref_no', $ref_no)->first();

    return view('pages.profile', compact('view_profile'));
});

Route::get('/blogdetails/{slug}', function ($slug) {
    $view_blogdetails = Blog::where('slug', $slug)->first();
    $view_blogs = Blog::latest()->get();

    return view('pages.blogdetails', compact('view_blogs', 'view_blogdetails'));
});

Route::get('/hepatitis', function () {
    $view_books = Course::latest()->get();
    return view('pages.hepatitis', compact('view_books'));
});






Route::post('/createbooking', [ContactmeController::class, 'createbooking'])->name('createbooking');
Route::post('/createcontact', [ContactController::class, 'createcontact'])->name('createcontact');


Route::post('/pay', [FlutterwaveController::class, 'initialize'])->name('pay');
// The callback url after a payment
Route::get('/rave/callback', [FlutterwaveController::class, 'callback'])->name('callback');
Route::get('/logout', [UserController::class, 'logout'])->name('logout'); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/addbooks1/{ref_no}', [CourseController::class, 'addbooks1'])->name('addbooks1');

Route::prefix('admin')->name('admin.')->group(function() {

    Route::middleware(['guest:admin'])->group(function() {
        Route::view('/login', 'dashboard.admin.login')->name('login');
        Route::view('/register','dashboard.admin.register')->name('register');
        Route::post('/create', [AdminController::class, 'create'])->name('create');
        Route::post('/check', [AdminController::class, 'check'])->name('check');

    });
    
    Route::middleware(['auth:admin'])->group(function() {
        
        Route::post('/createadminbyparents', [UserController::class, 'createadminbyparents'])->name('createadminbyparents');
        
        Route::put('/updateblog/{ref_no}', [BlogController::class, 'updateblog'])->name('updateblog');
        Route::get('/blogedit/{ref_no}', [BlogController::class, 'blogedit'])->name('blogedit');
        Route::get('/addcourses', [CourseController::class, 'addcourses'])->name('addcourses');
        Route::post('/createcourse', [CourseController::class, 'createcourse'])->name('createcourse');
        Route::get('/viewcourses', [CourseController::class, 'viewcourses'])->name('viewcourses');
        Route::post('/createbook', [CourseController::class, 'createbook'])->name('createbook');
        Route::get('/viewbooks', [CourseController::class, 'viewbooks'])->name('viewbooks');
        Route::get('/vieworw', [CourseController::class, 'vieworw'])->name('vieworw');
        Route::get('/contactdelete/{id}', [ContactmeController::class, 'contactdelete'])->name('contactdelete');
        
        Route::get('/eventview/{ref_no}', [CourseController::class, 'eventview'])->name('eventview');
        Route::get('/eventedit/{ref_no}', [CourseController::class, 'eventedit'])->name('eventedit');
        Route::put('/updateevent/{ref_no}', [CourseController::class, 'updateevent'])->name('updateevent');
        Route::put('/createaddbook/{ref_no}', [CourseController::class, 'createaddbook'])->name('createaddbook');
        Route::get('/eventeapproved/{ref_no}', [CourseController::class, 'eventeapproved'])->name('eventeapproved');
        Route::get('/eventesuspend/{ref_no}', [CourseController::class, 'eventesuspend'])->name('eventesuspend');
        Route::get('/editbooks/{ref_no}', [CourseController::class, 'editbooks'])->name('editbooks');
        Route::put('/updatebook/{ref_no}', [CourseController::class, 'updatebook'])->name('updatebook');
        Route::get('/approvebooks/{ref_no}', [CourseController::class, 'approvebooks'])->name('approvebooks');
        Route::get('/suspendbooks/{ref_no}', [CourseController::class, 'suspendbooks'])->name('suspendbooks');
        Route::get('/deletebooks/{ref_no}', [CourseController::class, 'deletebooks'])->name('deletebooks');
        Route::get('/addarticles', [ArticleController::class, 'addarticles'])->name('addarticles');
        Route::get('/viewarticles', [ArticleController::class, 'viewarticles'])->name('viewarticles');
        Route::post('/createarticle', [ArticleController::class, 'createarticle'])->name('createarticle');
        Route::get('/downloadarticle/{ref_no}', [ArticleController::class, 'downloadarticle'])->name('downloadarticle');
        Route::get('/editarticles/{ref_no}', [ArticleController::class, 'editarticles'])->name('editarticles');
        Route::put('/updateearticle/{ref_no}', [ArticleController::class, 'updateearticle'])->name('updateearticle');
        Route::get('/approvearticles/{ref_no}', [ArticleController::class, 'approvearticles'])->name('approvearticles');
        Route::get('/suspendarticles/{ref_no}', [ArticleController::class, 'suspendarticles'])->name('suspendarticles');
        Route::get('/deletearticles/{ref_no}', [ArticleController::class, 'deletearticles'])->name('deletearticles');
        Route::get('/addgallery', [GalleryController::class, 'addgallery'])->name('addgallery');
        Route::post('/createtgallery', [GalleryController::class, 'createtgallery'])->name('createtgallery');
        Route::get('/viewgallery', [GalleryController::class, 'viewgallery'])->name('viewgallery');
        Route::get('/galleryedit/{id}', [GalleryController::class, 'galleryedit'])->name('galleryedit');
        Route::put('/updategallery/{id}', [GalleryController::class, 'updategallery'])->name('updategallery');
        Route::get('/gallerydelete/{id}', [GalleryController::class, 'gallerydelete'])->name('gallerydelete');
        Route::get('/viewcontactme', [ContactmeController::class, 'viewcontactme'])->name('viewcontactme');
        
        Route::get('/viewallpayment', [UserController::class, 'viewallpayment'])->name('viewallpayment');
        Route::get('/viewsfees/{ref_no}', [UserController::class, 'viewsfees'])->name('viewsfees');
        Route::get('/print1stinglepaymentspdf/{ref_no}', [UserController::class, 'print1stinglepaymentspdf'])->name('print1stinglepaymentspdf');
        Route::get('/facilityedit/{id}', [UserController::class, 'facilityedit'])->name('facilityedit');
        Route::put('/updatefacility/{id}', [UserController::class, 'updatefacility'])->name('updatefacility');
        Route::get('/facilitydelete/{id}', [UserController::class, 'facilitydelete'])->name('facilitydelete');
        
        Route::get('/viewcontact', [ContactController::class, 'viewcontact'])->name('viewcontact');
        Route::get('/addmainslider', [MainsliderController::class, 'addmainslider'])->name('addmainslider');
        Route::post('/createteslider', [MainsliderController::class, 'createteslider'])->name('createteslider');
        Route::get('/slideredit/{id}', [MainsliderController::class, 'slideredit'])->name('slideredit');
        Route::put('/updateslider/{id}', [MainsliderController::class, 'updateslider'])->name('updateslider');
        Route::get('/slideredelete/{id}', [MainsliderController::class, 'slideredelete'])->name('slideredelete');
        
        Route::get('/testimonyedelete/{id}', [TestimonyController::class, 'testimonyedelete'])->name('testimonyedelete');
        Route::get('/testimonyesuspend/{id}', [TestimonyController::class, 'testimonyesuspend'])->name('testimonyesuspend');
        Route::get('/testimonyeapproved/{id}', [TestimonyController::class, 'testimonyeapproved'])->name('testimonyeapproved');
        Route::put('/updatetestimony/{id}', [TestimonyController::class, 'updatetestimony'])->name('updatetestimony');
        Route::get('/testimonyedit/{id}', [TestimonyController::class, 'testimonyedit'])->name('testimonyedit');
        Route::get('/testimonyview/{id}', [TestimonyController::class, 'testimonyview'])->name('testimonyview');
        Route::get('/addtestimony', [TestimonyController::class, 'addtestimony'])->name('addtestimony');
        
        
        Route::post('/createtestimony', [TestimonyController::class, 'createtestimony'])->name('createtestimony');
        Route::get('/addtestimony', [TestimonyController::class, 'addtestimony'])->name('addtestimony');
        Route::get('/viewtestimony', [TestimonyController::class, 'viewtestimony'])->name('viewtestimony');
        Route::get('/testimonyview/{id}', [TestimonyController::class, 'testimonyview'])->name('testimonyview');
        Route::get('/testimonyedit/{id}', [TestimonyController::class, 'testimonyedit'])->name('testimonyedit');
        Route::put('/updatetestimony/{id}', [TestimonyController::class, 'updatetestimony'])->name('updatetestimony');
        Route::get('/testimonyeapproved/{id}', [TestimonyController::class, 'testimonyeapproved'])->name('testimonyeapproved');
        Route::get('/testimonyesuspend/{id}', [TestimonyController::class, 'testimonyesuspend'])->name('testimonyesuspend');
        Route::get('/testimonyedelete/{id}', [TestimonyController::class, 'testimonyedelete'])->name('testimonyedelete');
        Route::get('/addevent', [CourseController::class, 'addevent'])->name('addevent');
        Route::post('/createteevent', [CourseController::class, 'createteevent'])->name('createteevent');
        Route::get('/viewevents', [CourseController::class, 'viewevents'])->name('viewevents');
        Route::get('/eventeapproved/{slug}', [CourseController::class, 'eventeapproved'])->name('eventeapproved');
        Route::get('/eventesuspend/{slug}', [CourseController::class, 'eventesuspend'])->name('eventesuspend');
        Route::get('/addblog', [BlogController::class, 'addblog'])->name('addblog');
        
        // https://cpanel-p224.web-hosting.com/
        Route::get('/viewlegal', [BlogController::class, 'viewlegal'])->name('viewlegal');
        Route::get('/addlegal', [BlogController::class, 'addlegal'])->name('addlegal');
        Route::post('/createblog1', [BlogController::class, 'createblog1'])->name('createblog1');
        Route::post('/createblog', [BlogController::class, 'createblog'])->name('createblog');
        Route::get('/viewblog', [BlogController::class, 'viewblog'])->name('viewblog');
        Route::get('/blogview/{ref_no}', [BlogController::class, 'blogview'])->name('blogview');
        Route::get('/blogeapproved/{ref_no}', [BlogController::class, 'blogeapproved'])->name('blogeapproved');
        Route::get('/blogesuspend/{ref_no}', [BlogController::class, 'blogesuspend'])->name('blogesuspend');
        Route::get('/blogedelete/{ref_no}', [BlogController::class, 'blogedelete'])->name('blogedelete');
        Route::get('/addteam', [TeamController::class, 'addteam'])->name('addteam');
        Route::post('/createam', [TeamController::class, 'createam'])->name('createam');
        Route::get('/viewteam', [TeamController::class, 'viewteam'])->name('viewteam');
        Route::get('/viewsingteam/{ref_no}', [TeamController::class, 'viewsingteam'])->name('viewsingteam');
        Route::get('/editteam/{ref_no}', [TeamController::class, 'editteam'])->name('editteam');
        Route::put('/updateteam/{ref_no}', [TeamController::class, 'updateteam'])->name('updateteam');
        Route::get('/teamapproved/{ref_no}', [TeamController::class, 'teamapproved'])->name('teamapproved');
        Route::get('/teamsuspend/{ref_no}', [TeamController::class, 'teamsuspend'])->name('teamsuspend');
        Route::get('/teamsacked/{ref_no}', [TeamController::class, 'teamsacked'])->name('teamsacked');
        Route::get('/staffdelete/{ref_no}', [TeamController::class, 'staffdelete'])->name('staffdelete');
        Route::get('/addtestimony', [TestimonyController::class, 'addtestimony'])->name('addtestimony');
        
        Route::view('/home','dashboard.admin.home')->name('home');
        Route::get('/home', [AdminController::class, 'home'])->name('home');
       
        
        Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
        
        
        Route::get('/logout', [AdminController::class, 'logout'])->name('logout'); 
        
       
    });
});





Route::post('/logincheck', [UserController::class, 'logincheck'])->name('logincheck');

Route::prefix('web')->name('web.')->group(function() {

    Route::middleware(['guest:web'])->group(function() {
        Route::post('/create', [UserController::class, 'create'])->name('create');

    });
    
    Route::middleware(['auth:web'])->group(function() {
       
        
        Route::post('/createtestimony', [TestimonyController::class, 'createtestimony'])->name('createtestimony');
        Route::get('/addtestimony', [TestimonyController::class, 'addtestimony'])->name('addtestimony');
        Route::get('/viewtestimony', [TestimonyController::class, 'viewtestimony'])->name('viewtestimony');
        Route::get('/testimonyview/{id}', [TestimonyController::class, 'testimonyview'])->name('testimonyview');
        Route::get('/testimonyedit/{id}', [TestimonyController::class, 'testimonyedit'])->name('testimonyedit');
        Route::put('/updatetestimony/{id}', [TestimonyController::class, 'updatetestimony'])->name('updatetestimony');
        Route::get('/testimonyeapproved/{id}', [TestimonyController::class, 'testimonyeapproved'])->name('testimonyeapproved');
        Route::get('/testimonyesuspend/{id}', [TestimonyController::class, 'testimonyesuspend'])->name('testimonyesuspend');
        Route::get('/testimonyedelete/{id}', [TestimonyController::class, 'testimonyedelete'])->name('testimonyedelete');
        Route::get('/addevent', [CourseController::class, 'addevent'])->name('addevent');
        Route::post('/createteevent', [CourseController::class, 'createteevent'])->name('createteevent');
        Route::get('/viewevents', [CourseController::class, 'viewevents'])->name('viewevents');
        Route::get('/eventeapproved/{slug}', [CourseController::class, 'eventeapproved'])->name('eventeapproved');
        Route::get('/eventesuspend/{slug}', [CourseController::class, 'eventesuspend'])->name('eventesuspend');
       
        Route::view('/home','dashboard.admin.home')->name('home');
        Route::get('/home', [UserController::class, 'home'])->name('home');
       
        
        Route::get('/profile', [UserController::class, 'profile'])->name('profile');
        
        
        Route::get('/logout', [UserController::class, 'logout'])->name('logout'); 
        
       
    });
});
