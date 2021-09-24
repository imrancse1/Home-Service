<?php

use App\Http\Livewire\Admin\AdminDashbordComponent;
use App\Http\Livewire\Admin\AdminServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminAddServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminEditServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminServicesComponent;
use App\Http\Livewire\Admin\AdminServicesByCategoryComponent;
use App\Http\Livewire\Admin\AdminAddServicesComponent;
use App\Http\Livewire\Admin\AdminEditServiceComponent;

use App\Http\Livewire\ServiceByCategoryComponent;
use App\Http\Livewire\ServiceDetailsComponent;

use App\Http\Livewire\Sprovider\SproviderDashbordComponent;
use App\Http\Livewire\Customer\CustomerDashbordComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ServiceCategoriesComponent;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',HomeComponent::class)->name('home');

Route::get('service-categories', ServiceCategoriesComponent::class)->name('home.service_categories');
Route::get('/{category_slug}/services', ServiceByCategoryComponent::class)->name('home.service_by_category');
Route::get('/service/{service_slug}', ServiceDetailsComponent::class)->name('home.service_details');

//For Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
	Route::get('/customer/dashbord', CustomerDashbordComponent::class)->name('customer.dashboard');
});

//For Service Provider
Route::middleware(['auth:sanctum', 'verified', 'authsprovider'])->group(function(){
	Route::get('/sprovider/dashbord', SproviderDashbordComponent::class)->name('sprovider.dashboard');
});

//For Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
	Route::get('/admin/dashbord', AdminDashbordComponent::class)->name('admin.dashboard');
	Route::get('/admin/service-categories', AdminServiceCategoryComponent::class)->name('admin.service_categories');
	Route::get('/admin/service-category/add', AdminAddServiceCategoryComponent::class)->name('admin.add_service_categor');
	Route::get('/admin/service-category/edit/{category_id}', AdminEditServiceCategoryComponent::class)->name('admin.edit_service_categor');
	Route::get('/admin/all-services', AdminServicesComponent::class)->name('admin.all_services');
	Route::get('/admin/{category_slug}/services', AdminServicesByCategoryComponent::class)->name('admin.services_by_category');
	Route::get('/admin/service/add', AdminAddServicesComponent::class)->name('admin.add_service');
	Route::get('/admin/service/edit/{service_slug}', AdminEditServiceComponent::class)->name('admin.edit_service');
});