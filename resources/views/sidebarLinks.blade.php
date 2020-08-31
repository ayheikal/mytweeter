<ul >
    @if (auth()->check())
        
    <li><a class="font-bold text-lg mb-r block mb-4" href="{{ route('home') }}">Home</a></li>
    <li><a class="font-bold text-lg mb-r block mb-4" href="/">Explore</a></li>
    <li><a class="font-bold text-lg mb-r block mb-4" href="/">Notifications</a></li>
    <li><a class="font-bold text-lg mb-r block mb-4" href="/">Bookmarks</a></li>
    <li><a class="font-bold text-lg mb-r block mb-4" href="/">Lists</a></li>
    <li><a class="font-bold text-lg mb-r block mb-4" href="{{ route('profile',auth()->user()) }}">Profile</a></li>
    <li><a class="font-bold text-lg mb-r block mb-4" href="/">More</a></li>
    @endif


</ul>