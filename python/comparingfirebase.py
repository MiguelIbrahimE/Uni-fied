import firebase_admin
from firebase_admin import credentials
from firebase_admin import firestore

cred = credentials.Certificate("unified-378706-firebase-adminsdk-r1he9-d6931cf7c5.json")
firebase_admin.initialize_app(cred)

db = firestore.client()
docs_ref = db.collection('Google_Query').stream()

for doc in docs_ref:
    # Get the data for the document
    data = doc.to_dict()
    # Print the data
    print(data)
