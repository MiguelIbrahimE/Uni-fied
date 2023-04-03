![Unified-1](https://user-images.githubusercontent.com/121685654/229470414-dc4892a9-16ab-45e9-8070-e23fffb89773.png)



<h3 align="center">A Capstone Web Application Project</h3>

<h3 align="center">By</h3>

<h3 align="center">Miguel Ibrahim</h3>

<h3 align="center">Lebanese American University</h3>

<h3 align="center">Supervisor: Dr. Azzam Mourad</h3>


<br>

**Table of Content:**

[**I.**	**Introduction:**	3](#_Toc131237070)

[**II.**	**Gathering Information**	3](#_Toc131237071)

[**III.**	**Versions**	4](#_Toc131237072)

[**Version I:**	4](#_Toc131237073)

[**Version II:**	4](#_Toc131237074)

[**Version IV:**	5](#_Toc131237075)

[**Version V:**	5](#_Toc131237076)

[**Version VI:**	6](#_Toc131237077)

[**Version VII:** 	This version encompasses the beginning of a search bar in the	6](#_Toc131237078)

[**IV.**	HTML Explanations:**	7](#_Toc131237079)
#








1. ## **Introduction:**
As an introduction to the project, I am to produce for the capstone project for the Lebanese American University centered around creating a web app around the idea of making browsing the internet in search for answers easier.

Have you ever searched on google for restaurants/ touristic sites and get bombarded with a lot of information at one time, and spend a long time scrolling through each solution with no prevail? That was my problem with google map as well as searching for touristic sites in Lebanon. A wide variety of information and search results may be daunting to a person wanting to visit a country for the first time. With such problems in mind, I am producing a website application that provides a concise and easy to see collection of touristic sites, restaurants, and transportation in Lebanon hence the name “Unified” since it unifies different aspects of Lebanon in one concise site.
1. ## **Gathering Information**
Gathering information is one of the most parts of creating a service-based web application, and with such, key information gathering is required. I have found that the best way to gather information used to be manually getting them from google and adding them to the web application; however, this style is very un-efficient and need frequent taking down of the website for a bit before adding the new data. 

Fortunately, after using web scraping with python and adding it directly to the database is a much better way to update the categories in the web application. I have found that the961.com is a great website that has the necessary information about the different restaurants, and touristic sites; however, even the961 has a weird assortment of information as well as a bad User Experience with multiple adds.
1. ## **Versions**
### **Version I:** 
Version One is the start of the Website, Unified started as a website that only hosted touristic sites in a list statically and manually. That means that it can only be accessed on one devise with no User Interface and no User Experience.
### `		`**Version II:**
Version Two is a larger version of Version One, it includes a well organized layout of files in Virtual Code, and the start of an organized and a consistent style to the HTML files: Tourism.html (Which are the touristic sites in Lebanon) , Restaurant.html (The best restaurants in Lebanon), and index.html (The Main Page).

`		`**Version III:**

Version Three includes a lot of changes; it includes the start of code versioning as well as creating multiple More Information about the touristic sites in Lebanon that are present on the website. The Website also includes a different styling for the increased amount of information, as well as a card layout for the Tourism.html, Restaurants.html, and a filter for the best and wide variety of tastes of restaurants in Lebanon. Code version: March 1, 2023.
### `		`**Version IV:**
Version IV includes the increase in the number of programming languages such as Javascript, python, PHP, and JSON for quality of life improvements this version is important because it includes a responsive navbar, filter, as well as a responsive html code that is viewable on mobile, laptop, and TV, the reason for it not working on all the devices is due to it being too bulky at the time due to the dependency on Laravel a framework based on PHP. Code version: March 10, 2023
### `		`**Version V:**
Total responsiveness is the main concern of this version, after implementing necessary functions and parameters required for CSS3, HTML5, JQuery and Bootstrap to be as responsive and readable as possible for all screens possible. Creation of a logo and inserting documentation is necessary at this point because each CSS file is of around 300 – 700 lines of code and 5 CSS files. Code version: March 12, 2023
### `		`**Version VI:**
Dynamic Database, Backend, and front end. After great consideration and great thought, a manually edited web page is not a great idea; however, a problem that caused me to rethink to make it dynamic is the static display of information of the961.com web app as well as the static touristic sites in Lebanon; however restaurants in Lebanon are seeing the light of day and many are opening every day. Another concern is if the data are really updating that frequently? If the data are updating that frequently, then the website is going to keep on reloading until there are no more new restaurants opening and achieving great quality. Code version: COMPOSER March 24, 2023.
**Version VII:**

----------------
This version encompasses the beginning of a search bar in the   

unified top nav as well as putting the user in mind when it comes to the main page, the main page requires a quick access to all the sites the page offers.
1. **HTML Explanations:**

   ----------------------------------


**Index.html:**
`	`Index.html is the main page for Unified, it is the most attractive part of the Web App and it allows the user to take an idea of the country before visiting it, on this page there is a small assortment of information hinting to the idea of minimalism with a drop nav no matter the size of the screen, of which the drop nav’s background is a fluid animation that increases when pressed on.

When the hamburger icon is pressed on, drop nav elements and sites are displayed as follows:

The following drop nav displays the sites that the current Web App provides such as Touristic-Attractions, Restaurants, Transportation, Map of Lebanon, and a Sign In/ Sign Up Page which reroutes to that page running a backend call for resource gathering and display done using PHP.

<br>
#### **Tourism.html:**


Tourism.html is another html file that includes support for bootstrap, jQuery, and access to firebase  that shows the following: A Top nav to browse through the collections the Web App Provides and switches dynamically and responsively when the browser is smaller like so:

The reason why the Unified logo is not centered is due to the search bar that is currently being implemented to search for a specific thing in the entire Web App

This tourism.html provides a card layout that has an image holder showing a high quality personally taken photo of every touristic site on this Web Application. It also provides a link to google maps as well as a MORE INFO page showing more information about that specific site. When clicking on Anjar for example, it will lead to the more dedicated page for Anjar (Anjar.html) that showcases the location of Anjar Necropolis, and some pictures with a link to unesco’s page.



<br>

Restaurant.html:

resturant.html is an html file that includes support for jQuery, bootstrap, as well as Firebase, it loads the data from firebase dynamically using a hot reload function embedded withing the backend application using vanilla Javascript

This HTML document has a real time review to the reviews on google maps and offer a location based service when their names are clicked on. As shown, this page allows filtering of data in real time without the need for reloading the page. The Tags Lebanese and others are present there to aid with the filtering process.




<br>
**Anjar.html, Baalbek.html, etc.**

Navigating to the dedicated page of Anjar, Baalbek etc, this page provides a short overview of the site clicked on and it shows the google maps location, a short description provided by different websites (done using web scraping) as well as pictures of the location further encouraging the person to go visit that touristic site.

<br>

**Transportation.html:**


