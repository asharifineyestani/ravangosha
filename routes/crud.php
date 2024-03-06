<?php

Route::any('logout', function (){
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/authwire');
});


Route::crud('images', \App\Http\Controllers\Crud\ImageController::class);
Route::crud('players', \App\Http\Controllers\Crud\PlayerController::class);
Route::crud('teams', \App\Http\Controllers\Crud\TeamController::class);
Route::crud('games', \App\Http\Controllers\Crud\GameController::class);
Route::crud('league-teams', \App\Http\Controllers\Crud\LeagueTeamController::class);
Route::crud('variables', \App\Http\Controllers\Crud\VariableController::class);
Route::crud('positions', \App\Http\Controllers\Crud\PositionController::class);



Route::crud('products', \App\Http\Controllers\Crud\ProductController::class);
Route::crud('stocks', \App\Http\Controllers\Crud\StockController::class);
Route::crud('orders', \App\Http\Controllers\Crud\OrderController::class);
Route::crud('order-items', \App\Http\Controllers\Crud\OrderItemController::class);

Route::crud('menu', \App\Http\Controllers\Crud\MenuController::class);
Route::crud('top-menu', \App\Http\Controllers\Crud\TopMenuController::class);
Route::crud('users', \App\Http\Controllers\Crud\UserController::class);
Route::crud('players', \App\Http\Controllers\Crud\PlayerController::class);
Route::crud('league-teams', \App\Http\Controllers\Crud\LeagueTeamController::class);
Route::crud('languages', \App\Http\Controllers\Crud\LanguageController::class);


Route::crud('comments', \App\Http\Controllers\Crud\CommentController::class);
Route::crud('messages', \App\Http\Controllers\Crud\MessageController::class);
Route::crud('pages', \App\Http\Controllers\Crud\PageController::class);
Route::crud('posts', \App\Http\Controllers\Crud\PostController::class);
Route::crud('videos', \App\Http\Controllers\Crud\VideoController::class);
Route::crud('hero-posts', \App\Http\Controllers\Crud\HeroPostController::class);
Route::crud('tags', \App\Http\Controllers\Crud\TagController::class);
Route::crud('categories', \App\Http\Controllers\Crud\CategoryController::class);

Route::crud('variables', \App\Http\Controllers\Crud\VariableController::class);
Route::crud('roles', \App\Http\Controllers\Crud\RoleController::class);
Route::get('change-password', [\App\Http\Controllers\Crud\ChangePasswordController::class, 'index']);
Route::post('change-password', [\App\Http\Controllers\Crud\ChangePasswordController::class, 'store']);

Route::get('profile/{id?}', [\App\Http\Controllers\Crud\ProfileController::class, 'show']);
Route::put('profile/{id}', [\App\Http\Controllers\Crud\ProfileController::class, 'update']);
Route::post('profile', [\App\Http\Controllers\Crud\ProfileController::class, 'store']);
Route::get('profile/{id}/edit', [\App\Http\Controllers\Crud\ProfileController::class, 'edit']);



Route::crud('books', \App\Http\Controllers\Crud\BookController::class);
Route::crud('sellers', \App\Http\Controllers\Crud\SellerController::class);
Route::crud('verify_codes', \App\Http\Controllers\Crud\VerifyCodeController::class);
