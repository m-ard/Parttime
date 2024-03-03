<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 mb-5 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>
    
    <div class="w-1/4">
        <img src="{{ asset('assets/img/icon/doyeon braids 2.jpg') }}" alt="profilePhoto" class="w-xs rounded-md border border-gray-300 p-2">
    </div>

    <div>
        <div>
            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('patch')
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full border border-gray-300 rounded-md" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full border border-gray-300 rounded-md" :value="old('email', $user->email)" required autocomplete="username" />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />

                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                            <div>
                                <p class="text-sm mt-2 text-gray-800">
                                    {{ __('Your email address is unverified.') }}

                                    <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        {{ __('Click here to re-send the verification email.') }}
                                    </button>
                                </p>

                                @if (session('status') === 'verification-link-sent')
                                    <p class="mt-2 font-medium text-sm text-green-600">
                                        {{ __('A new verification link has been sent to your email address.') }}
                                    </p>
                                @endif
                            </div>
                        @endif
                    </div>

                    <div>
                        <x-input-label for="ttl" :value="__('Date of Birth')" />
                        <input id="ttl" name="ttl" type="date" class="mt-1 block w-full border border-gray-300 rounded-md" value="{{ old('ttl', $user->ttl ? \Carbon\Carbon::make($user->ttl)->format('Y-m-d') : '') }}" required autofocus autocomplete="{{ old('ttl') ? 'on' : 'off' }}" />
                        <x-input-error class="mt-2" :messages="$errors->get('ttl')" />
                    </div>


                    <div>
                        <x-input-label for="jenis_kelamin" :value="__('Gender')" />
                        <select id="jenis_kelamin" name="jenis_kelamin" class="mt-1 block w-full border border-gray-300 rounded-md" required autofocus>
                            <option value="">Choose Gender</option>
                            <option value="Laki-laki" {{ old('jenis_kelamin', $user->jenis_kelamin) === 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ old('jenis_kelamin', $user->jenis_kelamin) === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        <x-input-error class="mt-2" :messages="$errors->get('jenis_kelamin')" />
                    </div>

                    <div>
                        <x-input-label for="tinggi" :value="__('Height (cm)')" />
                        <x-text-input id="tinggi" name="tinggi" type="double" class="mt-1 block w-full border border-gray-300 rounded-md p-2" :value="old('tinggi', $user->tinggi)" required autofocus autocomplete="tinggi" />
                        <x-input-error class="mt-2" :messages="$errors->get('tinggi')" />
                    </div>

                    <div>
                        <x-input-label for="bb" :value="__('Weight (kg)')" />
                        <x-text-input id="bb" name="bb" type="double" class="mt-1 block w-full border border-gray-300 rounded-md p-2" :value="old('bb', $user->bb)" required autofocus autocomplete="bb" />
                        <x-input-error class="mt-2" :messages="$errors->get('bb')" />
                    </div> 

                    <div>
                        <x-input-label for="agama" :value="__('Religion')" />
                        <select id="agama" name="agama" class="mt-1 block w-full border border-gray-300 rounded-md" required autofocus>
                            <option value="">Choose Religion</option>
                            <option value="Islam" {{ old('agama', $user->agama) === 'Islam' ? 'selected' : '' }}>Islam</option>
                            <option value="Kristen" {{ old('agama', $user->agama) === 'Kristen' ? 'selected' : '' }}>Kristen</option>
                            <option value="Katolik" {{ old('agama', $user->agama) === 'Katolik' ? 'selected' : '' }}>Katolik</option>
                            <option value="Hindu" {{ old('agama', $user->agama) === 'Hindu' ? 'selected' : '' }}>Hindu</option>
                            <option value="Buddha" {{ old('agama', $user->agama) === 'Buddha' ? 'selected' : '' }}>Buddha</option>
                            <option value="Konghucu" {{ old('agama', $user->agama) === 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                            <option value="Lainnya" {{ old('agama', $user->agama) === 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                        </select>
                        <x-input-error class="mt-2" :messages="$errors->get('agama')" />
                    </div>

                    <div>
                        <x-input-label for="kebangsaan" :value="__('Nationality')" />
                        <select id="kebangsaan" name="kebangsaan" class="mt-1 block w-full border border-gray-300 rounded-md" required autofocus>
                            <option value="">Choose Nationality</option>
                            <option value="Warga Negara Indonesia" {{ old('kebangsaan', $user->kebangsaan) === 'Warga Negara Indonesia' ? 'selected' : '' }}>Warga Negara Indonesia</option>
                            <option value="Warga Negara Asing" {{ old('kebangsaan', $user->kebangsaan) === 'Warga Negara Asing' ? 'selected' : '' }}>Warga Negara Asing</option>
                        </select>
                        <x-input-error class="mt-2" :messages="$errors->get('kebangsaan')" />
                    </div>

                    <div>
                        <x-input-label for="status" :value="__('Maritality')" />
                        <select id="status" name="status" class="mt-1 block w-full border border-gray-300 rounded-md" required autofocus>
                            <option value="">Choose Maritality</option>
                            <option value="Sudah Menikah" {{ old('status', $user->status) === 'Sudah Menikah' ? 'selected' : '' }}>Sudah Menikah</option>
                            <option value="Belum Menikah" {{ old('status', $user->status) === 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                        </select>
                        <x-input-error class="mt-2" :messages="$errors->get('status')" />
                    </div>

                    <div>
                        <x-input-label for="alamat" :value="__('Address')" />
                        <textarea id="alamat" name="alamat" class="mt-1 block w-full border border-gray-300 rounded-md" required autofocus autocomplete="address">{{ old('alamat', $user->alamat) }}</textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('alamat')" />
                    </div>

                    <div>
                        <x-input-label for="no_hp" :value="__('Telephone Number')" />
                        <x-text-input id="no_hp" name="no_hp" type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2" :value="old('no_hp', $user->no_hp)" required autofocus autocomplete="no_hp" />
                        <x-input-error class="mt-2" :messages="$errors->get('no_hp')" />
                    </div>

                    <div>
                        <x-input-label ifor="image" :value="__('Profile Image (Max. 2MB)')" />
                        <div class="flex items-center mt-1">
                            <x-input-file id="image" name="image" class="mt-1 block w-full border border-gray-300 rounded-md p-2" :value="old('image')" />
                        </div>
                        <x-input-error class="mt-2" :messages="$errors->get('image')" />
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
            
            
        </div>
</section>




