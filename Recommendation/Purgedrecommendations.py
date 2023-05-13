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
