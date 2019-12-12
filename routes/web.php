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

Route::get('/', function () {return view('home');});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog', 'BlogController@blog')->name('blog');
Route::get('/schedule', 'ScheduleController@schedule')->name('schedule');

Route::get('/welcome', 'WelcomeController@welcome')->name('welcome');



Route::get('/newsfeed', 'NewsfeedController@newsfeed')->name('newsfeed');
Route::get('/newsfeed/insert', function () {return view('2019.newsfeed.news_insert');});
Route::post('/newsfeed/insert', 'NewsfeedController@news_insert');


Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile/edit', 'ProfileController@profile_edit')->name('image_upload');
Route::post('/profile/dp_edit', 'ProfileController@dp_edit')->name('dp_image_upload');


Route::get('/robowars/betting/', 'robowarsController@view_home');
Route::get('/robowars/betting/leaderboard', 'robowarsController@view_leaderboard');
Route::get('/robowars/betting/bet', 'robowarsController@view_bet');


Route::get('/media', function () {return view('2019.media.media');})->name('media');
Route::get('/twmun', function () {return view('2019.twmun.twmun');})->name('twmun');
Route::get('/contact-us', function () {return view('2019.contact_us.contact_us');})->name('contact_us');
Route::get('/summit', 'WebpagesController@summit')->name('summit');
Route::get('/summit/industrysummit', 'WebpagesController@industrysummit')->name('industrysummit');
Route::get('/initiatives', function () {return view('2019.initiatives.initiatives');})->name('initiatives');
Route::get('/initiatives/aiflt', function () {return view('2019.initiatives.aiflt');})->name('aiflt');
Route::get('/initiatives/bolt', function () {return view('2019.initiatives.bolt');})->name('bolt');
Route::get('/lectures', 'WebpagesController@lectures')->name('lectures');
Route::get('/exhibitions', 'WebpagesController@exhibitions')->name('exhibitions');
Route::redirect('/esports', 'http://techfest.org/gamersleague')->name('esports');
Route::redirect('/ift', 'http://techfest.org/ift')->name('ift');

Route::get('/competitions', 'MainController@competitions')->name('competitions');


Route::get('/ift', 'WebpagesController@ift')->name('ift');
Route::get('/robowars', 'WebpagesController@robowars')->name('robowars');
Route::get('/ozone', 'WebpagesController@ozone')->name('ozone');


Route::get('/workshops', 'WorkshopController@Get')->name('workshops');

Route::get('/workshops/{workshop}', 'WorkshopController@get_workshop');

//Route::post('/workshops_reg/{workshop}', 'WorkshopController@register_workshop');
//Route::get('/workshops_reg/{workshop}', 'WorkshopController@reg_workshop');

//Route::post('/workshops_signin/{workshop}', 'WorkshopController@reg_workshop');
//Route::get('/workshops_/logout', 'WorkshopController@workshop_logout');












Route::get('/ca','CaController@indexPost');
Route::post('/ca','CaController@indexPost');

Route::get('/registration','CaController@reg');
Route::post('/regform','CaController@ca_data_update');
Route::get('/dashboard','CaController@dashboard');
Route::get('/tf/logout','CaController@ca_logout')->name('ca_logout');
Route::get('/imgupload/{id}','CaController@imgupload');
Route::post('/imgupload/{id}','CaController@ca_image_upload');

//
//Route::get('/robowars', function () {return view('2019.robowars.robowars');});
//Route::redirect('/robowars19/', '/robowars/');
//Route::redirect('/robowar/', '/robowars/');
//Route::redirect('/robowar18/', '/robowars/');
//Route::get('/robowars/form', 'webpagesController@robowars_form');
//Route::post('/robowars/form', 'webpagesController@robowars_form_reg');
//







// 2019 links
Route::get('/competitions/logout', 'MainController@competitions_logout');

//Route::get('/competitions', 'MainController@competitions');
Route::post('/competitions', 'MainController@competitions');
Route::redirect('/technorion', 'http://techfest.org/competitions#techno-section');
Route::redirect('/ideate', 'http://techfest.org/competitions');
Route::redirect('/competition', 'http://techfest.org/competitions');


Route::get('/competitions/{competition_name}', 'MainController@competition_name_Get');
Route::get('/competitions/{competition_name}/reg','MainController@competition_name_reg');
Route::get('/competitions/{competition_name}/jointeam', 'MainController@competition_name_join_team_form');
Route::post('/competitions/{competition_name}/jointeam', 'MainController@competition_name_join_team_reg');
Route::get('/competitions/{competition_name}/createteam', 'MainController@competition_name_create_team_form');
Route::post('/competitions/{competition_name}/createteam', 'MainController@competition_name_create_team_reg');
Route::get('/competitions/{competition_name}/leaveteam', 'MainController@competition_name_leave_team');
Route::get('/competitions/{competition_name}/dissolveteam', 'MainController@competition_name_dissolve');
Route::post('/competitions/{competition_name}/remove/{id}','MainController@competition_name_remove_member');
Route::get('/competitions/{competition_name}/remove/{id}','MainController@competition_name_remove_member');



Route::redirect('/wcozmo.', '/competitions/wcozmo');
Route::redirect('/wcozmo', '/competitions/wcozmo');
Route::redirect('/cozmo', '/competitions/wcozmo');
Route::redirect('/competitions/cozmo', '/competitions/wcozmo');
//Route::get('/competitions/cozmo', 'MainController@cozmo');
//Route::post('/competitions/cozmo', 'MainController@cozmo');
Route::get('/competitions/cozmo/reg','MainController@regcozmo');
Route::get('/competitions/cozmo/jointeam', 'MainController@cozmo_join_team_form');
Route::post('/competitions/cozmo/jointeam', 'MainController@cozmo_join_team_reg');
Route::get('/competitions/cozmo/createteam', 'MainController@cozmo_create_team_form');
Route::post('/competitions/cozmo/createteam', 'MainController@cozmo_create_team_reg');
Route::get('/competitions/cozmo/leaveteam', 'MainController@cozmo_leave_team');
Route::get('/competitions/cozmo/dissolveteam', 'MainController@cozmo_dissolve');
Route::post('/competitions/cozmo/remove/{id}','MainController@cozmo_remove_member');
Route::get('/competitions/cozmo/remove/{id}','MainController@cozmo_remove_member');




Route::redirect('/meshmerize', '/competitions/wmeshmerize');
Route::redirect('/competitions/meshmerize', '/competitions/wmeshmerize');
//Route::get('/competitions/meshmerize', 'MainController@meshmerize');
//Route::post('/competitions/meshmerize', 'MainController@meshmerize');
Route::get('/competitions/meshmerize/reg','MainController@regmeshmerize');
Route::get('/competitions/meshmerize/jointeam', 'MainController@meshmerize_join_team_form');
Route::post('/competitions/meshmerize/jointeam', 'MainController@meshmerize_join_team_reg');
Route::get('/competitions/meshmerize/createteam', 'MainController@meshmerize_create_team_form');
Route::post('/competitions/meshmerize/createteam', 'MainController@meshmerize_create_team_reg');
Route::get('/competitions/meshmerize/leaveteam', 'MainController@meshmerize_leave_team');
Route::get('/competitions/meshmerize/dissolveteam', 'MainController@meshmerize_dissolve');
Route::post('/competitions/meshmerize/remove/{id}','MainController@meshmerize_remove_member');
Route::get('/competitions/meshmerize/remove/{id}','MainController@meshmerize_remove_member');


Route::redirect('/wmeshmerize.', '/competitions/wmeshmerize');
Route::redirect('/wmeshmerize', '/competitions/wmeshmerize');
Route::get('/competitions/wmeshmerize', 'MainController@wmeshmerize');
Route::post('/competitions/wmeshmerize', 'MainController@wmeshmerize');
Route::get('/competitions/wmeshmerize/reg','MainController@regwmeshmerize');
Route::get('/competitions/wmeshmerize/jointeam', 'MainController@wmeshmerize_join_team_form');
Route::post('/competitions/wmeshmerize/jointeam', 'MainController@wmeshmerize_join_team_reg');
Route::get('/competitions/wmeshmerize/createteam', 'MainController@wmeshmerize_create_team_form');
Route::post('/competitions/wmeshmerize/createteam', 'MainController@wmeshmerize_create_team_reg');
Route::get('/competitions/wmeshmerize/leaveteam', 'MainController@wmeshmerize_leave_team');
Route::get('/competitions/wmeshmerize/dissolveteam', 'MainController@wmeshmerize_dissolve');
Route::post('/competitions/wmeshmerize/remove/{id}','MainController@wmeshmerize_remove_member');
Route::get('/competitions/wmeshmerize/remove/{id}','MainController@wmeshmerize_remove_member');


Route::redirect('/codecode', '/competitions/wcodecode');
Route::redirect('/competitions/codecode', '/competitions/wcodecode');
//Route::get('/competitions/codecode', 'MainController@codecode');
//Route::post('/competitions/codecode', 'MainController@codecode');
Route::get('/competitions/codecode/reg','MainController@regcodecode');
Route::get('/competitions/codecode/jointeam', 'MainController@codecode_join_team_form');
Route::post('/competitions/codecode/jointeam', 'MainController@codecode_join_team_reg');
Route::get('/competitions/codecode/createteam', 'MainController@codecode_create_team_form');
Route::post('/competitions/codecode/createteam', 'MainController@codecode_create_team_reg');
Route::get('/competitions/codecode/leaveteam', 'MainController@codecode_leave_team');
Route::get('/competitions/codecode/dissolveteam', 'MainController@codecode_dissolve');
Route::post('/competitions/codecode/remove/{id}','MainController@codecode_remove_member');
Route::get('/competitions/codecode/remove/{id}','MainController@codecode_remove_member');




Route::redirect('/wcodecode', '/competitions/wcodecode');
Route::get('/competitions/wcodecode', 'MainController@wcodecode');
Route::post('/competitions/wcodecode', 'MainController@wcodecode');
Route::get('/competitions/wcodecode/reg','MainController@regwcodecode');
Route::get('/competitions/wcodecode/jointeam', 'MainController@wcodecode_join_team_form');
Route::post('/competitions/wcodecode/jointeam', 'MainController@wcodecode_join_team_reg');
Route::get('/competitions/wcodecode/createteam', 'MainController@wcodecode_create_team_form');
Route::post('/competitions/wcodecode/createteam', 'MainController@wcodecode_create_team_reg');
Route::get('/competitions/wcodecode/leaveteam', 'MainController@wcodecode_leave_team');
Route::get('/competitions/wcodecode/dissolveteam', 'MainController@wcodecode_dissolve');
Route::post('/competitions/wcodecode/remove/{id}','MainController@wcodecode_remove_member');
Route::get('/competitions/wcodecode/remove/{id}','MainController@wcodecode_remove_member');



Route::redirect('/inspire', '/competitions/inspire');
Route::redirect('/inspirewithorg', '/competitions/inspire');
Route::get('/competitions/inspire', 'MainController@inspire');
Route::post('/competitions/inspire', 'MainController@inspire');
Route::get('/competitions/inspire/reg','MainController@reginspire');
Route::get('/competitions/inspire/jointeam', 'MainController@inspire_join_team_form');
Route::post('/competitions/inspire/jointeam', 'MainController@inspire_join_team_reg');
Route::get('/competitions/inspire/createteam', 'MainController@inspire_create_team_form');
Route::post('/competitions/inspire/createteam', 'MainController@inspire_create_team_reg');
Route::get('/competitions/inspire/leaveteam', 'MainController@inspire_leave_team');
Route::get('/competitions/inspire/dissolveteam', 'MainController@inspire_dissolve');
Route::post('/competitions/inspire/remove/{id}','MainController@inspire_remove_member');
Route::get('/competitions/inspire/remove/{id}','MainController@inspire_remove_member');


Route::redirect('/tfolympiad.', '/competitions/tso');
Route::redirect('/tfolympiad', '/competitions/tso');
Route::redirect('/tso.', '/competitions/tso');
Route::redirect('/tso', '/competitions/tso');
Route::get('/competitions/tso', 'MainController@tso');
Route::post('/competitions/tso', 'MainController@tso');
Route::get('/competitions/tso/reg','MainController@regtso');
Route::get('/competitions/tso/jointeam', 'MainController@tso_join_team_form');
Route::post('/competitions/tso/jointeam', 'MainController@tso_join_team_reg');
Route::get('/competitions/tso/createteam', 'MainController@tso_create_team_form');
Route::post('/competitions/tso/createteam', 'MainController@tso_create_team_reg');
Route::get('/competitions/tso/leaveteam', 'MainController@tso_leave_team');
Route::get('/competitions/tso/dissolveteam', 'MainController@tso_dissolve');
Route::post('/competitions/tso/remove/{id}','MainController@tso_remove_member');
Route::get('/competitions/tso/remove/{id}','MainController@tso_remove_member');

Route::redirect('/micromouse', '/competitions/micromouse');
Route::get('/competitions/micromouse', 'MainController@micromouse');
Route::post('/competitions/micromouse', 'MainController@micromouse');
Route::get('/competitions/micromouse/reg','MainController@regmicromouse');
Route::get('/competitions/micromouse/jointeam', 'MainController@micromouse_join_team_form');
Route::post('/competitions/micromouse/jointeam', 'MainController@micromouse_join_team_reg');
Route::get('/competitions/micromouse/createteam', 'MainController@micromouse_create_team_form');
Route::post('/competitions/micromouse/createteam', 'MainController@micromouse_create_team_reg');
Route::get('/competitions/micromouse/leaveteam', 'MainController@micromouse_leave_team');
Route::get('/competitions/micromouse/dissolveteam', 'MainController@micromouse_dissolve');
Route::post('/competitions/micromouse/remove/{id}','MainController@micromouse_remove_member');
Route::get('/competitions/micromouse/remove/{id}','MainController@micromouse_remove_member');


Route::redirect('/earthmatters', '/competitions/earthmatters');
Route::redirect('/Earthmatters', '/competitions/earthmatters');
Route::redirect('/EarthMatters', '/competitions/earthmatters');
Route::get('/competitions/earthmatters', 'MainController@earthmatters');
Route::post('/competitions/earthmatters', 'MainController@earthmatters');
Route::get('/competitions/earthmatters/reg','MainController@regearthmatters');
Route::get('/competitions/earthmatters/jointeam', 'MainController@earthmatters_join_team_form');
Route::post('/competitions/earthmatters/jointeam', 'MainController@earthmatters_join_team_reg');
Route::get('/competitions/earthmatters/createteam', 'MainController@earthmatters_create_team_form');
Route::post('/competitions/earthmatters/createteam', 'MainController@earthmatters_create_team_reg');
Route::get('/competitions/earthmatters/leaveteam', 'MainController@earthmatters_leave_team');
Route::get('/competitions/earthmatters/dissolveteam', 'MainController@earthmatters_dissolve');
Route::post('/competitions/earthmatters/remove/{id}','MainController@earthmatters_remove_member');
Route::get('/competitions/earthmatters/remove/{id}','MainController@earthmatters_remove_member');

Route::redirect('/innovationeering', '/competitions/innovationeering');
Route::get('/competitions/innovationeering', 'MainController@innovationeering');
Route::post('/competitions/innovationeering', 'MainController@innovationeering');
Route::get('/competitions/innovationeering/reg','MainController@reginnovationeering');
Route::get('/competitions/innovationeering/jointeam', 'MainController@innovationeering_join_team_form');
Route::post('/competitions/innovationeering/jointeam', 'MainController@innovationeering_join_team_reg');
Route::get('/competitions/innovationeering/createteam', 'MainController@innovationeering_create_team_form');
Route::post('/competitions/innovationeering/createteam', 'MainController@innovationeering_create_team_reg');
Route::get('/competitions/innovationeering/leaveteam', 'MainController@innovationeering_leave_team');
Route::get('/competitions/innovationeering/dissolveteam', 'MainController@innovationeering_dissolve');
Route::post('/competitions/innovationeering/remove/{id}','MainController@innovationeering_remove_member');
Route::get('/competitions/innovationeering/remove/{id}','MainController@innovationeering_remove_member');


Route::redirect('/metamorphosis', '/competitions/metamorphosis');
Route::get('/competitions/metamorphosis', 'MainController@metamorphosis');
Route::post('/competitions/metamorphosis', 'MainController@metamorphosis');
Route::get('/competitions/metamorphosis/reg','MainController@regmetamorphosis');
Route::get('/competitions/metamorphosis/jointeam', 'MainController@metamorphosis_join_team_form');
Route::post('/competitions/metamorphosis/jointeam', 'MainController@metamorphosis_join_team_reg');
Route::get('/competitions/metamorphosis/createteam', 'MainController@metamorphosis_create_team_form');
Route::post('/competitions/metamorphosis/createteam', 'MainController@metamorphosis_create_team_reg');
Route::get('/competitions/metamorphosis/leaveteam', 'MainController@metamorphosis_leave_team');
Route::get('/competitions/metamorphosis/dissolveteam', 'MainController@metamorphosis_dissolve');
Route::post('/competitions/metamorphosis/remove/{id}','MainController@metamorphosis_remove_member');
Route::get('/competitions/metamorphosis/remove/{id}','MainController@metamorphosis_remove_member');


Route::redirect('/indiachallenge', '/competitions/indiachallenge');
Route::redirect('/IndiaChallenge', '/competitions/indiachallenge');
Route::get('/competitions/indiachallenge', 'MainController@indiachallenge');
Route::post('/competitions/indiachallenge', 'MainController@indiachallenge');
Route::get('/competitions/indiachallenge/reg','MainController@regindiachallenge');
Route::get('/competitions/indiachallenge/jointeam', 'MainController@indiachallenge_join_team_form');
Route::post('/competitions/indiachallenge/jointeam', 'MainController@indiachallenge_join_team_reg');
Route::get('/competitions/indiachallenge/createteam', 'MainController@indiachallenge_create_team_form');
Route::post('/competitions/indiachallenge/createteam', 'MainController@indiachallenge_create_team_reg');
Route::get('/competitions/indiachallenge/leaveteam', 'MainController@indiachallenge_leave_team');
Route::get('/competitions/indiachallenge/dissolveteam', 'MainController@indiachallenge_dissolve');
Route::post('/competitions/indiachallenge/remove/{id}','MainController@indiachallenge_remove_member');
Route::get('/competitions/indiachallenge/remove/{id}','MainController@indiachallenge_remove_member');


Route::redirect('/rowboatics', '/competitions/rowboatics');
Route::get('/competitions/rowboatics', 'MainController@rowboatics');
Route::post('/competitions/rowboatics', 'MainController@rowboatics');
Route::get('/competitions/rowboatics/reg','MainController@regrowboatics');
Route::get('/competitions/rowboatics/jointeam', 'MainController@rowboatics_join_team_form');
Route::post('/competitions/rowboatics/jointeam', 'MainController@rowboatics_join_team_reg');
Route::get('/competitions/rowboatics/createteam', 'MainController@rowboatics_create_team_form');
Route::post('/competitions/rowboatics/createteam', 'MainController@rowboatics_create_team_reg');
Route::get('/competitions/rowboatics/leaveteam', 'MainController@rowboatics_leave_team');
Route::get('/competitions/rowboatics/dissolveteam', 'MainController@rowboatics_dissolve');
Route::post('/competitions/rowboatics/remove/{id}','MainController@rowboatics_remove_member');
Route::get('/competitions/rowboatics/remove/{id}','MainController@rowboatics_remove_member');


Route::redirect('/bugbounty', '/competitions/bugbounty');
Route::get('/competitions/bugbounty', 'MainController@bugbounty');
Route::post('/competitions/bugbounty', 'MainController@bugbounty');
Route::get('/competitions/bugbounty/reg','MainController@regbugbounty');
Route::get('/competitions/bugbounty/jointeam', 'MainController@bugbounty_join_team_form');
Route::post('/competitions/bugbounty/jointeam', 'MainController@bugbounty_join_team_reg');
Route::get('/competitions/bugbounty/createteam', 'MainController@bugbounty_create_team_form');
Route::post('/competitions/bugbounty/createteam', 'MainController@bugbounty_create_team_reg');
Route::get('/competitions/bugbounty/leaveteam', 'MainController@bugbounty_leave_team');
Route::get('/competitions/bugbounty/dissolveteam', 'MainController@bugbounty_dissolve');
Route::post('/competitions/bugbounty/remove/{id}','MainController@bugbounty_remove_member');
Route::get('/competitions/bugbounty/remove/{id}','MainController@bugbounty_remove_member');



Route::redirect('/fintech', '/competitions/fintech');
Route::get('/competitions/fintech', 'MainController@fintech');
Route::post('/competitions/fintech', 'MainController@fintech');
Route::get('/competitions/fintech/reg','MainController@regfintech');
Route::get('/competitions/fintech/jointeam', 'MainController@fintech_join_team_form');
Route::post('/competitions/fintech/jointeam', 'MainController@fintech_join_team_reg');
Route::get('/competitions/fintech/createteam', 'MainController@fintech_create_team_form');
Route::post('/competitions/fintech/createteam', 'MainController@fintech_create_team_reg');
Route::get('/competitions/fintech/leaveteam', 'MainController@fintech_leave_team');
Route::get('/competitions/fintech/dissolveteam', 'MainController@fintech_dissolve');
Route::post('/competitions/fintech/remove/{id}','MainController@fintech_remove_member');
Route::get('/competitions/fintech/remove/{id}','MainController@fintech_remove_member');



Route::redirect('/GoPYNQ', '/competitions/gopynq');
Route::redirect('/gopynq', '/competitions/gopynq');
Route::redirect('/GoPynq', '/competitions/gopynq');
Route::get('/competitions/gopynq', 'MainController@gopynq');
Route::post('/competitions/gopynq', 'MainController@gopynq');
Route::get('/competitions/gopynq/reg','MainController@reggopynq');
Route::get('/competitions/gopynq/jointeam', 'MainController@gopynq_join_team_form');
Route::post('/competitions/gopynq/jointeam', 'MainController@gopynq_join_team_reg');
Route::get('/competitions/gopynq/createteam', 'MainController@gopynq_create_team_form');
Route::post('/competitions/gopynq/createteam', 'MainController@gopynq_create_team_reg');
Route::get('/competitions/gopynq/leaveteam', 'MainController@gopynq_leave_team');
Route::get('/competitions/gopynq/dissolveteam', 'MainController@gopynq_dissolve');
Route::post('/competitions/gopynq/remove/{id}','MainController@gopynq_remove_member');
Route::get('/competitions/gopynq/remove/{id}','MainController@gopynq_remove_member');



Route::redirect('/craneomania', '/competitions/craneomania');
Route::get('/competitions/craneomania', 'MainController@craneomania');
Route::post('/competitions/craneomania', 'MainController@craneomania');
Route::get('/competitions/craneomania/reg','MainController@regcraneomania');
Route::get('/competitions/craneomania/jointeam', 'MainController@craneomania_join_team_form');
Route::post('/competitions/craneomania/jointeam', 'MainController@craneomania_join_team_reg');
Route::get('/competitions/craneomania/createteam', 'MainController@craneomania_create_team_form');
Route::post('/competitions/craneomania/createteam', 'MainController@craneomania_create_team_reg');
Route::get('/competitions/craneomania/leaveteam', 'MainController@craneomania_leave_team');
Route::get('/competitions/craneomania/dissolveteam', 'MainController@craneomania_dissolve');
Route::post('/competitions/craneomania/remove/{id}','MainController@craneomania_remove_member');
Route::get('/competitions/craneomania/remove/{id}','MainController@craneomania_remove_member');



Route::redirect('/boeing', '/competitions/boeing');
Route::redirect('/aeromodelling', '/competitions/boeing');
Route::get('/competitions/boeing', 'MainController@boeing');
Route::post('/competitions/boeing', 'MainController@boeing');
Route::get('/competitions/boeing/reg','MainController@regboeing');
Route::get('/competitions/boeing/jointeam', 'MainController@boeing_join_team_form');
Route::post('/competitions/boeing/jointeam', 'MainController@boeing_join_team_reg');
Route::get('/competitions/boeing/createteam', 'MainController@boeing_create_team_form');
Route::post('/competitions/boeing/createteam', 'MainController@boeing_create_team_reg');
Route::get('/competitions/boeing/leaveteam', 'MainController@boeing_leave_team');
Route::get('/competitions/boeing/dissolveteam', 'MainController@boeing_dissolve');
Route::post('/competitions/boeing/remove/{id}','MainController@boeing_remove_member');
Route::get('/competitions/boeing/remove/{id}','MainController@boeing_remove_member');



Route::redirect('/drone', '/competitions/dronechallenge');
Route::redirect('/dronechallenge', '/competitions/dronechallenge');
Route::get('/competitions/dronechallenge', 'MainController@dronechallenge');
Route::post('/competitions/dronechallenge', 'MainController@dronechallenge');
Route::get('/competitions/dronechallenge/reg','MainController@regdronechallenge');
Route::get('/competitions/dronechallenge/jointeam', 'MainController@dronechallenge_join_team_form');
Route::post('/competitions/dronechallenge/jointeam', 'MainController@dronechallenge_join_team_reg');
Route::get('/competitions/dronechallenge/createteam', 'MainController@dronechallenge_create_team_form');
Route::post('/competitions/dronechallenge/createteam', 'MainController@dronechallenge_create_team_reg');
Route::get('/competitions/dronechallenge/leaveteam', 'MainController@dronechallenge_leave_team');
Route::get('/competitions/dronechallenge/dissolveteam', 'MainController@dronechallenge_dissolve');
Route::post('/competitions/dronechallenge/remove/{id}','MainController@dronechallenge_remove_member');
Route::get('/competitions/dronechallenge/remove/{id}','MainController@dronechallenge_remove_member');

Route::redirect('/makerthon', '/competitions/makerthon');
Route::get('/competitions/makerthon', 'MainController@makerthon');
Route::post('/competitions/makerthon', 'MainController@makerthon');
Route::get('/competitions/makerthon/reg','MainController@regmakerthon');
Route::get('/competitions/makerthon/jointeam', 'MainController@makerthon_join_team_form');
Route::post('/competitions/makerthon/jointeam', 'MainController@makerthon_join_team_reg');
Route::get('/competitions/makerthon/createteam', 'MainController@makerthon_create_team_form');
Route::post('/competitions/makerthon/createteam', 'MainController@makerthon_create_team_reg');
Route::get('/competitions/makerthon/leaveteam', 'MainController@makerthon_leave_team');
Route::get('/competitions/makerthon/dissolveteam', 'MainController@makerthon_dissolve');
Route::post('/competitions/makerthon/remove/{id}','MainController@makerthon_remove_member');
Route::get('/competitions/makerthon/remove/{id}','MainController@makerthon_remove_member');



Route::redirect('/wpc', '/competitions/wpc');
Route::get('/competitions/wpc', 'MainController@wpc');
Route::post('/competitions/wpc', 'MainController@wpc');
Route::get('/competitions/wpc/reg','MainController@regwpc');


Route::redirect('/robovr', '/competitions/robovr');
Route::get('/competitions/robovr', function () {return view('2019.competitions.robovr');});


Route::get('/competitions/details_form','MainController@details_form');
Route::post('/competitions/details_form','MainController@details_form_reg');


Route::get('/competitions/details_form_2','MainController@details_form_2');// second form for ideate without zonals
Route::get('/competitions/details_form_school','MainController@details_form_school');// second form for ideate without zonals




Route::get('/competitions/zonals_form','MainController@zonals_form');
Route::post('/competitions/zonals_form','MainController@zonals_form_reg');





