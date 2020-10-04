<ul >
    @if (auth()->check())

    <li><a class="font-bold text-lg mb-r block mb-4" href="{{ route('home') }}">Home</a></li>
    <li><a class="font-bold text-lg mb-r block mb-4" href="/explore">Explore</a></li>
    <li><a class="font-bold text-lg mb-r block mb-4" href="/tweets">Notifications</a></li>
    <li><a class="font-bold text-lg mb-r block mb-4" href="/tweets">Bookmarks</a></li>
    <li><a class="font-bold text-lg mb-r block mb-4" href="/tweets">Lists</a></li>
    <li><a class="font-bold text-lg mb-r block mb-4" href="{{ route('profile',auth()->user()) }}">Profile</a></li>
    <li><a class="font-bold text-lg mb-r block mb-4" href="/tweets">More</a></li>
    @endif


</ul>
