<div class="m-auto max-w-full lg:max-w-2xl bg-white border border-zinc-200 rounded-xl space-y-4 shadow-sm">
    <div class="p-6 mb-0">
        <flux:heading size="xl" level="1" class="mb-6 text-zinc-600 font-bold!">
            {{ $title }}
        </flux:heading>

        <div class="w-full lg:w-sm m-auto">
            <div class="mb-6">
                <flux:heading size="lg" level="2" class="text-zinc-400 uppercase mb-2 tracking-widest">
                    To-Do
                </flux:heading>

                <div class="flex flex-col divide-y">
                    @forelse($items as $id => $item)
                        <div wire:key="{{ $id }}" class="flex justify-between border-x-1 border-zinc-300 first:border-t-1 last:border-b-1 first:rounded-t-xl last:rounded-b-xl">
                            <span class="text-zinc-800 py-2 pl-3">{{ $item }}</span>
                            <div class="flex items-center pl-2">
                                <flux:separator vertical class="my-2" />
                                <flux:button
                                    icon="check"
                                    icon:variant="outline"
                                    {{-- Unsure why, but shadow-none! doesn't reset the --tw-shadow, which was still causing a shadow... --}}
                                    class="border-none! rounded-xl! hover:bg-transparent! shadow-none! text-gray-700! cursor-pointer [--tw-shadow:0_0_#0000]"
                                    wire:click="completeItem({{ $id }})"
                                />
                            </div>
                        </div>
                    @empty
                        <flux:text>No to do items</flux:text>
                    @endforelse
                </div>
            </div>

            {{-- Would turn this section, and a few others, into a reusable component in a larger project --}}
            <div>
                <flux:heading size="lg" level="2" class="text-zinc-400 uppercase mb-2 tracking-widest">
                    Completed
                </flux:heading>

                <div class="flex flex-col divide-y">
                    @forelse($completed as $id => $item)
                        <div wire:key="{{ $id }}" class="flex justify-between border-x-1 border-zinc-300 first:border-t-1 last:border-b-1 first:rounded-t-xl last:rounded-b-xl">
                            <span class="text-zinc-500 py-2 pl-3 line-through">{{ $item }}</span>
                            <div class="flex items-center pl-2">
                                <flux:separator vertical class="my-2" />
                                <flux:button
                                    icon="arrow-uturn-left"
                                    icon:variant="outline"
                                    class="border-none! rounded-xl! hover:bg-transparent! shadow-none! text-gray-700! cursor-pointer [--tw-shadow:0_0_#0000]"
                                    wire:click="returnItem({{ $id }})"
                                />
                                <flux:separator vertical class="my-2" />
                                <flux:button
                                    icon="trash"
                                    icon:variant="outline"
                                    class="border-none! rounded-xl! hover:bg-transparent! shadow-none! text-gray-700! cursor-pointer [--tw-shadow:0_0_#0000]"
                                    wire:click="deleteItem({{ $id }})"
                                />
                            </div>
                        </div>
                    @empty
                        <flux:text>No completed items</flux:text>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <div class="w-full bg-zinc-100 p-6 flex rounded-b-xl">
        <flux:button.group class="w-full">
            <flux:field class="w-full">
                <flux:input
                    type="text"
                    placeholder="Add Item..."
                    wire:model="newItem"
                    wire:keydown.enter="addItem"
                />
            </flux:field>
            <flux:button
                icon="plus"
                wire:click="addItem"
                class="px-3! bg-zinc-50! hover:bg-zinc-100! text-zinc-500! cursor-pointer"
            >
                Add
            </flux:button>
        </flux:button.group>
    </div>
</div>
