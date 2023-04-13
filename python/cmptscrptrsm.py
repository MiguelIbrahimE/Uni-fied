import mysql.connector

# establish connection
cnx = mysql.connector.connect(user='root', password='',
                              host='localhost', database='users')

# create cursor object
cursor = cnx.cursor()

# execute a query
query = "SELECT LAST_UPDATED,NAME FROM touristic_sites"
cursor.execute(query)
array=[]
# iterate over results
for result in cursor:
    array.append(result)
    print(result)

# close cursor and connection
cursor.close()
cnx.close()

