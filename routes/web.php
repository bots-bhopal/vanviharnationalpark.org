<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ServerAdminController;
use App\Http\Controllers\TenderController;
use App\Http\Controllers\TouristController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('language/{lang}', function ($lang) {
//     Session::put('locale', $lang);
//     return redirect()->back();
// })->middleware('language');

// Route::get('/linkstorage', function () {
//     Artisan::call('storage:link'); // this will do the command line job
// });

// Route::get('/cache', function () {
//     Artisan::call('config:cache'); // this will do the command line job
// });


Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch')->middleware('language');

Route::match(['get', 'post'], '/logout', [LoginController::class, 'logout']);

Route::get('/', [MainController::class, 'index'])->name('vvnp.index')->middleware('language');
Route::get('/gallery', [MainController::class, 'fetchAllImages'])->name('vvnp.gallery')->middleware('language');
// Route::get('/contact', [ContactUsController::class, 'createForm']);
Route::post('/contact', [ContactUsController::class, 'contactUsForm'])->name('contact.store');
// Route::get('/tender-download/{filename}', [TenderController::class, 'download'])->name('vvnp.tender.download');
Route::get('/docs-download/{filename}', [DocumentController::class, 'download'])->name('vvnp.docs.download');


// Route::group(['prefix' => 'tender', 'middleware' => 'language'], function () {
//     Route::get('/tenders', [TenderController::class, 'tenders'])->name('vvnp.tenders');
// });

Route::group(['prefix' => 'document', 'middleware' => 'language'], function () {
    Route::get('/documents', [DocumentController::class, 'docs'])->name('vvnp.docs');
});

Route::group(['prefix' => 'about', 'middleware' => 'language'], function () {
    Route::get('/introduction', [AboutController::class, 'introduction'])->name('vvnp.about-introduction');
    Route::get('/vision-mission', [AboutController::class, 'visionMission'])->name('vvnp.vision-mission');
    Route::get('/history', [AboutController::class, 'history'])->name('vvnp.history');
    Route::get('/vanvihar-timeline', [AboutController::class, 'timeline'])->name('vvnp.timeline');
    Route::get('/significance', [AboutController::class, 'significance'])->name('vvnp.significance');
    Route::get('/forest', [AboutController::class, 'forest'])->name('vvnp.forest');
    Route::get('/biodiversity', [AboutController::class, 'biodiversity'])->name('vvnp.biodiversity');
});

Route::group(['prefix' => 'tourist', 'middleware' => 'language'], function () {
    Route::get('/new-initiatives', [TouristController::class, 'newInitiatives'])->name('vvnp.initiatives');
    Route::get('/attraction', [TouristController::class, 'attraction'])->name('vvnp.attraction');
    Route::get('/bird-interpretation', [TouristController::class, 'birdInterpretation'])->name('vvnp.bird');
    Route::get('/wild-cafe', [TouristController::class, 'wildCafe'])->name('vvnp.cafe');
    Route::get('/butterfly-park', [TouristController::class, 'park'])->name('vvnp.park');
    Route::get('/timing', [TouristController::class, 'timing'])->name('vvnp.timing');
    Route::get('/gate-charges', [TouristController::class, 'gateCharges'])->name('vvnp.gate-charges');
    Route::get('/display-map', [TouristController::class, 'displayMap'])->name('vvnp.display-map');
    Route::get('/dos', [TouristController::class, 'dos'])->name('vvnp.dos');
    Route::get('/interactive-events', [TouristController::class, 'interactiveEvents'])->name('vvnp.interactive-events');
    Route::get('/animal-adoption', [TouristController::class, 'animalAdoption'])->name('vvnp.animal-adoption');
});

Route::group(['prefix' => 'management', 'middleware' => 'language'], function () {
    Route::get('/admin-body', [ManagementController::class, 'adminBody'])->name('vvnp.admin-body');
    Route::get('/animal-management', [ManagementController::class, 'animalManagement'])->name('vvnp.animal-management');
    Route::get('/other-activities', [ManagementController::class, 'otherActivities'])->name('vvnp.other-activities');
    Route::get('/bear-rescue-center', [ManagementController::class, 'bear'])->name('vvnp.bear');
    Route::get('/vulture-conservation-center', [ManagementController::class, 'vulture'])->name('vvnp.vulture');
    Route::get('/snake-transit-center', [ManagementController::class, 'snake'])->name('vvnp.snake');
    Route::get('/barasingha-breeding-center', [ManagementController::class, 'barasingha'])->name('vvnp.barasingha');
    Route::get('/contact', [ManagementController::class, 'contact'])->name('vvnp.contact');
});

Route::group(['prefix' => 'news', 'middleware' => 'language'], function () {
    Route::get('/newses', [MainController::class, 'newses'])->name('vvnp.newses');
    Route::get('/news-details/{slug}', [MainController::class, 'news_details'])->name('vvnp.news-details');
});

Route::group(['prefix' => 'events', 'middleware' => 'language'], function () {
    Route::get('/events', [MainController::class, 'events'])->name('vvnp.events');
    Route::get('/event-details/{slug}', [MainController::class, 'event_details'])->name('vvnp.event-details');
});

Auth::routes(['register' => false]);
// Auth::routes(['verify' => true]);

Route::group(['as' => 'serveradmin.', 'prefix' => 'serveradmin', 'middleware' => ['auth', 'isServeradmin', 'prevent-back-history', 'language']], function () {
    // For Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // For Newses Routes
    Route::get('newses', [NewsController::class, 'index'])->name('newses.index');
    Route::get('newses/create', [NewsController::class, 'create'])->name('newses.create');
    Route::match(['get', 'post'], 'newses/store', [NewsController::class, 'store'])->name('newses.store');
    Route::get('newses/{id}/edit', [NewsController::class, 'edit'])->name('newses.edit');
    Route::match(['get', 'put'], 'newses/{id}/update', [NewsController::class, 'update'])->name('newses.update');
    Route::match(['get', 'delete'], 'newses/{id}', [NewsController::class, 'destroy'])->name('newses.destroy');
    Route::delete('deleteNewsImage/{id}', [NewsController::class, 'deleteNewsImage'])->name('newses.destroy_image');
    Route::delete('deleteNewsImages/{id}', [NewsController::class, 'deleteNewsImages'])->name('newses.destroy_images');
    Route::get('pending-news', [NewsController::class, 'pendingNews'])->name('newses.pending');
    Route::get('checkNewsSlug', [NewsController::class, 'checkSlug'])->name('newses.slug.check');
    Route::get('/changenewsstatus', [NewsController::class, 'changeNewsStatus'])->name('changeNewsStatus');

    // For Events Routes
    Route::get('events', [EventController::class, 'index'])->name('events.index');
    Route::get('events/create', [EventController::class, 'create'])->name('events.create');
    Route::match(['get', 'post'], 'events/store', [EventController::class, 'store'])->name('events.store');
    Route::get('events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::match(['get', 'put'], 'events/{id}/update', [EventController::class, 'update'])->name('events.update');
    Route::match(['get', 'delete'], 'events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
    Route::delete('deleteEventImage/{id}', [EventController::class, 'deleteEventImage'])->name('events.destroy_image');
    Route::delete('deleteEventImages/{id}', [EventController::class, 'deleteEventImages'])->name('events.destroy_images');
    Route::get('pending-event', [EventController::class, 'pendingEvent'])->name('events.pending');
    Route::get('checkEventSlug', [EventController::class, 'checkSlug'])->name('events.slug.check');
    Route::get('/changeeventstatus', [EventController::class, 'changeEventStatus'])->name('changeEventStatus');

    // For Gallery Routes
    Route::get('images', [GalleryController::class, 'index'])->name('images.index');
    Route::get('images/create', [GalleryController::class, 'create'])->name('images.create');
    Route::match(['get', 'post'], 'images/store', [GalleryController::class, 'store'])->name('images.store');
    Route::get('images/show', [GalleryController::class, 'show'])->name('images.show');
    Route::match(['get', 'delete'], 'images/{id}', [GalleryController::class, 'destroy'])->name('images.destroy');
    Route::get('pending-images', [GalleryController::class, 'pendingImages'])->name('images.pending');
    Route::get('/changeimagestatus', [GalleryController::class, 'changeImageStatus'])->name('changeImageStatus');

    // For Tender Quotation
    // Route::get('tender', [TenderController::class, 'index'])->name('tender.index');
    // Route::get('tender/create', [TenderController::class, 'create'])->name('tender.create');
    // Route::match(['get', 'post'], 'tender/store', [TenderController::class, 'store'])->name('tender.store');
    // Route::get('tender/{id}/edit', [TenderController::class, 'edit'])->name('tender.edit');
    // Route::match(['get', 'post'], 'tender/{id}/update', [TenderController::class, 'update'])->name('tender.update');
    // Route::match(['get', 'delete'], 'tender/{id}', [TenderController::class, 'destroy'])->name('tender.destroy');
    // Route::get('pending-tenders', [TenderController::class, 'pendingTenders'])->name('tender.pending');
    // Route::get('/changetenderstatus', [TenderController::class, 'changeTenderStatus'])->name('changeTenderStatus');

    // For Documents
    Route::get('document', [DocumentController::class, 'index'])->name('document.index');
    Route::get('document/create', [DocumentController::class, 'create'])->name('document.create');
    Route::match(['get', 'post'], 'document/store', [DocumentController::class, 'store'])->name('document.store');
    Route::get('document/{id}/edit', [DocumentController::class, 'edit'])->name('document.edit');
    Route::match(['get', 'post'], 'document/{id}/update', [DocumentController::class, 'update'])->name('document.update');
    Route::match(['get', 'delete'], 'document/{id}', [DocumentController::class, 'destroy'])->name('document.destroy');
    Route::get('pending-documents', [DocumentController::class, 'pendingDocuments'])->name('document.pending');
    Route::get('/changedocumentstatus', [DocumentController::class, 'changeDocumentStatus'])->name('changeDocumentStatus');

    // Account Settings
    Route::get('profile', [SettingsController::class, 'index'])->name('profile');
    Route::match(['get', 'put'], 'profile-update', [SettingsController::class, 'updateProfile'])->name('profile.update');
    Route::get('changePassword', [SettingsController::class, 'changePassword'])->name('changePassword');
    Route::match(['get', 'put'], 'updatePassword', [SettingsController::class, 'updatePassword'])->name('updatePassword');
    // Change Admin Password
    Route::get('adminChangePassword/{id}', [SettingsController::class, 'adminChangePassword'])->name('changeadminpassword');
    Route::match(['get', 'put'], 'adminUpdatePassword/{id}', [SettingsController::class, 'adminUpdatePassword'])->name('updateadminpassword');
    // Change Superadmin Password
    Route::get('superAdminChangePassword/{id}', [SettingsController::class, 'superAdminChangePassword'])->name('changesuperadminpassword');
    Route::match(['get', 'put'], 'superAdminUpdatePassword/{id}', [SettingsController::class, 'superAdminUpdatePassword'])->name('updatesuperadminpassword');

    // For Admin List
    Route::get('/adminList', [ServerAdminController::class, 'index'])->name('adminList');
    Route::get('user/create', [ServerAdminController::class, 'createUser'])->name('user.create');
    Route::match(['get', 'post'],'user/store', [ServerAdminController::class, 'storeUser'])->name('user.store');
    Route::get('/superAdminList', [ServerAdminController::class, 'superAdminList'])->name('superAdminList');
    Route::get('/role-edit/{id}', [ServerAdminController::class, 'editUserRole'])->name('editUserRole');
    Route::get('/superadmin-role-edit/{id}', [ServerAdminController::class, 'editSuperAdminRole'])->name('editSuperAdminRole');
    Route::match(['get', 'put'], '/role-update/{id}', [ServerAdminController::class, 'updateUserRole'])->name('updateUserRole');
    Route::match(['get', 'put'], '/superadmin-role-update/{id}', [ServerAdminController::class, 'updateSuperAdminRole'])->name('updateSuperAdminRole');
    Route::delete('/role-delete/{id}', [ServerAdminController::class, 'deleteUserRole'])->name('deleteUserRole');
    Route::get('/changeuserstatus', [ServerAdminController::class, 'changeUserStatus'])->name('changeUserStatus');

    // For Language List
    Route::get('/languages', [LanguageController::class, 'index'])->name('language.index');
    Route::get('language/create', [LanguageController::class, 'create'])->name('language.create');
    Route::match(['get', 'post'], 'language/store', [LanguageController::class, 'store'])->name('language.store');
    Route::get('language/{id}/edit', [LanguageController::class, 'edit'])->name('language.edit');
    Route::match(['get', 'put'], 'language/{id}/update', [LanguageController::class, 'update'])->name('language.update');
    Route::match(['get', 'delete'], 'language/{id}', [LanguageController::class, 'destroy'])->name('language.destroy');
    Route::get('/changelanguagestatus', [LanguageController::class, 'changeLanguageStatus'])->name('changeLanguageStatus');
});

// Route::group(['as' => 'superadmin.', 'prefix' => 'superadmin', 'middleware' => ['auth', 'verified', 'isSuperadmin', 'prevent-back-history', 'language']], function () {
Route::group(['as' => 'superadmin.', 'prefix' => 'superadmin', 'middleware' => ['auth', 'isSuperadmin', 'prevent-back-history', 'language']], function () {
    // For Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // For Newses Routes
    Route::get('newses', [NewsController::class, 'index'])->name('newses.index');
    Route::get('newses/create', [NewsController::class, 'create'])->name('newses.create');
    Route::match(['get', 'post'], 'newses/store', [NewsController::class, 'store'])->name('newses.store');
    Route::get('newses/{id}/edit', [NewsController::class, 'edit'])->name('newses.edit');
    Route::match(['get', 'put'], 'newses/{id}/update', [NewsController::class, 'update'])->name('newses.update');
    Route::match(['get', 'delete'], 'newses/{id}', [NewsController::class, 'destroy'])->name('newses.destroy');
    Route::delete('deleteNewsImage/{id}', [NewsController::class, 'deleteNewsImage'])->name('newses.destroy_image');
    Route::delete('deleteNewsImages/{id}', [NewsController::class, 'deleteNewsImages'])->name('newses.destroy_images');
    Route::get('pending-news', [NewsController::class, 'pendingNews'])->name('newses.pending');
    Route::get('checkNewsSlug', [NewsController::class, 'checkSlug'])->name('newses.slug.check');
    Route::get('/changenewsstatus', [NewsController::class, 'changeNewsStatus'])->name('changeNewsStatus');

    // For Events Routes
    Route::get('events', [EventController::class, 'index'])->name('events.index');
    Route::get('events/create', [EventController::class, 'create'])->name('events.create');
    Route::match(['get', 'post'], 'events/store', [EventController::class, 'store'])->name('events.store');
    Route::get('events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::match(['get', 'put'], 'events/{id}/update', [EventController::class, 'update'])->name('events.update');
    Route::match(['get', 'delete'], 'events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
    Route::delete('deleteEventImage/{id}', [EventController::class, 'deleteEventImage'])->name('events.destroy_image');
    Route::delete('deleteEventImages/{id}', [EventController::class, 'deleteEventImages'])->name('events.destroy_images');
    Route::get('pending-event', [EventController::class, 'pendingEvent'])->name('events.pending');
    Route::get('checkEventSlug', [EventController::class, 'checkSlug'])->name('events.slug.check');
    Route::get('/changeeventstatus', [EventController::class, 'changeEventStatus'])->name('changeEventStatus');

    // For Gallery Routes
    Route::get('images', [GalleryController::class, 'index'])->name('images.index');
    Route::get('images/create', [GalleryController::class, 'create'])->name('images.create');
    Route::match(['get', 'post'], 'images/store', [GalleryController::class, 'store'])->name('images.store');
    Route::get('images/show', [GalleryController::class, 'show'])->name('images.show');
    Route::match(['get', 'delete'], 'images/{id}', [GalleryController::class, 'destroy'])->name('images.destroy');
    Route::get('pending-images', [GalleryController::class, 'pendingImages'])->name('images.pending');
    Route::get('/changeimagestatus', [GalleryController::class, 'changeImageStatus'])->name('changeImageStatus');

    // For Tender Quotation
    // Route::get('tender', [TenderController::class, 'index'])->name('tender.index');
    // Route::get('tender/create', [TenderController::class, 'create'])->name('tender.create');
    // Route::match(['get', 'post'], 'tender/store', [TenderController::class, 'store'])->name('tender.store');
    // Route::get('tender/{id}/edit', [TenderController::class, 'edit'])->name('tender.edit');
    // Route::match(['get', 'post'], 'tender/{id}/update', [TenderController::class, 'update'])->name('tender.update');
    // Route::match(['get', 'delete'], 'tender/{id}', [TenderController::class, 'destroy'])->name('tender.destroy');
    // Route::get('pending-tenders', [TenderController::class, 'pendingTenders'])->name('tender.pending');
    // Route::get('/changetenderstatus', [ServerAdminController::class, 'changeTenderStatus'])->name('changeTenderStatus');

    // For Documents
    Route::get('document', [DocumentController::class, 'index'])->name('document.index');
    Route::get('document/create', [DocumentController::class, 'create'])->name('document.create');
    Route::match(['get', 'post'], 'document/store', [DocumentController::class, 'store'])->name('document.store');
    Route::get('document/{id}/edit', [DocumentController::class, 'edit'])->name('document.edit');
    Route::match(['get', 'post'], 'document/{id}/update', [DocumentController::class, 'update'])->name('document.update');
    Route::match(['get', 'delete'], 'document/{id}', [DocumentController::class, 'destroy'])->name('document.destroy');
    Route::get('pending-documents', [DocumentController::class, 'pendingDocuments'])->name('document.pending');
    Route::get('/changedocumentstatus', [DocumentController::class, 'changeDocumentStatus'])->name('changeDocumentStatus');

    // Account Settings
    Route::get('profile', [SettingsController::class, 'index'])->name('profile');
    Route::match(['get', 'put'], 'profile-update', [SettingsController::class, 'updateProfile'])->name('profile.update');
    Route::get('changePassword', [SettingsController::class, 'changePassword'])->name('changePassword');
    Route::match(['get', 'put'], 'updatePassword', [SettingsController::class, 'updatePassword'])->name('updatePassword');
    Route::get('adminChangePassword/{id}', [SettingsController::class, 'adminChangePassword'])->name('changeadminpassword');
    Route::match(['get', 'put'], 'adminUpdatePassword/{id}', [SettingsController::class, 'adminUpdatePassword'])->name('updateadminpassword');

    // For User List
    Route::get('/adminList', [ServerAdminController::class, 'index'])->name('adminList');
    Route::get('user/create', [ServerAdminController::class, 'createUser'])->name('user.create');
    Route::match(['get', 'post'],'user/store', [ServerAdminController::class, 'storeUser'])->name('user.store');
    Route::get('/role-edit/{id}', [ServerAdminController::class, 'editUserRole'])->name('editUserRole');
    Route::match(['get', 'put'], '/role-update/{id}', [ServerAdminController::class, 'updateUserRole'])->name('updateUserRole');
    Route::delete('/role-delete/{id}', [ServerAdminController::class, 'deleteUserRole'])->name('deleteUserRole');
    Route::get('/changeuserstatus', [ServerAdminController::class, 'changeUserStatus'])->name('changeUserStatus');
});

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'isAdmin', 'prevent-back-history', 'language']], function () {
    // For Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // For Newses Routes
    Route::get('newses', [NewsController::class, 'index'])->name('newses.index');
    Route::get('newses/create', [NewsController::class, 'create'])->name('newses.create');
    Route::match(['get', 'post'], 'newses/store', [NewsController::class, 'store'])->name('newses.store');
    Route::get('newses/{id}/edit', [NewsController::class, 'edit'])->name('newses.edit');
    Route::match(['get', 'put'], 'newses/{id}/update', [NewsController::class, 'update'])->name('newses.update');
    Route::match(['get', 'delete'], 'newses/{id}', [NewsController::class, 'destroy'])->name('newses.destroy');
    Route::delete('deleteNewsImage/{id}', [NewsController::class, 'deleteNewsImage'])->name('newses.destroy_image');
    Route::delete('deleteNewsImages/{id}', [NewsController::class, 'deleteNewsImages'])->name('newses.destroy_images');
    Route::get('pending-news', [NewsController::class, 'pendingNews'])->name('newses.pending');
    Route::get('checkNewsSlug', [NewsController::class, 'checkSlug'])->name('newses.slug.check');

    // For Events Routes
    Route::get('events', [EventController::class, 'index'])->name('events.index');
    Route::get('events/create', [EventController::class, 'create'])->name('events.create');
    Route::match(['get', 'post'], 'events/store', [EventController::class, 'store'])->name('events.store');
    Route::get('events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::match(['get', 'put'], 'events/{id}/update', [EventController::class, 'update'])->name('events.update');
    Route::match(['get', 'delete'], 'events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
    Route::delete('deleteEventImage/{id}', [EventController::class, 'deleteEventImage'])->name('events.destroy_image');
    Route::delete('deleteEventImages/{id}', [EventController::class, 'deleteEventImages'])->name('events.destroy_images');
    Route::get('pending-event', [EventController::class, 'pendingEvent'])->name('events.pending');
    Route::get('checkEventSlug', [EventController::class, 'checkSlug'])->name('events.slug.check');

    // For Gallery Routes
    Route::get('images', [GalleryController::class, 'index'])->name('images.index');
    Route::get('images/create', [GalleryController::class, 'create'])->name('images.create');
    Route::match(['get', 'post'], 'images/store', [GalleryController::class, 'store'])->name('images.store');
    Route::get('images/show', [GalleryController::class, 'show'])->name('images.show');
    Route::match(['get', 'delete'], 'images/{id}', [GalleryController::class, 'destroy'])->name('images.destroy');
    Route::get('pending-images', [GalleryController::class, 'pendingImages'])->name('images.pending');

    // For Tender Quotation
    // Route::get('tender', [TenderController::class, 'index'])->name('tender.index');
    // Route::get('tender/create', [TenderController::class, 'create'])->name('tender.create');
    // Route::match(['get', 'post'], 'tender/store', [TenderController::class, 'store'])->name('tender.store');
    // Route::get('tender/{id}/edit', [TenderController::class, 'edit'])->name('tender.edit');
    // Route::match(['get', 'post'], 'tender/{id}/update', [TenderController::class, 'update'])->name('tender.update');
    // Route::match(['get', 'delete'], 'tender/{id}', [TenderController::class, 'destroy'])->name('tender.destroy');
    // Route::get('pending-tenders', [TenderController::class, 'pendingTenders'])->name('tender.pending');

    // For Documents
    Route::get('document', [DocumentController::class, 'index'])->name('document.index');
    Route::get('document/create', [DocumentController::class, 'create'])->name('document.create');
    Route::match(['get', 'post'], 'document/store', [DocumentController::class, 'store'])->name('document.store');
    Route::get('document/{id}/edit', [DocumentController::class, 'edit'])->name('document.edit');
    Route::match(['get', 'post'], 'document/{id}/update', [DocumentController::class, 'update'])->name('document.update');
    Route::match(['get', 'delete'], 'document/{id}', [DocumentController::class, 'destroy'])->name('document.destroy');
    Route::get('pending-documents', [DocumentController::class, 'pendingDocuments'])->name('document.pending');

    // Account Settings
    Route::get('profile', [SettingsController::class, 'index'])->name('profile');
    Route::match(['get', 'put'], 'profile-update', [SettingsController::class, 'updateProfile'])->name('profile.update');
    Route::get('changePassword', [SettingsController::class, 'changePassword'])->name('changePassword');
    Route::match(['get', 'put'], 'updatePassword', [SettingsController::class, 'updatePassword'])->name('updatePassword');
});
