<div class="flex items-center flex-col lg:w-full w-1/2">
    @if ($uploadImage)
        <div class="w-48 h-48 overflow-hidden rounded-sm">
            <img src="{{ $uploadImage->temporaryUrl() }}" alt="" class="w-full h-full object-cover">
        </div>
    @else
        <div class="w-48 h-48 overflow-hidden rounded-sm">
            @if (request()->input('gender') == 'female')
                <img src="{{ asset('storage/images/profile-female.png') }}" alt=""
                    class="w-full h-full object-cover">
            @else
                <img src="{{ asset('storage/images/profile-male.png') }}" alt=""
                    class="w-full h-full object-cover">
            @endif

        </div>
    @endif
    <div class="flex flex-col w-full tooltip tooltip-bottom text-end mt-2 transition" data-tip="User Your Profile" id="ui">
        <input type="file" wire:model="uploadImage" id=""
            class="file-input file-input-ghost border border-border bg-border file-input-sm rounded focus:outline-none">
    </div>
</div>
