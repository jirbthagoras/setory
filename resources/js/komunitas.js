document.getElementById("send-button").addEventListener("click", () => {
    const messageInput = document.getElementById("message-input");
    const message = messageInput.value.trim();
    if (message) {
        const chatContainer = document.getElementById("chat-container");

        // Membuat elemen baru untuk pesan Anda
        const chatItem = document.createElement("div");
        chatItem.className = "flex justify-end mb-4";

        chatItem.innerHTML = `
        <div class="bg-primary border-1 ring-secondary p-4 rounded-lg shadow max-w-[75%] text-white break-words">
          <h2 class="font-semibold mb-1 text-right">Anda</h2>
          <p>${message}</p>
        </div>
        <img src="https://via.placeholder.com/50" alt="Anda" class="w-12 h-12 rounded-full ml-4" />
      `;

        // Menambahkan pesan ke container
        chatContainer.appendChild(chatItem);

        // Scroll otomatis ke bawah ketika ada pesan baru
        chatContainer.scrollTop = chatContainer.scrollHeight;

        // Reset input
        messageInput.value = "";
    }
});
