import firebase_admin
from firebase_admin import credentials
from firebase_admin import firestore

# Initialize Firebase
try:
    cred = credentials.Certificate("./serviceAccount.json")
    firebase_admin.initialize_app(cred)
    db = firestore.client()
except Exception as e:
    print("Failed to initialize Firebase:", e)
    exit(1)

# Retrieve the documents from Firestore
try:
    touristic_sites_ref = db.collection("Touristic Sites").order_by("text")
    docs = touristic_sites_ref.get()
except Exception as e:
    print("Failed to retrieve data from Firestore:", e)
    exit(1)

# Extract the text fields from the documents
texts = [doc.to_dict()["text"] for doc in docs]

# Print the texts
for text in texts:
    print(text)
