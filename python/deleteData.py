import pyrebase

firebaseConfig={"apiKey": "AIzaSyAYJols88O6bRrZC149P3fMgAPMr9WiSxA",
  "authDomain": "unified-378706.firebaseapp.com",
  "projectId": "unified-378706",
  "storageBucket": "unified-378706.appspot.com",
  "messagingSenderId": "239394474302",
  "appId": "1:239394474302:web:53b7b230ffead6eccf046f"}

firebase=pyrebase.initialize_app(firebaseConfig)

db=firebase.database()

#Delete item with known key
db.child("todolistA").child("wednesday").child("volunteer").child("deadline").remove()

#Delete entire node and its children
db.child("todolistA").child("tuesday").remove()

#Delete item with unkown generated key
monday_tasks=db.child("todolistB").child("monday").get()

for task in monday_tasks.each():
    if task.val()['name']=="paper":
        key=task.key()

db.child("todolistB").child("monday").child(key).child("deadline").remove()