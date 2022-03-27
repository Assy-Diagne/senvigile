
<?php

use Illuminate\Support\Facades\Route;

//use Illuminate\Http\Controllers\Register1Controller;
use App\Http\Controllers\ProfessionnelController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\PriceController;
use App\Http\Controllers\HostingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SolutionsController;


use App\Http\Controllers\SolutionController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProduitssetservicessController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PClientController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\OffresController;
use App\Http\Controllers\OffressController;

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\PlateformeController;
use App\Http\Controllers\AjoutController;

use App\Http\Controllers\FacturationController;
use App\Http\Controllers\StatiquesController;

use App\Http\Controllers\FactureController;

use App\Http\Controllers\ParametreController;

use App\Http\Controllers\VerificationController;


use App\Http\Controllers\PaiementController;


use App\Http\Controllers\PagezenController;
use App\Http\Controllers\PagezenpremiumController;
use App\Http\Controllers\PagezenintegralController;
use App\Http\Controllers\PaniertwooController;

use App\Http\Controllers\PageimvidController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AlarmController;

use Illuminate\Foundation\Auth\EmailVerificationRequest;






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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::post('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes(['verify' => true]);







/*Route::get('/email/verify', function () {
    return view('auth.verify');*/
    //return view('auth.verify-email');
/*})->middleware('auth')->name('verification.notice');*/






Route::get('/email/verify', function () {
    return view('auth.verify');
    //return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'update'])->name('update');

//Route::get('/Professionnel', [App\Http\Controllers\ProfessionnelController::class, 'Professionnel'])->name('Pro');

Route::post('/register1', [App\Http\Controllers\ProfessionnelController::class, 'create'])->name('register1');

Route::get('/price', [App\Http\Controllers\PriceController::class, 'price1'])->name('price');
Route::get('/price/{id}', [App\Http\Controllers\PriceController::class, 'showprod2'])->name('showprod');

Route::get('/hosting', [App\Http\Controllers\HostingController::class, 'hosting1'])->name('Application');

Route::get('/features', [App\Http\Controllers\SolutionController::class, 'features1'])->name('Solutions');
Route::get('/domain', [App\Http\Controllers\DomainController::class, 'domaine1'])->name('Support');
Route::get('/services', [App\Http\Controllers\ServicesController::class, 'services'])->name('Services');
Route::get('/Contact', [App\Http\Controllers\ContactController::class, 'contact1'])->name('contact');


Route::post('/Contact', [App\Http\Controllers\ContactController::class, 'emailcontact'])->name('emailcontact');
Route::post('/Contact/valider', [App\Http\Controllers\ContactController::class, 'validator'])->name('emailcontact');




Route::get('/', [App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/AjoutUtilisateurs', [App\Http\Controllers\AjoutController::class ,'ajout'])->name('ajout');


//Route::middleware(['auth']) ->group (function()
//{

//Route::get('users-parametre', 'App\Http\Controllers\UsersController@edit')->name('users.edit-parametre');
//Route::put('users-parametre', 'UsersController@update')->name('users.update-parametre');


//});
Route::get('users.profile', [App\Http\Controllers\UsersController::class, 'edit'])->name('edit')->middleware(['auth', 'verified']);
Route::post('users.profile', [App\Http\Controllers\UsersController::class, 'edit2'])->name('edit2')->middleware(['auth', 'verified']);
Route::post('users.profile/mot-de-passe', [App\Http\Controllers\UsersController::class, 'changePasswordPost'])->name('changePasswordPost')->middleware(['auth', 'verified']);




Route::post('users.profile/mot-de-passe/Pro', [App\Http\Controllers\UsersController::class, 'changePasswordPostPro'])->name('changePasswordPostPro')->middleware(['auth', 'verified']);
Route::post('users.profile/mot-de-passe/professionnel', [App\Http\Controllers\UsersController::class, 'edit3'])->name('edit3')->middleware(['auth', 'verified']);










//Route::post('users.profile', [App\Http\Controllers\UsersController::class, 'update']);


Route::get('professionnel.profile', [App\Http\Controllers\ProchangeController::class, 'editer'])->middleware(['auth', 'verified']);
Route::post('professionnel.profile', [App\Http\Controllers\ProchangeController::class, 'update'])->middleware(['auth', 'verified']);



//Route::get('users.profile', [App\Http\Controllers\ParametreController::class, 'edit2'])->name('edit2');


Route::get('/accueil', [App\Http\Controllers\AccueilController::class, 'index'])->name('Accueil');

Route::get('/Commande', [App\Http\Controllers\CommandeController::class, 'index'])->name('Commande')->middleware(['auth', 'verified']);
Route::post('/Commande/{id}', [App\Http\Controllers\CommandeController::class, 'show'])->name('voir')->middleware(['auth', 'verified']);





Route::get('/offres', [App\Http\Controllers\OffresController::class, 'offres'])->name('offres');
Route::get('/mesproduits/{id}', [App\Http\Controllers\OffresController::class, 'showprod'])->name('showprod')->middleware(['auth', 'verified']);


//Route::get('/plateforme', [App\Http\Controllers\PlateformeController::class, 'plateforme'])->name('Plateforme')->middleware(['auth', 'verified']);
Route::get('/facturation', [App\Http\Controllers\FacturationController::class, 'facturation1'])->name('Facturation')->middleware(['auth', 'verified']);



Route::post('/facture/{id}', [App\Http\Controllers\FacturationController::class, 'rapport'])->name('show')->middleware(['auth', 'verified']);



Route::get('/plateforme', [App\Http\Controllers\PlateformeController::class, 'plateforme'])->name('Plateforme')->middleware(['auth', 'verified']);
Route::get('/statiques', [App\Http\Controllers\StatiquesController::class, 'statiques1'])->name('Statiques')->middleware(['auth', 'verified']);
//Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
//Route::get('/produit', 'ProduitController')->name('produits.show');

//Route::resource('/produit', App\Http\Controllers\ProduitController::class);

/*Route::get('/mesproduits', [App\Http\Controllers\ProduitController::class ,'index']);
Route::get('/mesproduits/{id}', [App\Http\Controllers\ProduitController::class ,'showprod']);*/



//Route::resource('/panier', App\Http\Controllers\CartController::class);

Route::post('update-panier/{id}', [PaniertwooController::class, 'updatePanier'])->name('panier.update')->middleware(['auth', 'verified']);


Route::post('enregistrer', [PaniertwooController::class, 'validerpanier'])->name('validerpanier.store')->middleware(['auth', 'verified']);

Route::get('/PageClient', [App\Http\Controllers\PClientController::class, 'Pclient1'])->name('pclient')->middleware(['auth', 'verified']);






Route::post('remove/{id}', [PaniertwooController::class, 'removePanier'])->name('panier.remove')->middleware(['auth', 'verified']);
//Route::delete('supprimer', [CartController::class, 'supprimer'])->name('panier.suppression');

//Route::post('clear', [CartController::class, 'clearAllPanier'])->name('panier.clear');



Route::get('/videpanier', function () {
    Cart::destroy();
        return redirect()->back();
});

//
Route::get('/continuer', [App\Http\Controllers\CartController::class, 'continuer'])->name('continuer')->middleware(['auth', 'verified']);

Route::post('/statut', [App\Http\Controllers\CartController::class, 'statut'])->name('statut');













Route::get('/offres/pagezen', [App\Http\Controllers\PagezenController::class ,'pagezen'])->name('pagezen');

Route::get('/offres/pagezenpremium', [App\Http\Controllers\PagezenpremiumController::class ,'pagezenpremium'])->name('pagezenpremium');
Route::get('/offres/pagezenintegral', [App\Http\Controllers\PagezenintegralController::class ,'pagezenintegral'])->name('pagezenintegral');




Route::get('/Mesoffres', [App\Http\Controllers\OffressController::class, 'offress'])->name('offress')->middleware(['auth', 'verified']);


Route::get('/features2', [App\Http\Controllers\SolutionsController::class, 'features2'])->name('Solutionss');

Route::get('/ProduitsServices', [App\Http\Controllers\ProduitssetservicessController::class, 'servicess'])->name('Servicess');


Route::get('/ImagesetVideos', [App\Http\Controllers\PageimvidController::class, 'imvid'])->name('imvid');

Route::get('/Pagepanier', [PaniertwooController::class, 'panier2'])->name('panier2');

Route::get('panier', [PaniertwooController::class, 'panierList'])->name('panier.list')->middleware(['auth', 'verified']);
Route::post('panier/add', [PaniertwooController::class, 'addToPanier'])->name('panier.store')->middleware(['auth', 'verified']);

Route::get('/produits', [App\Http\Controllers\VideoController::class ,'affichage']);

Route::post('/produits', [App\Http\Controllers\VideoController::class ,'enregistrement'])->middleware(['auth', 'verified']);
Route::post('/produits', [App\Http\Controllers\AlarmController::class ,'enregistrementA'])->middleware(['auth', 'verified']);























