<?php

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

//Homepage
//Route::get('/', function () {
    //return view('/index');
//});


//Newspage
Route::get('/vUser/news', function () {
    return view('/vUser/news');
});

Route::get('/', 'NewsController@getNews');
Route::get('/vUser/showNews/{ID}', 'NewsController@show');


//Research
Route::get('/vUser/research', function () {
    return view('/vUser/research');

});

Route::get('/vUser/research', 'ResearchController@getDsn');


Route::get('/vUser/researchstd', function () {
    return view('/vUser/researchstd');
});
Route::get('/vUser/researchstd', 'ResearchController@getMhs');





//Publication
Route::get('/vUser/publication', function () {
    return view('/vUser/publication');
});

Route::get('/vUser/publicationstd', function () {
    return view('/vUser/publicationstd');
});

Route::get('/vUser/publication', 'PublicationController@getDsn');

Route::get('/vUser/publicationstd', 'PublicationController@getMhs');


//Dedication
Route::get('/vUser/dedication', function () {
    return view('/vUser/dedication');
});

Route::get('/vUser/dedicationstd', function () {
    return view('/vUser/dedicationstd');
});

Route::get('/vUser/dedication', 'DedicationController@getDsn');

Route::get('/vUser/dedicationstd', 'DedicationController@getMhs');

//Education
Route::get('/vUser/education', function () {
    return view('/vUser/education');
});

//Achievement
Route::get('/vUser/achievement', function () {
    return view('/vUser/achievement');
});
Route::get('/vUser/achievement', 'AchievementController@getDsn');


Route::get('/vUser/achievementstd', function () {
    return view('/vUser/achievementstd');
});

Route::get('/vUser/achievementstd', 'AchievementController@getMhs');



//Lectrurer
Route::get('/vUser/lecturer', function () {
    return view('/vUser/lecturer');
});

Route::get('/vUser/lecturer', 'DosenController@getDsn');




//Alumni
Route::get('/vUser/alumni', function () {
    return view('/vUser/alumni');
});

Route::get('/vUser/alumni', 'AlumniController@getAl');


//Student
Route::get('/vUser/student', function () {
    return view('/vUser/student');
});
Route::get('/vUser/student', 'MahasiswaController@getMhs');


//Partnership
Route::get('/vUser/partnership', function () {
    return view('/vUser/partnership');
});
Route::get('/vUser/partnership', 'PartnershipController@getPartner');



//======================================Bagian Admin====================================================

//Login Admin Routes
Route::get('/login', function () {
    return view('/login');
});
Route::post('/loginme', 'loginController@login');

Route::get('/admin', function () {
    return view('/admin');
});



//Alumni Routes

Route::get('/admin/vAlumni/create', function () {
    return view('vAlumni/create');
});

Route::get('/admin/vAlumni/upload', function () {
    return view('vAlumni/upload');
});

Route::get('admin/vAlumni/downloadExcel/{type}', 'AlumniController@downloadExcel');
Route::post('/admin/vAlumni/import', 'AlumniController@importExcel');


Route::get('/admin/vAlumni/table', 'AlumniController@getData');

Route::post('/admin/vAlumni/insert', 'AlumniController@add');
Route::get('/admin/vAlumni/update/{ID}', 'AlumniController@update');
Route::post('/admin/vAlumni/edit/{ID}', 'AlumniController@edit');
Route::get('/admin/vAlumni/read/{ID}', 'AlumniController@read');
Route::get('/admin/vAlumni/delete/{ID}', 'AlumniController@delete');


//=
//Dosen Routes

Route::get('/admin/vDosen/create', function () {
    return view('vDosen/create');
});

Route::get('/admin/vDosen/upload', function () {
    return view('vDosen/upload');
});

Route::get('/admin/vDosen/downloadExcel/{type}', 'DosenController@downloadExcel');
Route::post('/admin/vDosen/import', 'DosenController@importExcel');

Route::get('/admin/vDosen/table', 'DosenController@getData');

Route::post('/admin/vDosen/insert', 'DosenController@add');
Route::get('/admin/vDosen/update/{ID}', 'DosenController@update');
Route::post('/admin/vDosen/edit/{ID}', 'DosenController@edit');
Route::get('/admin/vDosen/read/{ID}', 'DosenController@read');
Route::get('/admin/vDosen/delete/{ID}', 'DosenController@delete');


//=
//Mahasiswa Routes
Route::get('/admin/vMahasiswa/create', function () {
    return view('vMahasiswa/create');
});

Route::get('/admin/vMahasiswa/upload', function () {
    return view('vMahasiswa/upload');
});
Route::get('/admin/vMahasiswa/downloadExcel/{type}', 'MahasiswaController@downloadExcel');
Route::post('/admin/vMahasiswa/import', 'MahasiswaController@importExcel');

Route::get('/admin/vMahasiswa/table', 'MahasiswaController@getData');

Route::post('/admin/vMahasiswa/insert', 'MahasiswaController@add');
Route::get('/admin/vMahasiswa/update/{ID}', 'MahasiswaController@update');
Route::post('/admin/vMahasiswa/edit/{ID}', 'MahasiswaController@edit');
Route::get('/admin/vMahasiswa/read/{ID}', 'MahasiswaController@read');
Route::get('/admin/vMahasiswa/delete/{ID}', 'MahasiswaController@delete');


//=
//Partnership Routes
Route::get('/admin/vPartnership/create', function () {
    return view('vPartnership/create');
});

Route::get('/admin/vPartnership/upload', function () {
    return view('vPartnership/upload');
});
Route::get('/admin/vPartnership/downloadExcel/{type}', 'PartnershipController@downloadExcel');
Route::post('/admin/vPartnership/import', 'PartnershipController@importExcel');

Route::get('/admin/vPartnership/table', 'PartnershipController@getData');

Route::post('/admin/vPartnership/insert', 'PartnershipController@add');
Route::get('/admin/vPartnership/update/{ID}', 'PartnershipController@update');
Route::post('/admin/vPartnership/edit/{ID}', 'PartnershipController@edit');
Route::get('/admin/vPartnership/read/{ID}', 'PartnershipController@read');
Route::get('/admin/vPartnership/delete/{ID}', 'PartnershipController@delete');


//=
//DedicationDosen Routes
Route::get('/admin/vDedicationDosen/create', function () {
    return view('/vDedicationDosen/create');
});

Route::get('/admin/vDedicationDosen/upload', function () {
    return view('vDedicationDosen/upload');
});

Route::get('/admin/vDedicationDosen/downloadExcel/{type}', 'DedicationDosenController@downloadExcel');
Route::post('/admin/vDedicationDosen/import', 'DedicationDosenController@importExcel');


Route::get('/admin/vDedicationDosen/table', 'DedicationDosenController@getData');

Route::post('/admin/vDedicationDosen/insert', 'DedicationDosenController@add');
Route::get('/admin/vDedicationDosen/update/{ID}', 'DedicationDosenController@update');
Route::post('/admin/vDedicationDosen/edit/{ID}', 'DedicationDosenController@edit');
Route::get('/admin/vDedicationDosen/read/{ID}', 'DedicationDosenController@read');
Route::get('/admin/vDedicationDosen/delete/{ID}', 'DedicationDosenController@delete');
Route::get('/admin/vDedicationDosen/downloadExcel/{type}', 'DedicationController@downloadExcelDosen');
Route::post('/admin/vDedicationDosen/import', 'DedicationController@importExcelDosen');


Route::get('/admin/vDedicationDosen/table', 'DedicationController@getDataDosen');

Route::post('/admin/vDedicationDosen/insert', 'DedicationController@addDosen');
Route::get('/admin/vDedicationDosen/update/{ID}', 'DedicationController@updateDosen');
Route::post('/admin/vDedicationDosen/edit/{ID}', 'DedicationController@editDosen');
Route::get('/admin/vDedicationDosen/read/{ID}', 'DedicationController@readDosen');
Route::get('/admin/vDedicationDosen/delete/{ID}', 'DedicationController@deleteDosen');

//=
//DedicationMhs Routes
Route::get('/admin/vDedicationMhs/create', function () {
    return view('/vDedicationMhs/create');
});

Route::get('/admin/vDedicationMhs/upload', function () {
    return view('vDedicationMhs/upload');
});
Route::get('/admin/vDedicationMhs/downloadExcel/{type}', 'DedicationMhsController@downloadExcel');
Route::post('/admin/vDedicationMhs/import', 'DedicationMhsController@importExcel');

Route::get('/admin/vDedicationMhs/table', 'DedicationMhsController@getData');

Route::post('/admin/vDedicationMhs/insert', 'DedicationMhsController@add');
Route::get('/admin/vDedicationMhs/update/{ID}', 'DedicationMhsController@update');
Route::post('/admin/vDedicationMhs/edit/{ID}', 'DedicationMhsController@edit');
Route::get('/admin/vDedicationMhs/read/{ID}', 'DedicationMhsController@read');
Route::get('/admin/vDedicationMhs/delete/{ID}', 'DedicationMhsController@delete');
Route::get('/admin/vDedicationMhs/downloadExcel/{type}', 'DedicationController@downloadExcelMhs');
Route::post('/admin/vDedicationMhs/import', 'DedicationController@importExcelMhs');

Route::get('/admin/vDedicationMhs/table', 'DedicationController@getDataMhs');

Route::post('/admin/vDedicationMhs/insert', 'DedicationController@addMhs');
Route::get('/admin/vDedicationMhs/update/{ID}', 'DedicationController@updateMhs');
Route::post('/admin/vDedicationMhs/edit/{ID}', 'DedicationController@editMhs');
Route::get('/admin/vDedicationMhs/read/{ID}', 'DedicationController@readMhs');
Route::get('/admin/vDedicationMhs/delete/{ID}', 'DedicationController@deleteMhs');

//=
//PublicationDosen Routes
Route::get('/admin/vPublicationDosen/create', function () {
    return view('/vPublicationDosen/create');
});

Route::get('/admin/vPublicationDosen/upload', function () {
    return view('vPublicationDosen/upload');
});
Route::get('/admin/vPublicationDosen/downloadExcel/{type}', 'PublicationDosenController@downloadExcel');
Route::post('/admin/vPublicationDosen/import', 'PublicationDosenController@importExcel');

Route::get('/admin/vPublicationDosen/table', 'PublicationDosenController@getData');

Route::post('/admin/vPublicationDosen/insert', 'PublicationDosenController@add');
Route::get('/admin/vPublicationDosen/update/{ID}', 'PublicationDosenController@update');
Route::post('/admin/vPublicationDosen/edit/{ID}', 'PublicationDosenController@edit');
Route::get('/admin/vPublicationDosen/read/{ID}', 'PublicationDosenController@read');
Route::get('/admin/vPublicationDosen/delete/{ID}', 'PublicationDosenController@delete');
Route::get('/admin/vPublicationDosen/downloadExcel/{type}', 'PublicationController@downloadExcelDosen');
Route::post('/admin/vPublicationDosen/import', 'PublicationController@importExcelDosen');

Route::get('/admin/vPublicationDosen/table', 'PublicationController@getDataDosen');

Route::post('/admin/vPublicationDosen/insert', 'PublicationController@addDosen');
Route::get('/admin/vPublicationDosen/update/{ID}', 'PublicationController@updateDosen');
Route::post('/admin/vPublicationDosen/edit/{ID}', 'PublicationController@editDosen');
Route::get('/admin/vPublicationDosen/read/{ID}', 'PublicationController@readDosen');
Route::get('/admin/vPublicationDosen/delete/{ID}', 'PublicationController@deleteDosen');


//=
//PublicationMhs Routes
Route::get('/admin/vPublicationMhs/create', function () {
    return view('/vPublicationMhs/create');
});

Route::get('/admin/vPublicationMhs/upload', function () {
    return view('vPublicationMhs/upload');
});
Route::get('/admin/vPublicationMhs/downloadExcel/{type}', 'PublicationMhsController@downloadExcel');
Route::post('/admin/vPublicationMhs/import', 'PublicationMhsController@importExcel');

Route::get('/admin/vPublicationMhs/table', 'PublicationMhsController@getData');

Route::post('/admin/vPublicationMhs/insert', 'PublicationMhsController@add');
Route::get('/admin/vPublicationMhs/update/{ID}', 'PublicationMhsController@update');
Route::post('/admin/vPublicationMhs/edit/{ID}', 'PublicationMhsController@edit');
Route::get('/admin/vPublicationMhs/read/{ID}', 'PublicationMhsController@read');
Route::get('/admin/vPublicationMhs/delete/{ID}', 'PublicationMhsController@delete');
Route::get('/admin/vPublicationMhs/downloadExcel/{type}', 'PublicationController@downloadExcelMhs');
Route::post('/admin/vPublicationMhs/import', 'PublicationController@importExcelMhs');

Route::get('/admin/vPublicationMhs/table', 'PublicationController@getDataMhs');

Route::post('/admin/vPublicationMhs/insert', 'PublicationController@addMhs');
Route::get('/admin/vPublicationMhs/update/{ID}', 'PublicationController@updateMhs');
Route::post('/admin/vPublicationMhs/edit/{ID}', 'PublicationController@editMhs');
Route::get('/admin/vPublicationMhs/read/{ID}', 'PublicationController@readMhs');
Route::get('/admin/vPublicationMhs/delete/{ID}', 'PublicationController@deleteMhs');



//=
//ResearchDosen Routes
Route::get('/admin/vResearchDosen/create', function () {
    return view('/vResearchDosen/create');
});

Route::get('/admin/vResearchDosen/upload', function () {
    return view('vResearchDosen/upload');
});
Route::get('/admin/vResearchDosen/downloadExcel/{type}', 'ResearchDosenController@downloadExcel');
Route::post('/admin/vResearchDosen/import', 'ResearchDosenController@importExcel');

Route::get('/admin/vResearchDosen/table', 'ResearchDosenController@getData');

Route::post('/admin/vResearchDosen/insert', 'ResearchDosenController@add');
Route::get('/admin/vResearchDosen/update/{ID}', 'ResearchDosenController@update');
Route::post('/admin/vResearchDosen/edit/{ID}', 'ResearchDosenController@edit');
Route::get('/admin/vResearchDosen/read/{ID}', 'ResearchDosenController@read');
Route::get('/admin/vResearchDosen/delete/{ID}', 'ResearchDosenController@delete');
Route::get('/admin/vResearchDosen/downloadExcel/{type}', 'ResearchController@downloadExcelDosen');
Route::post('/admin/vResearchDosen/import', 'ResearchController@importExcelDosen');

Route::get('/admin/vResearchDosen/table', 'ResearchController@getDataDosen');

Route::post('/admin/vResearchDosen/insert', 'ResearchController@addDosen');
Route::get('/admin/vResearchDosen/update/{ID}', 'ResearchController@updateDosen');
Route::post('/admin/vResearchDosen/edit/{ID}', 'ResearchController@editDosen');
Route::get('/admin/vResearchDosen/read/{ID}', 'ResearchController@readDosen');
Route::get('/admin/vResearchDosen/delete/{ID}', 'ResearchController@deleteDosen');



//=
//ResearchMhs Routes
Route::get('/admin/vResearchMhs/create', function () {
    return view('/vResearchMhs/create');
});
Route::get('/admin/vResearchMhs/upload', function () {
    return view('vResearchMhs/upload');
});
Route::get('/admin/vResearchMhs/downloadExcel/{type}', 'ResearchMhsController@downloadExcel');
Route::post('/admin/vResearchMhs/import', 'ResearchMhsController@importExcel');

Route::get('/admin/vResearchMhs/table', 'ResearchMhsController@getData');

Route::post('/admin/vResearchMhs/insert', 'ResearchMhsController@add');
Route::get('/admin/vResearchMhs/update/{ID}', 'ResearchMhsController@update');
Route::post('/admin/vResearchMhs/edit/{ID}', 'ResearchMhsController@edit');
Route::get('/admin/vResearchMhs/read/{ID}', 'ResearchMhsController@read');
Route::get('/admin/vResearchMhs/delete/{ID}', 'ResearchMhsController@delete');
Route::get('/admin/vResearchMhs/downloadExcel/{type}', 'ResearchController@downloadExcelMhs');
Route::post('/admin/vResearchMhs/import', 'ResearchController@importExcelMhs');

Route::get('/admin/vResearchMhs/table', 'ResearchController@getDataMhs');

Route::post('/admin/vResearchMhs/insert', 'ResearchController@addMhs');
Route::get('/admin/vResearchMhs/update/{ID}', 'ResearchController@updateMhs');
Route::post('/admin/vResearchMhs/edit/{ID}', 'ResearchController@editMhs');
Route::get('/admin/vResearchMhs/read/{ID}', 'ResearchController@readMhs');
Route::get('/admin/vResearchMhs/delete/{ID}', 'ResearchController@deleteMhs');

//=
//News Routes
Route::get('/admin/vNews/create', function () {
    return view('/vNews/create');
});


Route::get('/admin/vNews/table', 'NewsController@getData');

Route::post('/admin/vNews/insert', 'NewsController@add');
Route::get('/admin/vNews/update/{ID}', 'NewsController@update');
Route::post('/admin/vNews/edit/{ID}', 'NewsController@edit');
Route::get('/admin/vNews/read/{ID}', 'NewsController@read');
Route::get('/admin/vNews/delete/{ID}', 'NewsController@delete');

//=
//Education Routes
Route::get('/admin/vEducation/create', function () {
    return view('/vEducation/create');
});

Route::get('/admin/vEducation/table', 'EducationController@getData');

Route::post('/admin/vEducation/insert', 'EducationController@add');
Route::get('/admin/vEducation/update/{ID}', 'EducationController@update');
Route::post('/admin/vEducation/edit/{ID}', 'EducationController@edit');
Route::get('/admin/vEducation/read/{ID}', 'EducationController@read');
Route::get('/admin/vEducation/delete/{ID}', 'EducationController@delete');


//=
//AchievementDosen Routes
Route::get('/admin/vAchievementDosen/create', function () {
    return view('/vAchievementDosen/create');
});

Route::get('/admin/vAchievementDosen/upload', function () {
    return view('vAchievementDosen/upload');
});

Route::get('/admin/vAchievementDosen/downloadExcel/{type}', 'AchievementDosenController@downloadExcel');
Route::post('/admin/vAchievementDosen/import', 'AchievementDosenController@importExcel');

Route::get('/admin/vAchievementDosen/table', 'AchievementDosenController@getData');

Route::post('/admin/vAchievementDosen/insert', 'AchievementDosenController@add');
Route::get('/admin/vAchievementDosen/update/{ID}', 'AchievementDosenController@update');
Route::post('/admin/vAchievementDosen/edit/{ID}', 'AchievementDosenController@edit');
Route::get('/admin/vAchievementDosen/read/{ID}', 'AchievementDosenController@read');
Route::get('/admin/vAchievementDosen/delete/{ID}', 'AchievementDosenController@delete');
Route::get('/admin/vAchievementDosen/downloadExcel/{type}', 'AchievementController@downloadExcelDosen');
Route::post('/admin/vAchievementDosen/import', 'AchievementController@importExcelDosen');

Route::get('/admin/vAchievementDosen/table', 'AchievementController@getDataDosen');

Route::post('/admin/vAchievementDosen/insert', 'AchievementController@addDosen');
Route::get('/admin/vAchievementDosen/update/{ID}', 'AchievementController@updateDosen');
Route::post('/admin/vAchievementDosen/edit/{ID}', 'AchievementController@editDosen');
Route::get('/admin/vAchievementDosen/read/{ID}', 'AchievementController@readDosen');
Route::get('/admin/vAchievementDosen/delete/{ID}', 'AchievementController@deleteDosen');

//=
//AchievementMhs Routes
Route::get('/admin/vAchievementMhs/create', function () {
    return view('/vAchievementMhs/create');
});

Route::get('/admin/vAchievementMhs/upload', function () {
    return view('vAchievementMhs/upload');
});

Route::get('/admin/vAchievementMhs/downloadExcel/{type}', 'AchievementMhsController@downloadExcel');
Route::post('/admin/vAchievementMhs/import', 'AchievementMhsController@importExcel');


Route::get('/admin/vAchievementMhs/table', 'AchievementMhsController@getData');

Route::post('/admin/vAchievementMhs/insert', 'AchievementMhsController@add');
Route::get('/admin/vAchievementMhs/update/{ID}', 'AchievementMhsController@update');
Route::post('/admin/vAchievementMhs/edit/{ID}', 'AchievementMhsController@edit');
Route::get('/admin/vAchievementMhs/read/{ID}', 'AchievementMhsController@read');
Route::get('/admin/vAchievementMhs/delete/{ID}', 'AchievementMhsController@delete');

Route::get('/admin/vAchievementMhs/downloadExcel/{type}', 'AchievementController@downloadExcelMhs');
Route::post('/admin/vAchievementMhs/import', 'AchievementController@importExcelMhs');


Route::get('/admin/vAchievementMhs/table', 'AchievementController@getDataMhs');

Route::post('/admin/vAchievementMhs/insert', 'AchievementController@addMhs');
Route::get('/admin/vAchievementMhs/update/{ID}', 'AchievementController@updateMhs');
Route::post('/admin/vAchievementMhs/edit/{ID}', 'AchievementController@editMhs');
Route::get('/admin/vAchievementMhs/read/{ID}', 'AchievementController@readMhs');
Route::get('/admin/vAchievementMhs/delete/{ID}', 'AchievementController@deleteMhs');


//
