<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Chatbot button styles */
        .chatbot-button {
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            font-size: 24px;
            text-align: center;
            cursor: pointer;
            position: fixed;
            bottom: 20px;
            right: 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 999;
            transition: background-color 0.3s, color 0.3s; /* Smooth transition */
            
        }

        .chatbot-icon {
            line-height: 60px;
        }

        /* Add the font-weight property for Font Awesome icons */
        label i,
        button i,
        a i {
            font-weight: 900;
        }

        /* Styles for the hover content */
        .hover-content {
            display: none;
            position: absolute;
            bottom: 65px; /* Adjust the positioning as needed */
            left: 50%;
            transform: translateX(-50%);
            background-color: #007BFF;
            color: white;
            padding: 10px 20px; /* Increased padding */
            border-radius: 12px; /* Rounded corners */
            font-size: 12px; /* Larger font size */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Enhanced box shadow */
        }

        /* Hover effect */
        .chatbot-button:hover .hover-content {
            display: block;
        }

        /* Hover effect for button */
        .chatbot-button:hover {
            background-color: #0056b3;
        }

        /* Close button styles */
        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            color: red; /* Red color for the close button */
            font-size: 24px; /* Larger font size for better visibility */
            z-index: 1001; /* Ensure the close button is on top of the modal */
        }

        /* Chatbot modal styles */
        .chatbot-modal {
            display: none;
            opacity: 0;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
            transition: opacity 0.3s ease;
        }

        .chatbot-content {
            background-color: white;
            width: 80%; /* Adjust the width as needed */
            max-width: 400px; /* Set a maximum width for the content */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
<button class="chatbot-button" id="chatbot-button">
    <span class="chatbot-icon">🤖</span>
    <div class="hover-content">
        Chatbot/Ask Me
    </div>
</button>

<!-- Chatbot modal content (hidden by default) -->
<div id="chatbot-modal" class="chatbot-modal">
    <div class="chatbot-content">
           <!-- Close button -->
           <span class="close-button" id="close-button" aria-label="Close Chatbot">×</span>
        
        <!-- Chatbot content goes here -->
        <iframe src="admin/chatbot/chatbot.php" width="100%" height="400"></iframe>
    </div>
</div>

<script>
    const chatbotButton = document.getElementById("chatbot-button");
    const chatbotModal = document.getElementById("chatbot-modal");
    const closeButton = document.getElementById("close-button");

    chatbotButton.addEventListener("mouseover", () => {
        chatbotButton.style.zIndex = "1000"; // Bring the button to the front
    });

    chatbotButton.addEventListener("mouseout", () => {
        chatbotButton.style.zIndex = "999"; // Restore the button's z-index
    });

    chatbotButton.addEventListener("click", () => {
        // Show the chatbot modal with a fade-in effect
        chatbotModal.style.opacity = "1";
        chatbotModal.style.display = "flex";
    });

    closeButton.addEventListener("click", () => {
        // Close the chatbot modal with a fade-out effect
        chatbotModal.style.opacity = "0";
        setTimeout(() => {
            chatbotModal.style.display = "none";
        }, 300); // Wait for the fade-out animation to complete
    });

    // Close the chatbot modal when the modal background is clicked
    chatbotModal.addEventListener("click", (event) => {
        if (event.target === chatbotModal) {
            // Close the modal with a fade-out effect
            chatbotModal.style.opacity = "0";
            setTimeout(() => {
                chatbotModal.style.display = "none";
            }, 300); // Wait for the fade-out animation to complete
        }
    });

    // Close the chatbot modal when the Esc key is pressed
    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape") {
            // Close the modal with a fade-out effect
            chatbotModal.style.opacity = "0";
            setTimeout(() => {
                chatbotModal.style.display = "none";
            }, 300); // Wait for the fade-out animation to complete
        }
    });
</script>

</body>
</html>
