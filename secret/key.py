import firebase_admin
from firebase_admin import credentials
from firebase_admin import auth
from firebase_admin import db

# Initialize the Firebase Admin SDK
cred = credentials.Certificate('./mmm.json')
firebase_admin.initialize_app(cred, {
    'databaseURL': 'https://unified-378706.firebaseio.com/'
})

# Create a new user
user = auth.create_user(
    email='moufarrejaboumoufarrej@gmail.com',
    email_verified=False,
    password='Ba77rEl2aBByadELMOUTAWASSET',
    display_name='heckerbuorobelmikhtrprivyet',

    disabled=False
)

# Add the user's data to the Realtime Database
ref = db.reference('users')
ref.child(user.uid).set({
    'email': user.email,
    'name': user.display_name,
})
