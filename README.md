# Lean Learn

Simple documentation about the software.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar, erat non accumsan iaculis.

Vivamus ultricies sollicitudin purus id varius. Praesent congue justo ac tempor laoreet,
aenean et leo ut sapien pellentesque iaculis. In varius sagittis dignissim.

## Installation
Install the latest version with
```
$ composer install
```

## Usage

### Crawler class constructor prototype
```
CViniciusSDias\GoogleCrawler\Crawler::__construct(
    SearchTermInterface $searchTerm, GoogleProxyInterface $proxy = null,
    string $googleDomain = 'google.com', string $countryCode = ''
)
```

#### Parameters
- Parameter "relationships" parameter used to get the object relationships we are requesting.

## CRUD's Examples

### Parameters for Organization JSON
```json
{
    "name": "Org",
    "cnpj": "12.594.672/0001-51",
    "number_of_employees": 123,
    "segment": "Tech",
    "main_language": "portuguese",
    "address": {
        "zip_code": "12345-789",
        "public_place": "Public place",
        "number": "17",
        "district": "District",
        "city": "City",
        "state": "XX",
        "country": "Brasil",
        "complement": null
    },
    "certificate_properties": {
				"id": 1,
        "digital_signature": "true certi",
        "certified_data": "truee",
        "logo": "asd"
    },
    "contacts": [
        {
            "name": "Consultor",
            "email": "email@email.com",
            "phone": "",
            "cell_phone": "11 11111-1111"
        },
			 	{
            "name": "New",
            "email": "email@email.com",
            "phone": "",
            "cell_phone": "11 11111-1111"
        }
    ],
    "design_properties": {
        "logo_for_white_background": "asd.png",
        "logo_for_black_background": "asd.jpg",
        "text_color": "black",
        "primary_color": "black",
        "secondary_color": "black"
    },
    "login_properties": {
        "type": "cpf",
        "mask": "000.000.000-00",
        "min_characters": "11",
        "max_characters": "14",
        "sso_credentials_microsoft": null
    },
    "notification_settings": {
        "email": true,
        "smtp_host": "1213121",
        "smtp_login": "1321321",
        "smtp_password": "1321321",
        "sms": false,
        "whatsapp": false
    },
    "content_type": [
			{
				"content_type_id": 1
			},
			{
				"content_type_id": 2
			}
    ]
}
```

### With some proxy
```php
<?php
use CViniciusSDias\GoogleCrawler\{
    Crawler, SearchTerm, Proxy\CommonProxy
};

$searchTerm = new SearchTerm('Test');
$commonProxy = new CommonProxy('https://us.hideproxy.me/includes/process.php?action=update');
$crawler = new Crawler($searchTerm, $commonProxy);

$resultList = $crawler->getResults();
```

#### More details on proxies
To know more details about which proxies are currently
supported, see the files inside `tests/Functional` folder.
There you'll see all the available proxies.

### Iterating over results
```php
foreach ($resultList as $result) {
    $title = $result->getTitle();
    $url = $result->getUrl();
    $description = $result->getDescription();
}
```

## About

### Requirements

- This component works with PHP 7.2 or above
- This component requires the extension [php-ds](http://php.net/manual/pt_BR/book.ds.php) to be installed

### Author
Vinicius Dias (ZCE) - carlosv775@gmail.com - https://github.com/CViniciusSDias/ - http://www.zend.com/en/yellow-pages/ZEND030134

### License
This component is licensed under the GPL v3.0 License - see the `LICENSE` file for details
