<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="ml-6 text-gray-700 hover:text-indigo-600 {{ $page->isActive('/blog') ? 'active text-indigo-600' : '' }}">
        Blog
    </a>

    <a title="{{ $page->siteName }} About" href="/about"
        class="ml-6 text-gray-700 hover:text-indigo-600 {{ $page->isActive('/about') ? 'active text-indigo-600' : '' }}">
        Sobre mim
    </a>
</nav>
