function togglePcFrame() {
    var frame = document.getElementById('frame33');
    if (frame.style.display === 'none' || frame.style.display === '') {
      frame.style.display = 'block'; // Show the frame
    } else {
      frame.style.display = 'none'; // Hide the frame
    }
  }
  

function togglePcFrame() {
    var frame33 = document.getElementById('frame33');
    var mainContent = document.querySelector('.main-content');
    var body = document.body;
  
    // Toggle visibility of the PC frame
    if (frame33.classList.contains('active')) {
      frame33.classList.remove('active');
      mainContent.classList.remove('blur-bg');
      body.classList.remove('scroll-lock');
    } else {
      frame33.classList.add('active');
      mainContent.classList.add('blur-bg');
      body.classList.add('scroll-lock');
    }
  }
  
/* t-shirt moves*/

// Array of image paths
const images = [
    "/Alabay Assets/Assets/Alabay Merch/pink tee bck.png",
    "/Alabay Assets/Assets/Alabay Merch/cap mockup.png",
    "/Alabay Assets/Assets/Alabay Merch/pink tshirt.png",
    "/Alabay Assets/Assets/Alabay Merch/yellow tshirt.png",
    "/Alabay Assets/Assets/Alabay Merch/black hoodie.png",
    "/Alabay Assets/Assets/Alabay Merch/blue cap bck.png",
    "/Alabay Assets/Assets/Alabay Merch/black hoodie bck.png"
];

let currentIndex = 0;

function nextImage() {
    // Increment the index and reset if it exceeds the length of the array
    currentIndex = (currentIndex + 1) % images.length;
    
    // Update the image source
    document.getElementById("image-display").src = images[currentIndex];
}
function prevImage() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    document.getElementById("image-display").src = images[currentIndex];
}

// Array of image paths for the games
const gameImages = [
    "/Alabay Assets/Assets/Alabay Games/alabay guard prev 2 1.png",
    "/Alabay Assets/Assets/Alabay Games/alabay lost heritage prev 1.png",
    "/Alabay Assets/Assets/Alabay Games/Alabay Guard prev gradient.png"
];

let gameCurrentIndex = 0;

// Function to go to the next game image
function nextGameImage() {
    gameCurrentIndex = (gameCurrentIndex + 1) % gameImages.length;
    document.getElementById("game-image-display").src = gameImages[gameCurrentIndex];
}

// Function to go to the previous game image
function prevGameImage() {
    gameCurrentIndex = (gameCurrentIndex - 1 + gameImages.length) % gameImages.length;
    document.getElementById("game-image-display").src = gameImages[gameCurrentIndex];
}


/*frame6*/
// Array containing the image sources and captions
// Array containing the image URLs and captions for all photos
const photos = [
    [
        { src: 'https://via.placeholder.com/456x310?text=PHOTO+1', caption: 'PHOTO 1' },
        { src: 'https://via.placeholder.com/456x310?text=PHOTO+2', caption: 'PHOTO 2' },
        { src: 'https://via.placeholder.com/456x310?text=PHOTO+3', caption: 'PHOTO 3' },
        { src: 'https://via.placeholder.com/456x310?text=PHOTO+4', caption: 'PHOTO 4' },
        { src: 'https://via.placeholder.com/456x310?text=PHOTO+5', caption: 'PHOTO 5' }
    ],
    [
        { src: 'https://via.placeholder.com/456x310?text=PHOTO+6', caption: 'PHOTO 6' },
        { src: 'https://via.placeholder.com/456x310?text=PHOTO+7', caption: 'PHOTO 7' },
        { src: 'https://via.placeholder.com/456x310?text=PHOTO+8', caption: 'PHOTO 8' },
        { src: 'https://via.placeholder.com/456x310?text=PHOTO+9', caption: 'PHOTO 9' },
        { src: 'https://via.placeholder.com/456x310?text=PHOTO+10', caption: 'PHOTO 10' }
    ]
    // Add more photo sets if needed
];

let currentSetIndex = 0;

// Function to update all photo displays and captions
function updatePhotos() {
    for (let i = 0; i < 5; i++) {
        document.getElementById(`photo-display-${i+1}`).style.background = `url(${photos[currentSetIndex][i].src})`;
        document.getElementById(`photo-display-${i+1}`).style.backgroundSize = 'cover';
        document.getElementById(`photo-caption-${i+1}`).textContent = photos[currentSetIndex][i].caption;
    }
}

// Event listener for the "Next" button
document.getElementById('next-btn').addEventListener('click', () => {
    // Increment the current set of photos, and loop back to the first set when done
    currentSetIndex = (currentSetIndex + 1) % photos.length;
    updatePhotos(); // Update all photos on button click
});

// Initial load
updatePhotos();


// Define an array of photo elements with their respective captions
// const photos = [
//     {
//         displayId: 'photo-display-1',
//         captionId: 'photo-caption-1',
//         background: '#A6A6A6',
//         caption: 'PHOTO 1'
//     },
//     {
//         displayId: 'photo-display-2',
//         captionId: 'photo-caption-2',
//         background: '#B6B6B6',
//         caption: 'PHOTO 2'
//     },
//     {
//         displayId: 'photo-display-3',
//         captionId: 'photo-caption-3',
//         background: '#C6C6C6',
//         caption: 'PHOTO 3'
//     },
//     {
//         displayId: 'photo-display-4',
//         captionId: 'photo-caption-4',
//         background: '#D6D6D6',
//         caption: 'PHOTO 4'
//     },
//     {
//         displayId: 'photo-display-5',
//         captionId: 'photo-caption-5',
//         background: '#E6E6E6',
//         caption: 'PHOTO 5'
//     },
//     {
//         displayId: 'photo-display-6',
//         captionId: 'photo-caption-6',
//         background: '#F6F6F6',
//         caption: 'PHOTO 6'
//     }
// ];

// let currentPhotoIndex = 0;
// const photosPerPage = 3; // Number of photos displayed at once (3)

// // Function to display the current set of photos
// function displayPhotos() {
//     // Hide all photos initially
//     photos.forEach(photo => {
//         document.getElementById(photo.displayId).style.display = 'none';
//         document.getElementById(photo.captionId).style.display = 'none';
//     });

//     // Show the current set of 3 photos
//     for (let i = currentPhotoIndex; i < currentPhotoIndex + photosPerPage; i++) {
//         if (i < photos.length) {  // Ensure we don't go out of bounds
//             const currentPhoto = photos[i];
//             document.getElementById(currentPhoto.displayId).style.display = 'block';
//             document.getElementById(currentPhoto.captionId).style.display = 'block';
//         }
//     }
// }

// // Function to go to the next set of photos
// function nextPhoto() {
//     if (currentPhotoIndex + photosPerPage < photos.length) {
//         currentPhotoIndex += photosPerPage;
//         displayPhotos();
//     }
// }

// // Function to go to the previous set of photos
// function prevPhoto() {
//     if (currentPhotoIndex - photosPerPage >= 0) {
//         currentPhotoIndex -= photosPerPage;
//         displayPhotos();
//     }
// }

// // Initial display of the first 3 photos
// displayPhotos();


  


