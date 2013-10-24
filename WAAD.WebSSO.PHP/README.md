#Windows Azure Active Directory SDK for PHP

This PHP package will give you with a quick and easy way to set up your first app that's integrated with Windows Azure Active Directory using SimpleSAML PHP. The sample apps included in download are designed to run on any platform.

By the end of these walkthroughs, you should be able to build a running application with the following features:

* WebSSO using WS-Federation
* Graph API query capabiltiy using OpenAuth 2.0

We've released all of the source code for this running example in GitHub under an Apache 2.0 license, so feel free to clone (or even better, fork!) and provide feedback on the forums.

## Quick Start

Getting started with the sample is easy. It is configured to run out of the box with minimal setup. 

### Step 1: Register a Windows Azure AD Tenant

To use this sample you will need a Windows Azure Active Directory Tenant. If you're not sure what a tenant is or how you would get one, read [What is a Windows Azure AD tenant](http://technet.microsoft.com/library/jj573650.aspx)? or [Sign up for Windows Azure as an organization](http://www.windowsazure.com/en-us/manage/services/identity/organizational-account/). These docs should get you started on your way to using Windows Azure AD.

### Step 2: Generate A Service Principal for your Windows Azure AD Tenant

After you get your Windows Azure AD tenant, add this sample app to your tenant so it can access your tenant information. If you need help with this step, see: [Learn how to register and integrate an application with Windows Azure AD](http://msdn.microsoft.com/en-us/library/windowsazure/dn151122.aspx) and [Adding, Updating, and Removing an App](http://msdn.microsoft.com/en-us/library/windowsazure/dn132599.aspx).

### Step 3: Download PHP for your platform
To successfully use this sample, you need a working installation of PHP. PHP 5.3.15 is loaded in OSX 10.8 Mountain Lion. For other platforms:

Install PHP 5.3.x from [http://www.php.net](http://www.php.net). 

### Step 4: Download the Sample application and modules

Next, clone the sample repo and install the NPM.

From your shell or command line:

* `$ git clone https://github.com/WindowsAzure/azure-sdk-for-php-samples.git`

### Step 5: Add Configuration Values and Run Application


The configuration values you'll need to edit are found in ```federation.ini ``` and documented in the code. As much as possible they will match the fields in the Azure Management Portal as discussed in [Adding, Updating, and Removing an App](http://msdn.microsoft.com/en-us/library/windowsazure/dn132599.aspx).

## Detailed Information


###The Technologies In This Demo

The website in this sample app demonstrates the following technologies from the Windows Azure AD from Microsoft, and includes open source modules for each scenario.

- Web Single Sign-In (WebSSO)
- Access to Windows Azure Active Directory through a RESTful Graph API


### About SimpleSAML PHP

[SimpleSAML PHP](http://simplesamlphp.org) is an award-winning application written in native PHP that deals with authentication. The project is led by UNINETT, has a large user base, a helpful user community and a large set of external contributors.

SimpleSAMLphp is having a main focus on providing support for:

* SAML 2.0 as a Service Provider.
* SAML 2.0 as a Identity Provider.

SimpleSAML PHP also supports some other identity protocols, such as Shibboleth 1.3, A-Select, CAS, OpenID, WS-Federation and OAuth. We have developed a library for Windows Azure Active Directory that uses SimpleSAML PHP. If you use SimpleSAML PHP for your authentication and authorization platform, adding Windows Azure Active Directory to your web application is easy. 

### IMPORTANT: PHP sample and Multiple web instances in production

In this walkthrough we follow the convention set out in existing SimpleSAML PHP documentation of storing the token information from inside the cookie in to memory after authentication, and serve pages using data from this object for each additional page load. Azure recommends deploying your application onto multiple instances, so storing just the user email address in the cookie means load balancing won’t work. We recommend that you either serialize the token information provided in the cookie at each server call to the webserver or store the data in a shared datastore that multiple instances can access ensuring that calls to multiple instances of will work. 





## About The Code

Code hosted on GitHub under Apache 2.0 license



