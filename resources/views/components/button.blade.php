<button 
 
{{ $attributes->class([
    'py-4 px-6 md:px-9 lg:px-6 xl:px-9 rounded 
    leading-normal border inline-block transition',
    'hover:bg-primary hover:border-primary hover:text-white' => $variant === 'outline-primary',
    'hover:bg-red-700 hover:border-red-700 hover:text-white' => $variant === 'outline-red',
    'bg-red-700 border-red-700 text-white hover:bg-red-800' => $variant==='red',
    'bg-gray-700 border-gray-700 text-white hover:bg-gray-800' => $variant === 'dark',
    'bg-primary border-primary text-white hover:bg-opacity-80' => $variant === 'primary',
    'bg-[#13C296] border-blue text-white  transition hover:bg-opacity-90' => $variant === 'blue'
    ])
}}>
{{ $slot }}

</button>