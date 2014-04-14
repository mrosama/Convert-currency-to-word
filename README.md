# [Mysqli Essential DB Class](https://github.com/mrosama/Convert-currency-to-word)

Class.Currency DB Class Convert number to text: Format money amounts for Egypt and Saudi Arabia

* Source: [https://github.com/mrosama/Convert-currency-to-word](https://github.com/mrosama/Convert-currency-to-word)
* Email: [osama_eg@outlook.com](osama_eg@outlook.com)



## Quick start

Clone the git repo - `git clone git://github.com/mrosama/Convert-currency-to-word.git` -
or [download it](https://github.com/mrosama/Convert-currency-to-word/archive/master.zip)


## Features
This class can be used to format money amounts for Egypt and Saudi Arabia.
It can take a given amount in the currency of Egypt or Saudi Arabia and return its text representation.

* Spell number into text in Egypt,Saudi Arabia currency system

## Usage

 <code>
 <?php
 require_once 'Class.Currency.php';

 $Money=new Currency();

//convert to Egypt

 echo $Money->Eg(3500);
 echo "<br/>";
 echo $Money->Eg(590.60);
 echo "<hr/>";

 //convert Saudi Arabia

 echo $Money->Sa(3500);
 echo "<br/>";
 echo $Money->Sa(590.60);
 echo "<hr/>";

 ?>
 </code>


## Documentation

Take a look at the [documentation table of contents](doc/README.md). This
documentation is bundled with the project, which makes it readily available for
offline reading and provides a useful starting point for any documentation you
want to write about your project.

