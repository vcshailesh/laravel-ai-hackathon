@extends('frontend.layouts.app')


@push('after-styles')
    <style>
        .typing-content .form-group {
            padding: 0 10px;
            margin: 0;
            flex: 1 1 0;
            width: auto;
        }

        .typing-textarea {
            max-width: 90%;
        }

        .typing-controls {
            max-width: 10%;
        }
    </style>
@endpush

@section('content')
    <div class="mx-auto h-100 rounded" style="margin-top: 100px">
        <div class="chat-container overflow-y-scroll w-100 h-[calc(100vh-235px)]"></div>
        <div class="typing-container relative d-flex">
            <div class="typing-content">
                <div class="typing-textarea form-group">
                    <textarea id="chat-input" spellcheck="false" placeholder="Enter a prompt here" required></textarea>
                    <span id="send-btn" class=" bg-gray-500 text-white hover:text-white material-symbols-rounded"><svg
                            xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                            <path
                                d="M16.1 260.2c-22.6 12.9-20.5 47.3 3.6 57.3L160 376V479.3c0 18.1 14.6 32.7 32.7 32.7c9.7 0 18.9-4.3 25.1-11.8l62-74.3 123.9 51.6c18.9 7.9 40.8-4.5 43.9-24.7l64-416c1.9-12.1-3.4-24.3-13.5-31.2s-23.3-7.5-34-1.4l-448 256zm52.1 25.5L409.7 90.6 190.1 336l1.2 1L68.2 285.7zM403.3 425.4L236.7 355.9 450.8 116.6 403.3 425.4z" />
                        </svg></span>
                    <audio id="myAudio"></audio>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('after-scripts')
    <script>
        let userImage = '<img src="{{ asset('images/web/user.svg') }}" alt="user-img">';
        let botImage = '<img src="{{ asset('images/web/boat.svg') }}" alt="chatbot-img">';
        let chatboatName = "{{ config('app.name') }}";
        let chatbotUrl = "{{ route('chatbot') }}"
        let listenResponseUrl = "{{ route('listen') }}"
    </script>
    <script src="{{ asset('js/chatboat.js') }}"></script>
@endsection
