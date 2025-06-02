<div class="m-auto max-w-full lg:max-w-2xl bg-white border border-zinc-200 rounded-xl space-y-4 shadow-sm">
    <div class="p-6">
        <flux:heading size="xl" level="1" class="mb-6">
            <strong>{{ $title }}</strong>
        </flux:heading>

        <div class="w-full lg:w-sm m-auto">
            <div class="mb-6">
                <flux:heading size="lg" level="2" class="text-zinc-400 uppercase mb-2 tracking-widest">
                    To-Do
                </flux:heading>

                <div class="flex flex-col divide-y">
                    @foreach($items as $item)
                        @if(!$item['completed'])
                            <div class="flex justify-between border-x-1 border-zinc-300 first:border-t-1 last:border-b-1 first:rounded-t-xl last:rounded-b-xl">
                                <span class="text-zinc-800 py-2 pl-3">{{ $item['title'] }}</span>
                                <div class="flex">
                                    <flux:separator vertical class="my-2" />
                                    <flux:button icon="check" icon:variant="outline" class="border-none! rounded-xl! hover:bg-transparent! shadow-none! text-gray-700!" />
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- Would turn this section, and a few others, into a reusable component in a larger project --}}
            <div>
                <flux:heading size="lg" level="2" class="text-zinc-400 uppercase mb-2 tracking-widest">
                    Completed
                </flux:heading>

                <div class="flex flex-col divide-y">
                    @foreach($items as $item)
                        @if($item['completed'])
                            <div class="flex justify-between border-x-1 border-zinc-300 first:border-t-1 last:border-b-1 first:rounded-t-xl last:rounded-b-xl">
                                <span class="text-zinc-500 py-2 pl-3 line-through">{{ $item['title'] }}</span>
                                <div class="flex">
                                    <flux:separator vertical class="my-2" />
                                    <flux:button icon="arrow-uturn-left" icon:variant="outline" class="border-none! rounded-xl! hover:bg-transparent! shadow-none! text-gray-700!" />
                                    <flux:separator vertical class="my-2" />
                                    <flux:button icon="trash" icon:variant="outline" class="border-none! rounded-xl! hover:bg-transparent! shadow-none! text-gray-700!" />
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="w-full bg-zinc-100 p-6 flex">
        <flux:button.group class="w-full">
            <flux:field class="w-full">
                <flux:input type="text"  placeholder="Add Item..."/>
            </flux:field>
            <flux:button icon="plus" class="px-3! bg-zinc-50! hover:bg-zinc-100! text-zinc-500!">
                Add
            </flux:button>
        </flux:button.group>
    </div>
</div>
