<aside class="w-45 mt-8 p-10">
    <h4 class="font-bold text-lg mb-4">Links:</h4>
    <ul>
        <li>
            <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-green-700' : '' }}">All Posts</a>
        </li>
        <li>
            <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-green-700' : '' }}">New Post</a>
        </li>
        <li>
            <a href="#">About</a>
        </li>
        <li>
            <a href="#">Contact Us</a>
        </li>
    </ul>
</aside>