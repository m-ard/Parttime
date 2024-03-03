
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Activity Experience') }}
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
            <x-input-label for="kegiatan" :value="__('Activity (e.g. UI/UX Workshop)')" />
            <x-text-input id="kegiatan" name="kegiatan" type="text" class="mt-1 block w-full border border-gray-300 rounded-md" :value="old('kegiatan', $user->kegiatan)" required autofocus autocomplete="kegiatan" />
            <x-input-error class="mt-2" :messages="$errors->get('kegiatan')" />
        </div>

        <div>
            <x-input-label for="tahun" :value="__('Year')" />
            <select id="tahun" name="tahun" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required autofocus>
                <option value="" disabled selected>Select Year</option>
                @php
                    $currentYear = date('Y');
                    $startYear = $currentYear - 100; // Adjust this if you want to change the range
                @endphp
                @for ($year = $currentYear; $year >= $startYear; $year--)
                    <option value="{{ $year }}" {{ old('tahun', $user->tahun) == $year ? 'selected' : '' }}>
                        {{ $year }}
                    </option>
                @endfor
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('tahun')" />
        </div>

        <div>
            <x-input-label for="keterangan" :value="__('Information')" />
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
    </form>
</section>


