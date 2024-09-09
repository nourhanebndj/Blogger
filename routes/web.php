<?php 
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoriesController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::post('/subscribe', function (Illuminate\Http\Request $request) {
    $request->validate(['email' => 'required|email']);
    
    $email = $request->input('email');
    
    // Send the email (to yourself or store in the database)
    Mail::raw("New subscription from: $email", function($message) use ($email) {
        $message->to('nourhanebendjeddou23@gmail.com')
                ->subject('New Subscription');
    });

    return back()->with('success', 'Thank you for subscribing!');
});
Route::get('/user/pages/search', [ArticlesController::class, 'search'])->name('articles.search');
Route::get('/user/pages/articles', [HomeController::class, 'allArticles'])->name('articles.all');
Route::get('/user/pages/article_details/{id}', [ArticlesController::class, 'show'])->name('article.details');
Route::get('/user/pages/contact', function () {
    return view('user.pages.contact');
})->name('contact.form');

Route::post('/user/pages/contact', [ContactController::class, 'sendContact'])->name('contact.send');//About Page
Route::get('/user/pages/about', function () {
    return view('user.pages.about');
});
Route::get('/dashboard', function () {
return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Auth routes
Auth::routes(['register' => false]);

Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Articles route
Route::get('/admin/articles', [ArticlesController::class, 'index'])->name('admin.articles.index');
Route::get('/admin/articles/add', [ArticlesController::class, 'create'])->name('add_articles');
Route::post('/admin/articles/store', [ArticlesController::class, 'store'])->name('admin.articles.store');
Route::get('/admin/articles/{id}/edit', [ArticlesController::class, 'edit'])->name('admin.articles.edit');
Route::put('/admin/articles/{id}', [ArticlesController::class, 'update'])->name('admin.articles.update');
Route::delete('/admin/articles/{id}', [ArticlesController::class, 'destroy'])->name('admin.articles.destroy');

// Members routes
Route::get('/admin/members', [AdminController::class, 'display'])->name('admin.members');
Route::delete('/admin/members/{id}', [AdminController::class, 'destroy'])->name('admin.members.destroy');
Route::post('/admin/members', [AdminController::class, 'store'])->name('admin.members.store');

// Categories routes
// Display categories
Route::get('/admin/Categories', [CategoriesController::class, 'display'])->name('admin.Categories');
// Store a new category
Route::post('/admin/Categories', [CategoriesController::class, 'store'])->name('admin.Categories.store');
// Edit Category
Route::get('/admin/Categories/{id}/edit', [CategoriesController::class, 'edit'])->name('admin.Categories.edit');
Route::patch('/admin/Categories/{id}', [CategoriesController::class, 'update'])->name('admin.Categories.update');

// Delete Category
Route::delete('/admin/Categories/{id}', [CategoriesController::class, 'destroy'])->name('admin.Categories.destroy');

require __DIR__.'/auth.php';