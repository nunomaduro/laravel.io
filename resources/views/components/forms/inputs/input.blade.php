<div>
    <div class="relative">
        @if ($attributes->get('prefix-icon'))
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                @svg($attributes->get('prefix-icon'), ['class' => 'h-5 w-5 text-gray-400'])
            </div>
        @endif

        <input
            name="{{ $name }}"
            type="{{ $type }}"
            id="{{ $id }}"
            value="{{ $value ?: '' }}"
            {{
                $attributes->merge([
                    'class' => 'block w-full border-gray-300 rounded-md focus:border-lio-300 focus:ring focus:ring-lio-200 focus:ring-opacity-50 sm:text-sm sm:leading-5 mt-1'.($attributes->get('prefix-icon') ? ' pl-10' : '').($errors->has($name) ? ' border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500' : ''),
                ])
            }}
        />

        @if ($errors->has($name))
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                <x-heroicon-o-exclamation-circle class="h-5 w-5 text-red-500" />
            </div>
        @endif
    </div>

    @if ($errors->has($name))
        @foreach ($errors->get($name) as $error)
            <x-forms.error>
                {{ $error }}
            </x-forms.error>
        @endforeach
    @endif
</div>
