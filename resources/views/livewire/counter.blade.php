<div class="w-1/2 m-auto text-center">
    <p class="text-2xl p-3">{{ $points }}</p>
    <button class="w-1/2 bg-green-300 rounded-lg" wire:click='increment'>+{{ $increment }}</button>
    <button class="w-1/4 bg-amber-300 rounded-lg" wire:click='upgradeIncrement'>Upgrade ({{ $cost }})</button>
</div>
