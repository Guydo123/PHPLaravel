<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/about', function()
{
    return View::make('about');
});

Route::get('/products', function()
{
    return View::make('products');
});

Route::get('/contact', function()
{
    return View::make('contact');
});

Route::get('/news', function()
{
    $news = News::all();
    return View::make('news')->with('news',$news);
});

Route::get('/family', function()
{
    return View::make('family');
});
Route::get('/charities', function()
{
    return View::make('charities');
});
Route::get('/designs', function()
{
    return View::make('designs');
});
Route::get('/faq', function()
{
    return View::make('faq');
});
Route::get('/cart', function()
{
    return View::make('cart');
});
Route::get('/faq', function()
{
    return View::make('faq');
});

Route::get('/designsTwo', function()
{
    return View::make('designsTwo');
});

Route::get('/designsThree', function()
{
    return View::make('designsThree');
});
Route::get('/designsFour', function()
{
    return View::make('designsFour');
});

Route::get('/potteryCupsAfrica', function()
{
    return View::make('potteryCupsAfrica');
});

Route::get('/potteryCupsBugz', function()
{
    return View::make('potteryCupsBugz');
});

Route::get('/potteryCupsFarm', function()
{
    return View::make('potteryCupsFarm');
});

Route::get('/potteryCupsReptilez', function()
{
    return View::make('potteryCupsReptilez');
});

Route::get('/potteryCupsOther', function()
{
    return View::make('potteryCupsOther');
});
Route::get('/potteryPlatesAfrica', function()
{
    return View::make('potteryPlatesAfrica');
});

Route::get('/potteryPlatesBugz', function()
{
    return View::make('potteryPlatesBugz');
});

Route::get('/potteryPlatesFarm', function()
{
    return View::make('potteryPlatesFarm');
});

Route::get('/potteryPlatesReptilez', function()
{
    return View::make('potteryPlatesReptilez');
});

Route::get('/potteryPlatesOther', function()
{
    return View::make('potteryPlatesOther');
});

Route::post('contact',function(){
    $fromEmail = Input::get('email');
    $fromName = Input::get('name');
    $subject = 'Web Site Feedback';

    $data = [ 'msg' => Input::get('comment'), 'name' => Input::get('name')];
    $toEmail = 'sonic696@gmail.com';
    $toName = 'Chris Alwin';

    Mail::send('emails.contact', $data, function($message) use ($toEmail, $toName, $fromEmail, $fromName, $subject)
    {
        $message->to($toEmail, $toName);
        $message->from($fromEmail, $fromName);
        $message->subject($subject);

    });
    $feedback = 'Thankyou';
    return View::make('contact')->with('feedback',$feedback);
})



?>

