@props(['size', 'color', 'vIf'])

<x-bladebook::icon 
  :size="$size ?? null" 
  :color="$color ?? null"
  :v-if="$vIf ?? true"
>
  <path stroke-linecap="round" stroke-linejoin="round" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
</x-bladebook::icon>