import pyrebase

#Initialize Firebase
firebaseConfig={"apiKey": "AIzaSyAYJols88O6bRrZC149P3fMgAPMr9WiSxA",
  "authDomain": "unified-378706.firebaseapp.com",
  "projectId": "unified-378706",
  "storageBucket": "unified-378706.appspot.com",
  "messagingSenderId": "239394474302",
  "appId": "1:239394474302:web:53b7b230ffead6eccf046f"}

firebase=pyrebase.initialize_app(firebaseConfig)

db=firebase.database()

#Push Data
data={"age":20, "address":["new york", "los angeles"]}
print(db.push(data)) #unique key is generated

#Create paths using child
#data={"name":"Jane", "age":20}
#db.child("Branch").child("Employees").push(data)

#Create your own key
data={"age":20, "address":["new york", "los angeles"]}
db.child("John").set(data)

#Create your own key + paths with child
data={"name":"John", "age":20, "address":["new york", "los angeles"]}
db.child("Branch").child("Employee").child("male employees").child("John's info").set(data)

