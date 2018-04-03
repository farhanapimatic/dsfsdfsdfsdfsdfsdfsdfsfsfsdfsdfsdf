# Getting started

## How to Build


The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```PodFile``` file that comes with the SDK. 
To resolve these dependencies, we use the Cocoapods package manager.
Visit https://guides.cocoapods.org/using/getting-started.html to setup Cocoapods on your system.
Open command prompt and type ```pod --version```. This should display the current version of Cocoapods installed if the installation was successful.

Using command line, navigate to the directory containing the generated files (including ```PodFile```) for the SDK. 
Run the command ```pod install```. This should install all the required dependencies and create the ```pods``` directory in your project directory.

![Installing dependencies using Cocoapods](https://apidocs.io/illustration/objc?step=AddDependencies&workspaceFolder=BATester-ObjC&workspaceName=BATester&projectName=BATester&rootNamespace=BATester)

Open the project workspace using the (BATester.xcworkspace) file. Invoke the build process using `Command(⌘)+B` shortcut key or using the `Build` menu as shown below.

![Building SDK using Xcode](https://apidocs.io/illustration/objc?step=BuildSDK&workspaceFolder=BATester-ObjC&workspaceName=BATester&projectName=BATester&rootNamespace=BATester)


## How to Use

The generated code is a Cocoa Touch Static Library which can be used in any iOS project. The support for these generated libraries go all the way back to iOS 6.

The following section explains how to use the BATester library in a new iOS project.     
### 1. Starting a new project
To start a new project, left-click on the ```Create a new Xcode project```.
![Create Test Project - Step 1](https://apidocs.io/illustration/objc?step=Test1&workspaceFolder=BATester-ObjC&workspaceName=BATester&projectName=BATester&rootNamespace=BATester)

Next, choose **Single View Application** and click ```Next```.
![Create Test Project - Step 2](https://apidocs.io/illustration/objc?step=Test2&workspaceFolder=BATester-ObjC&workspaceName=BATester&projectName=BATester&rootNamespace=BATester)

Provide **Test-Project** as the product name click ```Next```.
![Create Test Project - Step 3](https://apidocs.io/illustration/objc?step=Test3&workspaceFolder=BATester-ObjC&workspaceName=BATester&projectName=BATester&rootNamespace=BATester)

Choose the desired location of your project folder and click ```Create```.
![Create Test Project - Step 4](https://apidocs.io/illustration/objc?step=Test4&workspaceFolder=BATester-ObjC&workspaceName=BATester&projectName=BATester&rootNamespace=BATester)

### 2. Adding the static library dependency
To add this dependency open a terminal and navigate to your project folder. Next, input ```pod init``` and press enter.
![Add dependency - Step 1](https://apidocs.io/illustration/objc?step=Add0&workspaceFolder=BATester-ObjC&workspaceName=BATester&projectName=BATester&rootNamespace=BATester)

Next, open the newly created ```PodFile``` in your favourite text editor. Add the following line : pod 'BATester', :path => 'Vendor/BATester'
![Add dependency - Step 2](https://apidocs.io/illustration/objc?step=Add1&workspaceFolder=BATester-ObjC&workspaceName=BATester&projectName=BATester&rootNamespace=BATester)

Execute `pod install` from terminal to install the dependecy in your project. This would add the dependency to the newly created test project.
![Add dependency - Step 3](https://apidocs.io/illustration/objc?step=Add2&workspaceFolder=BATester-ObjC&workspaceName=BATester&projectName=BATester&rootNamespace=BATester)


## How to Test

Unit tests in this SDK can be run using Xcode. 

First build the SDK as shown in the steps above and naivgate to the project directory and open the BATester.xcworkspace file.

Go to the test explorer in Xcode as shown in the picture below and click on `run tests` from the menu. 
![Run tests](https://apidocs.io/illustration/objc?step=RunTests&workspaceFolder=BATester-ObjC&workspaceName=BATester&projectName=BATester&rootNamespace=BATester)


## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| suites | TODO: add a description |
| basicAuthUserName | The username to use with basic authentication |
| basicAuthPassword | The password to use with basic authentication |



Configuration variables can be set as following.
```Objc
// Configuration parameters and credentials
Configuration_Suites = "Configuration_Suites";
Configuration_BasicAuthUserName = "Configuration_BasicAuthUserName"; // The username to use with basic authentication
Configuration_BasicAuthPassword = "Configuration_BasicAuthPassword"; // The password to use with basic authentication

```

# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [APIController](#api_controller)

## <a name="api_controller"></a>![Class: ](https://apidocs.io/img/class.png ".APIController") APIController

### Get singleton instance
```objc
Client* client = [[Client alloc]init] ;
```

### <a name="get_basic_auth_test_with_completion_block"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getBasicAuthTestWithCompletionBlock") getBasicAuthTestWithCompletionBlock

> TODO: Add a method description


```objc
function getBasicAuthTestWithCompletionBlock:(CompletedGetBasicAuthTest) onCompleted()
```



#### Example Usage

```objc

    [self.client getBasicAuthTestWithCompletionBlock:  ^(BOOL success, HttpContext* context, NSString* response, NSError* error) { 
       //Add code here
    }];
```


[Back to List of Controllers](#list_of_controllers)



