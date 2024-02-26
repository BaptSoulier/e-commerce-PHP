<a name="readme-top"></a>

<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/BaptSoulier/e-commerce-PHP/tree/master">
    <img src="img/fav.png" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">README BDM-Commercial</h3>

  <p align="center">
    <br />
    <a href="https://github.com/BaptSoulier/e-commerce-PHP/tree/master"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/BaptSoulier/e-commerce-PHP/tree/master">View Demo</a>
    ·
    <a href="https://github.com/BaptSoulier/e-commerce-PHP/issues">Report Bug</a>
    ·
    <a href="https://github.com/BaptSoulier/e-commerce-PHP/issues">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
      </ul>
    </li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

[![Product Name Screen Shot][product-screenshot]](img/Home.png)

This project is a school project for an E-Commerce site in PHP. We started with a site for buying and selling online cards (eg Pokemon, Yu-Gi-Oh! ...)

### Repartition :
* Popiflut : Back
* BaptSoulier : Front
* Akemi-ito : BDD / Script-SQL



### All link of database (MCD) :


[![MCD][MCD]](img/MCD_BDD%20.png)



<p align="right">(<a href="#readme-top">back to top</a>)</p>



### Built With

* [![PHP][PHP.js]][PHP-url]
* [![CSS][CSS.js]][CSS-url]
* [![JS][JS.io]][JS-url]

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

This project needs a specific name for the database to make it work and a root user.

follow these simple example steps.

### Prerequisites

Steps required to make the project work

#### Instalaton 

We recommend that you use xampp to manage the data base 

[![xampp][xampp-img]][xampp-url]

Once xampp is installed, start the appache and Mysql services and go to the Mysql admin page.

Once in phpmyadmin click on create new databse with the name below:


  ```sh
  Name for the database: "bdd_php"
  ```

Otherwise, to connect to the database, we use this identifier


  ```sh
  $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bdd_php";
  ```
<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->

[xampp-img]: img/xampp.png
[xampp-url]: https://www.apachefriends.org/fr/download.html

[contributors-shield]: https://github.com/BaptSoulier/e-commerce-PHP/graphs/contributors
[contributors-url]: https://github.com/BaptSoulier/e-commerce-PHP/graphs/contributors


[forks-shield]: https://img.shields.io/github/forks/othneildrew/Best-README-Template.svg?style=for-the-badge
[forks-url]: https://github.com/BaptSoulier/e-commerce-PHP/forks


[stars-shield]: https://img.shields.io/github/stars/othneildrew/Best-README-Template.svg?style=for-the-badge
[stars-url]: https://github.com/BaptSoulier/e-commerce-PHP/stargazers


[issues-shield]: https://img.shields.io/github/issues/othneildrew/Best-README-Template.svg?style=for-the-badge
[issues-url]: https://github.com/BaptSoulier/e-commerce-PHP/issues


[license-shield]: https://img.shields.io/github/license/othneildrew/Best-README-Template.svg?style=for-the-badge
[license-url]: https://github.com/othneildrew/Best-README-Template/blob/master/LICENSE.txt


[PHP.js]:https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white
[PHP-url]: https://www.php.net


[CSS.js]: https://img.shields.io/badge/CSS-239120?&style=for-the-badge&logo=css3&logoColor=white
[CSS-url]: https://www.w3.org/Style/CSS/


[JS.io]: https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=JavaScript&logoColor=white
[JS-url]: https://www.javascript.com

[product-screenshot]: img/Home.png
[MCD]: img/MCD_BDD%20.png
