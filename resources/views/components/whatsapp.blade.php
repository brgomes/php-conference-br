<!-- component -->
<div>
    <div class="w-full h-32 bg-green-700"></div>

    <div class="container mx-auto" style="margin-top: -128px;">
        <div class="py-6 h-screen">
            <div class="flex border border-gray-300 rounded shadow-lg h-full">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
