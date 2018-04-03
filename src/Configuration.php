<?php
/*
 * BATesterLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BATesterLib;

/**
 * All configuration including auth info and base URI for the API access
 * are configured in this class.
 */
class Configuration
{
    /**
     * The environment being used'
     * @var string
     */
    public static $environment = Environments::PRODUCTION;

    /**
     * @todo Add description for parameter
     * @var string
     */
    public static $port = '80';

    /**
     * @todo Add description for parameter
     * @var int
     */
    public static $suites = Models\SuiteCodeEnum::HEARTS;

    /**
     * The username to use with basic authentication
     * @var string
     */
    public static $basicAuthUserName = 'TODO: Replace';

    /**
     * The password to use with basic authentication
     * @var string
     */
    public static $basicAuthPassword = 'TODO: Replace';

    /**
     * Get the base uri for a given server in the current environment
     * @param  string $server Server name
     * @return string         Base URI
     */
    public static function getBaseUri($server = Servers::DEFAULT_)
    {
        return APIHelper::appendUrlWithTemplateParameters(
            static::$environmentsMap[static::$environment][$server],
            array(
                'port' => static::$port,
                'suites' => static::$suites,
            )
        );
    }

    /**
     * A map of all baseurls used in different environments and servers
     * @var array
     */
    private static $environmentsMap = array(
        Environments::PRODUCTION => array(
            Servers::DEFAULT_ => 'http://apimatic.hopto.org:{suites}',
            Servers::AUTH_SERVER => 'http://apimaticauth.hopto.org:3000',
        ),
        Environments::TESTING => array(
            Servers::DEFAULT_ => 'http://localhost:3000',
            Servers::AUTH_SERVER => 'http://apimaticauth.xhopto.org:3000',
        ),
    );
}
