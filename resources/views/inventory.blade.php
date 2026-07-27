@extends('layouts.dashboard')

@section('title', 'Inventory / Stock - ' . config('app.name', 'Amoleck Group Company LTD'))
@section('page_title', 'Inventory / Stock')

@section('content')

<style>
    .card-sm { transition: all 0.2s cubic-bezier(0.4,0,0.2,1); }
    .card-sm:hover { transform: translateY(-2px); box-shadow: 0 8px 30px -8px rgba(0,0,0,0.1); }
    .stock-bar { height: 4px; border-radius: 2px; overflow: hidden; }
</style>

{{-- Header --}}
<div class="mb-6 flex flex-row items-start sm:items-center justify-between gap-3 flex-wrap animate__animated animate__fadeInDown">
    <div class="min-w-0">
        <h1 class="text-lg sm:text-xl lg:text-2xl font-bold text-gray-900 tracking-tight">Inventory / Stock</h1>
        <p class="text-xs sm:text-sm text-gray-500 mt-0.5">Manage stock levels across all divisions</p>
    </div>
    <div class="flex items-center gap-2 shrink-0">
        <button onclick="exportTableToCSV('inventory.csv')" class="px-2 sm:px-3 py-1.5 text-[11px] sm:text-xs font-medium border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors inline-flex items-center gap-1.5">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
            <span class="hidden sm:inline">Export</span>
        </button>
        <button class="px-2 sm:px-3 py-1.5 text-[11px] sm:text-xs font-medium bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors inline-flex items-center gap-1.5">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            <span class="hidden sm:inline">Add Item</span><span class="sm:hidden">New</span>
        </button>
    </div>
</div>

{{-- Quick Stats --}}
<div class="grid grid-cols-2 gap-3 sm:gap-4 xl:grid-cols-4 mb-6">
    <div class="card-sm bg-white rounded-xl border p-4 animate__animated animate__fadeInUp" style="animation-delay: 0.05s">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
            </div>
            <div>
                <p class="text-[10px] text-gray-400 font-medium uppercase tracking-wider">Total Items</p>
                <p class="text-xl font-bold text-gray-900">{{ $total ?? 0 }}</p>
            </div>
        </div>
    </div>
    <div class="card-sm bg-white rounded-xl border p-4 animate__animated animate__fadeInUp" style="animation-delay: 0.1s">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-amber-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
            </div>
            <div>
                <p class="text-[10px] text-gray-400 font-medium uppercase tracking-wider">Low Stock</p>
                <p class="text-xl font-bold text-gray-900">{{ $lowStock ?? 0 }}</p>
            </div>
        </div>
    </div>
    <div class="card-sm bg-white rounded-xl border p-4 animate__animated animate__fadeInUp" style="animation-delay: 0.15s">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </div>
            <div>
                <p class="text-[10px] text-gray-400 font-medium uppercase tracking-wider">Out of Stock</p>
                <p class="text-xl font-bold text-gray-900">{{ $outOfStock ?? 0 }}</p>
            </div>
        </div>
    </div>
    <div class="card-sm bg-white rounded-xl border p-4 animate__animated animate__fadeInUp" style="animation-delay: 0.2s">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-sky-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8"/></svg>
            </div>
            <div>
                <p class="text-[10px] text-gray-400 font-medium uppercase tracking-wider">Stock Value</p>
                <p class="text-xl font-bold text-gray-900">TSh {{ number_format(($stockValue ?? 0) / 1000000, 1) }}M</p>
            </div>
        </div>
    </div>
</div>

{{-- Filters --}}
<div class="bg-white rounded-xl border p-4 mb-6 animate__animated animate__fadeInUp" style="animation-delay: 0.25s">
    <form class="flex flex-col sm:flex-row gap-3" method="GET" action="{{ route('inventory.index') }}">
        <div class="flex-1 relative">
            <svg class="w-4 h-4 text-gray-400 absolute left-3 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by item name or SKU..." class="w-full pl-9 pr-3 py-2 text-sm border border-gray-200 rounded-lg outline-none focus:border-emerald-300 focus:ring-2 focus:ring-emerald-100 transition-all">
        </div>
        <select name="division" class="px-3 py-2 text-sm border border-gray-200 rounded-lg outline-none focus:border-emerald-300 bg-white">
            <option value="">All Divisions</option>
            <option value="ames" {{ request('division') === 'ames' ? 'selected' : '' }}>AMES</option>
            <option value="aphamko" {{ request('division') === 'aphamko' ? 'selected' : '' }}>APHAMKO</option>
            <option value="asca" {{ request('division') === 'asca' ? 'selected' : '' }}>ASCA</option>
            <option value="amotech" {{ request('division') === 'amotech' ? 'selected' : '' }}>AMOTECH</option>
        </select>
        <select name="stock" class="px-3 py-2 text-sm border border-gray-200 rounded-lg outline-none focus:border-emerald-300 bg-white">
            <option value="">All Stock Levels</option>
            <option value="in" {{ request('stock') === 'in' ? 'selected' : '' }}>In Stock</option>
            <option value="low" {{ request('stock') === 'low' ? 'selected' : '' }}>Low Stock</option>
            <option value="out" {{ request('stock') === 'out' ? 'selected' : '' }}>Out of Stock</option>
        </select>
        <button type="submit" class="px-3 py-2 text-sm font-medium bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors">Filter</button>
    </form>
</div>

{{-- Inventory Table --}}
<div class="bg-white rounded-xl border overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="text-left text-xs text-gray-500 border-b">
                    <th class="px-5 py-3 font-medium">SKU</th>
                    <th class="px-5 py-3 font-medium">Item Name</th>
                    <th class="px-5 py-3 font-medium">Division</th>
                    <th class="px-5 py-3 font-medium">Category</th>
                    <th class="px-5 py-3 font-medium">Stock Level</th>
                    <th class="px-5 py-3 font-medium">Unit Price</th>
                    <th class="px-5 py-3 font-medium">Supplier</th>
                    <th class="px-5 py-3 font-medium text-right">Actions</th>
                </tr>
            </thead>
            <tbody id="invTableBody">
                @forelse($items ?? [] as $item)
                @php
                    $stockStatus = $item->stockStatus(); // out, low, in
                    $stockPercent = $item->reorder_level > 0 ? min(($item->quantity / $item->reorder_level) * 100, 100) : ($item->quantity > 0 ? 100 : 0);
                    $qtyLabel = $item->quantity . '/' . $item->reorder_level;
                @endphp
                <tr class="border-t border-gray-100 hover:bg-gray-50/50 transition-colors inv-row"
                    data-search="{{ strtolower($item->sku . ' ' . $item->name) }}"
                    data-division="{{ $item->division }}"
                    data-stock="{{ $stockStatus }}">
                    <td class="px-5 py-3 font-mono text-xs text-gray-500">{{ $item->sku }}</td>
                    <td class="px-5 py-3">
                        <div class="font-medium text-gray-900">{{ $item->name }}</div>
                    </td>
                    <td class="px-5 py-3">
                        @if($item->division === 'ames')
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-sky-50 text-sky-700 border border-sky-100">AMES</span>
                        @elseif($item->division === 'aphamko')
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-emerald-50 text-emerald-700 border border-emerald-100">APHAMKO</span>
                        @elseif($item->division === 'asca')
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-amber-50 text-amber-700 border border-amber-100">ASCA</span>
                        @elseif($item->division === 'amotech')
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-violet-50 text-violet-700 border border-violet-100">AMOTECH</span>
                        @endif
                    </td>
                    <td class="px-5 py-3 text-gray-500 text-xs">{{ $item->category }}</td>
                    <td class="px-5 py-3">
                        @if($stockStatus === 'out')
                        <div class="flex items-center gap-2">
                            <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-red-50 text-red-700 border border-red-100">Out</span>
                            <span class="text-[10px] text-gray-400">0/{{ $item->reorder_level }}</span>
                        </div>
                        @elseif($stockStatus === 'low')
                        <div class="flex items-center gap-2">
                            <div class="w-16">
                                <div class="stock-bar bg-gray-100"><div class="h-full bg-amber-400" style="width: {{ $stockPercent }}%"></div></div>
                            </div>
                            <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-amber-50 text-amber-700 border border-amber-100">Low</span>
                            <span class="text-[10px] text-gray-400">{{ $qtyLabel }}</span>
                        </div>
                        @else
                        <div class="flex items-center gap-2">
                            <div class="w-16">
                                <div class="stock-bar bg-gray-100"><div class="h-full bg-emerald-500" style="width: {{ $stockPercent }}%"></div></div>
                            </div>
                            <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-emerald-50 text-emerald-700 border border-emerald-100">In Stock</span>
                            <span class="text-[10px] text-gray-400">{{ $qtyLabel }}</span>
                        </div>
                        @endif
                    </td>
                    <td class="px-5 py-3 font-semibold text-gray-900">TSh {{ number_format($item->unit_price) }}</td>
                    <td class="px-5 py-3 text-gray-500 text-xs">{{ $item->supplier }}</td>
                    <td class="px-5 py-3 text-right">
                        <div class="inline-flex items-center gap-1">
                            @if($stockStatus !== 'in')
                            <button class="p-1.5 rounded-lg hover:bg-amber-50 text-amber-600 transition-colors" title="Reorder">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                            </button>
                            @endif
                            <button class="p-1.5 rounded-lg hover:bg-sky-50 text-sky-600 transition-colors" title="Edit">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                            </button>
                            <button class="p-1.5 rounded-lg hover:bg-gray-100 text-gray-500 transition-colors" title="History">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </button>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="px-5 py-8 text-center text-sm text-gray-400">No inventory items found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="px-5 py-3 border-t border-gray-100 flex items-center justify-between">
        <p class="text-xs text-gray-400">Showing <span id="invCount">{{ count($items ?? []) }}</span> items</p>
        <div class="flex items-center gap-1">
            <button class="px-2.5 py-1 text-xs font-medium border border-gray-200 rounded-lg text-gray-500 hover:bg-gray-50 transition-colors">Previous</button>
            <button class="px-2.5 py-1 text-xs font-medium bg-emerald-600 text-white rounded-lg">1</button>
            <button class="px-2.5 py-1 text-xs font-medium border border-gray-200 rounded-lg text-gray-500 hover:bg-gray-50 transition-colors">Next</button>
        </div>
    </div>
</div>

<div class="h-16 lg:hidden"></div>

<script>
(function() {
    const countEl = document.getElementById('invCount');
    if (countEl) countEl.textContent = document.querySelectorAll('.inv-row').length;
})();

function exportTableToCSV(filename) {
    const table = document.querySelector('table');
    if (!table) return;
    const rows = Array.from(table.querySelectorAll('tr'));
    const csv = rows.map(row => {
        const cells = Array.from(row.querySelectorAll('th, td'));
        return cells.map(cell => '"' + cell.innerText.replace(/"/g, '""') + '"').join(',');
    }).join('\n');
    const blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
    const link = document.createElement('a');
    link.href = URL.createObjectURL(blob);
    link.download = filename;
    link.click();
}
</script>

@endsection
