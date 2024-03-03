
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Employment History') }}
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
            <x-input-label for="nama_sekolah" :value="__('Companies Name')" />
            <x-text-input id="nama_sekolah" name="nama_sekolah" type="text" class="mt-1 block w-full border border-gray-300 rounded-md" :value="old('nama_sekolah', $user->nama_sekolah)" required autofocus autocomplete="nama_sekolah" />
            <x-input-error class="mt-2" :messages="$errors->get('nama_sekolah')" />
        </div>

        <div>
            <x-input-label for="tingkatan" :value="__('Position')" />
            <x-text-input id="tingkatan" name="tingkatan" type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2" :value="old('tingkatan', $user->tingkatan)" required autofocus autocomplete="keterangan" />
            <x-input-error class="mt-2" :messages="$errors->get('tingkatan')" />
        </div>

        <div>
            <x-input-label for="tahun_masuk" :value="__('Entry Year')" />
            <select id="tahun_masuk" name="tahun_masuk" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required autofocus>
                <option value="" disabled selected>Select Year</option>
                @php
                    $currentYear = date('Y');
                    $startYear = $currentYear - 100; // Adjust this if you want to change the range
                @endphp
                @for ($year = $currentYear; $year >= $startYear; $year--)
                    <option value="{{ $year }}" {{ old('tahun_masuk', $user->tahun_masuk) == $year ? 'selected' : '' }}>
                        {{ $year }}
                    </option>
                @endfor
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('tahun_masuk')" />
        </div>

        <div>
            <x-input-label for="tahun_keluar" :value="__('Departure Year')" />
            <select id="tahun_keluar" name="tahun_keluar" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required autofocus>
                <option value="" disabled selected>Select Year</option>
                @php
                    $currentYear = date('Y');
                    $startYear = $currentYear - 100; // Adjust this if you want to change the range
                @endphp
                @for ($year = $currentYear; $year >= $startYear; $year--)
                    <option value="{{ $year }}" {{ old('tahun_keluar', $user->tahun_keluar) == $year ? 'selected' : '' }}>
                        {{ $year }}
                    </option>
                @endfor
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('tahun_keluar')" />
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


