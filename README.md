# Bitly
This is used to Connect Bitly Account and to generate Bitly Url

# Installation
```
composer require sachintool/bitly-connect
```

# Usage

https://bitly.com/oauth/authorize

# Code Generate
```
$code = $this->request->getQuery('code');
```
# Create App

click this url and create app and call back url

https://app.bitly.com/BiaqctIkmtE/bitlinks/2X7RHET?actions=accountMain&actions=profile&actions=registeredOauthApps

Return BITLY_CLIENT_ID, BITLY_CLIENT_SECRET and CALL BACK URL

# Call back Url


### Create object

use SachinTool\BitlyConnect;

$response = new BitlyConnect();

#### Example with parameter
```
use SachinTool\BitlyConnect;

$response = $response->connect(BITLY_CLIENT_ID,BITLY_CLIENT_SECRET, $code, $callback_url);
```


# Bitly Share

#### Example with parameter
```
use SachinTool\BitlyConnect;

$response = $response->share($access_token, $video_url);
```


# Developer
Sachin Mishra (http://sachinms.herokuapp.com/) 

# Follow This Doc
https://dev.bitly.com/v4_documentation.html
