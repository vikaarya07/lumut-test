<div class="flex justify-end">

    <div x-data="{ open: false }" x-on:keydown.esc.prevent.stop="open = false" class="relative inline-block">

        <button type="button"
            class="inline-flex items-center justify-center gap-2 rounded-lg bg-white px-3 py-2 text-base font-medium leading-5 text-hitam focus:outline-none"
            id="pm-dropdown" aria-haspopup="true" x-bind:aria-expanded="open" x-on:click="open = true">
            <span>{{ $slot }}</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" data-slot="icon"
                class="hi-micro hi-chevron-down inline-block size-6 opacity-80"
                x-bind:class="{
                    'rotate-180': open
                }">
                <path fill-rule="evenodd"
                    d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                    clip-rule="evenodd" />
            </svg>
        </button>

        <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="opacity-0 -translate-y-3" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-3" x-on:click.outside="open = false" role="menu"
            aria-labelledby="pm-dropdown" class="absolute end-0 z-10 mt-2 w-28 origin-top-right rounded-lg shadow-md">
            <div class="divide-y divide-zinc-100 rounded-lg bg-white ring-1 ring-black/5">

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="group flex w-full items-center justify-between gap-2 rounded-lg px-2.5 py-2 text-start text-sm font-medium text-hitam hover:bg-primary/10 hover:text-hitam">
                        <span class="grow">Logout</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20" fill="currentColor"
                            data-slot="icon">
                            <path fill-rule="evenodd"
                                d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd"
                                d="M6 10a.75.75 0 0 1 .75-.75h9.546l-1.048-.943a.75.75 0 1 1 1.004-1.114l2.5 2.25a.75.75 0 0 1 0 1.114l-2.5 2.25a.75.75 0 1 1-1.004-1.114l1.048-.943H6.75A.75.75 0 0 1 6 10Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </form>

            </div>
        </div>

    </div>

</div>
