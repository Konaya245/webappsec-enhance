# webappsec-enhance
Web Application Security Enhancement Final Assessment Group Project

## Group Name
Hamsa

## Group Members
1. Mohd Faiz Hafizuddin bin Ahmad Yazi (2011837)
2. Muhammad Zaidi bin Abdul Razak (1820833)
3. Hani Arinah binti Hairul Azam (2019774)
4. Hani Nursyamira binti Muhamat Halis (2016478)

## Objectives

## Enhancement
1. Add two new pages which are register.php and login.php
    - ### register.php
      | Original  | Enhanced |
      | ------------- | ------------- |
      | - Register.php has not been developed yet  | Add input validation using Regex and create error message in line 1 - 82 in the code  |
      |   | XSS prevention in line 1 - 82 in the code  |
      |   | Connect with the database in line 106 in the code  |
      |   | SQL injection prevention in line 105 - 130 in the code  |
      |   | Create registration form and include validate early in line 152 - 179 in the code   |
      |   | Display error message in line 157 , 161, 165, 169 and 173 in the code   |
      |   | Improving on the CSP in line 181 & 182 in the code  |
      |   | In line 190 - 193 in the code, if there is no error, then, the user is registered  |
      |   | Data redundancy prevention in line 194 - 199 in the code  |


    - ### login.php
3. Improve order and review page
4. Add .htaccess file to disable directory listing

	- ### session.php
      | Original  | Enhanced |
      | ------------- | ------------- |
      | - session.php has not been developed yet  | Included in every page to pass session variables and as header|
	  |   | Absolute session timeout in line 2 in the code  |
	  |   | Calls session in line 3 |
	  |   | Included general CSP for all pages in line 5|

    - ### auth.php
	| Original  | Enhanced |
    | ------------- | ------------- |
	|  - auth.php has not been developed yet | Authn logic file for login.php|	 	
	|   | Cryptographically generated sessionid in line 22 - 27	|	  

## References
