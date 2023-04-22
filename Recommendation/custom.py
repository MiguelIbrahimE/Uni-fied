import mysql.connector
import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.base import MIMEBase
from email.mime.text import MIMEText
from email.utils import COMMASPACE
from email import encoders
import configparser
config = configparser.ConfigParser()
# Connect to MySQL server
config.read('config.ini')

mydb = mysql.connector.connect(
 mysql_host = config['mysql']['host'],
 mysql_user = config['mysql']['user'],
 mysql_password = config['mysql']['password'],
 mysql_database = config['mysql']['database']
)




smtp_server = config['smtp']['server']
smtp_port = config['smtp']['port']
smtp_username = config['smtp']['username']
smtp_password = config['smtp']['password']
# Create cursor to execute queries
mycursor = mydb.cursor()

# Query 'users' table to get email and ID
mycursor.execute("SELECT email, ID FROM users")

# Fetch all rows of the query result
users = mycursor.fetchall()

# Loop through each user
for user in users:
    # Query 'visited_sites' table to get VISITED value of each site_name for the user
    mycursor.execute("SELECT site_name, VISITED FROM visited_sites WHERE user_ID = %s", (user[1],))
    visited_sites = mycursor.fetchall()

    # Create a list of not visited sites
    not_visited_sites = []
    for site in visited_sites:
        if not site[1]:
            not_visited_sites.append(site[0])
    
    # If the user has not visited any sites, send email with list of sites and a picture of each site
    if not_visited_sites:
        # Format email content
        email_content = f"Dear {user[0]},\n\nYou have not yet visited:\n"
        for site_name in not_visited_sites:
            email_content += f"- {site_name}\n"
            # Get the location of the visited site from the touristic_sites table
            mycursor.execute("SELECT location FROM touristic_sites WHERE name = %s", (site_name,))
            location = mycursor.fetchone()[0]
            # Get all the sites that are close to the visited site from the touristic_sites table
            mycursor.execute("SELECT name FROM touristic_sites WHERE location = %s AND name != %s", (location, site_name))
            nearby_sites = mycursor.fetchall()
            if nearby_sites:
                email_content += "You may also be interested in visiting these nearby sites:\n"
                for nearby_site in nearby_sites:
                    email_content += f"- {nearby_site[0]}\n"
            
        email_content += "\nPlease take the opportunity to visit these sites. Otherwise, please enjoy a picture of them:\n"

        # Send email with pictures of sites
        for site_name in not_visited_sites:
            email_content += f"{site_name}.jpg\n"

        # Create a MIME message object and add sender, recipient and subject
        msg = MIMEMultipart()
        msg['From'] = smtp_username
        msg['To'] = user[0]
        msg['Subject'] = 'Sites to visit'
        
        # Add text content to the message
        text = MIMEText(email_content)
        msg.attach(text)
        
        # Add pictures of sites to the message
        for site_name in not_visited_sites:
            filepath = f'../Heritage/{site_name}.jpg'
            with open(filepath, 'rb') as f:
                img = MIMEBase('application', 'octet-stream')
                img.set_payload(f.read())
                encoders.encode_base64(img)
                img.add_header('Content-Disposition', f'attachment; filename="{site_name}.jpg"')
                msg.attach(img)

    # Send the message using SMTP server
    with smtplib.SMTP(smtp_server, smtp_port) as server:
        server.ehlo()
        server.starttls()
        server.ehlo()
        server.login(smtp_username, smtp_password)
        server.sendmail(smtp_username, user[0], msg.as_string())
        print(f"Email sent to {user[0]}")