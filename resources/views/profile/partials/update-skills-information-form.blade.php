
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Skills Possessed') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Write down the skills you have.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="jenis" :value="__('Your Skill (e.g. Python)')" />
            <x-text-input id="jenis" name="jenis" type="text" class="mt-1 block w-full border border-gray-300 rounded-md" :value="old('jenis', $user->jenis)" required autofocus autocomplete="jenis" />
            <x-input-error class="mt-2" :messages="$errors->get('jenis')" />
        </div>

        <div>
            <x-input-label for="keterangan" :value="__('Skills Information (e.g. Machine learning)')" />
            <x-text-input id="keterangan" name="keterangan" type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2" :value="old('keterangan', $user->keterangan)" required autofocus autocomplete="keterangan" />
            <x-input-error class="mt-2" :messages="$errors->get('keterangan')" />
        </div>
        
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
        <!-- <table class="table table-bordered mt-6">
            <thead>
                <tr>
                    <th>Your Skill</th>
                    <th>Skills Information</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ old('jenis', $user->jenis) }}</td>
                    <td>{{ old('keterangan', $user->keterangan) }}</td>
                </tr>
            </tbody>
        </table> -->
    </form>
</section>



