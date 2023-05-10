The following md fle explains the more info files such as:
1. Anjar.php
2. Beiteddine.php
3. etc.

This is a PHP script that displays information about the cities in Lebanon, including a description, images, and a map. It also displays the current weather in Anjar using data from the OpenWeatherMap API.

Here is a breakdown of the code:

    The first few lines of code check if a PHP session has been started, and if not, starts a new session. It then checks if the user is logged in (i.e., if the user's username is stored in the session), and if not, redirects them to the login page.

    The script then includes a configuration file that defines the database connection details.

    Next, the script outputs HTML code to display the page. This includes a navbar that is loaded from a separate PHP file, a title, and a main section that includes a description, images, and a map of Anjar.

    Finally, the script includes JavaScript code that fetches weather data from the OpenWeatherMap API and updates the HTML on the page to display the current weather in Anjar. The API key and city name are hardcoded in the script.