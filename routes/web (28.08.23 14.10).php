<?php

use App\Http\Controllers\AboutUs\AboutUsController;
use App\Http\Controllers\Job\JobVacancyController;
use App\Http\Controllers\Join\JoinController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\Profile\AboutMeController;
use App\Http\Controllers\Profile\EducationController;
use App\Http\Controllers\Profile\ExperienceController;
use App\Http\Controllers\Profile\FamilyController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Profile\SkillController;
use App\Http\Controllers\Profile\TrachController;
use App\Http\Controllers\Service\HRISController;
use App\Http\Controllers\Testimony\TestimonyController;
use App\Http\Controllers\Welcome\HomeController;

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


Route::get('/', [HomeController::class, 'index'])->name('welcome');


Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/AboutUs', [AboutUsController::class, 'index'])->name('aboutus');
Route::get('/HowToJoin', [JoinController::class, 'index'])->name('join');



Route::get('/aboutme', [AboutMeController::class, 'index'])->name('aboutme');
Route::post('/aboutme/update', [AboutMeController::class, 'update'])->name('aboutme.update');

Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');
Route::post('/experience/add', [ExperienceController::class, 'add'])->name('experience.add');
Route::post('/experience/{id}', [ExperienceController::class, 'edit'])->name('experience.edit');
Route::delete('/experience/{id}/delete', [ExperienceController::class, 'delete'])->name('experience.delete');

Route::get('/education', [EducationController::class, 'index'])->name('education');
Route::post('/education/add', [EducationController::class, 'add'])->name('education.add');
Route::post('/education/{id}', [EducationController::class, 'edit'])->name('education.edit');
Route::get('/search-institutions', [EducationController::class, 'searchInstitutions']);
Route::delete('/education/{id}/delete', [EducationController::class, 'delete'])->name('education.delete');


Route::get('/skill', [SkillController::class, 'index'])->name('skill');
Route::post('/skill/add', [SkillController::class, 'add'])->name('skill.add');
Route::post('/skill/{id}', [SkillController::class, 'edit'])->name('skill.edit');
Route::delete('/skill/{id}/delete', [SkillController::class, 'delete'])->name('skill.delete');

Route::get('/family', [FamilyController::class, 'index'])->name('family');
Route::post('/family/add', [FamilyController::class, 'add'])->name('family.add');
Route::post('/family/{id}', [FamilyController::class, 'edit'])->name('family.edit');
Route::delete('/family/{id}/delete', [FamilyController::class, 'delete'])->name('family.delete');


Route::get('/TrainingAchievement', [TrachController::class, 'index'])->name('trach');
Route::post('/TrainingAchievement/add', [TrachController::class, 'add'])->name('trach.add');
Route::post('/TrainingAchievement/{id}', [TrachController::class, 'edit'])->name('trach.edit');
Route::delete('/TrainingAchievement/{id}/delete', [TrachController::class, 'delete'])->name('trach.delete');



Route::get('/JobVacancy', [JobVacancyController::class, 'index'])->name('job');
Route::post('/ApplyJob/{id}', [JobVacancyController::class, 'apply'])->name('job.apply');





Route::post('/logout', [LogOutController::class, 'logoutUser'])->name('logout');


Route::get('/login', [LoginController::class, 'indexLogin'])->name('login');
Route::post('/loginUser',[LoginController::class, 'loginUser'])->name('loginUser');


Route::get('/register', [LoginController::class, 'indexRegister'])->name('register');
Route::post('/registerUser',[LoginController::class, 'registerUser'])->name('registerUser');




Route::get('/services/PresentHR', [HRISController::class, 'presentHR'])->name('PresentHR');
Route::get('/services/Offers', [HRISController::class, 'TrainingDevelopment'])->name('TrainingDevelopment');
Route::get('/Company-Profile/Testimony', [TestimonyController::class, 'index'])->name('testimony');


Route::get('/home', [HomeController::class, 'index'])->name('home');
