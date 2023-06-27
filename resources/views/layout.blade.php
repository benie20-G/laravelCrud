<!-- resources/views/layout.blade.php -->

<html>
<head>
    <title>Tourism Management</title>
</head>
<body>
    <header>
        <h1>Tourism Management</h1>
        <nav>
            <ul>
                <li><a href="/users">all</a></li>
                <li><a href="/users/create">Register new tourist</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p><blue>&copy; 2023</blue></p>
    </footer>
</body>
</html>
