@props(['title', 'tenant', 'description', 'status', 'email', 'priority' => 'medium', 'assignedTo' => null, 'estCompletion' => null, 'submittedDate' => null])

@php
    $statusConfig = match(strtolower($status)) {
        'in_progress' => ['label' => 'In Progress', 'class' => 'bg-blue-100 text-blue-600'],
        'pending'     => ['label' => 'Pending',      'class' => 'bg-yellow-100 text-yellow-600'],
        'completed'   => ['label' => 'Completed',    'class' => 'bg-green-100 text-green-600'],
        default       => ['label' => ucfirst($status), 'class' => 'bg-gray-100 text-gray-600'],
    };

    $priorityConfig = match(strtolower($priority)) {
        'high'   => ['label' => 'High Priority',   'class' => 'bg-red-100 text-red-600'],
        'medium' => ['label' => 'Medium Priority', 'class' => 'bg-yellow-100 text-yellow-700'],
        'low'    => ['label' => 'Low Priority',    'class' => 'bg-green-100 text-green-600'],
        default  => ['label' => ucfirst($priority) . ' Priority', 'class' => 'bg-gray-100 text-gray-600'],
    };
@endphp

<div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
    <div class="px-5 py-4 flex items-start gap-4">

        {{-- Icon --}}
        <div class="flex-shrink-0 w-10 h-10 rounded-xl flex items-center justify-center bg-blue-50">
            <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
            </svg>
        </div>

        <div class="flex-1 min-w-0">
            <div class="flex items-start justify-between gap-3">
                <div>
                    <h3 class="text-base font-semibold text-gray-900">{{ $title }}</h3>
                    <p class="text-sm text-gray-500 mt-0.5">
                        {{ $tenant }}
                        <span class="mx-1 text-gray-300">•</span>
                        {{ $email }}
                    </p>
                    <p class="text-sm text-gray-600 mt-1">{{ $description }}</p>
                </div>
                <span class="flex-shrink-0 text-xs font-medium px-3 py-1 rounded-full {{ $statusConfig['class'] }}">
                    {{ $statusConfig['label'] }}
                </span>
            </div>

            <div class="mt-3 flex flex-wrap items-center gap-x-4 gap-y-1.5">
                <span class="text-xs font-medium px-2.5 py-1 rounded-full {{ $priorityConfig['class'] }}">
                    {{ $priorityConfig['label'] }}
                </span>
                @if($submittedDate)
                    <span class="text-xs text-gray-500">Submitted: {{ $submittedDate }}</span>
                @endif
                @if($assignedTo)
                    <span class="text-xs text-gray-500">Assigned to: {{ $assignedTo }}</span>
                @endif
                @if($estCompletion)
                    <span class="text-xs text-gray-500">Est. completion: {{ $estCompletion }}</span>
                @endif
            </div>
        </div>
    </div>

    <div class="border-t border-gray-100"></div>

    <div class="px-5 py-3 flex items-center gap-5">
        @if(strtolower($status) !== 'completed')
            <a href="#" class="text-sm font-medium text-green-600 hover:text-green-700">Mark as Completed</a>
        @endif
        <a href="#" class="text-sm text-gray-700 hover:text-gray-900">View Details</a>
    </div>
</div>