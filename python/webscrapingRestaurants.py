
import requests
from bs4 import BeautifulSoup


# Define the URL to scrape
URL = "https://www.the961.com/12-restaurants-for-foodie-hunt-adventure/"

# Send a GET request to the URL and get the page content
try:
    response = requests.get(URL)
    response.raise_for_status()
    page_content = BeautifulSoup(response.content, "html.parser")
except requests.exceptions.RequestException as e:
    print("Failed to get page content:", e)
    exit(1)

# Extract the text content of all h2 tags
h2_tags = page_content.find_all("h2")
h2_text = [h2_tag.text.strip() for h2_tag in h2_tags]

# Save the h2 text to Firestore
try:
    for text in h2_text:
        doc_ref = db.collection("Restaurants").document()
        doc_ref.set({"text": text})
    print("Saved", len(h2_text), "items to Firestore.")
except Exception as e:
    print("Failed to save data to Firestore:", e)