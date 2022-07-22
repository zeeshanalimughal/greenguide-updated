<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;



// Client side Controllers

use App\Http\Controllers\frontend\HomePage;
use App\Http\Controllers\frontend\Jobs;
use App\Http\Controllers\frontend\GreenInitiative;
use App\Http\Controllers\frontend\About;
use App\Http\Controllers\frontend\Businessdirectory;
use App\Http\Controllers\frontend\Localevents;
use App\Http\Controllers\frontend\Advertise;
use App\Http\Controllers\frontend\UserAccount;
use App\Http\Controllers\frontend\ComunityGrowth;
use App\Http\Controllers\frontend\Contact;
use App\Http\Controllers\frontend\ResidentsCorner;
use Illuminate\Support\Facades\Artisan;

Route::get('cache-clear', function () {
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('optimize');
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    dd('Cache Cleared');
});



Route::fallback(function () {
    return view('404');
});




// Website Policies Terms Conditions Routes
Route::view('/reviews-ternms-of-use', 'frontend.policy-pages.reviews-ternms-of-use');
Route::view('/bd-terms-and-conditions', 'frontend.policy-pages.bd-terms-and-conditions');
Route::view('/cookie-policy', 'frontend.policy-pages.cookie-policy');
Route::view('/disclaimer', 'frontend.policy-pages.disclaimer');
Route::view('/privacy-policy', 'frontend.policy-pages.privacy-policy');
Route::view('/website-terms-of-use', 'frontend.policy-pages.website-terms-of-use');


Route::view('/advertise-in-magazine', 'frontend.advertise-in-magazine')->name('advertise-in-magazine');

Route::get('/download-media-pack', [HomePage::class, 'downloadMediaPack']);

Route::view('/competition-terms-conditions', 'frontend.policy-pages.competition-terms-conditions');
Route::get('/magzine-competition', [ResidentsCorner::class, 'getMagazineCompetitionPage'])->name('residents-corner');
Route::get('/magzine-giveaway', [ResidentsCorner::class, 'getMagazineGiveawayPage']);
Route::post('/magzine-giveaway', [ResidentsCorner::class, 'submitMagzineGiveaway'])->name('magzine-giveaway.submit');
Route::get('/feedback', [ResidentsCorner::class, 'getFeedbackPage']);
Route::post('/feedback-submit', [ResidentsCorner::class, 'submitFeedback'])->name('feedback.submit');



// Client side Routes
Route::get('/jobs', [Jobs::class, 'index'])->name('jobs');
Route::post('/jobs', [Jobs::class, 'submitJobRequest'])->name('job.submit');

Route::get('/greeninitiative', [GreenInitiative::class, 'index'])->name('greeninitiative');
Route::get('/about', [About::class, 'index'])->name('about');

Route::get('/businessdirectory', [Businessdirectory::class, 'index'])->name('businessdirectory');
Route::get('/businessdirectory/category/{category}', [Businessdirectory::class, 'getDirectoriesByCategory']);
Route::get('/businessdirectory/directory/{id}', [Businessdirectory::class, 'getSingleDirectory']);


Route::post('/businessdirectory/search', [Businessdirectory::class, 'getDirectorySearchResults'])->name("directorySearch");
Route::get('/businessdirectory/search/{category}', [Businessdirectory::class, 'getDirectorySearchResultsByCategory'])->name("directorySearchResultsByCategory");





Route::get('/advertise', [Advertise::class, 'index'])->name('advertise');

Route::get('/advertise-home', [Advertise::class, 'advertise_home'])->name('advert_home');
Route::get('/archives', [Advertise::class, 'archives'])->name('archives');

Route::get('/communitygrowth', [ComunityGrowth::class, 'index'])->name('communitygrowth');

Route::get('/', [HomePage::class, 'index'])->name('/');
Route::get('/post/{id}', [HomePage::class, 'getSinglePost']);

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('/reset-password', [UserAccount::class, 'resetPasswordForm']);
Route::post('/updatePassword', [UserAccount::class, 'updatePassword'])->name('login.update-password');






Route::get('/contact', [Contact::class, 'index'])->name('contact');
Route::post('contact/send', [Contact::class, 'sendMessage'])->name('contact.send');

Route::get('/localevents', [Localevents::class, 'index'])->name('localevents');
Route::get('/localevents/{id}', [Localevents::class, 'eventDetails'])->name('eventDetails');


















Route::prefix('/magzine-design-book/')->name('design.')->group(function () {
    Route::get('/', [Advertise::class, 'advert_design_book'])->name('advert-design-book');
    Route::post('/submit', [Advertise::class, 'submitDesign'])->name('submit-design');
});


Route::prefix('/advert-design-book/')->name('advert.')->group(function () {
    Route::get('/', [Advertise::class, 'advert_book'])->name('advert-book');
    Route::post('/submit', [Advertise::class, 'submitAdvertDesign'])->name('submit-advert');
});

Route::get('/get-advert-price-total/{id}', [Advertise::class, 'getAdvertPriceTotal']);


Route::middleware(['user-auth'])->group(function () {

    Route::get('/account', [UserAccount::class, 'index'])->name('account');
    Route::post('/account/update', [UserAccount::class, 'update'])->name('account.update');









    Route::prefix('/events/')->name('events.')->group(function () {
        Route::get('/add-event-form', [Localevents::class, 'addEventForm']);
        Route::post('/add-event', [Localevents::class, 'addEvent'])->name('add-event');
        Route::get('/all-events', [Localevents::class, 'getUserEvents']);
        Route::get('/edit-event/{id}', [Localevents::class, 'editEvent']);
        Route::post('/update-event', [Localevents::class, 'updateEvent'])->name('update');
        Route::get('/delete-event/{id}', [Localevents::class, 'deleteEvent']);
    });

    Route::prefix('/businessdirectory/')->name('businessdirectory.')->group(function () {
        Route::get('/add-new-directory', [Businessdirectory::class, 'add_new_directory'])->name('add-new-directory');
        Route::post('/save-directory', [Businessdirectory::class, 'createNewDirectory'])->name('save-directory');
        Route::get('/all-directories', [Businessdirectory::class, 'getAllUserBusinessDirectories']);
        Route::get('/edit-directory/{id}', [Businessdirectory::class, 'editDirectory']);
        Route::post('/update-directory', [Businessdirectory::class, 'updateDirectory'])->name('update');
        Route::get('/delete-directory/{id}', [Businessdirectory::class, 'deleteDirectory'])->name('delete');
        Route::post('/submit-review', [Businessdirectory::class, 'submitReview'])->name('submitReview');
        Route::post('/submit-reply', [Businessdirectory::class, 'submitReply'])->name('submitReply');
    });


    Route::prefix('/account/magzine-designs/')->name('magzine-designs.')->group(function () {
        Route::get('/', [Advertise::class, 'getAllUserMagazineDesigns']);
        Route::get('{id}/{action}', [Advertise::class, 'manageUserMagazineDesigns']);
        Route::post('update', [Advertise::class, 'updateUserMagazineDesign'])->name('update');
    });



    // Advert Book Design

    Route::prefix('/account/advert-design-book/')->name('advert.')->group(function () {
        Route::get('/', [Advertise::class, 'getAllAdvertDesigns']);
        Route::get('{id}/{action}', [Advertise::class, 'manageAdvertDesigns']);
    });
});






use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\AdminEvents;
use App\Http\Controllers\backend\AdvertSizes;
use App\Http\Controllers\backend\JobRequests;
use App\Http\Controllers\backend\Pages;
use App\Http\Controllers\backend\Posts;
use App\Http\Controllers\backend\AdminBusinessDirecrory;
use App\Http\Controllers\backend\AdvertDesign;
use App\Http\Controllers\backend\Borough;
use App\Http\Controllers\backend\Feedback;
use App\Http\Controllers\backend\Giveaway;
use App\Http\Controllers\backend\MagazineDesign;
use App\Http\Controllers\backend\MagazineHighlights;
use App\Http\Controllers\backend\UpcommingIssues;
use App\Http\Controllers\backend\UsersController;

// Admin Auth Routes

Route::prefix('/admins/')->group(function () {
    Route::get('login', [AdminController::class, 'login']);
    Route::post('login', [AdminController::class, 'admin_login'])->name("/admins/login");

    Route::get('password-reset', [AdminController::class, 'password_reset']);
    Route::post('change-password', [AdminController::class, 'changePassword'])->name('/admins/change-password');

    Route::get('update-password', function () {
        return view('backend.update-password-form', ["auth" => "auth"]);
    })->middleware('admin-password-reset');

    Route::post('update-password', [AdminController::class, 'updatePassword'])->name('/admins/update-password');

    Route::get('logout', function () {
        session()->forget('admin');
        return redirect('admins');
    });
});











// Admin Group Routes
Route::middleware(['admin-auth'])->group(function () {
    Route::prefix('/admins/')->group(function () {
        Route::get('/', [AdminController::class, 'index']);
        
        
        
        // Upcommign Issues
        Route::prefix('/magazine-highlights/')->name('MagazineHighlight.')->group(function () {
            Route::get('/', [MagazineHighlights::class, 'index'])->name('getMagazineHighlights');
            Route::post('add', [MagazineHighlights::class, 'addMagazineHighlight'])->name('add');
            Route::get('{id}/{action}', [MagazineHighlights::class, 'manageMagazineHighlight']);
            Route::post('update', [MagazineHighlights::class, 'updateMagazineHighlight'])->name('update');
        });
    

        Route::prefix('/users/')->name('users.')->group(function () {
            Route::get('/', [UsersController::class, 'getAllUsers']);
            Route::get('/{id}/{action}', [UsersController::class, 'manageUsers']);
        });    


        Route::prefix('/giveaways/')->name('giveaway.')->group(function () {
            Route::get('/', [Giveaway::class, 'getAllGiveAwayRequests']);
            Route::get('/{id}/{action}', [Giveaway::class, 'manageGiveaways']);
        });    

        Route::prefix('/feedbacks/')->name('feedback.')->group(function () {
            Route::get('/', [Feedback::class, 'getAllFeedbacks']);
            Route::get('/{id}/{action}', [Feedback::class, 'manageFeedback']);
        });    

        Route::prefix('/messages/')->group(function () {
            Route::get('/', [AdminController::class, 'getAllMessages']);
            Route::get('{id}', [AdminController::class, 'deleteMessage']);
        });    


        // Advert Book Design

        Route::prefix('/advert-design-book/')->name('advert.')->group(function () {
            Route::get('/', [AdvertDesign::class, 'getAllAdvertDesigns']);
            Route::get('{id}/{action}', [AdvertDesign::class, 'manageAdvertDesigns']);
        });    


        // Upcommign Issues
        Route::prefix('/upcomming-issues/')->name('issue.')->group(function () {
            Route::get('/', [UpcommingIssues::class, 'index']);
            Route::post('add', [UpcommingIssues::class, 'addIssue'])->name('add');
            Route::get('{id}/{action}', [UpcommingIssues::class, 'issueAction']);
            Route::post('update', [UpcommingIssues::class, 'issueUpdate'])->name('update');
        });





        // Magazine Design
        Route::prefix('/magazine-design/')->name('magazine-design.')->group(function () {
            Route::get('/', [MagazineDesign::class, 'index']);
            Route::get('{id}/{action}', [MagazineDesign::class, 'manageMagazineDesign']);
            // Route::post('update', [UpcommingIssues::class, 'issueUpdate'])->name('update');
        });



        // Borough
        Route::prefix('/borough/')->name('borough.')->group(function () {
            Route::get('/', [Borough::class, 'index']);
            Route::post('add', [Borough::class, 'addBorough'])->name('add');
            Route::get('{id}/{action}', [Borough::class, 'boroughAction']);
            // Route::post('update', [Borough::class, 'issueUpdate'])->name('update');
        });


        // Events Admin
        Route::prefix('/events/')->name('events.')->group(function () {
            Route::get('/', [AdminEvents::class, 'index']);
            Route::get('{id}/{action}', [AdminEvents::class, 'activateEvent']);
            Route::get('{id}', [AdminEvents::class, 'viewEvent']);
            Route::post('/ad-event-by-admin', [AdminEvents::class, 'addNewEvent'])->name('add-event-by-admin');
        });


        // Events AdminBusinessDirecrory
        Route::prefix('/businessdirectories/')->group(function () {
            Route::get('/', [AdminBusinessDirecrory::class, 'index']);
            Route::get('{id}/{action}', [AdminBusinessDirecrory::class, 'activateDirectory']);
            Route::get('{id}', [AdminBusinessDirecrory::class, 'viewDirectory']);
        });


        // Reviews Manage Routes
        Route::get('/reviews', [AdminBusinessDirecrory::class, 'getDirectoryReviews']);
        Route::get('/reviews/{id}/{action}', [AdminBusinessDirecrory::class, 'manageDirectoryReviews']);

        Route::get('/replys', [AdminBusinessDirecrory::class, 'getDirectoryReplys']);
        Route::get('/replys/{id}/{action}', [AdminBusinessDirecrory::class, 'manageDirectoryReplys']);


        //Jobs Admin
        Route::prefix('/jobs/')->group(function () {
            Route::get('/', [JobRequests::class, 'index']);
            Route::get('cv/{cv}', [JobRequests::class, 'downloadCv']);
            Route::get('{id}/{action}', [JobRequests::class, 'removeJobRequest']);
        });


        // Posts Admin
        Route::prefix('/posts/')->group(function () {
            Route::get('/', [Posts::class, 'getPosts']);
            Route::post('add', [Posts::class, 'addPost'])->name('post.add');
            Route::get('{id}', [HomePage::class, 'getSinglePost']);
            Route::get('edit/{id}', [Posts::class, 'editPost'])->name('post.edit');
            Route::post('update', [Posts::class, 'updatePost'])->name('post.update');
        });


        Route::prefix('/adverts/')->name('advert.')->group(function () {
            Route::get('/', [AdvertSizes::class, 'index']);
            Route::post('add', [AdvertSizes::class, 'addAdvertSize'])->name('add');
            Route::get('{id}/{action}', [AdvertSizes::class, 'advertAction']);
        });


        // Pages Settings Routes
        Route::prefix('/pages/')->group(function () {

            Route::get('/', [Pages::class, 'pages']);

            //Home Page
            Route::get('home', [Pages::class, 'getHomePage']);
            Route::post('page-home', [Pages::class, 'page_home'])->name('page.home');;

            //About Page
            Route::get('about', [Pages::class, 'getAboutPage']);
            Route::post('page-about', [Pages::class, 'page_about'])->name('page.about');;

            //Contact Page
            Route::get('contact', [Pages::class, 'getContactPage']);
            Route::post('page-contact', [Pages::class, 'page_contact'])->name('page.contact');;

            //Advertise Page
            Route::get('advertise', [Pages::class, 'getAdvertisePage']);
            Route::post('page-advertise', [Pages::class, 'page_advertise'])->name('page.advertise');;

            //Businessdirectory Page
            Route::get('businessdirectory', [Pages::class, 'getBusinessdirectoryPage']);
            Route::post('page-businessdirectory', [Pages::class, 'page_businessdirectory'])->name('page.businessdirectory');

            //GreenInitiative Page
            Route::get('greeninitiative', [Pages::class, 'getGreenInitiativePage']);
            Route::post('page-greeninitiative', [Pages::class, 'page_greeninitiative'])->name('page.greeninitiative');

            //Community Growth Page
            Route::get('communitygrowth', [Pages::class, 'getCommunitygrowthPage']);
            Route::post('page-communitygrowth', [Pages::class, 'page_communitygrowth'])->name('page.communitygrowth');

            //Jobs Page
            Route::get('jobs', [Pages::class, 'getJobsPage']);
            Route::post('page-jobs', [Pages::class, 'page_jobs'])->name('page.jobs');

            //Jobs Page
            Route::get('faqs', [Pages::class, 'getFaqsPage']);
            Route::post('add-faq', [Pages::class, 'addFaq'])->name('page.add-faq');
            Route::get('edit-faq/{id}', [Pages::class, 'editFaq']);
            Route::post('update-faq', [Pages::class, 'updateFaq'])->name('page.update-faq');
            Route::get('delete-faq/{id}', [Pages::class, 'deleteFaq'])->name('page.delete-faq');
        });
    });
});
