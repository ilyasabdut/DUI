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
Route::get('/', 'NewsController@getNews');


//Newspage
Route::get('/vUser/news', function () {
    return view('/vUser/news');
});

Route::get('/vUser/showNews/{ID}', 'NewsController@show');


//Research
Route::get('/vUser/research', function () {
    return view('/vUser/research');

});

Route::get('/vUser/research', 'ResearchController@getDsn');




//Publication
Route::get('/vUser/publication', function () {
    return view('/vUser/publication');
});


Route::get('/vUser/publication', 'PublicationController@getDsn');


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

Route::get('/vUser/kurikulum', function () {
    return view('/vUser/kurikulum');
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

//Tentang
Route::get('/vUser/visi', function () {
    return view('/vUser/visi');
});

Route::get('/vUser/rencana', function () {
    return view('/vUser/rencana');
});

Route::get('/vUser/latarbelakang', function () {
    return view('/vUser/latarbelakang');
});

Route::get('/vUser/lulusan', function () {
    return view('/vUser/lulusan');
});

Route::get('/vUser/fasilitas', function () {
    return view('/vUser/fasilitas');
});



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
Route::get('/admin/vPublicationDosen/downloadExcel/{type}', 'PublicationController@downloadExcelDosen');
Route::post('/admin/vPublicationDosen/import', 'PublicationController@importExcelDosen');

Route::get('/admin/vPublicationDosen/table', 'PublicationController@getDataDosen');

Route::post('/admin/vPublicationDosen/insert', 'PublicationController@addDosen');
Route::get('/admin/vPublicationDosen/update/{ID}', 'PublicationController@updateDosen');
Route::post('/admin/vPublicationDosen/edit/{ID}', 'PublicationController@editDosen');
Route::get('/admin/vPublicationDosen/read/{ID}', 'PublicationController@readDosen');
Route::get('/admin/vPublicationDosen/delete/{ID}', 'PublicationController@deleteDosen');


//=
//ResearchDosen Routes
Route::get('/admin/vResearchDosen/create', function () {
    return view('/vResearchDosen/create');
});

Route::get('/admin/vResearchDosen/upload', function () {
    return view('vResearchDosen/upload');
});
Route::get('/admin/vResearchDosen/downloadExcel/{type}', 'ResearchController@downloadExcelDosen');
Route::post('/admin/vResearchDosen/import', 'ResearchController@importExcelDosen');

Route::get('/admin/vResearchDosen/table', 'ResearchController@getDataDosen');

Route::post('/admin/vResearchDosen/insert', 'ResearchController@addDosen');
Route::get('/admin/vResearchDosen/update/{ID}', 'ResearchController@updateDosen');
Route::post('/admin/vResearchDosen/edit/{ID}', 'ResearchController@editDosen');
Route::get('/admin/vResearchDosen/read/{ID}', 'ResearchController@readDosen');
Route::get('/admin/vResearchDosen/delete/{ID}', 'ResearchController@deleteDosen');


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


Route::get('/admin/vAchievementMhs/downloadExcel/{type}', 'AchievementController@downloadExcelMhs');
Route::post('/admin/vAchievementMhs/import', 'AchievementController@importExcelMhs');


Route::get('/admin/vAchievementMhs/table', 'AchievementController@getDataMhs');

Route::post('/admin/vAchievementMhs/insert', 'AchievementController@addMhs');
Route::get('/admin/vAchievementMhs/update/{ID}', 'AchievementController@updateMhs');
Route::post('/admin/vAchievementMhs/edit/{ID}', 'AchievementController@editMhs');
Route::get('/admin/vAchievementMhs/read/{ID}', 'AchievementController@readMhs');
Route::get('/admin/vAchievementMhs/delete/{ID}', 'AchievementController@deleteMhs');


//
