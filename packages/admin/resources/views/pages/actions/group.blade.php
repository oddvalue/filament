<x-filament-support::actions.group
    :actions="$getActions()"
    :button="$isButton()"
    :dark-mode="config('filament.dark_mode')"
    :color="$getColor()"
    :icon="$getIcon()"
    :iconPosition="$getIconPosition()"
    :outlined="$isOutlined()"
    :label="$getLabel()"
    :size="$getSize()"
    :tooltip="$getTooltip()"
/>
