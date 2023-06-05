@props([
    'actions',
    'button' => false,
    'color' => null,
    'darkMode' => false,
    'icon' => 'heroicon-o-dots-vertical',
    'iconPosition' => null,
    'label' => __('filament-support::actions/group.trigger.label'),
    'outlined' => null,
    'size' => null,
    'tooltip' => null,
])

<x-filament-support::dropdown
    :dark-mode="$darkMode"
    placement="bottom-end"
    teleport
    {{ $attributes }}
>
    <x-slot name="trigger">
        @if($button)
            <x-filament-support::button
                :color="$color"
                :dark-mode="$darkMode"
                :icon="$icon"
                :size="$size"
                :tooltip="$tooltip"
            >
                {{ $label }}
            </x-filament-support::button>
        @else
            <x-filament-support::icon-button
                :color="$color"
                :dark-mode="$darkMode"
                :icon="$icon"
                :size="$size"
                :tooltip="$tooltip"
            >
                <x-slot name="label">
                    {{ $label }}
                </x-slot>
            </x-filament-support::icon-button>
        @endif
    </x-slot>

    <x-filament-support::dropdown.list>
        @foreach ($actions as $action)
            @if (! $action->isHidden())
                {{ $action }}
            @endif
        @endforeach
    </x-filament-support::dropdown.list>
</x-filament-support::dropdown>
