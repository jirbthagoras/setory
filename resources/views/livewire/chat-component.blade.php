<div>
<div wire:poll.1000ms
     id="chat-container" class="bg-primary mx-auto mt-10 p-4 rounded-lg shadow-lg h-[70vh] overflow-y-auto">
    <!-- Contoh Pesan Orang Lain -->

    @foreach($messages as $message)
        @isset($message->chat)

            <div class="flex space-x-4 mb-4"
                 wire:click="reply({{$message->id}})"
                 wire:key="{{$message->id}}">
                <img src="https://via.placeholder.com/50" alt="Erlangga" class="w-12 h-12 rounded-full" />
                <div class="dark:bg-white/5 p-4 rounded-lg shadow max-w-[75%] break-words">
                    <h2 class="font-semibold">{{auth()->id() == $message->user->id ? "You" : $message->user->name}}</h2>
                    <p>
                        {{$message->message}}
                    </p>

                    <div class="mt-2 ml-4 border-l-2 border-gray-300 pl-3">
                        <div class="flex items-center space-x-2 mb-1">
                            <img src="https://via.placeholder.com/30" alt="Reply User" class="w-6 h-6 rounded-full" />
                            <span class="text-xs font-medium text-gray-400">{{$message->chat->user->name}}</span>
                        </div>
                        <p class="text-sm text-gray-300">{{$message->chat->message}}</p>
                    </div>

                    <p class="text-[10px] mt-[5px]">
                        {{$message->created_at}}
                    </p>
                </div>
            </div>
        @else
            <div class="flex space-x-4 mb-4"
                 wire:click="reply({{$message->id}})"
                 wire:key="{{$message->id}}">
                <img src="https://via.placeholder.com/50" alt="Erlangga" class="w-12 h-12 rounded-full" />
                <div class="dark:bg-white/5 p-4 rounded-lg shadow max-w-[75%] break-words">
                    <h2 class="font-semibold">{{$message->user->name}}</h2>
                    <p>
                        {{$message->message}}
                    </p>
                    <p class="text-[10px] mt-[5px]">
                        {{$message->created_at}}
                    </p>
                </div>
            </div>
        @endif
    @endforeach
</div>

<div class="flex items-center bg-[#1E1007CC] mt-4 rounded-xl p-4 shadow-lg w-full mx-auto">
    <div class="relative w-full max-w-2xl mx-auto">
    <textarea wire:model="text"
              id="message-input"
              cols="40"
              rows="1"
              class="flex-grow bg-transparent text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 px-4 py-2 rounded-lg w-full resize-vertical shadow-md"
              placeholder="{{isset($reply) ? 'Replying to ' . $reply->user->name . ': ' . $reply->message : 'Write your message here...'}}"
              aria-label="Community message input"
    ></textarea>
    </div>

    <!-- Send Button -->
    @isset($replyId)
        <button
            wire:click="sendReply"
            id="send-button"
            class="bg-[#c59976] text-white w-10 h-10 rounded-full flex items-center justify-center ml-2 hover:bg-[#af8365] transition"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-6.518-4.824a1 1 0 00-1.492.846v9.656a1 1 0 001.492.846l6.518-4.824a1 1 0 000-1.692z" />
            </svg>
        </button>
    @else
        <button
        wire:click="sendMessage"
        id="send-button"
        class="bg-[#c59976] text-white w-10 h-10 rounded-full flex items-center justify-center ml-2 hover:bg-[#af8365] transition"
    >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-6.518-4.824a1 1 0 00-1.492.846v9.656a1 1 0 001.492.846l6.518-4.824a1 1 0 000-1.692z" />
        </svg>
    </button>
    @endisset
</div>

</div>
