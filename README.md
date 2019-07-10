# Bitly
Bitly Connect

# Installation
```
composer require sachintool/bitly-connect
```

# Usage

https://bitly.com/oauth/authorize

Create bitlyCallback Function and

$code = $this->request->getQuery('code');

Craete callback url

### Create object

use SachinTool\BitlyConnect;

$response = new BitlyConnect();

#### Example with parameter
```
use SachinTool\BitlyConnect;

$response = $response->connect(BITLY_CLIENT_ID,BITLY_CLIENT_SECRET, $code, $callback_url);
```

# Bitly
Bitly Share

#### Example with parameter
```
use SachinTool\BitlyConnect;

$response = $response->share($access_token, $video_url);
```


# Developer
Sachin Mishra (http://sachinms.herokuapp.com/) 

# Follow This Doc
https://dev.bitly.com/v4_documentation.html
