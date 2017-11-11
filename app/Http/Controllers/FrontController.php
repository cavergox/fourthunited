<?php

/**
* Muhammad Zulfikar
* https://github.com/razulasyura
* razul.asyura@gmail.com
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Theme;
use Breadcrumbs;
use SEO;
use URL;

class FrontController extends Controller
{
    /*Declare Global Variable*/ 
    var $theme ="fourthunited"; // load theme
    var $theme_admin = "admin"; // load admin theme

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "Index";
        $page_description = "This is ".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Load View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
    }

    /* start frontend */

    /* admin */
    public function admin()
    {
        Theme::init($this->theme_admin); 
        $page_title = "general.text.welcome";
        $page_description = "This is the welcome page";  
        return view('hello', compact('page_title'));
    }

    /* about */
    public function about()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "About";
        $page_description = "This is ".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Load View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
    }

    /* blog */
    public function blog()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "Blog";
        $page_description = "This is ".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Load View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
    }

    /* blog_detail */
    public function blog_detail()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "Blog_detail";
        $page_description = "This is ".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Load View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
    }

    /* member */
    public function member()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "Member";
        $page_description = "This is ".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Load View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
    }

    /* event */
    public function event()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "Event";
        $page_description = "This is ".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Load View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
    }

    /* event_detail */
    public function event_detail()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "Event_detail";
        $page_description = "This is ".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Load View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
    }

    /* album */
    public function album()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "Album";
        $page_description = "This is ".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Load View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
    }

    /* career */
    public function career()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "Career";
        $page_description = "This is ".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Load View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
    }

    /* career_detail */
    public function career_detail()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "Career_detail";
        $page_description = "This is ".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Load View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
    }

    /* contact */
    public function contact()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "Contact";
        $page_description = "This is ".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Load View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
    }

    /*Declare Master Function*/
    public function _breadcrumbs($page_title=NULL)
    {
        // Breadcrumbs
        $breadcrumbs = Breadcrumbs::addCrumb('Home', URL::to('/'))
        ->addCrumb($page_title, strtolower($page_title));
        return $breadcrumbs;
    }

    public function _seo($page_title=NULL,$page_description=NULL)
    {
        // SEO
        SEO::setTitle($page_title);
        SEO::setDescription($page_description);
        SEO::opengraph()->setUrl(URL::to('/'.strtolower($page_title)));
        SEO::opengraph()->addProperty('type', 'articles');
    }

}
