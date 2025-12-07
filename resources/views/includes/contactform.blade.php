<div class="isolate bg-gray-900 px-6 py-24 sm:py-32 lg:px-8">
    <div aria-hidden="true" class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
        <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="relative left-1/2 -z-10 aspect-1155/678 w-144.5 max-w-none -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-40rem)] sm:w-288.75"></div>
    </div>
    <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-4xl font-semibold tracking-tight text-balance text-white sm:text-5xl">Страница контактов</h2>
        <p class="mt-2 text-lg/8 text-gray-400">Страница для оставления контактов.</p>
    </div>


    <form action="{{ route('contacts.post') }}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
        @csrf
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
            <div>
                <label for="name" class="block text-sm/6 font-semibold text-white">{{ __('Name') }}</label>
                <div class="mt-2.5">
                    <input id="name" type="text" name="name" placeholder="{{ __('Input name') }}" value="{{ old('name') }}" autocomplete="given-name" class="block w-full rounded-md bg-white/5 px-3.5 py-2 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500" />
                </div>
            </div>
            <div>
                <label for="email" class="block text-sm/6 font-semibold text-white">{{ __('e-mail') }}</label>
                <div class="mt-2.5">
                    <input id="email" type="email" name="email" placeholder="{{ __('Input e-mail') }}" value="{{ old('email') }}" autocomplete="email" class="block w-full rounded-md bg-white/5 px-3.5 py-2 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500" />
                </div>
            </div>
            <div>
                <label for="subject" class="block text-sm/6 font-semibold text-white">{{ __('Subject message') }}</label>
                <div class="mt-2.5">
                    <input id="subject" type="text" name="subject" placeholder="{{ __('Input subject message') }}" value="{{ old('subject') }}" class="block w-full rounded-md bg-white/5 px-3.5 py-2 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500" />
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="message" class="block text-sm/6 font-semibold text-white">{{ __('Message') }}</label>
                <div class="mt-2.5">
                    <textarea id="message" name="message" rows="4" placeholder="{{ __('Input message') }}" class="block w-full rounded-md bg-white/5 px-3.5 py-2 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500">{{ old('message') }}</textarea>
                </div>
            </div>

        </div>
        <div class="mt-10">
            <button type="submit" class="block w-full rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">{{ __('Submit') }}</button>
        </div>
    </form>
</div>
