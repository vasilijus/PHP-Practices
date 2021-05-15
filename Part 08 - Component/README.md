Using:


## Testing
- phpunit for testing 
```
composer require phpunit/phpunit --dev

./
```


## Code sniffer to check with standards 

- codesniffer for testing rules for PHP
```
composer require squizlabs/php_codesniffer --dev

Linux   - ./vendor/bin/phpcs src --standard=PSR2
Windows - .\vendor\bin\phpcs .\src\ --standard=PSR2 
```

## Metadata

in composer add:
```
    "description": "This is a test package",
    "keywords": ["example", "test", "sergio"],
    "license": "MIT",
    "authors": [
        {
            "name" : "Sergio Erasmus",
            "email" : "s@mail.com",
            "homepage": "https://svindex.com",
            "role": "Developer"
        }
    ],
    "require": {
        "php" : ">=5.6"
    },
```
composer validate

## Semantic Versioning
2.5.7
2 - major
5 - minor
7 - patch

0.1.0