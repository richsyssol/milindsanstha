
//  gallary filter script 
document.addEventListener('DOMContentLoaded', () => {
        const sortBtns = document.querySelectorAll('.filter-menu a');
        const sortItems = document.querySelectorAll('.filter-item .col-md-3');
        
        // Filter functionality
        sortBtns.forEach(btn => {
            btn.addEventListener('click', function(event) {
                event.preventDefault();
                
                sortBtns.forEach(btn => btn.classList.remove('current'));
                this.classList.add('current');
                
                const targetData = this.getAttribute('data-target');
                
                sortItems.forEach(item => {
                    const itemData = item.getAttribute('data-item');
                    if (targetData === 'all' || itemData === targetData) {
                        item.classList.remove('delete');
                        item.classList.add('active');
                    } else {
                        item.classList.remove('active');
                        item.classList.add('delete');
                    }
                });
            });
        });

        // Modal functionality for opening images
        const modal = new bootstrap.Modal(document.getElementById('imageModal'));
        const modalImage = document.getElementById('modalImage');
        const galleryImages = document.querySelectorAll('.open-modal');

        galleryImages.forEach(image => {
            image.addEventListener('click', () => {
                modalImage.src = image.src;
                modal.show();
            });
        });
    });
    


// our volunteer auto scroll script
   $(document).ready(function () {
    $('.team-carousel').owlCarousel({
        items: 5,
        loop: false,
        margin: 10,
        nav: true,
        navText: ["<i class='icofont-bubble-left'></i>", "<i class='icofont-bubble-right'></i>"],
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 5
            }
        }
    });



// testimonial auto scroll script
    $('.testimonial-carousel').owlCarousel({
        items: 1,
        loop: false,
        margin: 10,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 4000
    });
});


// video model script
document.addEventListener('DOMContentLoaded', function () {
    var videoModal = document.getElementById('videoModal');
    var modalVideo = document.getElementById('modalVideo');

    videoModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget; // Button that triggered the modal
        var videoSrc = button.getAttribute('data-bs-video'); // Extract video src from data-bs-video attribute
        modalVideo.src = videoSrc; // Set the video source in the modal
    });

    videoModal.addEventListener('hidden.bs.modal', function () {
        modalVideo.src = ''; // Stop the video when the modal is hidden
    });
});

// form selection script 
const paymentMethodSelect = document.getElementById('payment-method');
const paymentDetailsDiv = document.getElementById('payment-details');

// Add a listener to the select input to detect changes
paymentMethodSelect.addEventListener('change', () => {
  const selectedPaymentMethod = paymentMethodSelect.value;

  if (selectedPaymentMethod === '1') {
    // Display bank details
    paymentDetailsDiv.innerHTML = `
      <h2>Bank Details</h2>
      <p>Account Number: 1234567890</p>
      <p>IFSC Code: ABCD1234</p>
      <p>Bank Name: XYZ Bank</p>
    `;
  } else if (selectedPaymentMethod === '2') {
    // Display UPI QR code
    paymentDetailsDiv.innerHTML = `
      <h2>UPI ID</h2>
      <P>Njjbs457512</p>
    `;
  } else {
    // Clear details if no valid option is selected
    paymentDetailsDiv.innerHTML = '';
  }
});



