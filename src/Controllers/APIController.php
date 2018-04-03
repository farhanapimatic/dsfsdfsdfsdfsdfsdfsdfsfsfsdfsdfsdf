<?php
/*
 * BATesterLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BATesterLib\Controllers;

use BATesterLib\APIException;
use BATesterLib\APIHelper;
use BATesterLib\Configuration;
use BATesterLib\Models;
use BATesterLib\Exceptions;
use BATesterLib\Http\HttpRequest;
use BATesterLib\Http\HttpResponse;
use BATesterLib\Http\HttpMethod;
use BATesterLib\Http\HttpContext;
use BATesterLib\Servers;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class APIController extends BaseController
{
    /**
     * @var APIController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return APIController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * @todo Add general description for this endpoint
     *
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getBasicAuthTest()
    {

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/auth/basic';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }
}
