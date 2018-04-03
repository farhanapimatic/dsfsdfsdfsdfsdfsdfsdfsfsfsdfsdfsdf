/*
 * batester_lib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io )
 */

package configuration_pkg

import(
	"batester_lib/models_pkg"
)

type CONFIGURATION interface {
        Port()  *string
        Suites()  models_pkg.SuiteCodeEnum
        SetPort(port *string)
        SetSuites(suites models_pkg.SuiteCodeEnum)
        BasicAuthUserName()  string
        BasicAuthPassword()  string
        SetBasicAuthUserName(basicAuthUserName   string)
        SetBasicAuthPassword(basicAuthPassword   string)
}   
/*
 * Factory for the CONFIGURATION interaface returning CONFIGURATION_IMPL
 */
func NewCONFIGURATION() CONFIGURATION{
    configuration := new(CONFIGURATION_IMPL)
    port := "80"
    configuration.SetPort(&port) 
    configuration.SetSuites(models_pkg.SuiteCodeEnumFromValue(1)) 
    return configuration
}