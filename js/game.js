var emojiElements = document.getElementById("element2");
        var emojisInitial = "😎";
        var emojiCount = 5;
        
        function addEmojis(){
        for (var i = 0; i < emojiCount; i++){
        var newEmoji = document.createElement("p");
        newEmoji.innerText = "😎";
        emojiElements.appendChild(newEmoji);
            
        }
        emojiCount += 5;
        }
        
        addEmojis();
        
        setInterval(addEmojis,5000);