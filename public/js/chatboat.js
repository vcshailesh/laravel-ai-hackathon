const chatInput = $("#chat-input");
const sendButton = $("#send-btn");
const chatContainer = $(".chat-container");
const themeButton = $("#theme-btn");


let userText = '';

// Function to load chat history and theme from local storage
const loadDataFromLocalstorage = () => {
    const themeColor = localStorage.getItem("themeColor");
    $("body").toggleClass("light-mode", themeColor === "light_mode");
    themeButton.text($("body").hasClass("light-mode") ? "dark_mode" : "light_mode");

    const defaultText = `<div class="default-text">
                          <h1>${chatboatName}</h1>
                          <p>Start a conversation and explore the power of AI</p>
                      </div>`;

    chatContainer.html(localStorage.getItem("all-chats") || defaultText);
    chatContainer.scrollTop(chatContainer[0].scrollHeight);
}

// Function to create a chat element
const createChatElement = (content, className) => {
    const chatDiv = $("<div>").addClass("chat").addClass(className).html(content);
    return chatDiv;
}

// Function to get chat response from the API
const getChatResponse = async (incomingChatDiv) => {
    const pElement = $("<p class='api_response'>");

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    var data = {
        'userText': userText
    };
    $.ajax({
        method: 'POST',
        url: chatbotUrl,
        data: data,
        success: function (response) {
            console.log(response);
            pElement.html(response);
            incomingChatDiv.find(".typing-animation").remove();
            incomingChatDiv.find(".chat-details").append(pElement);
            localStorage.setItem("all-chats", chatContainer.html());
            chatContainer.scrollTop(chatContainer[0].scrollHeight);
        },
        error: function (response) {
            console.log(response);
            pElement.addClass("error").text("Oops! Something went wrong while retrieving the response. Please try again.");
        }
    });
}

// Function to copy the response text to the clipboard
const copyResponse = (copyBtn) => {
    const responseTextElement = $(copyBtn).parent().find("p");
    navigator.clipboard.writeText(responseTextElement.text());
    $(copyBtn).text("done");
    setTimeout(() => $(copyBtn).text("content_copy"), 1000);
}

// Function to show typing animation and get the chat response
const showTypingAnimation = () => {
    const html = `<div class="chat-content">
                  <div class="chat-details">
                      ${botImage}
                      <div class="typing-animation">
                          <div class="typing-dot" style="--delay: 0.2s"></div>
                          <div class="typing-dot" style="--delay: 0.3s"></div>
                          <div class="typing-dot" style="--delay: 0.4s"></div>
                      </div>
                  </div>
                  <div>
                    <button onclick="listen(this)" class="flex ml-auto mt-2 gap-2"><svg xmlns="http://www.w3.org/2000/svg" stroke="currentColor" fill="none" stroke-width="1" viewBox="0 0 24 24" width="15" height="15"><path d="M20.807,4.29a1,1,0,0,0-1.415,1.415,8.913,8.913,0,0,1,0,12.59,1,1,0,0,0,1.415,1.415A10.916,10.916,0,0,0,20.807,4.29Z"></path><path d="M18.1,7.291A1,1,0,0,0,16.68,8.706a4.662,4.662,0,0,1,0,6.588A1,1,0,0,0,18.1,16.709,6.666,6.666,0,0,0,18.1,7.291Z"></path><path d="M13.82.2A12.054,12.054,0,0,0,6.266,5H5a5.008,5.008,0,0,0-5,5v4a5.008,5.008,0,0,0,5,5H6.266A12.059,12.059,0,0,0,13.82,23.8a.917.917,0,0,0,.181.017,1,1,0,0,0,1-1V1.186A1,1,0,0,0,13.82.2ZM13,21.535a10.083,10.083,0,0,1-5.371-4.08A1,1,0,0,0,6.792,17H5a3,3,0,0,1-3-3V10A3,3,0,0,1,5,7h1.8a1,1,0,0,0,.837-.453A10.079,10.079,0,0,1,13,2.465Z"></path></svg>
                    </svg></button>
                  </div>
              </div>`;

    const incomingChatDiv = createChatElement(html, "incoming");
    chatContainer.append(incomingChatDiv);
    chatContainer.scrollTop(chatContainer[0].scrollHeight);
    getChatResponse(incomingChatDiv);
}

// Function to handle the outgoing chat message
const handleOutgoingChat = () => {
    userText = chatInput.val().trim();
    if (!userText) return;

    chatInput.val("");
    chatInput.css("height", `${initialInputHeight}px`);

    const html = `<div class="chat-content">
                  <div class="chat-details">
                  ${userImage}
                      <p>${userText}</p>
                  </div>
              </div>`;

    chatContainer.find(".default-text")?.remove();
    const outgoingChatDiv = createChatElement(html, "outgoing");
    chatContainer.append(outgoingChatDiv);
    chatContainer.scrollTop(chatContainer[0].scrollHeight);
    setTimeout(showTypingAnimation(), 500);
}


// Event listener for theme button
themeButton.on("click", () => {
    $("body").toggleClass("light-mode");
    localStorage.setItem("themeColor", themeButton.text());
    themeButton.text($("body").hasClass("light-mode") ? "dark_mode" : "light_mode");
});

const initialInputHeight = chatInput[0].scrollHeight;

// Event listener for input changes
chatInput.on("input", () => {
    chatInput.css("height", `${initialInputHeight}px`);
    chatInput.css("height", `${chatInput[0].scrollHeight}px`);
});

// Event listener for keydown events on the input field
chatInput.on("keydown", (e) => {
    if (e.key === "Enter" && !e.shiftKey && window.innerWidth > 800) {
        e.preventDefault();
        handleOutgoingChat();
    }
});

// Load chat history and theme from local storage
loadDataFromLocalstorage();

// Event listener for send button
sendButton.on("click", handleOutgoingChat);

function copyToClipboard(button) {
    /* Get the text from the input field */
    var text = button.parentElement.parentElement.querySelector('.api_response').textContent
    /* Create a temporary input element */
    var tempInput = document.createElement("input");
    tempInput.setAttribute("value", text);
    /* Append the input element to the HTML body */
    document.body.appendChild(tempInput);
    /* Select the text inside the input element */
    tempInput.select();
    tempInput.setSelectionRange(0, 99999); /* For mobile devices */
    /* Copy the selected text to the clipboard */
    document.execCommand("copy");
    /* Remove the temporary input element from the HTML body */
    document.body.removeChild(tempInput);
    /* Optionally, provide feedback to the user */
    toastr.success("Text copied to clipboard!");
}

function listen(button) {
    /* Get the text from the input field */
    var responseText = button.parentElement.parentElement.querySelector('.api_response').textContent
    var data = {
        'responseText': responseText
    };
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: 'POST',
        url: listenResponseUrl,
        data: data,
        success: function (response) {
            console.log(response);
            var audioPath = response;

            $("#myAudio").attr('src', audioPath);

            var audio = $("#myAudio")[0];
            audio.play();

            $("#playButton").click(function () {
                audio.play(); // Play the audio
            });

            $("#pauseButton").click(function () {
                audio.pause(); // Pause the audio
            });
        },
        error: function (response) {
            console.log(response);
            pElement.addClass("error").text("Oops! Something went wrong while retrieving the response. Please try again.");
        }
    });
}


