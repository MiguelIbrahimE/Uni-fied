// Initialize Firebase
const firebaseConfig = {
    apiKey: "AIzaSyAYJols88O6bRrZC149P3fMgAPMr9WiSxA",
    authDomain: "unified-378706.firebaseapp.com",
    projectId: "unified-378706",
    storageBucket: "unified-378706.appspot.com",
    messagingSenderId: "239394474302",
    appId: "1:239394474302:web:53b7b230ffead6eccf046f",
  };
  
  firebase.initializeApp(firebaseConfig);
  
  // Authenticate the user and retrieve their UID
  const user_id = getCookie('uid');
  const image_path = '../Heritage/';
  
  // Create an array of cards with their image URLs
  const image_files = ['jpg', 'jpeg', 'png', 'gif'];
  const cards = await Promise.all(
    image_files.map(async (filename) => {
      const card_name = path.basename(filename, path.extname(filename));
      const image_url = `${image_path}${filename}`;
      return { name: card_name, image_url };
    })
  );
  
  // Get the user's data from the Firestore database
  const db = firebase.firestore();
  const user_doc = await db.collection('users').doc(user_id).get();
  
  // Iterate through the cards and set the checkbox state
  cards.forEach((card) => {
    const card_name = card.name;
    const visited = user_doc.get(card_name)?.visited ?? false;
    const checked = visited ? 'checked' : '';
  
    // Display the card with the appropriate checkbox state
    const cardDiv = document.createElement('div');
    cardDiv.classList.add('card');
  
    const imageHolderDiv = document.createElement('div');
    imageHolderDiv.classList.add('card__image-holder');
  
    const image = document.createElement('img');
    image.classList.add('card__image');
    image.src = card.image_url;
    image.name = card_name;
  
    const titleDiv = document.createElement('div');
    titleDiv.classList.add('card-title');
  
    const title = document.createElement('h2');
    const titleLink = document.createElement('a');
    titleLink.href = `./${card_name}.html`;
    titleLink.target = '_blank';
    titleLink.textContent = card_name;
    title.appendChild(titleLink);
  
    const checkboxDiv = document.createElement('div');
    const checkbox = document.createElement('input');
    checkbox.type = 'checkbox';
    checkbox.id = card_name;
    checkbox.name = card_name;
    checkbox.onclick = run;
    checkbox.checked = visited;
  
    const label = document.createElement('label');
    label.htmlFor = card_name;
    label.textContent = 'Visited';
  
    checkboxDiv.appendChild(checkbox);
    checkboxDiv.appendChild(label);
  
    titleDiv.appendChild(title);
    titleDiv.appendChild(checkboxDiv);
  
    cardDiv.appendChild(imageHolderDiv);
    cardDiv.appendChild(titleDiv);
  
    imageHolderDiv.appendChild(image);
  
    document.body.appendChild(cardDiv);
  });
  function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
  }
  