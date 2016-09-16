# _Word Frequency_

#### _Counts frequency of a word in a phrase, 16 September 2016_

#### By _**Joshua Huffman**_

## Description

_This webapp allows a user to enter a phrase and a word to search for.  It tells them how many times the word appears in the phrase._

## Setup/Installation Requirements

* Clone the repository
* Using the command line, navigate to the project's root directory
* Install dependencies by running $ composer install
* Navigate to the /web directory and start a local server with $ php -S localhost:8000
* Open a browser and go to the address http://localhost:8000 to view the application

## Specifications

  * Program should return 0 if searchword is not in phrase
    * input phrase: "howdy"
    * input searchword: "hi"
    * output: 0

  * Program should return 1 if phrase is one word long and it is the same as searchword
    * input phrase: "hi"
    * input searchword: "hi"
    * output: 1

  * Program should return 1 if phrase is multiple words long and searchword is one of them
    * input phrase: "hi howdy"
    * input searchword: "hi"
    * output: 1

  * Program should return 2 if phrase is multiple words long and searchword appears twice
    * input phrase: "hi howdy hi"
    * input searchword:"hi"
    * output: 2

  * Program should still count a match if searchword and phrase have different capitalization
    * input phrase: "Hi howdy hi"
    * input searchword:"hi"
    * output: 2

## Support and contact details

_Contact me at j.m.huffman@gmail.com with any comments or questions_

## Technologies Used

_This project is written in PHP. It uses the Silex microframework, Twig templating, and PHPUnit for testing._

### License

*MIT License*

Copyright (c) 2016 **_Joshua Huffman_**
