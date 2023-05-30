<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Avatar') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Create or update your Avatar.") }}
        </p>

        <p>
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </p>
    </header>

    <!-- <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form> -->



    
    <form action="{{ route('profile.avatar') }}" method="post">
        @method('patch')
        @csrf

        <div>
            <x-input-label for="avatar"  />
            <x-text-input id="avatar" name="avatar" type="file" class="mt-1 block w-full"   />
        </div>

        <div class="flex items-center gap-4 mt-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>

        

        
    
</section>
