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

Route::get('/designsFive', function()
{
    return View::make('designsFive');
});




Route::get('/potteryBowlsAfrica', function()
{
    return View::make('potteryBowlsAfrica');
});

Route::get('/comingSoon', function()
{
    return View::make('comingSoon');
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
});

Route::get('/products',function()
{
    if(isset($_GET['submit'])){
        $cat = Input::get('cat');
        $type = Input::get('type');
        $style = Input::get('style');
    }else{
        $cat = 1;
        $type = 1;
        $style = 1;
    }
    $products = DB::table('products_table')->where('id_category',$cat)->where('id_type',$type)->where('id_style',$style)->get();
    $categories = DB::table('categories_table')->get();
    $styles = DB::table('styles_table')->get();
    $types = DB::table('type_table')->get();
    return View::make('products')->with('categories',$categories,'styles',$styles,'types',$types,'products',$products);
});
?>