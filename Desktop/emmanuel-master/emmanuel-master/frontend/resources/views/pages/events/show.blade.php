<p>
    @forelse ($event->event_images as $image)
        <li>
            {{$image['image_paths']}}
        </li>
    @empty
        
    @endforelse
</p>