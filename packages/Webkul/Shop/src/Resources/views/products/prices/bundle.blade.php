<div class="grid gap-[5px]">
    @if ($prices['from']['regular']['price'] != $prices['from']['final']['price'])
        <p class="flex gap-[15px] items-center max-sm:text-[18px]">
            <span
                class="text-[#6E6E6E] line-through max-sm:text-[15px]"
                aria-label="{{ $prices['from']['regular']['formatted_price'] }}"
            >
                {{ $prices['from']['regular']['formatted_price'] }}
            </span>
            
            {{ $prices['from']['final']['formatted_price'] }}
        </p>
        
    @else
        
        <p class="flex gap-[15px] items-center max-sm:text-[18px]">
            <!--<a class="text-[14px] text-[#6E6E6E]">Mulai dari</a>-->
            {{ $prices['from']['regular']['formatted_price'] }}
        </p>
    @endif

    @if (
        $prices['from']['regular']['price'] != $prices['to']['regular']['price']
        || $prices['from']['final']['price'] != $prices['to']['final']['price']
    )
        
        
        @if ($prices['to']['regular']['price'] != $prices['to']['final']['price'])
            <p class="flex gap-[15px] items-center max-sm:text-[18px]">
                <span
                    class="text-[#6E6E6E] line-through max-sm:text-[15px]"
                    aria-label="{{ $prices['to']['regular']['formatted_price'] }}"
                >
                    {{ $prices['to']['regular']['formatted_price'] }}
                </span>
                
                {{ $prices['to']['final']['formatted_price'] }}
            </p>
        @else
            <p class="hidden gap-[15px] items-center max-sm:text-[18px]">
                {{ $prices['to']['regular']['formatted_price'] }}
            </p>
        @endif
    @endif
</div>