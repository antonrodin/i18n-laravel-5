<?php namespace App\Http\Controllers;

use Request;
use App;
use Redirect;

class PageController extends Controller {

	
    public function __construct() {
        $this->middleware('guest');
        $this->_data = array();
    }

    public function home() {
        
        $locale = Request::segment(1);
        if ($locale == '') {
            $default_locale = App::getLocale();
            return Redirect::to("/{$default_locale}");
        }
        
        $this->_data['locale'] = $locale;
        return view('home', $this->_data);
    }
    
    public function contact() {        
        return view('contact', $this->_data);
    }

    private $_data;    
    
        
}