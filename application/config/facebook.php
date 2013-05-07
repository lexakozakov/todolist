<?php defined('SYSPATH') or die('No direct access allowed.');

/* Facebook
Permissions list: https://developers.facebook.com/docs/reference/api/permissions/
Facebook Query Language: http://developers.facebook.com/docs/reference/fql/
*/

if (Kohana::$environment == Kohana::PRODUCTION)
{
    return array(
        'appId'			=> '142533435931134',
        'secret'		=> '5974f763c787a77e8533487e0715efcd',
        'cookie'		=> true,
    
        /* (optional) The URL to redirect the user to once the login/authorization process is complete.
        The user will be redirected to the URL on both login success and failure, so you must check the
        error parameters in the URL as described in the authentication documentation.
        If this property is not specified, the user will be redirected to the current URL
        (i.e. the URL of the page where this method was called, typically the current URL in the user's browser). */
        'redirect_uri'   => url::site('/facebook/login-response', true)/* url::site(Request::current()->uri(), true) */,
    
        /* (optional) Next URL to which to redirect the user after logging out (should be an absolute URL). */
        'next'  =>  url::site('/facebook/logout-response', true)/* url::site(Request::current()->uri(), true) */,
    
        /* (optional) The permissions to request from the user. If this property is not specified, basic
        permissions will be requested from the user. */
        'scope'		=> 'email'/* 'email' */,
    
        /* (optional) The display mode in which to render the dialog. The default is page, but can be set to other values
        such as popup. */
        'display'   =>  'page',
    
        /* Fields from users table.
        user: http://developers.facebook.com/docs/reference/fql/user/ */
        'fields'    => 'uid, username, first_name, middle_name, last_name, name, pic, email, pic_big, pic_square',
        
        'session_type' => 'database',
    );

} elseif (Kohana::$environment == Kohana::DEVELOPMENT) {
    return array(
        'appId'			=> '249313005208080',
        'secret'		=> 'a405a84c7e1926b6d4985c5e048b2167',
        'cookie'		=> true,
    
        /* (optional) The URL to redirect the user to once the login/authorization process is complete.
        The user will be redirected to the URL on both login success and failure, so you must check the
        error parameters in the URL as described in the authentication documentation.
        If this property is not specified, the user will be redirected to the current URL
        (i.e. the URL of the page where this method was called, typically the current URL in the user's browser). */
        'redirect_uri'   => url::site('/facebook/login-response', true)/* url::site(Request::current()->uri(), true) */,
    
        /* (optional) Next URL to which to redirect the user after logging out (should be an absolute URL). */
        'next'  =>  url::site('/facebook/logout-response', true)/* url::site(Request::current()->uri(), true) */,
    
        /* (optional) The permissions to request from the user. If this property is not specified, basic
        permissions will be requested from the user. */
        'scope'		=> 'email'/* 'email' */,
    
        /* (optional) The display mode in which to render the dialog. The default is page, but can be set to other values
        such as popup. */
        'display'   =>  'page',
    
        /* Fields from users table.
        user: http://developers.facebook.com/docs/reference/fql/user/ */
        'fields'    => 'uid, username, first_name, middle_name, last_name, name, pic, email, pic_big, pic_square',
        
        'session_type' => 'database',
    );
}

