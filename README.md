<h2 align="center">
INFO 4345 WEB APPLICATION SECURITY <br> <br>
TITLE: CHILLAX CAFE <br> <br>
SEM 2 2022/2023 <br> <br>
GROUP HAMSA <br> <br>

GROUP MEMBER: <br> <br>
Mohd Faiz Hafizuddin bin Ahmad Yazi (2011837) <br> <br>
Muhammad Zaidi bin Abdul Razak (1820833) <br> <br>
Hani Arinah binti Hairul Azam (2019774)<br> <br>
Hani Nursyamira binti Muhamat Halis (2016478) <br> <br>
</h2>


## Introduction
Improved version of Chillax Cafe web app with security features added onto the original web technologies (webtech) class project created by: 
- ‘Abdul ‘Alim Zuhdi Bin Abdul Nasir
- Muhammad Zaidi Bin Abdul Razak
- Mohamad Faris Aiman Bin Mohd Faizal
- Muhammad Afif Danial Bin Mohd Zuhairi
- Muhammad Nur ‘Aizat Bin Zuzi

It is an e-commerce web app for a small coffee shop located in the heart of IIUM Gombak Campus, now no longer existing. <br>
The original code is only static html web application created just for design as part of their webtech class project. 


## Objectives
1. To authenticate and authorize valid user that can place their order through the website.
2. To prevent unauthorize access by implementing session management.
3. Implement Regex and input validation to prevent SQL injection and XSS in the text box especially in the login and register page.
4. File directory cannot be accessed by unauthorize user since it has been disabled.
5. To prevent CSRF by implementing Anti-CSRF token and secure session management.
6. To create a safer environment for the user to access and use the website.

## Enhancement
1. Added user authorisation pages which are register.php and login.php and auth.php
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
      | Original  | Enhanced |
      | ------------- | ------------- |
      | - Login.php has not been developed yet  | Add input validation using Regex and create error message in line 1 - 82 in the code  |
      |   | There is session.php implemented and being included in all pages.  |
      |   | Connect with the database in line 3 in auth.php where it is being include with db.php  |
      |   | SQL injection prevention in line 8-11 in the code at auth.php |
      |   | Create login form and include validate early in line 92-122 in the login.php   |
      |   | There is function validation in line 125-146 which alert the user if no email and password is being inserted.   |
      |   | In line 23 in the code of auth.php, if there is error, then, "Login failed! Please try again" is displayed |

    - ### auth.php
      | Original  | Enhanced |
      | ------------- | ------------- |
      |  - auth.php has not been developed yet | Authn logic file for login.php line 1 - 19|
      |   | Email passed in session to mark as logged in in line 20	|	 	
      |   | Cryptographically generated sessionid in line 22 - 27	|
      |   | Anti-CSRF token generated in line 29 - 38	|
The Anti-CSRF token is generated using HMAC (Hash-based Message Authentication Code), recommended by OWASP, with the secret key located in the .env file.<br><br>


3. Added functionality to menu, order and review pages

    - ### menu.php
      | Original  | Enhanced |
      | ------------- | ------------- |
      |  - only displayed menu item| Add to cart buttons added below menu item e.g. at line 64 - 66|
      |   | Authorization only logged in can add to cart logic in line 7 - 10	|	 	
      |   | Passing cart items using session in line 12 - 35	|

    - ### order.php
      | Original  | Enhanced |
      | ------------- | ------------- |
      |  - only displayed google form to order| Print cart from session loop at line 34 - 41|
      |   | Total price calculation in line 4 - 10	|	 	
      |   | CSRF token check to ensure only valid logged in users can finalize transaction in line 49 - 63|
      |   | Clear cart with unset session in clear_cart.php in line 67 - 69|

    - ### review.php
      | Original  | Enhanced |
      | ------------- | ------------- |
      |  - only displayed fake reviews| Displays real submitted reviews|
      |   | |	 	
      |   | |

    - ### reviewsubmit.php
      | Original  | Enhanced |
      | ------------- | ------------- |
      |  - reviewsubmit.php did not exist| |
      |   | |	 	
      |   | |

4. Added session management. session.php file also acts as header file.

    - ### session.php
      | Original  | Enhanced |
      | ------------- | ------------- |
      | - session.php has not been developed yet  | Included in every page to pass session variables and as header|
      |   | Absolute session timeout in line 2 in the code  |
      |   | Calls session in line 3 |
      |   | Included general CSP for all pages in line 5|
      |   | Strict-Transport-Security which forces browser to use https in line 6|
      |   | Prevent MIME sniffing which can translate to XSS attacks in line 7|
      |   | Same-origin referrer to protect user privacy when making requests to other websites in line 8|
      |   | XSS filtering and prevent rendering page if attack detected in line 9|

5. Added logout.php which destroy sessions

6. Included database with db.php with custom username & password

7. Disable file directory by removing 'Indexes' in httpd.conf (Options ~~Indexes~~ FollowSymLinks Includes ExecCGI)

8. Prevent robots/indexers from crawling certain files and folders with robots.txt	  

## References
1. https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers
2. https://infosec.mozilla.org/guidelines/web_security
3. https://cheatsheetseries.owasp.org/cheatsheets
4. Webappsec class handouts from our course instructor: [Dr. Muhamad Sadry Abu Seman](https://github.com/muhdsadry), DIS, KICT, IIUM
