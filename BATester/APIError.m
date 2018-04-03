//
//  APIHelper.m
//  BATester
//
//  This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
//
#import "APIError.h"

@implementation APIError

/**
 * The HTTP context from the API request
 */
@synthesize context;
/**
 * The HTTP response code from the API request
 */
@synthesize errorCode;
/**
* The error message for the API calls
*/
@synthesize errorMessage;
/**
 * Initialization
 * @param	httpContext The HTTP context from the API request
 */
 - (APIError*) initWithReason: (NSString*) reason
                   andContext: (HttpContext*) httpContext
{
    self = [super init];
    self.errorMessage = reason;
    self.context = httpContext;
    self.errorCode = [[self.context response]statusCode];
     if(![self isMemberOfClass:[APIError class]])
         [self unbox];
    return self;
}

- (void) unbox {}

- (NSString*) description {
    if(self.errorMessage == nil){
        return [NSString stringWithFormat:@"Code: %zd Data: %@", [[context response]statusCode], self.errorMessage];
    }else{
        //Show raw data as string
        return [[NSString alloc] initWithData:[[context response]rawBody] encoding:NSUTF8StringEncoding];
    }
}

@end