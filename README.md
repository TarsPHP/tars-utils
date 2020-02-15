
# tars-utils
-------------------

`tars-utils` is an auxiliary class library of phptars, which mainly provides the following functions:

* Profile resolution and caching (swoole table)

* Master address resolution

* Node reporting configuration analysis



### @parseFile($configPath)



For configuration file parsing, take `qdphp.Tarsserver.Config.Conf` as an example to parse `conf` file into array form


### @getLocatorInfo($locatorString)

Address resolution, example:
```php
$locatorString = "tars.tarsregistry.QueryObj@tcp -h 127.0.0.1 -p 17890:tcp -h 127.0.0.1 -p 17890";

$locatorInfo = \Tars\Utils::getLocatorInfo($locatorString);
```
result as below：
```php
[
	'locatorName' => 'tars.tarsregistry.QueryObj',
	'routeInfo' => [
		[
			'sHost' => '127.0.0.1',
			'sProtocol' => 'tcp',
			'iPort' => 17890,
			'iTimeout' => '',
			'bIp' => '',
			'sIp' => ''
		],
		[
			'sHost' => '127.0.0.1',
			'sProtocol' => 'tcp',
			'iPort' => 17890,
			'iTimeout' => '',
			'bIp' => '',
			'sIp' => ''
		]
	]
]
```

### @parseNodeInfo($nodeInfo)

Node reporting configuration resolution, for example:
```php
$locatorString = "tars.tarsnode.ServerObj@tcp -h 127.0.0.1 -p 2345 -t 10000";

$nodeInfo = \Tars\Utils::parseNodeInfo($locatorString);
```

The results are as follows:
```php
[
	'objName' => 'tars.tarsnode.ServerObj',
	'mode' => 'tcp',
	'host' => '127.0.0.1',
	'port' => 2345,
	'timeout' => 1,
	'sIp' => '',
	'iPort' => 2345
]
```

## Changelog
### v0.3.0(2019-06-21)
- support  Multiple servant