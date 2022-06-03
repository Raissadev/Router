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

### Class constructor prototype
```

```

#### Parameters
- Parameter "relationships" used to get the object relationships we are requesting.
- Parameter "examples_reference" used to take objects that already exist and relate to the created object.

## CRUD's Examples

### Parameters for Organization JSON (POST)
```json
{
    "name": "CCR",
    "cnpj": "12.594.672/0001-51",
    "number_of_employees": 20,
    "segment": "Technology",
    "main_language": "pt-br",
    "address": {
        "zip_code": "12345-789",
        "public_place": "Public place",
        "number": "20",
        "district": "District",
        "city": "City",
        "state": "XX",
        "country": "Brasil",
        "complement": null
    },
    "certificate_properties": {
        "digital_signature": "Signature",
        "certified_data": "Certified",
        "logo": "example.png"
    },
    "contacts": [
        {
            "name": "Consultant",
            "email": "email@email.com",
            "phone": "",
            "cell_phone": "11 11111-1111"
        },
	{
            "name": "Example",
            "email": "example@email.com",
            "phone": "",
            "cell_phone": "11 11111-1111"
        }
    ],
    "design_properties": {
        "logo_for_white_background": "white.png",
        "logo_for_black_background": "black.jpg",
        "text_color": "black",
        "primary_color": "blue",
        "secondary_color": "black"
    },
    "login_properties": {
        "type": "cpf",
        "mask": "000.000.000-00",
        "min_characters": "11",
        "max_characters": "15",
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
    ]
}
```

### Parameters for Formation JSON (POST)
```json
{
    "name": "Formation",
    "language": "pt-br",
    "active": 1,
    "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus augue ipsum, sodales sed arcu id, sodales volutpat libero. Lorem ipsum dolor sit amet.",
    "certificate": 1,
    "background": "white",
    "thumb": "white.png",
    "courses_references": [1],
}
```

### Parameters for Formation JSON (POST)
```json
{
    "name": "Formation",
    "language": "pt-br",
    "active": 1,
    "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus augue ipsum, sodales sed arcu id, sodales volutpat libero. Lorem ipsum dolor sit amet.",
    "certificate": 1,
    "background": "white",
    "thumb": "white.png",
    "courses_references": [1],
}
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
